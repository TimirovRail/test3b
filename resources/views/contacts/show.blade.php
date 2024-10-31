<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <h1>{{ $telephone->surname }} {{ $telephone->first_name }}</h1>
    <h3>Телефоны</h3>
    <form action="{{ route('contacts.store', $telephone->id) }}" method="POST">
        @csrf
        <input type="text" name="number" placeholder="Номер телефона" required>
        <button type="submit">Добавить номер</button>
    </form>

    <a href="{{ route('contacts.index') }}">Назад к контактам</a>

</body>

</html>