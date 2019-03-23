<?php

namespace App\Http\Controllers;

use App\About;
use App\News;
use App\Solitions;
use stdClass;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontend.content');
    }


    public function news()
    {
        $news = News::all();
        return view('frontend.news',compact('news'));
    }


    public function about()
    {
        $abouts = About::all();
        return view('frontend.about', compact('abouts'));
    }

    public function solutions($id)
    {

        /*first one data row
        $solitions = Solitions::find($id)->first();*/

        $solitions = Solitions::all();
        return view('frontend.solutions',compact('solitions'));
    }

    public function newshow($id)
    {
        $news = News::all();
        return view('frontend.newshow',compact('news'));
    }


}
