<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Список контактов</title>
</head>

<body>
    <h1>Контакты</h1>
    <a href="{{ route('contacts.create') }}">Добавить контакт</a>
    <ul>
        @foreach ($telephones as $telephone)
            <li>
                <a href="{{ route('contacts.show', $telephone->id) }}">{{ $telephone->surname }} {{ $telephone->first_name }} {{ $telephone->patronymic }}</a>
            </li>
        @endforeach
    </ul>
</body>

</html>