<?php

namespace App\Http\Controllers;

use App\Models\Wheretobuy;
use Illuminate\Http\Request;

class WheretobuyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $wheretobuys = Wheretobuy::all();
        return view('backend.where_to_buy.index',compact('wheretobuys'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.where_to_buy.create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Wheretobuy::create($request->all());
        return redirect()->route('where-to-buy.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Wheretobuy  $wheretobuy
     * @return \Illuminate\Http\Response
     */
    public function show(Wheretobuy $wheretobuy)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Wheretobuy  $wheretobuy
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $wheretobuy = Wheretobuy::findOrFail($id);
        return view('backend.where_to_buy.edit',compact('wheretobuy'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Wheretobuy  $wheretobuy
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $wheretobuy = Wheretobuy::findOrFail($id);
        $wheretobuy->update($request->all());
        return redirect()->route('where-to-buy.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Wheretobuy  $wheretobuy
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $wheretobuy = Wheretobuy::findOrFail($id);
        $wheretobuy->delete();
        return redirect()->route('where-to-buy.index');
    }
}
