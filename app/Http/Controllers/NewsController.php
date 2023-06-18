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
        dd(123);
        return view('news.index');
    }

    public function edit_news($id){
        $news = News::findOrFail($id);
        $data = [
            'news' =>$news,
        ];
        return view('dashboard.news.edit')->with($data);
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
    public function store_news(Request $request, $id){
        $news = News::updateOrCreate(
            ['id'=>$id],
            ['name'=>$request->name, 'description'=>$request->description, 'creator_id'=>Auth::user()->id,'updator_id'=>Auth::user()->id]
        );
        return redirect()->route('news');
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
