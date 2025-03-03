<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="/groups/create">Добавить новую группу</a>
    <table>
        <thead>
            <th scope="col">id</th>
            <th scope="col">title</th>
            <th scope="col">start_from</th>
            <th scope="col">is_active</th>
        </thead>
        <tbody>
            @foreach($groups as $group)
                    <tr>
                        <td><a href="/groups/{{$group->id}}">{{$group->id}}</a></td>
                        <td>{{$group->title}}</td>
                        <td>{{$group->start_from}}</td>
                        <td>{{$group->is_active}}</td>
                    </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>