@extends('layouts.app')

@section('content')
  <transition name="slide-fade" mode="out-in">
    <router-view :key="$route.fullPath"></router-view>
  </trasition>
@endsection
