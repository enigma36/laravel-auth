<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Products</title>
</head>
<body>
    
        <h1>Add Products</h1>
    
        <form method="POST" action=" {{ route('product.store') }} " >
            @csrf
            <Label for="product_name">Product Name</Label>
            <input type="text" name="product_name" placeholder="Enter Product Name">
            <Label for="catagory_name">Catagory Name</Label>
            <select name="catagory_id">
                @foreach ($catagories as $catagory)
                    <option value="{{ $catagory->id }}"> {{$catagory->catagory_name}} </option>
                @endforeach
            <input type="submit" value="Add Product">
        </form>
</body>
</html>