@extends('layouts.master')
@section('content')
    <title>stundent</title>
    <style>
        .from_head{
            padding-top: 150px;
            text-align: center;
            font-size: 50px;
        }
        .crete_frome{
            padding-top:50px;
            padding-left:700px;
        }
        .crete_frome input{
            padding:15px;
        }
        .all_result{
            margin-left:700px;
        }
        .header{
        margin-top:100px;
        font-size: 50px;
        }
        .result{
            margin-top:50px;
            border:2px solid yellow;
        }
        .result tr th{
            padding-right: 50px;
            text-align: center;
        }
        .result tr td{
            padding-right: 50px;
            text-align: center;
        }
    </style>
</head>
<body>
   <div class="list_buttone">
    <a href="/student/list" >Show list </a>
   </div>
    <div class="from_head">
        <span>Search Stundet Informetion </span>
    </div>
    <div class="from_bg">
        <div class="crete_frome">
            <form action="/student/applySearch" method="GET" enctype="multipart/form-data">

                <input type="text" name="class_roll" placeholder="Enter student Class ROll">

                <button type="submit" name="submit" value="search" class="btn btn-default btn-round btn-just-icon">
                    <i class="material-icons">search</i>
                </button>
            </form>
        </div>
    </div>
    <div class="all_result">
        <div class="header">
            <span>Search result </span>
        </div>
        <div class="col-md-4 col-md-offset-4">
            <table class="result table tale-responsive table-bordered table-stripped">
                <thade>
                    <tr>
                        <th>Attribute</th>
                        <th>Value</th>
                    </tr>
                </thade>
                <tbody>
                    @if (isset($student))
                    <tr>
                        <td>Name</td>
                        <td>{{$student[0]->name}}</td>
                    </tr>
                    <tr>
                        <td>Class_Roll</td>
                        <td>{{$student[0]->class_roll}}</td>
                    </tr>
                    <tr>
                        <td>Phone</td>
                        <td>{{$student[0]->phone}}</td>
                    </tr>
                    @endif
                </tbody>
            </table>
        </div>

    </div>

@endsection
