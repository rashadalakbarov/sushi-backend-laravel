@extends('admin.layouts.mix')

@section('css')
<!-- icheck bootstrap -->
<link rel="stylesheet" href="{{asset('admin/')}}/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
@endsection

@section('bodyClass', 'hold-transition login-page')

@section('content')
<div class="login-box">
    <div class="login-logo">
        <a href="{{route('admin.index')}}"><b>Admin Panel</b></a>
    </div>
    @yield('authContent')
</div>
<!-- /.login-box -->
@endsection