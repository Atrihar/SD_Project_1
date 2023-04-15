<!DOCTYPE html>
<html lang="en">

<head>
    @include('student.includes.head')
</head>

<body>

    <div class="container-scroller">
        @include('student.includes.nevbar')
        <div class="container-fluid page-body-wrapper">
            @include('student.includes.sidebar')
            <div class="main-panel">
                @yield('content')
                @include('student.includes.footer')
            </div>
        </div>
    </div>


    @include('student.includes.script')
</body>

</html>
