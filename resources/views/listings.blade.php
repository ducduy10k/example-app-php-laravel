@extends('layout')
@section('content')
    
<h1>
    <?php echo $heading; ?>

</h1>

<?php foreach ($listData as $data) : ?>
    {{-- <h2><?php echo $data['id']; ?></h2> --}}
    {{$heading}}
<?php endforeach; ?>

@foreach ($listData as $data)
    <h2><?php echo $data['description']; ?></h2>
    {{$heading}}
@endforeach

@php
 $test = 1;
@endphp
{{$test}}

@if (count($listData) == 0)
<p>No listungs found</p>
@endif
{{-- 
@unless (count($listData) == 0)
@foreach ($listData as $data)
    <h2><?php echo $data['id']; ?></h2>
    {{$heading}}
@endforeach
@else
<p>No listungs found</p>
@endunless
     --}}


     @endsection
