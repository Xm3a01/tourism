@extends('dashboard.master')

@section('content')

    <td class="text-center">
        <a  href="{{route('bookings.create')}}" class="btn btn-round btn-primary">Add Booking</a>
    </td>

    <div class="card">
        <div class="card-header">
            <h4 class="card-title"> All Events</h4>
        </div>
        <div class="card-body custom-table">
            <div class="table">
                <table class="table">
                    <thead class=" text-primary">
                        <tr>
                            <th>name</th>
                            <th>phone</th>
                            <th>date</th>
                            <th>period</th>
                            <th>place</th>
                            <th>company</th>
                            <th>Action </th>
                          
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($bookings as $booking)
                        <tr>
                            <td>{{$booking->name}}</td>
                            <td>{{$booking->phone}}</td>
                            <td>{{$booking->date}}</td>
                            <td>{{$booking->period}}</td>
                            <td>{{$booking->place->name ?? ""}}</td>
                            <td>{{$booking->company->name ?? ""}}</td>
                            <td>
                                <form action="{{route('bookings.destroy' , $booking->id)}}" method="post">  
                                    @csrf
                                    @method('DELETE')
                                    <a  href="{{route('bookings.edit' , $booking->id)}}" class="btn btn-round btn-primary"><i
                                            class="nc-icon nc-settings"></i></a>
    
                                    <button   type="submit" class="btn btn-round btn-danger"><i
                                            class="nc-icon nc-simple-remove"></i></button>
                                </form>
                            </td>
                        </tr>
                            
                        @endforeach

                    </tbody>
                </table>
                {{$bookings->links()}}
            </div>
        </div>


    </div>


    </div>

@stop
