@extends('layouts.master')
@section('content')

<style>
    .full_from{
        margin-top:150px;
    }
    .from_header{
        color:white;
        text-align: center;
        font-size: 100px;
        margin-bottom: 100px;
    }
    .from_bg{
        margin-top:80px;
        background-color: rgba(4, 3, 29,0.3);
        width: 450px;
        height: 410px;
        margin: auto;
        border-radius: 5%;
        }
        .crete_frome{
        padding-top:50px;
        padding-left:100px;
        }
        .crete_frome input{
        padding:20px;
        box-shadow: 2px 5px #888888 ;
        }
        .crete_frome button{
        margin-top:10px;
        margin-left:45px;
        padding:10px 5px;
        background-color:rgb(78, 151, 9);
        color: white;
        font-weight: bold;
        font-size: 20px;
        text-transform: uppercase;
        border:none;
        }
        .crete_frome button:hover{
        background-color: yellow;
        color:black;
        cursor: pointer;
        }

</style>
<div>
<a href=""></a>
</div>
<div class="list_buttone">
    <a href="" >Show list </a>
   </div>
    <div class="full_from">
        <div class="from_header">
            <span>Add New Student</span>
        </div>
        <div class="from_bg">
            <div class="crete_frome">
                <form action="/student/store" method="GET" enctype="multipart/form-data">
                    <input type="text" name="name" placeholder="Enter student Name">
                    <br>
                    <br>
                    <input type="text" name="class_roll" placeholder="Enter student Class Roll">
                    <br>
                    <br>
                    <input type="text" name="phone" placeholder="Enter student Phone Number">
                    <br>
                    <br>
                    <button type="submit" name="submit" value="add student">Insert Data</button>
                </form>

            </div>
        </div>
    </div>


@endsection
