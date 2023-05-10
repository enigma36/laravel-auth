<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>
<body>

    <h1>Edit</h1>

    <form method="POST" action=" {{ route('product.update', $product->id) }} " >
        @csrf
        @method('PUT')
        <Label for="product_name">Product Name</Label>
        <input type="text" name="product_name" placeholder="Enter Product Name" value=" {{ $product->product_name }} ">
        <Label for="catagory_name">Catagory Name</Label>
        <select name="catagory_id">
            @foreach ($catagories as $catagory)
                <option value="{{ $catagory->id }}" {{ $catagory->id == $product->catagory_id ? 'selected' : '' }}>{{ $catagory->catagory_name }}</option>
            @endforeach
        <input type="submit" value="Update Product">
    </form>
    
</body>
</html>