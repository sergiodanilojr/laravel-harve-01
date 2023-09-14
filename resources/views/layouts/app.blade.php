<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Meu Blog' }}</title>
    <style>
        form{
            padding: 8px ;
            border: 1px solid #888;
            border-radius: 8px;
            box-shadow: 1px 1px 8px rgba(0,0,0,.03);
            max-width:500px;
            margin:0 auto;
        }
    </style>
</head>
<body class="application">
    @yield('content')
</body>
</html>