@extends('dashboard.master')

@section('content')

    <td class="text-center">
        <a href="{{ route('companies.create') }}" class="btn btn-round btn-primary">Add company</a>
    </td>
    <div class="card">
        <div class="card-header">
            <h4 class="card-title"> All companies</h4>
        </div>
        <div class="card-body custom-table">
            <div class="table">
                <table class="table">
                    <thead class=" text-primary">
                        <tr>
                            <th>Image</th>
                            <th>name</th>
                            <th>location</th>
                            <th>ceo</th>
                            <th>phone</th>
                            <th>email</th>
                            <th>description</th>
                            <th>actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($companies as $company)

                            <tr>
                                <td> <img src="{{ $company->image ? $company->image  : asset('assets/images/noImage.png') }}" alt="Image" height="45" width="45"></td>
                                <td>{{ $company->name }}</td>
                                <td>{{ $company->location }}</td>
                                <td>{{ $company->ceo }}</td>
                                <td>{{ $company->phone }}</td>
                                <td>{{ $company->email }}</td>
                                <td>{{ Str::limit($company->description, 40) }}</td>

                               
                                <td>
                                    <form action="{{ route('companies.destroy', $company->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')

                                        <a title="Edit" href="{{ route('companies.edit', $company->id) }}"
                                            class="btn btn-round btn-primary"><i class="nc-icon nc-settings"></i></a>
                                        <button title="Delete" type="submit" class="btn btn-round btn-danger"><i
                                                class="nc-icon nc-simple-remove"></i></button>
                                    </form>

                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
                {{ $companies->links() }}
            </div>
        </div>


    </div>

@stop
