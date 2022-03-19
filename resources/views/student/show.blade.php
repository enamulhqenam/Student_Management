@extends('layouts.master')
@section('content')
<style>
    h1{
        padding-top: 150px;
        text-align: center;
    }
    .table{
        margin-left:650px;

    }
    .table tr th{
        background-color: green;
        color:rgb(0, 0, 0);
    }
</style>
<h1 aling="center">Student Deatils</h1>
<div class="col-md-4 col-md-offset-4 ">
    <table class="table tale-responsive table-bordered table-stripped">
        <thead>
            <tr>
                <tr>
                    <th>Attribute</th>
                    <th>value</th>
                </tr>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Name</td>
                <td>{{$Studnets->name}}</td>
            </tr>
            <tr>
                <td>Class Roll</td>
                <td>{{$Studnets->class_roll}}</td>
            </tr>
            <tr>
                <td>Phone</td>
                <td>{{$Studnets->phone}}</td>
            </tr>
        </tbody>
    </table>
    <a  href="/student/list" class="btn btn-success"> Back list</a>
</div>
@endsection
