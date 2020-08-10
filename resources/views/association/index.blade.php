@extends('layouts.app')

@section('content')
    <div class="container">
        <x-flash-message></x-flash-message>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-lg-2">
                <a href="{{route('associations.create')}}" class="btn btn-primary" style="float: right"> <i class="fa fa-plus"></i> إضافة </a>
              </div>
          </div>

          <div class="row" style="text-align: right">
                @forelse($associations as $association)
                    <div class="col-md-4 my-3">
                        
                        <div class="card" style="width: 20rem;">
                            <img class="card-img-top" src="{{asset('storage/'.$association->الشعار) }}"/>
                            <div class="card-body">
                                <h5 class="card-title">{{ $association->الإسم }}</h5>
                                <p title="{{ $association->الوصف }}">{{ $association->الوصف }}</p>
                            </div>
                            <div class="card-footer text-muted">


                                @if(!$association->deleted_at)
                                    <form action="{{route('associations.destroy',['association' => $association->id])}}" method="POST" style="float: left;margin-right:5px">
                                        @method('DELETE')
                                        @csrf

                                        @can('delete', $association)
                                        <button type="submit" onclick="return confirm('تأكيد حدف هذه الجمعية ؟');" class="btn btn-success btn-sm" value="delete"><i class="fa fa-trash-o" style="font-size:18px;color:white;"> </i></button>
                                        @endcan

                                    </form>

                                    @can('update', $association)
                                    <a href="{{ route('associations.edit' , ['association' => $association->id])}}" class="btn btn-danger btn-sm"><i class="fa fa-edit" style="font-size:18px"></i></a>
                                    @endcan

                                        <a onclick="event.preventDefault();editTaskForm({{$association->id}});" href="" class="btn btn-dark btn-sm" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="fa fa-eye" style="font-size:18px"></i></a>
                                    @endif


                                @if($association->deleted_at)
                                <form action="{{route('associations.restore',['id' => $association->id])}}" method="POST" style="float: left;margin-right:5px">
                                    @csrf
                                    @method('PUT')
                                    <button type="submit" class="btn btn-success btn-sm" value="restore"><i class="fa fa-refresh" style="font-size:18px"></i></button>
                                </form>
                                @endif

                            </div>
                        </div>
                    </div>
                @empty
                <div class="col-md-12 my-5">
                    <div class="card-header" style="background-color: #C81813;color:white">
                      <i class="fa fa-info-circle" style="font-size:20px"></i>
                      لا توجد أي جمعية حاليا !!
                    </div>
                </div>
                @endforelse
        </div>
        <br>
        <div class="pagination justify-content-center">{{ $associations->links() }}</div>
    </div>
    @include('association.show')
@endsection
@section('script')
    <script>
      function editTaskForm(association_id) {
          $.ajax({
              type: 'GET',
              url: '/associations/' + association_id,
              dataType: "json",
              success: function(data) {
                  $("#تاريخ_التأسيس").html(data.association.تاريخ_التأسيس);
                  $("#الهاتف").html(data.association.الهاتف);
                  $("#العنوان").html(data.association.العنوان);
                  $("#البريد_الإلكتروني").html(data.association.البريد_الإلكتروني);
                  $("a.download").attr("href",data.association.القانون_الأساسي);
                  
                  $("#الرئيس").html(data.association.الرئيس);
                  $("#نائب_الرئيس").html(data.association.نائب_الرئيس);
                  $("#الكاتب_العام").html(data.association.الكاتب_العام);
                  $("#نائب_الكاتب_العام").html(data.association.نائب_الكاتب_العام);
                  $("#أمين_المال").html(data.association.أمين_المال);
                  $("#نائب_أمين_المال").html(data.association.نائب_أمين_المال);
                  $("#المستشار_الأول").html(data.association.المستشار_الأول);
                  $("#المستشار_الثاني").html(data.association.المستشار_الثاني);
                  $('#editTaskModal').modal('show');
              },
              error: function(data) {
                  console.log(data);
              }
          });
       }
    </script>
@endsection