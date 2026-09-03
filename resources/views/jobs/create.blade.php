<x-layout>
    <x-slot name="title">Create Job</x-slot>

    <h1 class="text-2xl font-bold mb-4">Create a New Job</h1>

    <form action="/jobs" method="POST">
        @csrf
        <div class="my-5">
            <label for="title">Job Title:</label>
            <input type="text" name="title" id="title" placeholder="Enter job title" value="{{ old('title') }}">

            @error('title')
                <div class="text-red-500">{{ $message }}</div>
            @enderror
        </div>
        <div class="my-5">
            <label for="description">Job Description:</label>
            <input type="text" name="description" id="description" placeholder="Enter job description" value="{{ old('description') }}">
            @error('description')
                <div class="text-red-500">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit">Create Job</button>
    </form>
</x-layout>