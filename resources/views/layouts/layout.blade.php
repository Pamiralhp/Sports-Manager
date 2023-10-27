<x-app-layout>
    
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sports League</title>
        <!-- Include your stylesheet properly -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <!-- Use a modern CSS framework like Tailwind CSS -->
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    </head>

    <div class="container mx-auto p-4">
        <!-- Include modern CSS framework classes -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        @yield('content')
    </div>

    </body>
    </html>
</x-app-layout>
