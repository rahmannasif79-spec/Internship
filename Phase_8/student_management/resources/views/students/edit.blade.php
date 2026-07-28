<!DOCTYPE html>
<html>
<head>
    <title>Edit Student</title>
</head>
<body>

<h1>Edit Student</h1>

<form action="/students/{{ $student->id }}" method="POST">

    @csrf
    @method('PUT')

    <label>Name:</label>
    <input type="text" name="name" value="{{ $student->name }}">
    <br><br>

    <label>Email:</label>
    <input type="email" name="email" value="{{ $student->email }}">
    <br><br>

    <label>Phone:</label>
    <input type="text" name="phone" value="{{ $student->phone }}">
    <br><br>

    <label>Department:</label>
    <input type="text" name="department" value="{{ $student->department }}">
    <br><br>

    <label>Status:</label>
    <input type="text" name="status" value="{{ $student->status }}">
    <br><br>

    <button type="submit">Update Student</button>

</form>

</body>
</html>