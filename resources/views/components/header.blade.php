<meta charset="UTF-8">
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>{{ config('app.name', 'Skulocar') }}</title>
<meta name="og:title" content="{{ config('app.name', 'Skulocar') }}">
<meta name="og:description" content="Skulocar is a platform for creating and sharing car games.">
<meta name="og:image" content="{{ asset('images/og-image.png') }}">
<meta name="og:url" content="{{ url('/') }}">
<meta name="og:type" content="website">
<meta name="og:locale" content="en_US">
<meta name="og:site_name" content="{{ config('app.name', 'Skulocar') }}">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="{{ config('app.name', 'Skulocar') }}">
<meta name="twitter:description" content="Skulocar is a platform for creating and sharing car games.">
<meta name="twitter:image" content="{{ asset('images/og-image.png') }}">
<meta name="twitter:url" content="{{ url('/') }}">
<meta name="twitter:site" content="{{ config('app.name', 'Skulocar') }}">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Chakra+Petch:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
@vite(['resources/css/app.css', 'resources/js/app.js'])