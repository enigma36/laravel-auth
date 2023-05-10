<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Catagory</title>
</head>
<body>

    <h1>Add Catagory</h1>

    <form method="POST" action=" {{ route('catagory.store') }} " >
        @csrf
        <Label for="catagory_name">Catagory Name</Label>
        <input type="text" name="catagory_name" placeholder="Enter Catagory Name">
        <input type="submit" value="Add Catagory">
    
</body>
</html>