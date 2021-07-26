<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OfficesEmployeesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = ['ofice1, Pao','ofice2, Pancho'];
        return response()->json(
           ['data'=> $employees,
           'msg'=>['sumary'=> 'consulta correcta',
           'detail'=>'la consulta esta correcta', 
           'code'=>'201']], 201);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return response()->json(
            ['data'=> null,
            'msg' => [
            'summary' => 'Creado correctamente',
            'detail' => 'El empleado se creo correctamente',
            'code' => '201']], 201
         );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $employee = 'ofice1, Pao';
        return response()->json(
           ['data'=> $employee,
           'msg'=>['sumary'=> 'consulta correcta',
           'detail'=>'la consulta esta correcta', 
           'code'=>'200']], 200
        );
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
        return response()->json(
           [  'data' => null,
           'msg' => [
           'summary' => 'Actualizado correctamente',
           'detail' => 'EL empleado se actualizó correctamente',
           'code' => '201']], 201
        );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return response()->json(
            ['data'=> null,
            'msg' => [
            'summary' => 'Eliminado correctamente',
            'detail' => 'EL empleado se eliminó correctamente',
            'code' => '201']], 201
         );
    }

    public function updateState()
    {
        return response()->json(
            ['data'=> null,
            'msg' => [
            'summary' => 'actualizado Correctamente',
            'detail' => 'EL empleado se actualizo correctamente',
            'code' => '201']], 201
         );
    }
}
