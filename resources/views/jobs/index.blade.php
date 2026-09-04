<x-layout>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
            @forelse($jobs as $job)
                <x-job-card :job="$job" />
            @empty
                <li style="color: #a00;">No jobs available at the moment.</li>
            @endforelse
    </div>
</x-layout>