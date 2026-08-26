<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Listings</title>
</head>
<body>
    <h1>Available Jobs</h1>
    <ul>
        @forelse($jobs as $job)
            <li>{{ $job }}</li>
        @empty
            <li style="color: #a00;">No jobs available at the moment.</li>
        @endforelse
        
    </ul>
</body>
</html>