<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class OfficesEmployeesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // SQL
        // $projects = DB::select('select * from app.projects');

        // QUERY BUILDER
        // $projects = DB::table('app.projects')->get();

        // ELOQUENT
        $employees = Employee::get();
       // $employees BB::select('select * from app.employees')
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
    //sql
  /*       BD::insert('insert into app.employees (
            age,
            name,
            email,
            ponhe,
            identification, 
            created_at, 
            update_at)
            values (?,?,?,?,?,?)', [
                $request->age,
                $request->name,
                $request->email,
                $request->ponhe,
                $request->identification,
                $request->created_at,
                $request->update_at,
            ]); */

        $employee = new Employee();
        $employee->age = $request->age;
        $employee->email = $request->email;
        $employee->identification = $request->identification;
        $employee->save();

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
    public function show($employee)
    {
        // SQL
        // $projects = DB::select('select * from app.projects where id = ?', [$project]);

        // QUERY BUILDER
        // $project = DB::table('app.projects')->where('id', '=', $project)->first();
        $employee = DB::table('app.employees')->find($employee);

        // ELOQUENT
        //$employee = Employee::find($employee);
       // $employee = DB::('select * from app.employees where id = ?',[$employee]);
        return response()->json(
           ['data'=> $employee[0],
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
    public function update(Request $request, $employee)
    {
        $employee = Employee::find($employee);
        $employee->age = $request->age;
        $employee->email = $request->email;
        $employee->identification = $request->identification;
        $employee->save();

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
    public function destroy($employee)
    {
        $employee = Employee::find($employee);
        $employee -> delete();
        return response()->json(
            [
            'msg' => [
            'summary' => 'Eliminado correctamente',
            'detail' => 'EL empleado se eliminó correctamente',
            'code' => '201']], 201
         );
    }

    public function updateState($employee)
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
