<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Product</h1>
    <div>
        @if(session()->has('success'))
        <div>
            {{session('success')}}
        </div> 
        @endif
    </div>
    <div>
        <div>
            <a href = "{{route('product.create')}}">Create a Product</a>
        </div>
        <div>
            <a href = "/dashboard">Dashboard</a>
    </div>
        <table border = "2">
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Author</th>
                <th>Genre</th>
                <th>Description</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            @foreach($products as $product)
                <tr>
                    <td>{{$product->id}}</td>
                    <td>{{$product->title}}</td>
                    <td>{{$product->author}}</td>
                    <td>{{$product->genre}}</td>
                    <td>{{$product->desc}}</td>
                    <td>{{$product->price}}</td>
                    <td>{{$product->quantity}}</td>
                    <td>
                        <a href = "{{route('product.edit', ['product' => $product])}}">Edit</a>
                    </td>
                    <td>
                        <form method="post" action="{{route('product.destroy', ['product' => $product])}}" >
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