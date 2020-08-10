@extends('layouts.app')

@section('content')

<div class="container">
    <row class="col-md-8">
        <center class="my-5">
            
            <h2 style="color:red">ليس لديك صلاحيات الدخول لهذه الصفحة</h2>
            
            <i class="fa fa-hand-stop-o my-3" style="font-size:150px;color:red"></i>
            <br>
            <a href="{{ route('associations.index') }}" class="btn" style="background-color: #FF0000;color:white">الرجوع</a>

        </center>
    </row>
</div>
    
@endsection