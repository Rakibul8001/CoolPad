<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Productbanner;

class ProductbannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productbanner= Productbanner::orderBy('id','DESC')->paginate(10);
        // dd($productbanner);
        return view('backend.productbanner.index')->with('productbanners',$productbanner);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.productbanner.create');
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
        $count=Productbanner::where('slug',$slug)->count();
        if($count>0){
            $slug=$slug.'-'.date('ymdis').'-'.rand(0,999);
        }
        $data['slug']=$slug;
        // return $slug;
        $status=Productbanner::create($data);
        if($status){
            request()->session()->flash('success','Banner successfully added');
        }
        else{
            request()->session()->flash('error','Error occurred while adding banner');
        }
        return redirect()->route('productbanner.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\productbanner  $productbanner
     * @return \Illuminate\Http\Response
     */
    public function show(productbanner $productbanner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\productbanner  $productbanner
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $productbanner=Productbanner::findOrFail($id);
        return view('backend.productbanner.edit')->with('productbanner',$productbanner);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\productbanner  $productbanner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $productbanner=Productbanner::findOrFail($id);
        $this->validate($request,[
            'title'=>'string|required|max:50',
            'description'=>'string|nullable',
            'photo'=>'string|required',
            'status'=>'required|in:active,inactive',
        ]);
        $data=$request->all();
        $status=$productbanner->fill($data)->save();
        if($status){
            request()->session()->flash('success','productbanner successfully updated');
        }
        else{
            request()->session()->flash('error','Error occurred while updating productbanner');
        }
        return redirect()->route('productbanner.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\productbanner  $productbanner
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $productbanner=Productbanner::findOrFail($id);
        $status=$productbanner->delete();
        if($status){
            request()->session()->flash('success','Small Banner successfully deleted');
        }
        else{
            request()->session()->flash('error','Error occurred while deleting Small banner');
        }
        return redirect()->route('productbanner.index');
    }
}
