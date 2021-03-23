@extends('dashboard.master')

@section('content')

    <div class="col-md-8">
        <div class="card card-user">
            <div class="card-header">
                <h5 class="card-title">Add Place</h5>
            </div>
            <div class="card-body">
                <form action="{{route('places.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 pr-1">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control" placeholder="Name" name="name" required>
                            </div>
                        </div>
                        <div class="col-md-6 pl-1">
                            <div class="form-group">
                                <label>Location</label>
                                <input type="text" class="form-control" placeholder="Address" name="location" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 pl-3">
                            <div class="form-group">
                                <label for="image"> <button type="submit" class="btn btn-primary ">Upload image</button></label>
                                <input type="file" class="form-control" placeholder="" name="image">

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        
                        <div class="col-md-12 pl-3">

                            <div class="form-group">
                                <label>Description</label>
                                <textarea class="form-control textarea" name="description" required></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="update ml-auto mr-auto">
                            <button type="submit" class="btn btn-primary btn-round">Add</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


@stop
