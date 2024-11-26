@extends('app')

@section('content')
<!-- Home slider html start -->
<x-home-slider />
<!-- slider html start -->
<!-- Home search field html start -->
<x-search-package />
<!-- Home packages section html start -->
<x-packages :packages="$packages" />
<!-- packages html end -->
<!-- Home contact details section html start -->
<x-contact />
<!--  contact details html end -->
@overwrite
