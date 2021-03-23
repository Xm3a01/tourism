@extends('dashboard.master')
@section('content')
    <div class="col-md-8">
        <div class="card card-user">
            <div class="card-header">
                <h5 class="card-title">Add Comapny</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('companies.update' , $company->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control" placeholder="Name" name="name" value="{{$company->name}}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 pr-1">
                            <div class="form-group">
                                <label>Location</label>
                                <input type="text" class="form-control" placeholder="" name="location" value="{{$company->location}}">
                            </div>
                        </div>

                        <div class="col-md-6 pl-1">
                            <div class="form-group">
                                <label>Phone</label>
                                <input type="text" class="form-control" placeholder="" name="phone" value="{{$company->phone}}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 pr-1">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" placeholder="" name="email" value="{{$company->email}}">
                            </div>
                        </div>
                        <div class="col-md-6 pl-1">
                            <div class="form-group">
                                <label>CEO</label>
                                <input type="text" class="form-control" placeholder="" name="ceo" value="{{$company->ceo}}">

                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="image"> Course image <a href="">attcah image</a> </label>
                                <input type="file" class="form-control-file" placeholder="" name="image" id="image">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Description</label>
                                <textarea class="form-control textarea" name="description">{{$company->description}}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="update ml-auto mr-auto">
                            <button type="submit" class="btn btn-primary btn-round">Save Change</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop
