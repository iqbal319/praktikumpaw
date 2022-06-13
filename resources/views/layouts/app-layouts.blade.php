<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css'>
    <link rel="stylesheet" href="/css/style.css">
    <title>{{ $title }}</title>
</head>
<body>

    <section class="content">
        <div class="container">
            <h1>{{ $title }}</h1>

            {{ $content }}
        </div>
    </section>

    <x-footer></x-footer>

</body>
</html>