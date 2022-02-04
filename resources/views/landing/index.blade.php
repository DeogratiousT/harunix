@extends('layouts.app')

@section('hero')
    <!-- ======= Hero Section ======= -->
        @include('landing.sections.hero')
    <!-- End Hero Section -->
@endsection

@section('content')
    <!-- ======= Featured Services Section Section ======= -->
        @include('landing.sections.featured_services')
    <!-- End Featured Services Section -->

    <!-- ======= About Us Section ======= -->
        @include('landing.sections.about')
    <!-- End About Us Section -->
  
    <!-- ======= Services Section ======= -->
        @include('landing.sections.services')
    <!-- End Services Section -->

    <!-- ======= Contact Section ======= -->
        @include('landing.sections.contact')
    <!-- End Contact Section -->
@endsection