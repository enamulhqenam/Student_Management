@extends('layouts.master')
@section('content')
<style>
    .table_list{
        margin-top:150px;
        margin-left:400px;

    }
</style>
<div>
    <a href="">show</a>
</div>
<div class="table_list">
    <a href="/student/search" class="btn btn-info">Search Student</a>
    <table class="table table-responsive table-bordered table-stripped pt-3 p-5" >
        <thead>
            <tr>
                <th>id</th>
                <th>Name</th>
                <th>Class_Roll</th>
                <th>Phone </th>
                <th>Created At</th>
                <th>Update At</th>
                <th>Action</th>
            </tr>
        </thead>
        <tboay >
            @foreach ($Studnets as $student )
                <tr>
                    <td>{{$student->id}}</td>
                    <td>{{$student->name}}</td>
                    <td>{{$student->class_roll}}</td>
                    <td>{{$student->phone}}</td>
                    <td>{{$student->created_at}}</td>
                    <td>{{$student->updated_at}}</td>
                    <td>
                        <a href="/student/show/{{$student->id}}" class="btn btn-primary">View Deteles</a>
                        <a href="/student/edit/{{$student->id}}" class="btn btn-warning">Edit</a>
                        <a href="/student/destroy/{{$student->id}}" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tboay>
    </table>
</div>


@endsection
