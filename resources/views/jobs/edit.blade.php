<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create New Job</title>
</head>
<body>
    <h1>Create New Job</h1>
    <form action="/jobs" method="POST">
        @csrf
        <p>
            <label for="title">Job Title:</label>
            <input type="text" name="title" id="title" required>
        </p>
        <p>
            <label for="description">Job Description:</label>
            <input type="text" name="description" id="description" required>
        </p>
        <p>
            <label for="location">Job Location:</label>
            <input type="text" name="location" id="location" required>
        </p>
        <button type="submit">Create Job</button>
    </form>
</body>
</html>