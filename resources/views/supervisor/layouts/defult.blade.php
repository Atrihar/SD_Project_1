<!DOCTYPE html>
<html lang="en">

<head>
@include('admin.includes.head')
</head>

<body>

    <div class="container-scroller">
        @include('admin.includes.nevbar')
        <div class="container-fluid page-body-wrapper">
            @include('supervisor.includes.sidebar')
            <div class="main-panel">
            @yield('content')
            @include('admin.includes.footer')
            </div>
        </div>
    </div>


    @include('admin.includes.script')
</body>

</html>
