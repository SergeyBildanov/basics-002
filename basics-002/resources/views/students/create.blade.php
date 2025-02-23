<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="../students" class="group-create" method="POST">
        @csrf
        <div class="field">
            <label for="surname">Фамилия студента</label>
            <input type="text" name="surname" id="surname">
        </div>
        <div class="field">
            <label for="name">Имя студента</label>
            <input type="text" name="name" id="name">
        </div>
        <div>
            <button class="add">Отправить</button>
            <button class="clear">Отчистить</button>
        </div>
    </form>
</body>
</html>