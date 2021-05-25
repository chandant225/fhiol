<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ siteName() }}</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">
    <link rel="icon" href="{{ faviconUrl() }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('adminlte/fontawesome-free/css/all.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('adminlte/css/adminlte.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/summernote/summernote-bs4.min.css') }}">
    <link href="{{ asset('assets/dropzone/dist/dropzone.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/common.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/backend.css') }}">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script>
    @livewireStyles
    @stack('styles')
    <style>
        body {
            font-family: 'Nunito Sans', sans-serif;
        }
    </style>
</head>
<body class="hold-transition sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
        @include('layouts.backend.navbar')

        @include('layouts.backend.sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <section class="content">
                @yield('content')
            </section>
        </div>
        <!-- /.content-wrapper -->

        <footer class="main-footer text-sm">
            <div class="float-right d-none d-sm-block">
                <span>Version</span> 1.0.0
            </div>
            <span>Copyright &copy; {{ date('Y') }} <a href="{{ url('/') }}">{{ siteName() }}</a>.</span> All rights reserved.
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="{{ asset('adminlte/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('adminlte/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('adminlte/js/adminlte.min.js') }}"></script>
    <!-- AdminLTE for demo purposes -->
    {{-- <script src="{{ asset('adminlte/js/demo.js') }}"></script> --}}
    <script src="{{ asset('assets/summernote/summernote-bs4.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/dropzone/dist/dropzone.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    @livewireScripts
    <x-livewire-alert::scripts />
    @stack('scripts')
</body>
</html>
