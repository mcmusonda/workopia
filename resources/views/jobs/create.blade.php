<x-layout>
    <x-slot name="title">Create Job</x-slot>

    <h1 class="text-2xl font-bold mb-4">Create a New Job</h1>

    <form action="/jobs" method="POST">
        @csrf
        <div>
            <label for="title">Job Title:</label>
            <input type="text" name="title" id="title" required placeholder="Enter job title">
        </div>
        <div>
            <label for="description">Job Description:</label>
            <input type="text" name="description" id="description" required placeholder="Enter job description">
        </div>
        <button type="submit">Create Job</button>
    </form>
</x-layout>