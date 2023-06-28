<div class="bg-light">
    {{-- Maranatha --}}
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid" style="padding: 1em;">
                <a class="navbar-brand" href="/">
                  <img src="/images/logo.jpg" width="100em">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto  mb-2 mb-lg-0 ">
                      <li class="nav-item">
                        <a class="nav-link" style="color: #017C7A;" aria-current="page" href="{{route('home-about')}}">
                            <b>ABOUT GLOBEC</b>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link"  style="color: #017C7A;" href="{{route('home-contact')}}">
                            <b>CONTACT US</b>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" style="color: #017C7A;" href="{{route('home-product')}}"><b>PRODUCTS AND SOLUTIONS</b></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" style="color: #017C7A;" href="{{route('home-career')}}"><b>CAREERS</b></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" style="color: #017C7A;" href="{{route('home-news')}}">
                            <b>NEWS</b>
                        </a>
                      </li>
                    </ul>
                    <form class="d-flex" role="search">
                      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                      <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                    
                </div>
            </div>
        </nav>
</div>

