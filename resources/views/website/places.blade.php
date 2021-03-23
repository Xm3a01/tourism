@extends('website.layouts.master')

@section('content')

<div id="blog">
    <div class="container s-blog mt-5">
    <h1 class="mainTitle"> أفضل الاماكن السياحيه  </h1>
        <div class="row">
            @foreach ($places as $place)
                
            <div class="col-sm-12 col-md-4">
                <div class="blog">
                    <div class="blog-img">
                        <img src="{{$place->image}}" alt="..." />
                    </div>
                    <div class="blog-content">
                        <ul class="blog-meta">
                            <li>
                                <span class="icofont-user"></span>
                               {{$place->location}}
                            </li>
                           
                        </ul>
                        <h3 class="blog-title"> {{$place->name}}</h3>
                        <p class="blog-p"> {{$place->description}}
                        </p>
                    </div>
                    <div class="blog-footer"  >
                        <a href="#"> حجز </a><i  class="icofont-long-arrow-right"></i>
                    </div>
                </div>
            </div>	
            @endforeach
        </div>
    </div>
</div>
<br>
<br>
<!--SVG Wave -->
<div>
    <div class="container-fluid svgWave">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#ff007a" fill-opacity="1" d="M0,96L40,122.7C80,149,160,203,240,229.3C320,256,400,256,480,245.3C560,235,640,213,720,186.7C800,160,880,128,960,149.3C1040,171,1120,245,1200,250.7C1280,256,1360,192,1400,160L1440,128L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path>
        </svg>
    </div>
</div>
@endsection

<style>
    .form-group , .note{
        text-align: right;
    }
</style>