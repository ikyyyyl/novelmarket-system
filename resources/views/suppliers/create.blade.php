<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supplier</title>
</head>
<body>
    <h1>Create a Supplier</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif
    </div>
    <form method = "post" action = "{{route('supplier.store')}}">
        @csrf
        @method('post')
        <div>
            <label>Supplier Name: </label>
            <input type = "text" name = "sname" placeholder = "supplier name" />
        </div>
        <div>
            <label>Contact Number: </label>
            <input type = "text" name = "contactnum" placeholder = "contact number" />
        </div>
        <div>
            <label>Address: </label>
            <input type = "text" name = "address" placeholder = "address" />
        </div>
        <div>
            <label>Product ID: </label>
            <input type = "text" name = "prod_id" placeholder = "product ID"/>
        </div>
        <div>
            <input type = "submit" value = "Create a New Supplier" />
        </div>
    </form>
</body>
</html>