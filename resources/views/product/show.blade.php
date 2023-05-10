<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Product Detail</h1>
    <table>
        <tr>
            <th>Id</th>
            <th>Product Name</th>
            <th>Catagory Name</th>
        </tr>
        <tr>
            <td>{{ $product->id }}</td>
            <td>{{ $product->product_name }}</td>
            
           <!-- <td> {{ $product -> catagory -> catagory_name }} </td> -->
              <td> {{ $product -> catagory -> catagory_name }} </td>

              



        </tr>

</body>
</html>
