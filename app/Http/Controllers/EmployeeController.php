<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    // GET all data
    public function index()
    {
        $emps = Employee::all();
        return $emps;
    }
    // POST
    public function store(Request $request)
    {
        $request->validate([
            "name" => "required|string",
            "salary" => "required|numeric",
        ]);

        return Employee::create($request->all());
    }
    // GET by id
    public function show($id)
    {
        return Employee::find($id);
    }
    // PUT
    public function update(Request $request, $id)
    {
        $request->validate([
            "name" => "required|string",
            "salary" => "required|numeric",
        ]);
        $emp = Employee::find($id);
        $emp->update($request->all());
        return $emp;
    }
    // DELETE
    public function destroy($id)
    {
        return Employee::destroy($id);
    }
}
