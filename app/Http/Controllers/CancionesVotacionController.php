<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Users;
use App\Canciones;
use App\CancionesVotacion;
use Response;
use Validator;
use DB;
class CancionesVotacionController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
        return Response::json(CancionesVotacion::all(), 200);
    }
    
    public function getThisByFilter(Request $request, $id,$state)
    {
        if($request->get('filter')){
            switch ($request->get('filter')) {
                case 'banda':{
                    $objectSee = CancionesVotacion::whereRaw('banda=?',[$id])->with('bandas','canciones','usuarios')->get();
                    break;
                }
                case 'cancion':{
                    $objectSee = CancionesVotacion::whereRaw('cancion=?',[$id])->with('bandas','canciones','usuarios')->get();
                    break;
                }
                default:{
                    $objectSee = CancionesVotacion::whereRaw('banda=? and state=?',[$id,$state])->with('bandas','canciones','usuarios')->get();
                    break;
                }
    
            }
        }else{
            $objectSee = CancionesVotacion::whereRaw('banda=? and state=?',[$id,$state])->with('bandas','canciones','usuarios')->get();
        }
    
        if ($objectSee) {
            return Response::json($objectSee, 200);
    
        }
        else {
            $returnData = array (
                'status' => 404,
                'message' => 'No record found'
            );
            return Response::json($returnData, 404);
        }
    }
    
    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function create()
    {
        //
    }
    
    /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'banda'          => 'required',
            'cancion'          => 'required',
        ]);
        if ( $validator->fails() ) {
            $returnData = array (
                'status' => 400,
                'message' => 'Invalid Parameters',
                'validator' => $validator
            );
            return Response::json($returnData, 400);
        }
        else {
            try {
                $newObject = new CancionesVotacion();
                $newObject->banda            = $request->get('banda');
                $newObject->cancion            = $request->get('cancion');
                $newObject->titulo            = $request->get('titulo');
                $newObject->valor            = $request->get('valor');
                $newObject->comentario            = $request->get('comentario');
                $newObject->descripcion            = $request->get('descripcion');
                $newObject->type            = $request->get('type');
                $newObject->state            = $request->get('state');
                $newObject->save();
                return Response::json($newObject, 200);
    
            } catch (Exception $e) {
                $returnData = array (
                    'status' => 500,
                    'message' => $e->getMessage()
                );
                return Response::json($returnData, 500);
            }
        }
    }

    public function votar(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'banda'          => 'required',
            'usuario'          => 'required',
            'votos'          => 'required',
        ]);
        if ( $validator->fails() ) {
            $returnData = array (
                'status' => 400,
                'message' => 'Invalid Parameters',
                'validator' => $validator
            );
            return Response::json($returnData, 400);
        }
        else {
            DB::beginTransaction();
            try {
                foreach ($request->get('votos') as $key => $value) {
                    $objectSee = Canciones::whereRaw("banda=? and titulo=?",[$request->get('banda'),$value])->first();
                    if ($objectSee) {
                        $newObject = new CancionesVotacion();
                        $newObject->banda            = $objectSee->banda;
                        $newObject->cancion            = $objectSee->id;
                        $newObject->titulo            = $objectSee->titulo;
                        $newObject->usuario            = $request->get('usuario');
                        $newObject->save();
                    }
                    else {
                        $returnData = array (
                            'status' => 404,
                            'message' => 'No record found'
                        );
                        DB::rollback();
                        return Response::json($returnData, 404);
                    }

                }
                $objectSee = Users::whereRaw("id=?",[$request->get('usuario')])->with('votos')->first();
                if ($objectSee) {
                    
                    DB::commit();
                    
                    return Response::json($objectSee, 200);
                
                }
                else {
                    $returnData = array (
                        'status' => 404,
                        'message' => 'No record found'
                    );
                    DB::rollback();
                    return Response::json($returnData, 404);
                }
                
    
            } catch (Exception $e) {
                $returnData = array (
                    'status' => 500,
                    'message' => $e->getMessage()
                );
                DB::rollback();
                return Response::json($returnData, 500);
            }
        }
    }
    
    /**
    * Display the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function show($id)
    {
        $objectSee = CancionesVotacion::find($id);
        if ($objectSee) {
            $objectSee->canciones;
            $objectSee->bandas;
            return Response::json($objectSee, 200);
    
        }
        else {
            $returnData = array (
                'status' => 404,
                'message' => 'No record found'
            );
            return Response::json($returnData, 404);
        }
    }
    
    /**
    * Show the form for editing the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function edit($id)
    {
        //
    }
    
    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function update(Request $request, $id)
    {
        $objectUpdate = CancionesVotacion::find($id);
        if ($objectUpdate) {
            try {
                $objectUpdate->titulo = $request->get('titulo', $objectUpdate->titulo);
                $objectUpdate->valor = $request->get('valor', $objectUpdate->valor);
                $objectUpdate->fecha = $request->get('fecha', $objectUpdate->fecha);
                $objectUpdate->comentario = $request->get('comentario', $objectUpdate->comentario);
                $objectUpdate->descripcion = $request->get('descripcion', $objectUpdate->descripcion);
                $objectUpdate->type = $request->get('type', $objectUpdate->type);
                $objectUpdate->state = $request->get('state', $objectUpdate->state);
                $objectUpdate->banda = $request->get('banda', $objectUpdate->banda);
                $objectUpdate->cancion = $request->get('cancion', $objectUpdate->cancion);
    
                $objectUpdate->save();
                $objectUpdate->canciones;
                $objectUpdate->bandas;
                return Response::json($objectUpdate, 200);
            } catch (Exception $e) {
                $returnData = array (
                    'status' => 500,
                    'message' => $e->getMessage()
                );
                return Response::json($returnData, 500);
            }
        }
        else {
            $returnData = array (
                'status' => 404,
                'message' => 'No record found'
            );
            return Response::json($returnData, 404);
        }
    }
    
    
    /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function destroy($id)
    {
        $objectDelete = CancionesVotacion::find($id);
        if ($objectDelete) {
            try {
                CancionesVotacion::destroy($id);
                return Response::json($objectDelete, 200);
            } catch (Exception $e) {
                $returnData = array (
                    'status' => 500,
                    'message' => $e->getMessage()
                );
                return Response::json($returnData, 500);
            }
        }
        else {
            $returnData = array (
                'status' => 404,
                'message' => 'No record found'
            );
            return Response::json($returnData, 404);
        }
    }
}
