<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>About Us | Seven Steps Pre-School, Surat</title>
<meta name="description" content="Learn about Seven Steps Pre-School Surat - vision, mission, leadership, and our commitment to early childhood educational excellence.">
<link rel="icon" type="image/png" href="{{ asset('assets/img/logo.png') }}">

<!-- Google Fonts: Fredoka (Headings) + Caveat (Handwritten) + Plus Jakarta Sans (Body) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Caveat:wght@600;700&family=Fredoka:wght@400;500;600;700&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

<!-- Font Awesome Icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

<!-- Stylesheets -->
<link rel="stylesheet" href="{{ asset('assets/css/design-system.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}?v={{ file_exists(public_path('assets/css/style.css')) ? filemtime(public_path('assets/css/style.css')) : time() }}">
<link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">