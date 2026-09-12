<x-layout>
    <h2 class="text-3xl text-center mb-4 font-bold boder border-gray-300 p-3">Bookmarked Jobs</h2>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-3">
        @forelse($bookmarks as $bookmark)
            <x-job-card :job="$bookmark" />
        @empty
            <p class="text-gray-500 tet-center">You do not have any bookmarked Jobs.</p>
        @endforelse
    </div>
</x-layout>
