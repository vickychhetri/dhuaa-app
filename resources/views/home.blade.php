@extends('layout')
@section('title','Dhuaa.com | All kinds of Truck and vehicle repair')
@section('metaheadercontainer')

@endsection

@section('headercontainer')
@endsection
@section('container')
<x-Slider/>

 
    <!--Start Call To Action Area-->
    <x-Actionarea/>
    <!--End Call To Action Area-->

    <!--Start quality service area-->
    <x-Qualityservice/>
    <!--End quality service area-->

    <!--Start trusted service area-->
    <x-Trustedservice/>
    <!--End trusted service area-->

    <!--Start best service area-->
    <x-Bestservice/>
    <!--End best service area-->

    <!--Start wheel work area-->
    <x-Wheelworkarea/>
    <!--End wheel work area-->

@endsection