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

                <div id="carouselExampleCaptions" class="carousel slide">
                  <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                  </div>
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="images/about.jpg" class="d-block w-100" alt="...">
                      <div class="carousel-caption d-none d-md-block">
                        <h5>First slide label</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                      </div>
                    </div>
                    <div class="carousel-item">
                      <img src="images/cancer.jpg" class="d-block w-100" alt="...">
                      <div class="carousel-caption d-none d-md-block">
                        <h5>Second slide label</h5>
                        <p>Some representative placeholder content for the second slide.</p>
                      </div>
                    </div>
                    <div class="carousel-item">
                      <img src="images/computer.jpg" class="d-block w-100" alt="...">
                      <div class="carousel-caption d-none d-md-block">
                        <h5>Third slide label</h5>
                        <p>Some representative placeholder content for the third slide.</p>
                      </div>
                    </div>
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
                
            </div>





        </div>
    </div>


    <!-- products -->
    <div class="container-fluid bg-light" style="padding:2em; margin-top: 1em;">
        <div class="row">
            <div class="col-md-12" >
                <h1 style="padding-left: 1em; color: #017C7A;">
                    Our Products and Solutions
                </h1>
                &nbsp;
            </div>

            @foreach($products as $product)
                <div class="col-md-6">
                    <div class="card mb-3 border-0 bg-light" style="max-width: 540px;">
                      <div class="row g-0">
                        <div class="col-md-6 ">
                          <img src="images/bed.jpeg" width="100%" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-6">
                          <div class="card-body">
                            <h5 class="card-title" style="color: #017C7A;">
                                {{$product->name}}
                            </h5>
                            <p class="card-text">
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
            
            <div class=" bg-transparent border border-bottom-none text-light " style="border-left: 0px; width: 45em; padding: 1em; margin: 0.3em;">
                 <i class="bi-binoculars text-light d-flex justify-content-center" style="font-size: 2rem;"></i>
                 <hr>
                <div>
                    <h3 class="d-flex justify-content-center">
                        Biomedical Engineering 
                    </h3>

                    <i class="bi-arrow-right-circle text-light d-flex justify-content-center" style="font-size: 2rem;"></i>
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
                 <i class="bi-google text-danger d-flex justify-content-center" style="font-size: 2rem;"></i>
                 <hr>
                <div>
                    <h3 class="d-flex justify-content-center">
                        Contact Us 
                    </h3>

                    <a class="bi-arrow-right-circle text-light text-primary d-flex justify-content-center" style="font-size: 2rem; text-decoration: none;" href="{{route('home-contact')}}"></a>
                </div>
            </div>
        </div>
    </div>



    <div class="container-fluid bg-light" style="padding: 2em; margin-top: 1em;">
        <div class="container-fluid">
            <h1 style="color: #017C7A;">
                News
            </h1>
        </div>
        <div class="row d-flex justify-content-center" style="padding-top: 1em;">
            @foreach($news as $blog)
                <div class="col-md-3" style="margin-top: 1em">
                   <div class="card" style="width: auto;">
                      <img src="images/cancer.jpg    " class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">{{@$blog->name}}</h5>
                        <p class="card-text">
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
                <h1 class="d-flex justify-content-center text-light">
                    Testimonials
                </h1>
                <hr class="text-light">
                <h3 class="d-flex justify-content-center text-light">
                    What Client Says About Globec S Ltd
                </h3>

            </div>
        </div>

        
        <div class="row">
            <div class="col-md-4">
                <div class="card" style="margin-top: 1em">
                  <div class="card-body">
                    <!-- <h5 class="card-title">Card title</h5> -->
                    <p class="card-text d-flex justify-content-center" style="padding-top: 3em; padding-left: 3em; padding-right: 3em;">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.
                        This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.
                    </p>
                    <!-- <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p> -->
                  </div>
                  <img src="images/cancer.jpg" class="rounded-pill d-flex justify-content-center" style="width: 10em !important; margin-left: 7em;" alt="...">

                  <div class="card-body">
                    <h4 class="d-flex justify-content-center" style="color: #017C7A;">
                        Iren C Somebody
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
                    <p class="card-text d-flex justify-content-center" style="padding-top: 3em; padding-left: 3em; padding-right: 3em;">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.
                        This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.
                    </p>
                    <!-- <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p> -->
                  </div>
                  <img src="images/cancer.jpg" class="rounded-pill d-flex justify-content-center" style="width: 10em !important; margin-left: 7em;" alt="...">

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
                    <p class="card-text d-flex justify-content-center" style="padding-top: 3em; padding-left: 3em; padding-right: 3em;">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.
                        This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.
                    </p>
                    <!-- <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p> -->
                  </div>
                  <img src="images/cancer.jpg" class="rounded-pill d-flex justify-content-center" style="width: 10em !important; margin-left: 7em;" alt="...">

                  <div class="card-body">
                    <h4 class="d-flex justify-content-center" style="color: #017C7A;">
                         Augustino Emanuel
                    </h4>
                    <p class="d-flex justify-content-center" style="color: #017C7A;">
                        <i class="bi-dot"></i>Marketing Manager
                    </p>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
