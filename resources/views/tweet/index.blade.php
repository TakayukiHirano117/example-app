<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}" >
    <script src="{{ mix('/js/app.js') }}"></script>
    <title>つぶやきアプリ</title>
</head>

<body>
    <x-layout title="TOP | つぶやきアプリ">
        <x-layout.single>
            <h2 class="text-center text-blue-500 text-4xl font-bold mt-8 mb-8">
                つぶやきアプリ
            </h2>
            <x-tweet.form.post></x-tweet.form.post>
            <x-tweet.list :tweets="$tweets"></x-tweet.list>
        </x-layout.single>
    </x-layout>
</body>

</html>
