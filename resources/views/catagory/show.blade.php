<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catagory Details</title>
</head>
<body>

    <h1>Catagory Details</h1>

    <table >
        <tr>
            <th>Id</th>
            <th>Catagory Name</th>
        </tr>
        <tr>
            <td>{{ $catagory->id }}</td>
            <td>{{ $catagory->catagory_name }}</td>
        </tr>
    </table>

    
</body>
</html>