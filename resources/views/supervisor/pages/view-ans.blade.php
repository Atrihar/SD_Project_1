<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {{-- {{$data->id}} --}}
    {{-- <iframe src="/asset/{{$data->ans}}" frameborder="0"></iframe> --}}
    <iframe src="{{ asset('asset/'.$data[0]->ans) }}"frameborder="0"></iframe>
    {{-- <p><a target="_blank" href="{{ asset('asset/'.$assignment_detailes[0]->attachment) }}">File</a></p> --}}
</body>
</html>
