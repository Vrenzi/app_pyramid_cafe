@extends('layouts.main')

@section('container')

@can('manager')
    @section('container')
        @include('dashboard.manager')
    @endsection
@endcan

@can('admin')
    @section('container')
        @include('dashboard.admin')
    @endsection
@endcan

@can('cashier')
    @section('container')
        @include('dashboard.cashier')
    @endsection
@endcan

@can('chef')
    @section('container')
        @include('dashboard.chef')
    @endsection
@endcan

@endsection