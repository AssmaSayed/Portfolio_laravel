@extends('template.main')
@section('content')

<div class="wrap">
    @include('partials.about')
    @include('partials.endFutur')
    @include('partials.cta')
    @include('partials.service')
    @include('partials.portfolio')
    {{-- @include('partials.team') --}}
    {{-- @include('partials.pricing') --}}
    @include('partials.faq')
    {{-- @include('partials.contact') --}}

</div>

    
@endsection