<?php

namespace App\Http\Controllers;

use App\Image;
use Illuminate\Http\Request;

class ImageController extends MyController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $images = Image::take(20)->get();
        return view('cms.pages.gallery.index')->with('images', $images);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cms.pages.gallery.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $image = new Image();
        $response = $this->uploadImage($request, 'image');
        $image->url = $response['image_url'];
        $image->name = $response['name'];

        $image->save();
        return redirect()->route('image.index')->withMessage('New Image Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function show(Image $image)
    {
        //
    }

    public function loadimagegallery(){
        $images = Image::take(12)->get();
        return view('cms.pages.gallery.loader')->with('images', $images);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function edit(Image $image)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Image $image)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function destroy(Image $image)
    {
        //
    }

    public function moreFromGallery($from){
        if(is_numeric($from)){

            $image = Image::where('id', '>', $from)->take(12)->get();

            if(count($image) > 0){
                return response()->json([
                    'message'=>'success',
                    'data'=> json_decode($image)
                ], 200);
            }else{
                return response()->json([
                    'message'=>count($image),
                ], 200);
            }


        }

        return response()->json([
            'message'=>'invalid key submitted',
        ], 404);
    }
}
