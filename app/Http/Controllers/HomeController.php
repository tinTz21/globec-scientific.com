<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use App\Models\Product;
use App\Models\Contact;
use App\Models\News;
use App\Models\Quote;
use Auth;
use App\Models\AboutImage;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $products = Product::latest()->paginate(3);
        $customers = Quote::latest()->paginate(3);
        $news = News::latest()->paginate(3);
        $data = [
            'products'=>$products,
            'customers'=>$customers,
            'news'=>$news,
        ];
        return view('home')->with($data);
    }

    public function about(){
        $about = About::first();
        $about_images = AboutImage::latest()->paginate(4);
        $data = [
            'about'=>$about,
            'about_images' => $about_images,
        ];
        return view('dashboard.about')->with($data);
    } 

    public function edit_about($id){
        $about = About::find($id);
        $data = [
            'about'=>$about,
        ];
        return view('dashboard.edit_about')->with($data);
    } 

    public function store_about(Request $request, $id){
        $store = About::updateOrCreate(
            ['id'=>$id,],
            ['name'=>$request->name, 'description'=>$request->description]
        );
        return redirect()->route('about')->with('success','Successful! About Globec Is Edited.');
    }

    public function products(){
        $products = Product::latest()->get();
        $data = [
            'products'=>$products,
        ];
        return view('dashboard.products')->with($data);
    }  

    public function add_product(){
        return view('dashboard.add_product');
    }

    public function store_product(Request $request){
        $request->validate([
            'name' => 'required',
            'description'=>'required',
            'image'=>'required'
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

        $product = Product::updateOrCreate(
            ['id'=>$request->id],
            ['name'=>$request->name,'description'=>$request->description,'translator_id'=>Auth::user()->id, 'updator_id'=>Auth::user()->id, 'image'=>$image]
        );



        return redirect()->route('products');
    }

    public function edited_product(Request $request, $id){
        $product = Product::find($id);
        $data = [
            'product'=>$product,
        ];
        return view('dashboard.edit_product')->with($data);
    }

    public function delete_product($id){
        $product = Product::find($id);
        $data = [
            'product'=>$product,
        ];
        return view('dashboard.delete_product')->with($data);
    }

    public function destroy_product($id){
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('products');
    }

    public function career(){
        return view('dashboard.career');
    }

    public function contact_us(){
        $contact = Contact::first();
        $data = [
            'contact' => $contact,
        ];
        return view('dashboard.contact_us')->with($data);
    }

    public function news(){
        $news = News::latest()->get();
        $data = [
            'news'=>$news,
        ];
        return view('dashboard.news')->with($data);
    } 

    public function testimonies(){
        return view('dashboard.testimonies');
    }
}
