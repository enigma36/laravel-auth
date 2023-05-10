<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of Catagory</title>
</head>

<body>

    <h1>List of Catagory</h1>

    <a href=" {{ route('catagory.create') }} ">Add Catagory</a>

    <table>
        <tr>
            <th>Id</th>
            <th>Catagory Name</th>
            <th>Action</th>
        </tr>
        @foreach ($catagories as $catagory)
            <tr>
                <td>{{ $catagory->id }}</td>
                <td>{{ $catagory->catagory_name }}</td>
                <td>
                    <form action="{{ route('catagory.destroy', $catagory->id) }}" method="Post">
                        @csrf
                        <a href=" {{ route('catagory.show', $catagory->id) }} ">View</a>
                        <a href=" {{ route('catagory.edit', $catagory->id) }} ">Edit</a>
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>


</body>

</html>
