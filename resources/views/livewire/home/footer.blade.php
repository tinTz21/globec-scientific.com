<div style="margin-top: 1em">
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
    <div class="container-fluid bg-light" style="padding: 1em;">
        <div class="row">
            <div class="col-md-12" style="padding: 1em">
                <div class="row">
                    <div class="col-md-3 ">
                        <h3 class="d-flex justify-content-center" style="color: #017C7A;">
                            About Globec
                        </h3>
                        <p class="d-flex justify-content-center" style="padding-left:2em">
                            {!! Illuminate\Support\Str::limit($about->description, 300) !!}
                        </p>
                    </div>
                    <div class="col-md-3 ">
                        <h3 class="d-flex justify-content-center" style="color: #017C7A;">
                            Quick Links
                        </h3>
                        <p> 
                            <div>
                                <a href="{{route('home-about')}}" style="text-decoration: none; padding-left: 1em; color: #33BAFA;" class="d-flex justify-content-left">
                                    <i class="bi-dot"></i> About Globec
                                </a>
                            </div>

                            <div>
                                <a href="{{route('home-contact')}}" style="text-decoration: none; padding-left: 1em; color: #33BAFA;" class="d-flex justify-content-left">
                                    <i class="bi-dot"></i> Contact Us
                                </a>
                            </div>  

                            <div>
                                <a href="{{route('home-product')}}" style="text-decoration: none; padding-left: 1em; color: #33BAFA;" class="d-flex justify-content-left">
                                    <i class="bi-dot"></i> Products and Solutions
                                </a>
                            </div>

                            <div>
                                <a href="{{route('home-career')}}" style="text-decoration: none; padding-left: 1em; color: #33BAFA;" class="d-flex justify-content-left">
                                    <i class="bi-dot"></i> Career
                                </a>
                            </div>
                            <div>
                                <a href="{{route('home-news')}}" style="text-decoration: none; padding-left: 1em; color: #33BAFA;" class="d-flex justify-content-left">
                                    <i class="bi-dot"></i> News
                                </a>    
                            </div>
                            
                        </p>
                    </div>
                    <div class="col-md-3">
                        <h3 class="d-flex justify-content-center" style="color: #017C7A;">
                            Update & News
                        </h3>
                        @foreach($news as $blog)
                            <a href="{{route('home-show-news', $blog->id)}}" class="d-flex justify-content-left" style="text-decoration: none; padding-left: 1em; color: #33BAFA;">
                                <i class="bi-dot"></i> 
                                {{ Illuminate\Support\Str::limit($blog->name, 30) }}
                            </a>
                        @endforeach
                        
                        <div class="container-fluid">
                            {{$news->links()}}
                        </div>
                       
                        
                    </div>

                    <div class="col-md-3">
                        <h3 class="d-flex justify-content-center" style="color: #017C7A;">
                            Latest Products
                        </h3>
                       @foreach($products as $product)
                            <a href="{{route('product_quote',$product->id)}}" class="d-flex justify-content-left" style="text-decoration: none; padding-left: 1em; color: #33BAFA;">
                                <i class="bi-dot"></i> 
                                {{ Illuminate\Support\Str::limit($product->name, 30) }}
                            </a>
                        @endforeach
                        
                        <div class="col-md-12">
                            {{$products->links()}}
                        </div>
                       
                        
                    </div>
                </div>
            </div>


            
            <hr>
            <div class="row">
                <div class="col-md-9">
                    {{ '@ '. now()->year .' | All Rights Reserved by Globec Scientific Ltd '}} 
                    <!-- <a href="#" style="text-decoration: none;">Privacy & Policy</a>  -->
                </div>
                
                <div class="col-md-3 d-flex justify-content-center">

                    <i class="bi-twitter text-primary"></i> <a href="#" style="text-decoration: none">Twitter</a>
                    &nbsp;&nbsp;
                    <i class="bi-instagram text-warning"></i> <a href="#" style="text-decoration: none">Instagram</a>
                    &nbsp;&nbsp;
                    <i class="bi-facebook"></i> <a href="#" style="text-decoration: none">FaceBook</a>
                    &nbsp; | &nbsp;&nbsp;
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline" style="text-decoration: none;">Log-in</a>
                </div>
            </div>
        </div>
    </div>
</div>
