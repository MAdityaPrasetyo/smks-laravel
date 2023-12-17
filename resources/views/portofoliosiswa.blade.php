    <!DOCTYPE html>
    <html lang="en">
    
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SMK_SMART | {{ $title }}</title>
        <link rel="stylesheet" href="/css/style.css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
            rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        {{-- Bootstrap icons --}}
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    
        <!-- Favicon -->
        <link rel="icon" href="img/apple-touch-icon.png" type="image/png">
    
    </head>
    
    <body>
    
        @include('partials.navbar')
    
        <div class="container">
            <h1 class="my-4 text-center fontstyle">{{ $title }}</h1>

            <div class="container">
                <div class="row align-items-center isiport">
                    @foreach ($portofolios as $portofolio)
                        <div class="col-md-6">
                            <a href="{{ $portofolio->link }}">
                                <img class="mb-5 img-fluid" src="{{ asset('storage/images/' . $portofolio->image) }}" width="400"
                                    height="400" alt="{{ $portofolio->name }}">
                            </a>
                        </div>
                    @endforeach
                </div>
        
                {{-- Tampilkan pagination link --}}
                <div class="mt-4"> 
                    <nav aria-label="...">
                        <ul class="pagination justify-content-center">
                            <li class="page-item {{ $portofolios->onFirstPage() ? 'disabled' : '' }}">
                                <a class="page-link" href="{{ $portofolios->previousPageUrl() }}" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
        
                            @for ($i = 1; $i <= $portofolios->lastPage(); $i++)
                                <li class="page-item {{ $portofolios->currentPage() == $i ? 'active' : '' }}">
                                    <a class="page-link" href="{{ $portofolios->url($i) }}">{{ $i }}</a>
                                </li>
                            @endfor
        
                            <li class="page-item {{ $portofolios->hasMorePages() ? '' : 'disabled' }}">
                                <a class="page-link" href="{{ $portofolios->nextPageUrl() }}" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        
        </div>
    
        @include('partials.footer')
    
    
        <!-- script -->
        <script src="https://code.jquery.com/jquery-latest.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
        </script>
        <script src="/js/script.js"></script>
    
        <!-- script -->
    </body>
    
    </html>
    