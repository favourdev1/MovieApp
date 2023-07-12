@extends('app')

@section('content')
    <div class="flex h-screen">
     
        @include('container.sidemenu')
        @include('container.main')
        @include('container.endside')
    </div>

@endsection
