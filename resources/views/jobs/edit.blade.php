<x-layout>
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
</x-layout>