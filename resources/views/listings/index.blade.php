{{-- @extends('layout')
@section('content') --}}
<x-layout>
@include('partials._hero')  
@include('partials._search')  
<div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">

@unless (count($all_listings)==0)

@foreach($all_listings as $listing)
<x-listing-card :listing1="$listing"/>

@endforeach


@else
<p>no listings found</p>
@endunless
</div>
</x-layout>
