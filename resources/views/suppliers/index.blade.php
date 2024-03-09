<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suppliers</title>
</head>
<body>
    <h1>Suppliers</h1>
    <div>
        @if(session()->has('success'))
        <div>
            {{session('success')}}
        </div> 
        @endif
    </div>
    <div>
            <a href = "{{route('supplier.create')}}">Create a Supplier</a>
    </div>
    <div>
            <a href = "/dashboard">Dashboard</a>
    </div>
    <div>
        <table border = "2">
            <tr>
                <th>Supplier ID</th>
                <th>Supplier Name</th>
                <th>Contact</th>
                <th>Address</th>
                <th>Product ID</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            @foreach($suppliers as $supplier)
                <tr>
                    <td>{{$supplier->id}}</td>
                    <td>{{$supplier->sname}}</td>
                    <td>{{$supplier->contactnum}}</td>
                    <td>{{$supplier->address}}</td>
                    <td>{{$supplier->prod_id}}</td>
                    <td>
                        <a href = "{{route('supplier.edit', ['supplier' => $supplier])}}">Edit</a>
                    </td>
                    <td>
                        <form method="post" action="{{route('supplier.destroy', ['supplier' => $supplier])}}" >
                            @csrf
                            @method('delete')
                            <input type="submit" value = "Delete" />
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</body>
</html>