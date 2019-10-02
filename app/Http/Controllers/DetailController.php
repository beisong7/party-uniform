<?php

namespace App\Http\Controllers;

use App\Detail;
use Illuminate\Http\Request;

class DetailController extends MyController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Detail  $detail
     * @return \Illuminate\Http\Response
     */
    public function show(Detail $detail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Detail  $detail
     * @return \Illuminate\Http\Response
     */
    public function edit(Detail $detail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Detail  $detail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Detail $detail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Detail  $detail
     * @return \Illuminate\Http\Response
     */
    public function destroy(Detail $detail)
    {
        //
    }


    public function about(){
        $about = Detail::first();
        return view('cms.pages.about.index',compact('about') );
    }

    public function aboutSave(Request $request){

        $about = Detail::first();
        if(!empty($about)){
            $about->about_info = $request->about_info;
            $about->about_title = $request->about_title;
            $about->about_title2 = $request->about_title2;
            $about->key1 = $request->key1;
            $about->key2 = $request->key2;
            $about->key3 = $request->key3;
            $result = $this->uploadImage($request, 'about_image');
            if(!empty($result['image_url'])){
                $about->about_image = $result['image_url'];
            }
            $about->update();
        }else{
            $about = new Detail();
            $about->about_info = $request->about_info;
            $about->about_title = $request->about_title;
            $about->about_title2 = $request->about_title2;
            $about->key1 = $request->key1;
            $about->key2 = $request->key2;
            $about->key3 = $request->key3;
            $result = $this->uploadImage($request, 'about_image');
            if(!empty($result['image_url'])){
                $about->about_image = $result['image_url'];
            }
            $about->save();
        }
        return back()->withMessage('About Details Updated');
    }

}
