@if(Auth::user())
<div class="col-md-2" style="margin-top: 1em;">
    <div class="container-fluid bg-secondary" style="padding-top: 1em;  padding-bottom: 2em; height: auto;">
        <a href="{{route('home')}}" style="padding: 1em; text-decoration: none;" class="text-light">
            Dashboard
        </a><br>
        <a href="{{route('about')}}" style="padding: 1em; text-decoration: none;" class="text-light">
            About Globec
        </a><br>
        <a href="{{route('contact_us')}}" style="padding: 1em; text-decoration: none;" class="text-light">
            Contact Us
        </a><br>
        <a href="{{route('products')}}" style="padding: 1em; text-decoration: none;" class="text-light">
            Products & Solutions
        </a><br>
        <a href="{{route('career')}}" style="padding: 1em; text-decoration: none;" class="text-light">
            Careers
        </a><br>
        <a href="{{route('news')}}" style="padding: 1em; text-decoration: none;" class="text-light">
            News 
        </a><br>
        <a href="{{route('testimonies')}}" style="padding: 1em; text-decoration: none;" class="text-light">
            Testimonials
        </a>
        <a href="{{route('customers')}}" style="padding: 1em; text-decoration: none;" class="text-light">
            Customers
        </a>
    </div>
</div>
@endif