<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supplier</title>
</head>
<body>
    <h1>Edit a Supplier</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif
    </div>
    <form method = "post" action = "{{route('supplier.update', ['supplier' => $supplier])}}">
        @csrf
        @method('put')
        <div>
            <label>Supplier Name: </label>
            <input type = "text" name = "sname" placeholder = "Supplier Name" value = "{{$supplier->sname}}"/>
        </div>
        <div>
            <label>Contact Number: </label>
            <input type = "text" name = "contactnum" placeholder = "Contact Number" value = "{{$supplier->contactnum}}"/>
        </div>
        <div>
            <label>Address: </label>
            <input type = "text" name = "address" placeholder = "Address" value = "{{$supplier->address}}"/>
        </div>
        <div>
            <label>Product ID: </label>
            <input type = "text" name = "prod_id" placeholder = "Product ID" value = "{{$supplier->prod_id}}"/>
        </div>
        <div>
            <input type = "submit" value = "Save a New Supplier" />
        </div>
    </form>
</body>
</html>