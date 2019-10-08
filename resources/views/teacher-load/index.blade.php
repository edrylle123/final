@extends('layouts.master')
@section('content')
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Advisory Section</th>
                    
                </tr>
            </thead>
            <tbody>
                @foreach($teacherloads as $teacherload)
                    <tr>
                        <td>{{ $teacherload->id }}</td>
                        <td>{{ $teacherload->name }}</td>
                        <td>{{ $teacherload->advisory_section }}</td>
                        <td> <a href = '/teachers/{{$teacherload->name}}/edit'>Edit</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a class="btn btn-primary" href='/teacherload/add'>Add a Teacher</a>
    </div>
@endsection