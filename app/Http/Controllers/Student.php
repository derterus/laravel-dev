<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stud;

class Student extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $student =Stud::all();
    return response()->json($student)
    ->header('Access-Control-Allow-Origin', '*')
    ->header('Access-Control-Allow-Methods', 'GET');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $stud = Stud::find($id);
        if(!empty($stud)){

            return response()->json($stud);
        }
        else{
            return response()->json(["message"=> "conch"],404);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
