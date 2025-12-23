<!DOCTYPE html>
<html>
<head>
    <title>{{ $title ?? 'Blade Components Practical' }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <x-navbar />

    <div class="container mt-4">
        {{ $slot }}
    </div>

</body>
</html>
