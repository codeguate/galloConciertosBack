<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\BandasEventos;
use Response;
use Validator;
class BandasEventosController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
        return Response::json(BandasEventos::all(), 200);
    }
    
    public function getThisByFilter(Request $request, $id,$state)
    {
        if($request->get('filter')){
            switch ($request->get('filter')) {
                case 'banda':{
                    $objectSee = BandasEventos::whereRaw('banda=?',[$id])->with('bandas','eventos','votaciones')->get();
                    break;
                }
                case 'evento':{
                    $objectSee = BandasEventos::whereRaw('evento=?',[$id])->with('bandas','eventos','votaciones')->get();
                    break;
                }
                default:{
                    $objectSee = BandasEventos::whereRaw('user=? and state=?',[$id,$state])->with('bandas','eventos','votaciones')->get();
                    break;
                }
    
            }
        }else{
            $objectSee = BandasEventos::whereRaw('user=? and state=?',[$id,$state])->with('bandas','eventos','votaciones')->get();
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
            'evento'          => 'required',
            'banda'          => 'required',
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
                $newObject = new BandasEventos();
                $newObject->nombre            = $request->get('nombre');
                $newObject->valor            = $request->get('valor');
                $newObject->comentario            = $request->get('comentario');
                $newObject->descripcion            = $request->get('descripcion');
                $newObject->youtube            = $request->get('youtube');
                $newObject->twitter            = $request->get('twitter');
                $newObject->web            = $request->get('web');
                $newObject->spotyfy            = $request->get('spotyfy');
                $newObject->type            = $request->get('type');
                $newObject->state            = $request->get('state');
                $newObject->banda            = $request->get('banda');
                $newObject->evento            = $request->get('evento');
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
        $objectSee = BandasEventos::find($id);
        if ($objectSee) {
            $objectSee->bandas;
            $objectSee->eventos;
            $objectSee->votaciones;
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
        $objectUpdate = BandasEventos::find($id);
        if ($objectUpdate) {
            try {
                $objectUpdate->nombre = $request->get('nombre', $objectUpdate->nombre);
                $objectUpdate->valor = $request->get('valor', $objectUpdate->valor);
                $objectUpdate->comentario = $request->get('comentario', $objectUpdate->comentario);
                $objectUpdate->descripcion = $request->get('descripcion', $objectUpdate->descripcion);
                $objectUpdate->youtube = $request->get('youtube', $objectUpdate->youtube);
                $objectUpdate->twitter = $request->get('twitter', $objectUpdate->twitter);
                $objectUpdate->web = $request->get('web', $objectUpdate->web);
                $objectUpdate->spotyfy = $request->get('spotyfy', $objectUpdate->spotyfy);
                $objectUpdate->type = $request->get('type', $objectUpdate->type);
                $objectUpdate->state = $request->get('state', $objectUpdate->state);
                $objectUpdate->banda = $request->get('banda', $objectUpdate->banda);
                $objectUpdate->evento = $request->get('evento', $objectUpdate->evento);
    
                $objectUpdate->save();
                $objectUpdate->bandas;
                $objectUpdate->eventos;
                $objectUpdate->votaciones;
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
        $objectDelete = BandasEventos::find($id);
        if ($objectDelete) {
            try {
                BandasEventos::destroy($id);
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
