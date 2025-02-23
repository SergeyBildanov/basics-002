<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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
            @foreach($students as $student)
                    <tr>
                    <td><a href="/groups/{{$group->id}}/">{{$student->id}}</a></td>
                        <td>{{$student->group_id}}</td>
                        <td>{{$student->surname}}</td>
                        <td>{{$student->name}}</td>
                        <td>{{$student->created_at}}</td>
                        <td>{{$student->updated_at}}</td>
                    </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>