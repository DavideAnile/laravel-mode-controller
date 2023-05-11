@extends('layouts/main')

@section('content')
<div class="row m-5">

    
        
   @foreach ($movies as $singleMovie)
       
   <div class="card p-3 m-3" style="width: 18rem;">
       <div class="card-body">
         <h5 class="card-title">{{$singleMovie->title}}</h5>
         <h6 class="card-subtitle mb-2 text-muted">{{$singleMovie->original_title}}</h6>
         <ul class="list-group list-group-flush">
            <li class="list-group-item">NATION : {{$singleMovie->nationality}}</li>
            <li class="list-group-item">DATA : {{$singleMovie->date}}</li>
            <li class="list-group-item">VOTE : {{$singleMovie->vote}}</li>
          </ul>
       </div>
     </div>
   @endforeach

</div>
@endsection