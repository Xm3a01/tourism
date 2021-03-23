@extends('dashboard.master')

@section('content')

    <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-body ">
                    <div class="row">
                        <div class="col-5 col-md-4">
                            <div class="icon-big text-center icon-warning">
                                <i class="nc-icon nc-single-02 text-success"></i>
                            </div>
                        </div>
                        {{-- This For managers --}}
                        <div class="col-7 col-md-8">
                            <div class="numbers">
                                <p class="card-category">
                                    Companies
                                </p>
                                <p class="card-title">
                                    {{ $companies ?? '' }}
                                <p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer ">
                    <hr>
                    <div class="stats">
                        <i class="fa fa-users"></i>

                    </div>
                </div>
            </div>
        </div>

        @if(Auth::user()->is_admin == 1)
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-body ">
                    <div class="row">
                        <div class="col-5 col-md-4">
                            <div class="icon-big text-center icon-warning">
                                <i class="nc-icon nc-caps-small text-success"></i>
                            </div>
                        </div>
                        {{-- This For Course --}}
                        <div class="col-7 col-md-8">
                            <div class="numbers">
                                <p class="card-category">
                                    Places
                                </p>
                                <p class="card-title">
                                    {{ $places ?? '' }}
                                <p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer ">
                    <hr>
                    <div class="stats">
                        <i class="fa fa-clipboard"></i>

                    </div>
                </div>
            </div>
        </div>
        @endif

    </div>

    <!-- <div class="row">
              <div class="col-md-12">
                <div class="card ">
                 
                </div>
              </div>
            </div>
            <div class="row">
              
            </div>
          </div> -->
@endsection
