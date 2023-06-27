<?php

namespace App\Http\Livewire\Home;

use Livewire\Component;
use App\Models\About;
use App\Models\News;
use App\Models\Product;

class Footer extends Component
{
    public function render()
    {
        $about= About::firstOrFail();
        $news = News::latest()->paginate(5);
        $products = Product::latest()->paginate(5);
        $data = [
            'about'=>$about,
            'news' => $news,
            'products'=>$products,
        ];
        return view('livewire.home.footer')->with($data);
    }
}
