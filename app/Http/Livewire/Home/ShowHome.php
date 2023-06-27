<?php

namespace App\Http\Livewire\Home;

use Livewire\Component;
use App\Models\About;
use App\Models\Product;
use App\Models\News;

class ShowHome extends Component
{
    public function render()
    {
        $about = About::first();
        $products = Product::latest()->paginate(4);
        $news = News::latest()->paginate(4);
        $blogs = News::latest()->paginate(6);
        $data = [
            'about' => $about,
            'products' => $products,
            'news'=> $news,
            'blogs' => $blogs,

        ];
        return view('livewire.home.show-home')->with($data);
    }
}
