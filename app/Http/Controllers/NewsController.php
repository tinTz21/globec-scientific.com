<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use Auth;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::latest()->paginate(8);
        $data = [
            'news' => $news,
        ];
        return view('news.index')->with($data);
    }

    public function edit_news($id){
        $news = News::findOrFail($id);
        $data = [
            'news' =>$news,
        ];
        return view('dashboard.news.edit')->with($data);
    }

    public function show_news($id){
        $news = News::findOrFail($id);
        $blogs = News::latest()->paginate(6);
        $data = [
            'news'=>$news,
            'blogs' => $blogs,
        ];
        return view('news.show')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.news.create');
    }

    public function store_new_news(Request $request){
        $news = $request->validate([
            'name'=>'required',
            'description'=>'required',
            'image'=>'required',
        ]);

        $file = \Request::file('image');
        if ($file) {
            $path = 'uploads/';
            $filename = uniqid(date('Hmdysi')) . '_' . $file->getClientOriginalName();
            $upload = \Request::file('image')->move($path, $filename);
            if ($upload) {
                $image = $path . $filename;
            }
        }

        $news = News::create(
            ['name'=>$request->name, 'description'=>$request->description, 'creator_id'=>Auth::user()->id,'updator_id'=>Auth::user()->id,'image'=>$image]
        );
        return redirect()->route('more-news',$news->id);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store_news(Request $request, $id){


        $file = \Request::file('image');
        if ($file) {
            $path = 'uploads/';
            $filename = uniqid(date('Hmdysi')) . '_' . $file->getClientOriginalName();
            $upload = \Request::file('image')->move($path, $filename);
            if ($upload) {
                $image = $path . $filename;
            }
        }
        $news = News::updateOrCreate(
            ['id'=>$id],
            ['name'=>$request->name, 'description'=>$request->description, 'creator_id'=>Auth::user()->id,'updator_id'=>Auth::user()->id, 'image'=>$image]
        );
        return redirect()->route('more-news',$news->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $news = News::findOrFail($id);
        $data = [
            'news'=>$news,
        ];
        return view('dashboard.news.show')->with($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function more (Request $request, $id)
    {
        $news = News::findOrFail($id);
        $data = [
            'news'=>$news,
        ];
        return view('dashboard.news.more')->with($data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $news = News::findOrFail($id);
        $news->delete();
        return redirect()->route('news');
    }
}
