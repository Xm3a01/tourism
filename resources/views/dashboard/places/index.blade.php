@extends('dashboard.master')

@section('content')

    <td class="text-center">
        <a  href="{{route('places.create')}}" class="btn btn-round btn-primary">Add place</a>
    </td>

    <div class="card">
        <div class="card-header">
            <h4 class="card-title"> All Places</h4>
        </div>
        <div class="card-body custom-table">
            <div class="table">
                <table class="table">
                    <thead class=" text-primary">
                        <tr>
                            <th>Image</th>
                            <th>name</th>
                            <th>location</th>
                            <th>description</th>
                            <th>Action </th>
                          
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($places as $place)
                        <tr>
                            <td> <img src="{{ $place->image ? $place->image  : asset('assets/images/noImage.png') }}" alt="Image" height="45" width="45"></td>
                            <td>{{$place->name}}</td>
                            <td>{{$place->location}}</td>
                            <td>{{Str::limit($place->description , 80 , '')}}</td>
                            <td>
                                <form action="{{route('places.destroy' , $place->id)}}" method="post">  
                                    @csrf
                                    @method('DELETE')
                                    <a  href="{{route('places.edit' , $place->id)}}" class="btn btn-round btn-primary"><i
                                            class="nc-icon nc-settings"></i></a>
    
                                    <button   type="submit" class="btn btn-round btn-danger"><i
                                            class="nc-icon nc-simple-remove"></i></button>
                                </form>
                            </td>
                        </tr>
                            
                        @endforeach

                    </tbody>
                </table>
                {{$places->links()}}
            </div>
        </div>


    </div>


    </div>

@stop
