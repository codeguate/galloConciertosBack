<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Canciones;
use Response;
use Validator;
class CancionesController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
        return Response::json(Canciones::all(), 200);
    }
    
    public function getThisByFilter(Request $request, $id,$state)
    {
        if($request->get('filter')){
            switch ($request->get('filter')) {
                case 'usuario':{
                    $objectSee = Canciones::whereRaw('usuario=?',[$id])->with('usuarios','bandas')->get();
                    break;
                }
                case 'banda':{
                    $objectSee = Canciones::whereRaw('banda=?',[$id])->with('usuarios','bandas')->get();
                    break;
                }
                case 'titulo':{
                    $objectSee = Canciones::whereRaw('titulo like "%?%"',[$id])->with('usuarios','bandas')->get();
                    break;
                }
                default:{
                    $objectSee = Canciones::whereRaw('banda=?',[$id])->with('usuarios','bandas')->get();
                    break;
                }
    
            }
        }else{
            $objectSee = Canciones::whereRaw('usuario=? and state=?',[$id,$state])->with('usuarios','bandas')->get();
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
            'titulo'          => 'required',
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
                $newObject = new Canciones();
                $newObject->titulo            = $request->get('titulo');
                $newObject->valor            = $request->get('valor');
                $newObject->comentario            = $request->get('comentario');
                $newObject->descripcion            = $request->get('descripcion');
                $newObject->type            = $request->get('type');
                $newObject->state            = $request->get('state');
                $newObject->usuario            = $request->get('usuario');
                $newObject->banda            = $request->get('banda');
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
    
    /**
    * Display the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function show($id)
    {
        $objectSee = Canciones::find($id);
        if ($objectSee) {
            $objectSee->bandas;
            $objectSee->usuarios;
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
        $objectUpdate = Canciones::find($id);
        if ($objectUpdate) {
            try {
                $objectUpdate->titulo = $request->get('titulo', $objectUpdate->titulo);
                $objectUpdate->valor = $request->get('valor', $objectUpdate->valor);
                $objectUpdate->fecha = $request->get('fecha', $objectUpdate->fecha);
                $objectUpdate->comentario = $request->get('comentario', $objectUpdate->comentario);
                $objectUpdate->descripcion = $request->get('descripcion', $objectUpdate->descripcion);
                $objectUpdate->type = $request->get('type', $objectUpdate->type);
                $objectUpdate->state = $request->get('state', $objectUpdate->state);
                $objectUpdate->usuario = $request->get('usuario', $objectUpdate->usuario);
                $objectUpdate->banda = $request->get('banda', $objectUpdate->banda);
    
                $objectUpdate->save();
                $objectUpdate->usuarios;
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
        $objectDelete = Canciones::find($id);
        if ($objectDelete) {
            try {
                Canciones::destroy($id);
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
