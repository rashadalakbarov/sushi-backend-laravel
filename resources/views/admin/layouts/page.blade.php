@extends('admin.layouts.mix')

@section('bodyClass', 'hold-transition sidebar-mini')

@section('content')
<!-- Site wrapper -->
<div class="wrapper">

    @include('admin.parts.navbar')

    @include('admin.parts.aside')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        @include('admin.parts.breadcrumb')

        <!-- Main content -->
        <section class="content">

            @yield('pageContent')

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <footer class="main-footer">
        <div class="float-right d-none d-sm-block">
        <b>Version</b> 3.2.0
        </div>
        <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
    </footer>

</div>
@endsection

@section('js')
<!-- AdminLTE for demo purposes -->
<script src="{{asset('admin/')}}/js/demo.js"></script>
@endsection