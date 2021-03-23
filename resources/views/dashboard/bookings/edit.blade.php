@extends('dashboard.master')
@section('content')
    <div class="col-md-8">
        <div class="card card-user">
            <div class="card-header">
                <h5 class="card-title">Edit Booking</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('bookings.update' , $booking->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control" placeholder="Name" name="name" required value="{{$booking->name}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>period</label>
                                <input type="text" class="form-control" placeholder="" name="period" required value="{{$booking->period}}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 pr-1">
                            <div class="form-group">
                                <label>Phone</label>
                                <input type="text" class="form-control" placeholder="" name="phone" required value="{{$booking->phone}}">
                            </div>
                        </div>

                        <div class="col-md-6 pl-1">
                            <div class="form-group">
                                <label>date</label>
                                <input type="date" class="form-control" placeholder="" name="date" required value="{{$booking->date}}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 pr-1">
                            <div class="form-group">
                                <label>company</label>
                                <select name="company_id" id="" class="form-control">
                                    <option value="1">Company</option>
                                   @foreach ($companies as $company)        
                                      <option {{$booking->company_id == $company->id ? 'selected' : ''}} value="{{$company->id}}">{{$company->name}}</option>
                                   @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 pl-1">
                            <div class="form-group">
                                <label>place</label>
                               <select name="place_id" id="" class="form-control">
                                   <option value="1">Places</option>
                                   @foreach ($places as $place)        
                                      <option {{$booking->place_id == $place->id ? 'selected' : ''}} value="{{$place->id}}">{{$place->name}}</option>
                                   @endforeach
                               </select>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="update ml-auto mr-auto">
                            <button type="submit" class="btn btn-primary btn-round">Save change</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop
