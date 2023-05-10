<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
</head>

<body>

    <h1>List of products</h1>

    <a href="{{route('product.create')}}">Add Product</a>

    <table>

        <tr>
            <th>
                ID
            </th>
            <th>
                Product Name
            </th>
            <th>
                Catagory
            </th>
            <th>
                Action
            </th>

            @foreach($products as $product)
        <tr>
            <td>
                {{$product->id}}
            </td>
            <td>
                {{$product->product_name}}
            </td>
            <td>
                {{$product->catagory->catagory_name}}
            </td>

            <td>
                <form action="{{route('product.destroy',$product->id)}}" method="POST">
                    @csrf
                    <a href="{{route('product.show',$product->id)}}">View</a>
                    <a href="{{route('product.edit',$product->id)}}">Edit</a>
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </td>

        </tr>
        @endforeach
    </table>



</body>

</html>