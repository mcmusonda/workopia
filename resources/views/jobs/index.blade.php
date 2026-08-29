<x-layout>
    <x-slot name="title">Job Listings</x-slot>

    <h1>{{ $title ?? 'All Job Listings' }}</h1>
    <ul>
        @forelse($jobs as $job)
            <li>{{ $job }}</li>
        @empty
            <li style="color: #a00;">No jobs available at the moment.</li>
        @endforelse
        
    </ul>
</x-layout>