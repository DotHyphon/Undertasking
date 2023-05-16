<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="icon" href="{{ asset('images/favicon.ico') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="//unpkg.com/alpinejs" defer></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        laravel: "#ef3b2d",
                    },
                    minWidth: {
                        'sml': '340px',
                    },
                },
            }
    }
    </script>

    <title>UnderTasking</title>
</head>
<body class="min-w-sml">
    <nav class="flex text-center pb-4 border">
        <a class="flex-1">Current User</a> 
        <h1 class="flex-1 text-2xl">UnderTasking</h1> 
        <form class="flex-1">Search</form>
    </nav>
    {{ $slot }}
    <footer>
        Archive | tools | Create task
    </footer>

    
</body>
</html>