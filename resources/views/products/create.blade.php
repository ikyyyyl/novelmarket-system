<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
</head>
<body>
    <h1>Create a Product</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif
    </div>
    <form method = "post" action = "{{route('product.store')}}">
        @csrf
        @method('post')
        <div>
            <label>Title: </label>
            <input type = "text" name = "title" placeholder = "title" />
        </div>
        <div>
            <label>Author: </label>
            <input type = "text" name = "author" placeholder = "author" />
        </div>
        <div>
            <label>Genre: </label>
            <input type = "text" name = "genre" placeholder = "genre" />
        </div>
        <div>
            <label>Description: </label>
            <input type = "text" name = "desc" placeholder = "description" />
        </div>
        <div>
            <label>Price: </label>
            <input type = "text" name = "price" placeholder = "price" />
        </div>
        <div>
            <label>Quantity: </label>
            <input type = "text" name = "quantity" placeholder = "quantity" />
        </div>
        <div>
            <input type = "submit" value = "Save a New Product" />
        </div>
    </form>
</body>
</html>