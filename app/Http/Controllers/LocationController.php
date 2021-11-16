<?php

namespace App\Http\Controllers;

use App\Models\District;
use App\Models\Division;
use App\Models\Location;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $location=Location::orderBy('id','DESC')->paginate(10);
        return view('backend.location.index')->with('locations',$location);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $divisions = Division::all();
        $districts = District::all();
        return view('backend.location.create')->with(['districts'=>$districts])->with(['divisions'=>$divisions]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $this->validate($request,[
        //     'title'=>'string|required|max:50',
        //     'description'=>'string|nullable',
        //     'photo'=>'string|required',
        //     'status'=>'required|in:active,inactive',
        // ]);
        $data=$request->all();
        // $slug=Str::slug($request->title);
        // $count=location::where('slug',$slug)->count();
        // if($count>0){
        //     $slug=$slug.'-'.date('ymdis').'-'.rand(0,999);
        // }
        // $data['slug']=$slug;
        // return $slug;
        $status=Location::create($data);
        if($status){
            request()->session()->flash('success','location successfully added');
        }
        else{
            request()->session()->flash('error','Error occurred while adding location');
        }
        return redirect()->route('location.index');
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
        $divisions = Division::all();
        $districts = District::all();
        $location=Location::findOrFail($id);
        return view('backend.location.edit')->with('location',$location)->with(['districts'=>$districts])->with(['divisions'=>$divisions]);
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
        $location=Location::findOrFail($id);
        // $this->validate($request,[
        //     'title'=>'string|required|max:50',
        //     'description'=>'string|nullable',
        //     'photo'=>'string|required',
        //     'status'=>'required|in:active,inactive',
        // ]);
        $data=$request->all();
        // $slug=Str::slug($request->title);
        // $count=location::where('slug',$slug)->count();
        // if($count>0){
        //     $slug=$slug.'-'.date('ymdis').'-'.rand(0,999);
        // }
        // $data['slug']=$slug;
        // return $slug;
        $status=$location->fill($data)->save();
        if($status){
            request()->session()->flash('success','location successfully updated');
        }
        else{
            request()->session()->flash('error','Error occurred while updating location');
        }
        return redirect()->route('location.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $location=Location::findOrFail($id);
        $status=$location->delete();
        if($status){
            request()->session()->flash('success','location successfully deleted');
        }
        else{
            request()->session()->flash('error','Error occurred while deleting location');
        }
        return redirect()->route('location.index');
    }

}
