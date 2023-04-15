<!DOCTYPE html>
<html lang="en">

<head>
    @include('student.includes.head')
</head>

<body>

    @yield('content')



    <script src="{{ asset('admin/asset/vendors/js/vendor.bundle.base.js') }}"></script>
    <script src="{{ asset('admin/asset/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('admin/asset/js/off-canvas.js') }}"></script>
    <script src="{{ asset('admin/asset/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('admin/asset/js/template.js') }}"></script>
    <script src="{{ asset('admin/asset/js/settings.js') }}"></script>
    <script src="{{ asset('admin/asset/js/todolist.js') }}"></script>
</body>

</html>
