<div class="bg-light">
    {{-- Maranatha --}}
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid" style="padding: 1em;">
                <a class="navbar-brand" href="/">
                  <img src="images/logo.jpg" width="100em">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto  mb-2 mb-lg-0 ">
                      <li class="nav-item">
                        <a class="nav-link" style="color: #017C7A;" aria-current="page" href="#"><b>ABOUT GLOBEC</b></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" style="color: #017C7A;" href="#"><b>PRODUCTS AND SOLUTIONS</b></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" style="color: #017C7A;" href="#"><b>CAREERS</b></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link"  style="color: #017C7A;"><b>CONTACT US</b></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" style="color: #017C7A;" href="#"><b>NEWS</b></a>
                      </li>
                    </ul>
                    <form class="d-flex" role="search">
                      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                      <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                    <!-- Right Side Of Navbar -->
                    <!-- <ul class="navbar-nav ms-auto"> -->
                        @if(Auth::user())
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" style="color: #000000;" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" style="color: #000000;" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            @endif
                    <!-- </ul> -->
                </div>
            </div>
        </nav>
</div>

