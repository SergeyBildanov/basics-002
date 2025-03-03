<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="/groups/{{$student->group_id}}">Назад</a>
    <table>
        <thead>
            <th scope="col">id</th>
            <th scope="col">group_id</th>
            <th scope="col">surname</th>
            <th scope="col">name</th>
            <th scope="col">created_at</th>
            <th scope="col">updated_at</th>
        </thead>
        <tbody>
            <tr>
                <td>{{$student->id}}</td>
                <td>{{$student->group_id}}</td>
                <td>{{$student->surname}}</td>
                <td>{{$student->name}}</td>
                <td>{{$student->created_at}}</td>
                <td>{{$student->updated_at}}</td>
            </tr>
        </tbody>
    </table>
</body>
</html>