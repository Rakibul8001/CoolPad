<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimonial= Testimonial::orderBy('id','DESC')->paginate(10);
        return view('backend.testimonial.index')->with('testimonials',$testimonial);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.testimonial.create');
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
        $count=Testimonial::where('slug',$slug)->count();
        if($count>0){
            $slug=$slug.'-'.date('ymdis').'-'.rand(0,999);
        }
        $data['slug']=$slug;
        // return $slug;
        $status=Testimonial::create($data);
        if($status){
            request()->session()->flash('success','Banner successfully added');
        }
        else{
            request()->session()->flash('error','Error occurred while adding banner');
        }
        return redirect()->route('testimonial.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function show(testimonial $testimonial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $testimonial=Testimonial::findOrFail($id);
        return view('backend.testimonial.edit')->with('testimonial',$testimonial);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $testimonial=Testimonial::findOrFail($id);
        $this->validate($request,[
            'title'=>'string|required|max:50',
            'description'=>'string|nullable',
            'photo'=>'string|required',
            'status'=>'required|in:active,inactive',
        ]);
        $data=$request->all();

        $status=$testimonial->fill($data)->save();
        if($status){
            request()->session()->flash('success','testimonial successfully updated');
        }
        else{
            request()->session()->flash('error','Error occurred while updating testimonial');
        }
        return redirect()->route('testimonial.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $testimonial=Testimonial::findOrFail($id);
        $status=$testimonial->delete();
        if($status){
            request()->session()->flash('success','Small Banner successfully deleted');
        }
        else{
            request()->session()->flash('error','Error occurred while deleting Small banner');
        }
        return redirect()->route('testimonial.index');
    }
}
