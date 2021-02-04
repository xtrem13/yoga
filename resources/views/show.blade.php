<?php

   session(['check' => 'aaadx']);
?>
@extends('layouts.show')

@section('content')
<h1>Welcome {{session('check')}}</h1>
@foreach($others as $key=>$media)
<div class="row">
  <div class="col">
    <h2>{{$media->title}}</b></h2>
    <div class="tabs">
      <div class="tab">
        <input type="checkbox" id="chck1">
        <label class="tab-label" for="chck1">Урок {{$key+1}}</label>
        <div class="tab-content">
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsum, reiciendis!
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
        <input type="checkbox" id="chck12">
        <label class="tab-label" for="chck12">Урок {{count($others)+$index+1}}</label>
        <div class="tab-content">
           <video style="max-width: 60%;" 
                  controls
                  src="{{route('file')."?path=".$video->path}}"
                  id="asd"
           >
           </video>

        </div>
      </div>
    </div>

  </div>
</div>

@endforeach
<script>
  const video = document.getElementById('asd');

video.addEventListener('seeked', (event) => {
  fetch("/ref")
  .then(resp=>console.log(resp))
  .catch(e=>console.log(e));
});
</script>
@endsection