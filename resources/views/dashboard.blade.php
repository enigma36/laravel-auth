<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>DashBoard</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <h1>Welcome to Dashboard</h1>
    <table>
        <tr>
            <th>
                Name
            </th>
            <th>
                Email
            </th>
            <th>
                Action
            </th>
        </tr>
        <tr>
            <td>{{$data->name}}</td>
            <td>{{$data->email}}</td>
            <td><a href="logout">Logout</td>

        </tr>


    </table>
</body>

</html>