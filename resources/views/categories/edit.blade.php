<!DOCTYPE html>
<html>

<head>

<title>Edit Category</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>


<body class="bg-light">


<div class="container mt-5">


<h2 class="mb-4">
Edit Category
</h2>



<form action="/categories/{{ $category->id }}"
method="POST"
class="card p-4">


@csrf

@method('PUT')



<label class="form-label">
Category Name
</label>


<input type="text"
name="name"
value="{{ $category->name }}"
class="form-control mb-3">



<label class="form-label">
Description
</label>


<textarea name="description"
class="form-control mb-3">{{ $category->description }}</textarea>



<button class="btn btn-primary">

Update Category

</button>



</form>


</div>


</body>

</html>