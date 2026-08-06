<!DOCTYPE html>
<html>
<head>
    <title>Product List</title>

    <style>
        body{
            font-family: Arial, sans-serif;
            margin:40px;
        }

        table{
            width:100%;
            border-collapse: collapse;
            margin-top:20px;
        }

        table, th, td{
            border:1px solid black;
        }

        th, td{
            padding:10px;
            text-align:left;
        }

        a{
            text-decoration:none;
            padding:8px 12px;
            background:green;
            color:white;
            border-radius:4px;
            margin-right:5px;
        }

        .success{
            color:green;
            font-weight:bold;
            margin-top:15px;
        }
    </style>

</head>
<body>

<h2>Product List</h2>

@if(session('success'))
    <p class="success">
        {{ session('success') }}
    </p>
@endif

<br>

<a href="{{ route('products.create') }}">Add Product</a>

<table>

    <tr>
        <th>ID</th>
        <th>Category</th>
        <th>Product Name</th>
        <th>Price</th>
        <th>Description</th>
        <th>Action</th>
    </tr>

    @forelse($products as $product)

    <tr>

        <td>{{ $product->id }}</td>

        <td>{{ $product->category->name ?? 'No Category' }}</td>

        <td>{{ $product->name }}</td>

        <td>{{ $product->price }}</td>

        <td>{{ $product->description }}</td>

        <td>
            <a href="{{ route('products.edit', $product->id) }}">
                Edit
            </a>
        </td>

    </tr>

    @empty

    <tr>
        <td colspan="6" style="text-align:center;">
            No Products Found
        </td>
    </tr>

    @endforelse

</table>

</body>
</html>