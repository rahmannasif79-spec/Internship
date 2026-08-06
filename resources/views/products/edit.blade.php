<!DOCTYPE html>
<html>
<head>
    <title>Edit Product</title>

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

<h2>Edit Product</h2>

<form action="{{ route('products.update', $product->id) }}" method="POST">

    @csrf
    @method('PUT')

    <label>Category</label><br>

    <select name="category_id">

        @foreach($categories as $category)

            <option value="{{ $category->id }}"
                {{ $product->category_id == $category->id ? 'selected' : '' }}>

                {{ $category->name }}

            </option>

        @endforeach

    </select>

    <br>

    <label>Product Name</label><br>

    <input
        type="text"
        name="name"
        value="{{ $product->name }}"
    >

    <br>

    <label>Price</label><br>

    <input
        type="number"
        step="0.01"
        name="price"
        value="{{ $product->price }}"
    >

    <br>

    <label>Description</label><br>

    <textarea name="description">{{ $product->description }}</textarea>

    <br>

    <button type="submit">
        Update Product
    </button>

</form>

</body>
</html>