<!DOCTYPE html>
<html>
<head>
    <title>Add Product</title>

    <style>
        body{
            font-family: Arial, sans-serif;
            margin:40px;
        }

        input, select, textarea{
            width:300px;
            padding:8px;
            margin-bottom:10px;
        }

        button{
            padding:10px 20px;
        }
    </style>
</head>
<body>

<h2>Add Product</h2>

<form action="{{ route('products.store') }}" method="POST">

    @csrf

    <label>Category</label><br>

    <select name="category_id">

        @foreach($categories as $category)

            <option value="{{ $category->id }}">
                {{ $category->name }}
            </option>

        @endforeach

    </select>

    <br>

    <label>Product Name</label><br>

    <input type="text" name="name">

    <br>

    <label>Price</label><br>

    <input type="number" step="0.01" name="price">

    <br>

    <label>Description</label><br>

    <textarea name="description"></textarea>

    <br>

    <button type="submit">Save Product</button>

</form>

</body>
</html>