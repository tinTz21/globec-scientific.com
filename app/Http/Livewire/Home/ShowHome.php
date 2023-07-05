<?php

namespace App\Http\Livewire\Home;

use Livewire\Component;
use App\Models\About;
use App\Models\Product;
use App\Models\News;
use App\Models\AboutImage;
use Livewire\WithPagination;

class ShowHome extends Component
{
    use WithPagination;
     protected $paginationTheme = 'bootstrap';

     public function updatingSearch()
    {
        $this->resetPage('productPage');
        $this->resetPage('newsPage');
    }

    public function render()
    {
        $about = About::first();
        $products = Product::latest()->paginate(4, ['*'], 'productPage');
        $news = News::latest()->paginate(4, ['*'], 'newsPage');
        $blogs = News::latest()->paginate(6, ['*'], 'blogPage');
        $about_images = AboutImage::latest()->paginate(4, ['*'], 'sliderPage');
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
