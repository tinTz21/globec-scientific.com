<?php

namespace App\Http\Livewire\Home;

use Livewire\Component;
use App\Models\About;
use App\Models\Product;
use App\Models\News;
use App\Models\AboutImage;

class ShowHome extends Component
{
    public function render()
    {
        $about = About::first();
        $products = Product::latest()->paginate(4);
        $news = News::latest()->paginate(4);
        $blogs = News::latest()->paginate(6);
        $about_images = AboutImage::latest()->paginate(4);
        $data = [
            'about' => $about,
            'products' => $products,
            'news'=> $news,
            'blogs' => $blogs,
            'about_images' => $about_images,

        ];
        return view('livewire.home.show-home')->with($data);
    }
}
