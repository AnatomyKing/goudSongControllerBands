<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>
<body>
    <header>
        <!-- Your header content goes here -->
        <h1>My Laravel App</h1>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <!-- Your footer content goes here -->
        <p>&copy; 2024 My Laravel App</p>
    </footer>
</body>
</html>
