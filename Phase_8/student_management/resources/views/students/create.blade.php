<!DOCTYPE html>
<html>
<head>
    <title>Create Student</title>
</head>
<body>

    <h1>Add Student</h1>

    <form action="/students" method="POST">

        @csrf

        <label>Name:</label>
        <input type="text" name="name">
        <br><br>

        <label>Email:</label>
        <input type="email" name="email">
        <br><br>

        <label>Phone:</label>
        <input type="text" name="phone">
        <br><br>

        <label>Department:</label>
        <input type="text" name="department">
        <br><br>

        <label>Status:</label>
        <input type="text" name="status">
        <br><br>

        <button type="submit">Save Student</button>

    </form>

</body>
</html>