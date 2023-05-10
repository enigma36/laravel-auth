<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Catagory;


class CatagoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        $catagories = Catagory::all();
        return view('catagory.index', compact('catagories'));
    }

    /**
     * Show the form for creating a new resource.
     */

    public function create()
    {
        return view('catagory.create');
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {
        $request->validate([
            'catagory_name' => 'required'
        ]);

        Catagory::create($request->post());

        return redirect()->route('catagory.index')->with('success', 'Catagory has been created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Catagory $catagory)
    {
        return view('catagory.show', compact('catagory'));
    }

    /**
     * Show the form for editing the specified resource.
     */

    public function edit(Catagory $catagory)
    {
        return view('catagory.edit', compact('catagory'));
    }

    /**
     * Update the specified resource in storage.
     */

    public function update(Request $request, Catagory $catagory)
    {
        $request->validate([
            'catagory_name' => 'required'
        ]);

        $catagory->fill($request->post())->save();

        return redirect()->route('catagory.index')->with('success', 'Catagory Has Been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */

    public function destroy(Catagory $catagory)
    {

        $catagory->delete();

        return redirect()->route('catagory.index')->with('success', 'Catagory Has Been deleted successfully');
    }
}
