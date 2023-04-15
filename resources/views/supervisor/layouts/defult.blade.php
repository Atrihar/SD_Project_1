<!DOCTYPE html>
<html lang="en">

<head>
@include('supervisor.includes.head')
</head>

<body>
    
    <div class="container-scroller">
        @include('supervisor.includes.nevbar')
        <div class="container-fluid page-body-wrapper">
            @include('supervisor.includes.sidebar')
            <div class="main-panel">
            @yield('content')  
            @include('supervisor.includes.footer')
            </div>
        </div>
    </div>

   
    @include('supervisor.includes.script')
</body>

</html>