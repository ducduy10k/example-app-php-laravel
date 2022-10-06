@extends('layouts.layout1')
@section('content')

    
@include('partials.listing-header')
{{-- <h1>
    <?php echo $heading; ?>
</h1> --}}
{{-- <?php foreach ($listData as $data) : ?>
    <h2><?php echo $data['id']; ?></h2> 
    {{$heading}}
<?php endforeach; ?> --}}

@foreach ($listData as $data)
   <x-listing-card :data="$data"/>
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
