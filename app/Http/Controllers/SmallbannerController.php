<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Smallbanner as ModelsSmallbanner;

class SmallbannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $smallbanner= ModelsSmallbanner::orderBy('id','DESC')->paginate(10);
        return view('backend.smallbanner.index')->with('smallbanners',$smallbanner);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.smallbanner.create');
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
            'title'=>'string|required|max:50',
            'description'=>'string|nullable',
            'photo'=>'string|required',
            'status'=>'required|in:active,inactive',
        ]);
        $data=$request->all();
        $slug=Str::slug($request->title);
        $count=ModelsSmallbanner::where('slug',$slug)->count();
        if($count>0){
            $slug=$slug.'-'.date('ymdis').'-'.rand(0,999);
        }
        $data['slug']=$slug;
        // return $slug;
        $status=ModelsSmallbanner::create($data);
        if($status){
            request()->session()->flash('success','Banner successfully added');
        }
        else{
            request()->session()->flash('error','Error occurred while adding banner');
        }
        return redirect()->route('smallbanner.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Smallbanner  $smallbanner
     * @return \Illuminate\Http\Response
     */
    public function show(Smallbanner $smallbanner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Smallbanner  $smallbanner
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $smallbanner=ModelsSmallbanner::findOrFail($id);
        return view('backend.smallbanner.edit')->with('smallbanner',$smallbanner);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Smallbanner  $smallbanner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $smallbanner=ModelsSmallbanner::findOrFail($id);
        $this->validate($request,[
            'title'=>'string|required|max:50',
            'description'=>'string|nullable',
            'photo'=>'string|required',
            'status'=>'required|in:active,inactive',
        ]);
        $data=$request->all();
        $status=$smallbanner->fill($data)->save();
        if($status){
            request()->session()->flash('success','SmallBanner successfully updated');
        }
        else{
            request()->session()->flash('error','Error occurred while updating Smallbanner');
        }
        return redirect()->route('smallbanner.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Smallbanner  $smallbanner
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $smallbanner=ModelsSmallbanner::findOrFail($id);
        $status=$smallbanner->delete();
        if($status){
            request()->session()->flash('success','Small Banner successfully deleted');
        }
        else{
            request()->session()->flash('error','Error occurred while deleting Small banner');
        }
        return redirect()->route('smallbanner.index');
    }
}
