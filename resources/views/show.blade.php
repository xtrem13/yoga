<?php

session(['check' => 'aaadx']);
?>

@extends('layouts.show')

@section('content')
<div class="logout-cont">
  <button onclick="logout()">exit</button>
</div>
<h1>Welcome 
  {{auth()->user()->name}}
</h1>

<form id="logout-form" action="{{ route('logout') }}" 
method="POST"
style="display: none;">
@csrf
<button>Logout</button>
</form>
<script>
  function logout() {
    document.getElementById("logout-form").submit();
  }

</script>
@foreach($others as $key=>$media)
<div class="row">
  <div class="col">
    <h2>{{$media->title}}</b></h2>
    <div class="tabs">
      <div class="tab">
        <input type="checkbox" id="ch{{$key}}">
        <label class="tab-label" for="ch{{$key}}">
          {{$media->description}}
        </label>
        <div class="tab-content">
          @if($media->type=='Audio')
          <audio controls style="width:60%;" preload="none">
            <source 
            src="{{route('file').'?path='.urlencode($media->path)}}" 
            type="audio/mpeg">
            Your browser does not support the audio element.
          </audio> 
          @else
          @if($media->type=='PDF')
          @include('custompdf', 
            [
              'path'=>route('file')."?path=".urlencode($media->path),
              'id'=>'a'.$media->id
            ]
            )
            @endif
            @endif
          </div>
        </div>
      </div>
    </div>
  </div>
  @endforeach
  @foreach($videos as $index=>$video)
  <div class="row">
    <div class="col">
      <h2>{{$video->title}}</b></h2>
      <div class="tabs">
        <div class="tab">
          <input type="checkbox" id="ch{{count($others)+$index}}">
          <label class="tab-label" for="ch{{count($others)+$index}}">
            {{$video->description}}
          </label>
          <div class="tab-content">
           <video style="max-width: 60%;" 
           controls
           src="{{route('file')."?path=".$video->path}}"
           id="asd"
           preload="none"
           >
         </video>

       </div>
     </div>
   </div>

 </div>
</div>

@endforeach


@endsection