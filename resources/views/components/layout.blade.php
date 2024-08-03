<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{env('APP_NAME')}}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    {{-- vite can help so that you cannot reload the page --}}
</head>
<body class="bg-slate-900 text-slate-100">

    <main class="">
        {{$slot}}
    </main>

</body>
</html>