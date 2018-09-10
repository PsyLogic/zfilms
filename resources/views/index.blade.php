@extends('layouts.main')
@section('title','Home')
@section('content')

{{-- About Section --}}
@include('sections.about')
    
{{-- Service Section --}}
@include('sections.service')

{{-- Work Section --}}
@include('sections.portfolio')

{{-- Blog Section --}}
@include('sections.team')

{{-- Logo and Switch Section --}}
@include('sections.logo_switch')

{{-- Contact Section --}}
@include('sections.contact')

@endsection