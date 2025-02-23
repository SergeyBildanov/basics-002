<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="students/create/">Добавить студента</a>
    <table>
        <thead>
            <th scope="col">id</th>
            <th scope="col">title</th>
            <th scope="col">start_from</th>
            <th scope="col">is_active</th>
            <th scope="col">created_at</th>
            <th scope="col">updated_at</th>
        </thead>
        <tbody>
            <tr>
                <td>{{$group->id}}</td>
                <td>{{$group->title}}</td>
                <td>{{$group->start_from}}</td>
                <td>{{$group->is_active}}</td>
                <td>{{$group->created_at}}</td>
                <td>{{$group->updated_at}}</td>
            </tr>
        </tbody>
    </table>
    <h2>Студенты</h2>
    <table>
        <thead>
            <th scope="col">id</th>
            <th scope="col">surname</th>
            <th scope="col">name</th>
        </thead>
        <tbody>
            @foreach($students as $student)
                    <tr>
                        <td><a href="students/{{$student->id}}/">{{$student->id}}</a></td>
                        <td>{{$student->surname}}</td>
                        <td>{{$student->name}}</td>
                    </tr>
            @endforeach
        </tbody>
    </table>
    <a href="/groups/">Назад</a>
</body>
</html>