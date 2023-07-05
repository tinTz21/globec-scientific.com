<?php

namespace App\Http\Livewire\Home;

use Livewire\Component;
use App\Models\About;
use App\Models\News;
use App\Models\Product;
use Livewire\WithPagination;


class Footer extends Component
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
        $about= About::firstOrFail();
        $news = News::latest()->paginate(5, ['*'], 'newsPage');
        $products = Product::latest()->paginate(5, ['*'], 'productPage');
        $data = [
            'about'=>$about,
            'news' => $news,
            'products'=>$products,
        ];
        return view('livewire.home.footer')->with($data);
    }
}
