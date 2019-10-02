<?php

namespace App\Http\Controllers;

use App\Detail;
use App\Slide;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slides = Slide::where('active', true)->get();
        //get about
        $abt = Detail::select([
            'about_info',
            'about_title',
            'about_title2',
            'key1',
            'key2',
            'key3',
            'about_image',
        ])->first();

        return view('pages.home.index')
            ->with('slides', $slides)
            ->with('about', $abt);
    }

    public function about()
    {
        $abt = Detail::select([
            'about_info',
            'about_title',
            'about_title2',
            'key1',
            'key2',
            'key3',
            'about_image',
        ])->first();
        return view('pages.home.about')->with('about', $abt);
    }

    public function contact()
    {
        return view('pages.contact.us');
    }

    public function service(){
        return view('pages.services.index');
    }

    public function faq(){
        return view('pages.faq.index');
    }
}
