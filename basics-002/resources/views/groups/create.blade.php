<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="/groups/">Назад</a>
    <form action="/groups" class="group-create" method="POST">
        @csrf
        <div class="field">
            <label for="group-title">Название группы</label>
            <input type="text" name="title" id="group-title">
        </div>
        <div class="field">
            <label for="group-start">Начало обучения</label>
            <input type="text" name="start_from" id="group-start">
        </div>
        <div class="field">
            <label for="group-active">Группа активна</label>
            <input type="checkbox" name='is_active' checked>
        </div>
        <div>
            <button class="add">Отправить</button>
            <button class="clear">Отчистить</button>
        </div>
    </form>
</body>
</html>