<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Bilal Benyoussef">
    <meta name="keywords" content="note, make notes, create notes, add notes">
    <meta name="description" content="Save your notes securly with us right now!">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css', 'resources/js/app.js')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Agbalumo&family=Alkalami&family=Amiri+Quran&family=Amiri:ital@0;1&family=Aref+Ruqaa:wght@400;700&family=DM+Serif+Text:ital@0;1&family=Gulzar&family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;1,100;1,200;1,300;1,400;1,500;1,600&family=Kdam+Thmor+Pro&family=Lato:ital,wght@0,100;0,300;0,400;0,700;1,100;1,300;1,400&family=Lemonada:wght@300;400;500;600&family=Manrope:wght@200;300;400;500;600&family=Merriweather:ital,wght@0,400;0,700;1,300;1,400&family=Noto+Kufi+Arabic:wght@100;200;300;400;500;600&family=Noto+Nastaliq+Urdu:wght@400;500;600;700&family=Playpen+Sans:wght@400;500;600;700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;1,100;1,200;1,300;1,400;1,500;1,600&family=Rakkas&family=Readex+Pro:wght@200;300;400;500;600&family=Reem+Kufi+Ink&family=Reem+Kufi:wght@400;500;600;700&family=Roboto+Mono:ital,wght@0,400;0,500;0,600;1,300;1,400;1,500&family=Roboto+Slab:wght@100;200;300;400;500;600&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;1,100;1,300;1,400&family=Rubik:ital,wght@0,300;0,400;0,500;1,300;1,400;1,500&family=Salsa&family=Space+Mono:ital,wght@0,400;0,700;1,400;1,700&family=Truculenta:opsz,wght@12..72,100..900&family=Ubuntu:ital,wght@0,300;0,400;1,300&family=Vazirmatn:wght@100;200;300;400;500;600&family=Whisper&display=swap"
        rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>{{ $title }}</title>
</head>

<body>


    <header>
        @include('layouts.navbar')
    </header>
    <main>
        @if (session('success'))
            <div id="delete-note">
                <p>{{ session('success') }}</p>
            </div>
            <script>
                setTimeout(function() {
                    document.getElementById('delete-note').style.display = 'none';
                }, 3000);
            </script>
        @endif

        {{ $slot }}
    </main>
    <footer>
        @include('layouts.footer')
    </footer>

</body>

</html>
