@extends('layout')

@section('content')
    <ul>
        @forelse($jobs as $job)
            <li>{{ $job }}</li>
        @empty
            <li style="color: #a00;">No jobs available at the moment.</li>
        @endforelse
        
    </ul>
@endsection