@extends('layouts.app-dashboard')

@section('content')
    @if (session()->has('success'))
        <div class="my-5">
            @include('pengajuan.partials.success-message')
        </div>
    @endif

    <div class="my-5">
        @include('info-bantuan.tab-bantuan')
    </div>
@endsection
