<!DOCTYPE html>
<html>

<head>

<title>Add Category</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>


<body class="bg-light">


<div class="container mt-5">


<h2 class="mb-4">
Add New Category
</h2>



@if ($errors->any())

<div class="alert alert-danger">

<ul>

@foreach ($errors->all() as $error)

<li>{{ $error }}</li>

@endforeach

</ul>

</div>

@endif



<form action="/categories" method="POST" class="card p-4">


@csrf


<label class="form-label">
Category Name
</label>


<input type="text"
name="name"
class="form-control mb-3">



<label class="form-label">
Description
</label>


<textarea name="description"
class="form-control mb-3"></textarea>



<button class="btn btn-success">

Save Category

</button>



</form>


</div>


</body>

</html>