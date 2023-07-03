<div wire:poll.visible style="margin-top: 1em;" >
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
    <div class="container-fluid bg-light">
        <div class="row">
            <div class="col-md-6" style="padding: 3em;">
                <h1 style="color: #017C7A;">
                    {{@$about->name}}
                </h1>
                <p>
                    {{@$about->description}}
                </p>

                <a href="{{route('home-about')}}" class="btn btn-outline-light rounded-pill" style="padding: 0.5em; border-color: #33BAFA; color: #33BAFA;">
                    Read more...
                </a>
            </div>


            <div class="col-md-6" style="padding: 2em">

                {{-- <div id="carouselExampleCaptions" class="carousel slide"> --}}




                    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner ">
                            @foreach($sliders as $slider)
                                <div class="carousel-item @if($loop->first) active @endif">
                                    <div class="slider-image text-center">
                                        <img src="{{  asset('images/'.$slider->image) }}" class="d-inline-block border text-center rounded" alt="{{ $slider->image }}">
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>













                    {{-- <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                      <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                      </ol>
                      <div class="carousel-inner">
                        @foreach($about_images as $image)
                            <div class="carousel-item active">
                              <img class="d-block w-100" src="{{ url(isset($image->name) ? $image->name : 'images/nopic.jpg') }}" alt="image" style="border-radius: 2px;max-width: 38em; max-height: auto; margin-top: 1.3em;"> 
                              <div class="carousel-caption d-none d-md-block">
                                <h5 class="text-dark">Globec Scientific Limited</h5>
                              </div>
                            </div>
                          @endforeach
                      </div>
                      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                      </a>
                    </div> </div> --}}



                    
            </div>
        </div>
    </div>


    <!-- products -->
    <div class="container-fluid bg-light" style="padding:2em; margin-top: 1em;">
        <div class="row">
            <div class="col-md-12" >
                <h3 style=" color: #017C7A;">
                    Our Products and Solutions
                </h3>
            </div>

            @foreach($products as $product)
                <div class="col-md-6">
                    <div class="card mb-3 border bg-light" style="max-width: 540px;">
                      <div class="row g-0">
                        <div class="col-md-6 d-flex justify-content-center">
                          <img src="{{ url(isset($product->image) ? $product->image : 'images/nopic.jpg') }}" alt="image" style="border-radius: 2px;max-width: 19em; max-height: 10.5em; margin-top: 1.3em;"> 
                          <!-- border:1px solid #28a8e4; -->
                        </div>
                        <div class="col-md-6">
                          <div class="card-body">
                            <h5 class="card-title d-flex justify-content-center" style="color: #017C7A;">
                                {{$product->name}}
                            </h5>
                            <p class="card-text d-flex justify-content-center">
                                {{$product->description}}
                            </p>
                            
                          </div>
                        </div>
                      </div>
                      <div class="row g-0" style="padding: 1em">
                           <a href="{{route('product_quote',$product->id)}}" class="form-control btn btn-outline-secondary rounded-pill" style="padding: 0.5em; border-color: #33BAFA; color: #33BAFA;">
                                <i class="bi-cart"></i> Place Order
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach

            <div class="col-md-12">
                {{-- @$product->links() --}}
            </div>

        </div>
    </div>
    <!-- End products -->


    <div class="container-fluid bg-transparent" style=" margin-top: 1em">
        <div class="row ">
            <div class=" bg-transparent border text-light" style="width: 45em; padding: 1em; margin: 0.3em;">
                 <i class="bi-droplet-half text-light d-flex justify-content-center" style="font-size: 2rem;"></i>
                 <hr>
                <div>
                    <h3 class="d-flex justify-content-center">
                        {{\App\Models\News::first()->name}}
                    </h3>

                    <a class="bi-arrow-right-circle text-light text-primary d-flex justify-content-center" style="font-size: 2rem; text-decoration: none;" href="{{route('home-show-news',\App\Models\News::first()->id)}}"></a>
                </div>
            </div>
            
            <div class=" bg-transparent border text-light" style="width: 45em; padding: 1em; margin: 0.3em;">
                 <i class="bi-cart4 text-light d-flex justify-content-center" style="font-size: 2rem;"></i>
                 <hr>
                <div>
                    <h3 class="d-flex justify-content-center">
                        {{\App\Models\Product::first()->name}}
                    </h3>

                    <a class="bi-arrow-right-circle text-light d-flex justify-content-center" style="font-size: 2rem; text-decoration: none;" href="{{route('product_quote', \App\Models\Product::first()->id)}}"></a>
                </div>
            </div>

            <div class=" bg-transparent border text-light" style="width: 45em; padding: 1em; margin: 0.3em;">
                 <i class="bi-google text-danger d-flex justify-content-center" style="font-size: 2rem;"></i>
                 <hr>
                <div>
                    <h3 class="d-flex justify-content-center">
                        Contact Us 
                    </h3>

                    <a class="bi-arrow-right-circle text-light text-primary d-flex justify-content-center" style="font-size: 2rem; text-decoration: none;" href="{{route('home-contact')}}"></a>
                </div>
            </div>

            <div class=" bg-transparent border border-bottom-none text-light " style="border-left: 0px; width: 45em; padding: 1em; margin: 0.3em;">
                 <i class="bi-binoculars text-light d-flex justify-content-center" style="font-size: 2rem;"></i>
                 <hr>
                <div>
                    <h3 class="d-flex justify-content-center">
                        Career Posts will be here
                    </h3>

                    <i class="bi-arrow-right-circle text-light d-flex justify-content-center" style="font-size: 2rem;"></i>
                </div>
            </div>

        </div>
    </div>



    <div class="container-fluid bg-light" style="padding: 2em; margin-top: 1em;">
        <div class="container-fluid">
            <h3 style="color: #017C7A;">
                News
            </h3>
        </div>
        <div class="row d-flex justify-content-center" style="padding-top: 0.2em;">
            @foreach($news as $blog)
                <div class="col-md-3" style="margin-top: 1em">
                   <div class="card d-flex justify-content-center" style="width: auto;">

                    <div class="col-md-12 d-flex justify-content-center">
                          <img src="{{ url(isset($blog->image) ? $blog->image : 'images/nopic.jpg') }}" alt="image" style="border-radius: 2px;max-width: 19em; max-height: 20em; margin-top: 1.3em;"> 
                      <!-- <img src="images/cancer.jpg    " class="card-img-top" alt="..."> -->
                    </div>
                      <div class="card-body">
                        <h5 class="card-title d-flex justify-content-center">{{@$blog->name}}</h5>
                        <p class="card-text d-flex justify-content-center" >
                            {{$blog->description}}
                        </p>
                        <a href="{{route('home-show-news',$blog->id)}}" class="btn btn-outline-secondary rounded-pill" style="border-color: #33BAFA; color: #33BAFA;">Learn More...</a>
                      </div>
                    </div>
               </div>
            @endforeach
            <div>
                {{-- $news->links() --}}
            </div>
        </div>
    </div>

    <div class="container bg-transparent" style=" margin-top: 1em;">
        <div class="row">
            <div class="col-md-12 " >
                <h3 class="d-flex justify-content-center text-light">
                    What Client Says About Globec S Ltd
                </h3>
                <hr class="text-light">
                

            </div>
        </div>

        
        <div class="row">
            <div class="col-md-4">
                <div class="card" style="margin-top: 1em">
                  <div class="card-body">
                    <!-- <h5 class="card-title">Card title</h5> -->
                    <p class="card-text d-flex justify-content-center" style="padding-top: 2em; padding-left: 2em; padding-right: 2em;">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.
                        
                    </p>
                    <!-- <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p> -->
                  </div>
                  <img src="images/nopic.jpg" class="rounded-pill d-flex justify-content-center" style="width: 10em !important; margin-left: 7em;" alt="...">


                  <div class="card-body">
                    <h4 class="d-flex justify-content-center" style="color: #017C7A;">
                        Iren C Somebody
                    </h4>
                    <p class="d-flex justify-content-center" style="color: #017C7A;">
                        <i class="bi-dot"></i>Biomedical Scientist
                    </p>
                  </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card" style="margin-top: 1em">
                  <div class="card-body">
                    <!-- <h5 class="card-title">Card title</h5> -->
                    <p class="card-text d-flex justify-content-center" style="padding-top: 2em; padding-left: 2em; padding-right: 2em;">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.
                       
                    </p>
                    <!-- <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p> -->
                  </div>
                  <img src="images/nopic.jpg" class="rounded-pill d-flex justify-content-center" style="width: 10em !important; margin-left: 7em;" alt="...">

                  <div class="card-body">
                    <h4 class="d-flex justify-content-center" style="color: #017C7A;">
                        Customer Debora
                    </h4>
                    <p class="d-flex justify-content-center" style="color: #017C7A;">
                        <i class="bi-dot"></i>Marketing Manager
                    </p>
                  </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="card" style="margin-top: 1em">
                  <div class="card-body">
                    <!-- <h5 class="card-title">Card title</h5> -->
                    <p class="card-text d-flex justify-content-center" style="padding-top: 2em; padding-left: 2em; padding-right: 2em;">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.
                       
                    </p>
                    <!-- <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p> -->
                  </div>
                  <img src="images/nopic.jpg" class="rounded-pill d-flex justify-content-center" style="width: 10em !important; margin-left: 7em;" alt="...">

                  <div class="card-body">
                    <h4 class="d-flex justify-content-center" style="color: #017C7A;">
                         Augustino Emanuel
                    </h4>
                    <p class="d-flex justify-content-center" style="color: #017C7A;">
                        <i class="bi-dot"></i>
                        Software Engineer
                    </p>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
