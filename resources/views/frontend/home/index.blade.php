@extends('frontend.layouts.master')

@section('contents')
    {{-- BANNER PART START --}}

    @include('frontend.home.sections.banner-section')

    {{-- BANNER PART END --}}




    {{-- CATEGORY SLIDER START --}}

    @include('frontend.home.sections.category-slider-section')
    {{-- CATEGORY SLIDER END --}}




    {{-- FEATURES PART START --}}

    @include('frontend.home.sections.features-section')

    {{-- FEATURES PART END --}}




    {{-- COUNTER PART START --}}

    @include('frontend.home.sections.counter-section')

    {{-- COUNTER PART END --}}


    {{-- OUR FEATURE CATEGORY START --}}

    @include('frontend.home.sections.featured-category-section')

    {{-- OUR CATEGORY END --}}




    {{-- FEAUTURED LOCATION START --}}

    @include('frontend.home.sections.featured-location-section')

    {{-- FEATURED LOCATION END --}}




    {{-- FEATURED LISTING START --}}

    @include('frontend.home.sections.featured-listing-section')



    {{-- FEATURED LISTING END --}}




    {{-- OUR PACKAGE START --}}

    @include('frontend.home.sections.featured-package-section')

    {{-- OUR PACKAGE END --}}




    {{-- TESTIMONIAL PART START --}}

    @include('frontend.home.sections.testimonial-section')

    {{-- TESTIMONIAL PART END --}}




    {{-- BLOG PART START --}}

    @include('frontend.home.sections.blog-section')

    {{-- BLOG PART END --}}
@endsection
