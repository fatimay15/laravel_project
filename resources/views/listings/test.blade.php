{{-- @extends('layout')
@section('content') --}}
<x-layout>
    @include('partials._hero')  
    @include('partials._search')  
    <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">
    
      {{-- <h1>{{$single_listing->title}}</h1>or --}}
      <x-listing-card :listing1="$single_listing"/>

    </div>
    </x-layout>
    