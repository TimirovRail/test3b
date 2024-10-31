<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Добавить контакта</title>
</head>

<body>
    <h1>Добавить новый контакт</h1>
    <form action="{{ route('contacts.store') }}" method="POST">
        @csrf
        <input type="text" name="surname" placeholder="Фамилия" required>
        <input type="text" name="first_name" placeholder="Имя" required>
        <input type="text" name="patronymic" placeholder="Отчество">
        <button type="submit">Добавить контакт</button>
    </form>
</body>

</html>