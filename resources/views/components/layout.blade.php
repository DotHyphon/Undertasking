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
    <nav class="flex text-center items-center justify-center py-4 border">
        <a href='/user' class="flex-1">Current User</a> 
        <a href='/' class="flex-1 text-2xl">UnderTasking</a> 
        <form action='/' class="flex-1">
            <i class="fas fa-search"></i>
            <input class="w-12" type="text" name="search" placeholder="Search..." value="{{request('search')}}">
        </form>
    </nav>
    {{ $slot }}
    <footer class="fixed flex justify-center align-center items-center bottom-0 left-0 w-full bg-gray-200 p-4">
        <p><a href='/'>Archive</a> | <a href='/'>tools</a> | <a href="">Create task</a></p>
    </footer>

    
</body>
</html>