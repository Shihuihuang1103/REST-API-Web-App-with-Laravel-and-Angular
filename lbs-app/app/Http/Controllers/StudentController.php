<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{   
    protected $student;

    public function __construct(){
        $this->student = new Student();
    }

    /**
     * Display a listing of the resource.
     * GET ALL
     */
    public function index()
    {
        return $this->student->all();
    }

    /**
     * Store a newly created resource in storage.
     * POST
     */
    public function store(Request $request)
    {
        return $this->student->create($request->all());
    }

    /**
     * Display the specified resource.
     * GET ONE
     */ 
    public function show(string $id)
    {
        return $student = $this->student->find($id);
    }

    /**
     * Update the specified resource in storage.
     * PUT
     */
    public function update(Request $request, string $id)
    {
        $student = $this->student->find($id);
        $student->update($request->all());
        return $student;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $student = $this->student->find($id);
        return $student->delete();
    }
}
