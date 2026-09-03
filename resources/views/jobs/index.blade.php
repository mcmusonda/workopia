<x-layout>
    <x-slot name="title">Job Listings</x-slot>

    <h1>{{ $title ?? 'Available Jobs' }}</h1>
    <ul>
        @forelse($jobs as $job)
            <li><a href="{{ route('jobs.show', $job) }}">{{ $job->title }}</a> - {{ $job->description }}</li>
        @empty
            <li style="color: #a00;">No jobs available at the moment.</li>
        @endforelse
        
    </ul>
</x-layout>