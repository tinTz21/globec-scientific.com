<?php

namespace App\Http\Controllers;

use App\Models\AboutImage;
use App\Models\About;
use Illuminate\Http\Request;
use Auth;

class AboutImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(){
        $about_images = AboutImage::latest()->paginate(8);
        $data = [
            'about_images' => $about_images,
        ];
        return view('about.images')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('about.new_image');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $news = $request->validate([
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

        $news = AboutImage::create(
            ['about_id'=>About::first()->id, 'creator_id'=>Auth::user()->id,'updator_id'=>Auth::user()->id,'name'=>$image]
        );

        return redirect()->route('about-images');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AboutImage  $aboutImage
     * @return \Illuminate\Http\Response
     */
    public function delete(AboutImage $aboutImage, $id)
    {   
        $image = AboutImage::findOrFail($id);
        $data = [
            'image' => $image,
        ];
        return view('about.delete_image')->with($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AboutImage  $aboutImage
     * @return \Illuminate\Http\Response
     */
    public function edit(AboutImage $aboutImage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AboutImage  $aboutImage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AboutImage $aboutImage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AboutImage  $aboutImage
     * @return \Illuminate\Http\Response
     */
    public function destroy(AboutImage $aboutImage, $id)
    {
        $image = AboutImage::findOrFail($id);
        $image->delete();
        return redirect()->route('about-images');
    }
}
