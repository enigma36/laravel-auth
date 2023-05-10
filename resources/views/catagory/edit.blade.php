<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Catagory</title>
</head>
<body>

    <h1>Edit Catagory</h1>

    <form method="POST" action=" {{ route('catagory.update', $catagory->id) }} " >
        @csrf
        @method('PUT')
        <Label for="catagory_name">Catagory Name</Label>
        <input type="text" name="catagory_name" placeholder="Enter Catagory Name" value=" {{ $catagory->catagory_name }} ">
        <input type="submit" value="Update Catagory">
    
</body>
</html>