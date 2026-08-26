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
        @if(!empty($jobs))
            @foreach ($jobs as $job)
                <li><a href="#">{{ $job['title'] }} </a></li>
            @endforeach
        @else
            <li style="color: #a00;">No jobs available at the moment.</li>
        @endif
        
    </ul>
</body>
</html>