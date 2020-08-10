@extends('layouts.app')

@section('content')
    <div class="container">
    	<div class="row">
            <div class="col-12">
                <div class="card" style="text-align: right">
                    <div class="card-header" style="background-color: #C81813;color:white">
                        إسثمارة التعديل على المعلومات الجمعية 
                    </div>
                    <div class="card-body">

                        <form action="{{ route('associations.update', ['association' => $association->id ]) }}" method="POST" enctype="multipart/form-data">
                           @csrf
                           @method('PUT')

                                <x-form-association :association="$association"></x-form-association>
                                
                                <button type="submit" class="btn btn-success btn-block my-3">التعديل</button>
                        </form>
                          
                    </div>
                  </div>
            </div>
        </div>
    </div>
@endsection