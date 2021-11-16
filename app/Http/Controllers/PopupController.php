<?php

namespace App\Http\Controllers;

use App\Models\Popup;
use Illuminate\Http\Request;

class PopupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $popup=Popup::orderBy('id','DESC')->paginate(10);
        return view('backend.popup.index')->with('popups',$popup);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.popup.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request->all();
        $this->validate($request,[
            'image'=>'string|required',
        ]);
        $data=$request->all();
        $status=Popup::create($data);
        if($status){
            request()->session()->flash('success','popup successfully added');
        }
        else{
            request()->session()->flash('error','Error occurred while adding popup');
        }
        return redirect()->route('popup.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $popup=Popup::findOrFail($id);
        return view('backend.popup.edit')->with('popup',$popup);
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
        $popup=Popup::findOrFail($id);
        $this->validate($request,[
            'image'=>'string|required',
        ]);
        $data=$request->all();

        $status=$popup->fill($data)->save();
        if($status){
            request()->session()->flash('success','popup successfully updated');
        }
        else{
            request()->session()->flash('error','Error occurred while updating popup');
        }
        return redirect()->route('popup.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $popup=Popup::findOrFail($id);
        $status=$popup->delete();
        if($status){
            request()->session()->flash('success','popup successfully deleted');
        }
        else{
            request()->session()->flash('error','Error occurred while deleting popup');
        }
        return redirect()->route('popup.index');
    }
}
