<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Bandas;
use Response;
use Validator;
class BandasController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
        return Response::json(Bandas::all(), 200);
    }
    
    public function getThisByFilter(Request $request, $id,$state)
    {
        if($request->get('filter')){
            switch ($request->get('filter')) {
                case 'nombre':{
                    $objectSee = Bandas::whereRaw('nombre like "%?%"',[$id])->with('usuarios','canciones')->get();
                    break;
                }
                case 'descripcion':{
                    $objectSee = Bandas::whereRaw('descripcion like "%?%"',[$id])->with('usuarios','canciones')->get();
                    break;
                }
                case 'usuario':{
                    $objectSee = Bandas::whereRaw('usuario=?',[$id])->with('usuarios','canciones')->get();
                    break;
                }
                default:{
                    $objectSee = Bandas::whereRaw('usuario=? and state=?',[$id,$state])->with('usuarios','canciones')->get();
                    break;
                }
    
            }
        }else{
            $objectSee = Bandas::whereRaw('usuario=? and state=?',[$id,$state])->with('usuarios','canciones')->get();
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
            'nombre'          => 'required',
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
                $newObject = new Bandas();
                $newObject->nombre            = $request->get('nombre');
                $newObject->valor            = $request->get('valor');
                $newObject->comentario            = $request->get('comentario');
                $newObject->descripcion            = $request->get('descripcion');
                $newObject->foto1            = $request->get('foto1');
                $newObject->foto2            = $request->get('foto2');
                $newObject->logo            = $request->get('logo');
                $newObject->type            = $request->get('type');
                $newObject->state            = $request->get('state');
                $newObject->usuario            = $request->get('usuario');
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
        $objectSee = Bandas::find($id);
        if ($objectSee) {
            $objectSee->usuarios;
            $objectSee->canciones;
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
        $objectUpdate = Bandas::find($id);
        if ($objectUpdate) {
            try {
                $objectUpdate->nombre = $request->get('nombre', $objectUpdate->nombre);
                $objectUpdate->valor = $request->get('valor', $objectUpdate->valor);
                $objectUpdate->fecha = $request->get('fecha', $objectUpdate->fecha);
                $objectUpdate->comentario = $request->get('comentario', $objectUpdate->comentario);
                $objectUpdate->descripcion = $request->get('descripcion', $objectUpdate->descripcion);
                $objectUpdate->foto1 = $request->get('foto1', $objectUpdate->foto1);
                $objectUpdate->foto2 = $request->get('foto2', $objectUpdate->foto2);
                $objectUpdate->logo = $request->get('logo', $objectUpdate->logo);
                $objectUpdate->type = $request->get('type', $objectUpdate->type);
                $objectUpdate->state = $request->get('state', $objectUpdate->state);
                $objectUpdate->usuario = $request->get('usuario', $objectUpdate->usuario);
    
                $objectUpdate->save();
                $objectUpdate->usuarios;
                $objectUpdate->canciones;
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
        $objectDelete = Bandas::find($id);
        if ($objectDelete) {
            try {
                Bandas::destroy($id);
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
