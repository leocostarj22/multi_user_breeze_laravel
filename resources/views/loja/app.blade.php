<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Livraria & Papelaria</title>
        
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Bootstrap Icons -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @endif
    </head>
    <body>
        <!-- Navigation -->
        @include('layouts.partials.loja.navbar')

        <!-- Header Carousel -->
        <header>
            <div id="headerCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#headerCarousel" data-bs-slide-to="0" class="active"></button>
                    <button type="button" data-bs-target="#headerCarousel" data-bs-slide-to="1"></button>
                    <button type="button" data-bs-target="#headerCarousel" data-bs-slide-to="2"></button>
                    <button type="button" data-bs-target="#headerCarousel" data-bs-slide-to="3"></button>
                    <button type="button" data-bs-target="#headerCarousel" data-bs-slide-to="4"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('images/banner/banner1.jpg') }}" class="d-block w-100" alt="Banner 1">
                        <div class="carousel-caption d-none d-md-block">
                            <h1 class="display-4 fw-bolder">Livraria & Papelaria</h1>
                            <p class="lead fw-normal">Sua melhor opção em livros e material escolar</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/banner/banner2.jpg') }}" class="d-block w-100" alt="Banner 2">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/banner/banner3.jpg') }}" class="d-block w-100" alt="Banner 3">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/banner/banner4.jpg') }}" class="d-block w-100" alt="Banner 4">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/banner/banner5.jpg') }}" class="d-block w-100" alt="Banner 5">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#headerCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Anterior</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#headerCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Próximo</span>
                </button>
            </div>
        </header>

        <!-- Main Content -->
        <main class="container px-4 px-lg-5 mt-5">
            <!-- Seções de Destaque -->
            <section class="featured-sections mb-5">
                <h2 class="text-center mb-4">Destaques</h2>
                
                <!-- Novidades de Literatura -->
                <div class="mb-5">
                    <h3 class="mb-4">Novidades de Literatura</h3>
                    <div class="row">
                        <!-- Produto 1 -->
                        <div class="col-md-3 mb-4">
                            <div class="card h-100">
                                <img src="{{ asset('images/books/book1.jpg') }}" class="card-img-top" alt="Livro 1">
                                <div class="card-body">
                                    <span class="badge bg-danger mb-2">-15%</span>
                                    <h5 class="card-title">A Biblioteca da Meia-Noite</h5>
                                    <p class="card-text text-muted">Matt Haig</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <span class="text-decoration-line-through text-muted">R$ 59,90</span>
                                            <span class="fs-5 fw-bold text-danger">R$ 50,90</span>
                                        </div>
                                        <a href="#" class="btn btn-outline-dark btn-sm">
                                            <i class="bi bi-cart-plus"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Produto 2 -->
                        <div class="col-md-3 mb-4">
                            <div class="card h-100">
                                <img src="{{ asset('images/books/book2.jpg') }}" class="card-img-top" alt="Livro 2">
                                <div class="card-body">
                                    <span class="badge bg-danger mb-2">-20%</span>
                                    <h5 class="card-title">O Homem Mais Rico da Babilônia</h5>
                                    <p class="card-text text-muted">George S. Clason</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <span class="text-decoration-line-through text-muted">R$ 45,90</span>
                                            <span class="fs-5 fw-bold text-danger">R$ 36,72</span>
                                        </div>
                                        <a href="#" class="btn btn-outline-dark btn-sm">
                                            <i class="bi bi-cart-plus"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Produto 3 -->
                        <div class="col-md-3 mb-4">
                            <div class="card h-100">
                                <img src="{{ asset('images/books/book3.jpg') }}" class="card-img-top" alt="Livro 3">
                                <div class="card-body">
                                    <span class="badge bg-danger mb-2">-25%</span>
                                    <h5 class="card-title">É Assim que Acaba</h5>
                                    <p class="card-text text-muted">Colleen Hoover</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <span class="text-decoration-line-through text-muted">R$ 49,90</span>
                                            <span class="fs-5 fw-bold text-danger">R$ 37,42</span>
                                        </div>
                                        <a href="#" class="btn btn-outline-dark btn-sm">
                                            <i class="bi bi-cart-plus"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Produto 4 -->
                        <div class="col-md-3 mb-4">
                            <div class="card h-100">
                                <img src="{{ asset('images/books/book4.jpg') }}" class="card-img-top" alt="Livro 4">
                                <div class="card-body">
                                    <span class="badge bg-danger mb-2">-30%</span>
                                    <h5 class="card-title">Verity</h5>
                                    <p class="card-text text-muted">Colleen Hoover</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <span class="text-decoration-line-through text-muted">R$ 54,90</span>
                                            <span class="fs-5 fw-bold text-danger">R$ 38,43</span>
                                        </div>
                                        <a href="#" class="btn btn-outline-dark btn-sm">
                                            <i class="bi bi-cart-plus"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Outras Seções -->
                <div class="row">
                    <!-- Livros Físicos -->
                    <div class="col-md-4 mb-4">
                        <div class="card h-100">
                            <div class="card-body text-center">
                                <i class="bi bi-book display-4 mb-3"></i>
                                <h3 class="card-title">Livros Físicos</h3>
                                <p class="card-text">Explore nossa coleção de livros impressos.</p>
                                <a href="#" class="btn btn-outline-dark">Ver Livros</a>
                            </div>
                        </div>
                    </div>
                    <!-- E-books -->
                    <div class="col-md-4 mb-4">
                        <div class="card h-100">
                            <div class="card-body text-center">
                                <i class="bi bi-tablet display-4 mb-3"></i>
                                <h3 class="card-title">E-books</h3>
                                <p class="card-text">Biblioteca digital para leitura onde quiser.</p>
                                <a href="#" class="btn btn-outline-dark">Ver E-books</a>
                            </div>
                        </div>
                    </div>
                    <!-- Audiobooks -->
                    <div class="col-md-4 mb-4">
                        <div class="card h-100">
                            <div class="card-body text-center">
                                <i class="bi bi-headphones display-4 mb-3"></i>
                                <h3 class="card-title">Audiobooks</h3>
                                <p class="card-text">Ouça seus livros favoritos.</p>
                                <a href="#" class="btn btn-outline-dark">Ver Audiobooks</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Categorias em Destaque -->
            <section class="categories mb-5">
                <h2 class="text-center mb-4">Categorias em Destaque</h2>
                <div class="row">
                    <!-- Infantojuvenil -->
                    <div class="col-md-3 mb-4">
                        <div class="card h-100">
                            <div class="card-body">
                                <h4 class="card-title">Infantojuvenil</h4>
                                <p class="card-text">Os melhores livros para jovens leitores.</p>
                                <a href="#" class="btn btn-sm btn-outline-dark">Explorar</a>
                            </div>
                        </div>
                    </div>
                    <!-- Literatura Nacional -->
                    <div class="col-md-3 mb-4">
                        <div class="card h-100">
                            <div class="card-body">
                                <h4 class="card-title">Literatura Nacional</h4>
                                <p class="card-text">O melhor da literatura brasileira.</p>
                                <a href="#" class="btn btn-sm btn-outline-dark">Explorar</a>
                            </div>
                        </div>
                    </div>
                    <!-- Mais Vendidos -->
                    <div class="col-md-3 mb-4">
                        <div class="card h-100">
                            <div class="card-body">
                                <h4 class="card-title">Mais Vendidos</h4>
                                <p class="card-text">Os livros mais populares do momento.</p>
                                <a href="#" class="btn btn-sm btn-outline-dark">Explorar</a>
                            </div>
                        </div>
                    </div>
                    <!-- Lançamentos -->
                    <div class="col-md-3 mb-4">
                        <div class="card h-100">
                            <div class="card-body">
                                <h4 class="card-title">Lançamentos</h4>
                                <p class="card-text">As últimas novidades literárias.</p>
                                <a href="#" class="btn btn-sm btn-outline-dark">Explorar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Conteúdo Dinâmico -->
            @yield('content')
        </main>

        <!-- Footer -->
        <footer class="py-5 bg-dark mt-5">
            <div class="container">
                <p class="m-0 text-center text-white">Copyright &copy; Livraria & Papelaria 2024</p>
            </div>
        </footer>

        <!-- Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
