<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $videos= Video::orderBy('id','DESC')->paginate(10);
        return view('backend.videos.index')->with('videos',$videos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.videos.create');
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
        $slug=Str::slug($request->title);
        $count=Video::where('slug',$slug)->count();
        if($count>0){
            $slug=$slug.'-'.date('ymdis').'-'.rand(0,999);
        }
        $data['slug']=$slug;
        // return $slug;
        $status=Video::create($data);
        if($status){
            request()->session()->flash('success','Banner successfully added');
        }
        else{
            request()->session()->flash('error','Error occurred while adding banner');
        }
        return redirect()->route('video.index');
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
        $video=Video::findOrFail($id);
        return view('backend.videos.edit')->with('video',$video);
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
        $video=Video::findOrFail($id);
        // $this->validate($request,[
        //     'title'=>'string|required|max:50',
        //     'description'=>'string|nullable',
        //     'photo'=>'string|required',
        //     'status'=>'required|in:active,inactive',
        // ]);
        $data=$request->all();
        $status=$video->fill($data)->save();
        if($status){
            request()->session()->flash('success','video successfully updated');
        }
        else{
            request()->session()->flash('error','Error occurred while updating video');
        }
        return redirect()->route('video.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $video=Video::findOrFail($id);
        $status=$video->delete();
        if($status){
            request()->session()->flash('success','Small Banner successfully deleted');
        }
        else{
            request()->session()->flash('error','Error occurred while deleting Small banner');
        }
        return redirect()->route('video.index');
    }
}
