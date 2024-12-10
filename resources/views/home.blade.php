@extends('layouts.app')

@section('content')
    <x-home-slider />
    <x-search-package />
    <x-home-packages :packages="$packages" />
    <x-contact />
@endsection
