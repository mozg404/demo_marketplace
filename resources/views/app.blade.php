<!DOCTYPE html>
<html>
<head>
    <title>Demo Marketplace</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @routes
    @vite('resources/js/app.js')
    @inertiaHead
</head>
<body>
@inertia
</body>
</html>
