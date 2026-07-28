<!DOCTYPE html>
<html>
<head>
    <title>Category List</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="bg-light">


<div class="container mt-5">


    <div class="d-flex justify-content-between mb-3">

        <h2>Category List</h2>

        <a href="/categories/create" class="btn btn-primary">
            Add Category
        </a>

    </div>


    @if(session('success'))

    <div class="alert alert-success">
        {{ session('success') }}
    </div>

    @endif



    <table class="table table-bordered table-striped">


        <tr class="table-dark">

            <th>ID</th>
            <th>Name</th>
            <th>Description</th>
            <th>Action</th>

        </tr>


        @foreach($categories as $category)

        <tr>

            <td>{{ $category->id }}</td>

            <td>{{ $category->name }}</td>

            <td>{{ $category->description }}</td>


            <td>


                <a href="/categories/{{ $category->id }}/edit"
                   class="btn btn-warning btn-sm">

                    Edit

                </a>



                <form action="/categories/{{ $category->id }}"
                      method="POST"
                      class="d-inline">


                    @csrf
                    @method('DELETE')


                    <button class="btn btn-danger btn-sm">

                        Delete

                    </button>


                </form>


            </td>


        </tr>


        @endforeach


    </table>


</div>


</body>
</html>