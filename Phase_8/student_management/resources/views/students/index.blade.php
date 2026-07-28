<!DOCTYPE html>
<html>
<head>
    <title>Student List</title>
</head>
<body>

<h1>Student List</h1>

@if(session('success'))
    <p>
        {{ session('success') }}
    </p>
@endif

<a href="/students/create">Add Student</a>

<br><br>

<form action="/students/search" method="GET">

    <input
        type="text"
        name="search"
        placeholder="Search by Name">

    <button type="submit">
        Search
    </button>

</form>

<br><br>

<table border="1">

    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Department</th>
        <th>Status</th>
        <th>Action</th>
    </tr>

    @foreach($students as $student)

    <tr>

        <td>{{ $student->name }}</td>
        <td>{{ $student->email }}</td>
        <td>{{ $student->phone }}</td>
        <td>{{ $student->department }}</td>
        <td>{{ $student->status }}</td>

        <td>

            <a href="/students/{{ $student->id }}/edit">
                Edit
            </a>

            <form action="/students/{{ $student->id }}" method="POST" style="display:inline;">

                @csrf
                @method('DELETE')

                <button type="submit">
                    Delete
                </button>

            </form>

        </td>

    </tr>

    @endforeach

</table>

<br><br>

{{ $students->links() }}

</body>
</html>