<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Football Leagues</title>
    @vite('resources/css/app.css')
    <style>
        .pagination a, .pagination span {
            border-radius: 10px !important;
            padding: 2px 15px;
            margin: 1px 10px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container mx-auto py-5">
        <div class="mx-auto mb-5 text-center text-4xl font-bold text-sky-800">Football Leagues</div>
        {{ $slot }}
    </div>
</body>
</html>
