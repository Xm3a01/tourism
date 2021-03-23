@extends('website.layouts.master')

@section('content')

<div id="feature">
    <div  class="container s-pricing mt-5" id="pricing">
        <h1 class="mainTitle"> شركات السياحه الرائده </h1>
        <div class="row">

            @foreach ($companies as $company)
                
            <div class="col-sm-6 col-md-4 text-center col-pricing">
                <div class="p-4 content-pricing">
                    <span> <img src="{{$company->image}}" alt="" height="77" width="70"> </span>
                    <h5> {{$company->name}} </h5>										
                    <ul class="list-pricing">
                        <li><span> {{$company->ceo}} </span></li>
                        <li><span>  {{$company->email}}</span></li>
                        <li><span>  {{$company->phone}} </span></li>
                        <li><span> {{$company->location}} </span></li>
                        
                    </ul>								
                    <a href="#" class="btn"> حجز </a>
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