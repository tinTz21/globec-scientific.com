<?php

namespace App\Http\Livewire\Home;

use Livewire\Component;
use App\Models\About;

class Footer extends Component
{
    public function render()
    {
        $about= About::firstOrFail();
        $data = [
            'about'=>$about,
        ];
        return view('livewire.home.footer')->with($data);
    }
}
