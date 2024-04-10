@extends('layouts.app')

@section('content')
    <div class="">
        @include('layouts.landing.hero')
    </div>
    <div class="sm:-mt-4">
        @include('layouts.landing.bantuan')
    </div>
    <div class="">
        @include('layouts.landing.alasan')
    </div>
    <div class="">
        @include('layouts.landing.card-kelas')
    </div>
@endsection
