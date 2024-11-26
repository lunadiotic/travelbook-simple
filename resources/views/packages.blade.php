@extends('app')

@section('content')
<x-banner :title="'Packages'" />
<x-packages :packages="$packages" />
@overwrite