<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-bs-theme="light">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Consortium Optimum - Intelligence Commerciale')</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Votre JS custom -->
    <script src="{{ asset('js/custom.js') }}"></script>
    
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    
    <!-- Custom CSS -->
    <style>
        :root {
            --primary-color: #1e3a8a;
            --secondary-color: #3b82f6;
            --dark-color: #1f2937;
            --light-color: #708ba7;
        }
        
        .bg-primary { background-color: var(--primary-color) !important; }
        .text-primary { color: var(--primary-color) !important; }
        .btn-primary { 
            background-color: var(--primary-color) !important;
            border-color: var(--primary-color) !important;
        }
        .btn-primary:hover {
            background-color: #1e40af !important;
            border-color: #1e40af !important;
        }
        
        .navbar-brand {
            font-weight: 700;
            font-size: 1.5rem;
        }
        
        .hero-section {
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
            color: white;
            padding: 100px 0;
        }
        
        .card-hover:hover {
            transform: translateY(-5px);
            transition: all 0.3s ease;
            box-shadow: 0 10px 20px rgba(0,0,0,0.1) !important;
        }
        
        footer {
            background-color: var(--dark-color);
        }
        
        /* Dark mode support */
        [data-bs-theme="dark"] {
            --bs-body-bg: #111827;
            --bs-body-color: #3061c4;
        }
        
        [data-bs-theme="dark"] .bg-light {
            background-color: #1f2937 !important;
        }
        
        [data-bs-theme="dark"] .card {
            background-color: #1f2937;
            border-color: #374151;
        }
    </style>
    
    @stack('styles')
</head>
<body>
    <!-- Navigation -->
    <!-- Navigation améliorée -->
<nav class="navbar navbar-expand-lg navbar-dark shadow-lg sticky-top" 
     style="background: linear-gradient(135deg, #73767e  0%, #7989bf  100%);">
        <!-- Logo propre -->
        <a class="navbar-brand d-flex align-items-center" href="{{ route('home') }}">
            <img src="{{ asset('images/CO_Log.png') }}" 
                 alt="Consortium Optimum" 
                 class="me-2"
                 style="height: 60px; width: auto;">
            <span class="d-none d-md-inline fw-bold">
                <span class="text-dark">Consortium</span>
                <span class="text-primary">Optimum</span>
            </span>
        </a>
        
        <button class="navbar-toggler border-1" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto align-items-lg-center gap-2">
                <!-- Menu items avec bon contraste -->
                <li class="nav-item">
                    <a class="nav-link px-3 py-2 rounded {{ request()->routeIs('home') ? 'active bg-light text-primary fw-bold' : 'text-gray-700' }}" 
                       href="{{ route('home') }}">
                        Accueil
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-3 py-2 rounded {{ request()->routeIs('services') ? 'active bg-light text-primary fw-bold' : 'text-gray-700' }}" 
                       href="{{ route('services') }}">
                        Services
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-3 py-2 rounded {{ request()->routeIs('contact') ? 'active bg-light text-primary fw-bold' : 'text-gray-700' }}" 
                       href="{{ route('contact') }}">
                        Contact
                    </a>
                </li>
                
                <!-- Espacement -->
                <li class="nav-item mx-2 d-none d-lg-block">
                    <span class="text-gray-300">|</span>
                </li>
                
                <!-- Thème toggle amélioré -->
                <li class="nav-item">
                    <button class="btn btn-sm border-1 px-3 py-2 {{ session('theme') == 'dark' ? 'btn-dark text-white' : 'btn-outline-dark' }}" 
                            id="themeToggle">
                        <i class="bi bi-sun-fill d-none" id="lightIcon"></i>
                        <i class="bi bi-moon-fill d-none" id="darkIcon"></i>
                        <span class="ms-1 d-none d-sm-inline">Thème</span>
                    </button>
                </li>
                
                <!-- Compte utilisateur -->
                @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-gray-700" href="#" role="button" data-bs-toggle="dropdown">
                            <i class="bi bi-person-circle me-1"></i>
                            <span class="d-none d-lg-inline">Mon compte</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="{{ route('dashboard') }}">Tableau de bord</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="dropdown-item">Déconnexion</button>
                                </form>
                            </li>
                        </ul>
                    </li>
                @else
                    <li class="nav-item">
                        <a href="{{ route('login') }}" class="btn btn-primary btn-sm px-3 py-2">
                            <i class="bi bi-box-arrow-in-right me-1"></i>
                            <span class="d-none d-lg-inline">Espace Client</span>
                        </a>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="text-white py-5 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <h5 class="fw-bold mb-3">Consortium Optimum</h5>
                    <p class="text-light">Une passerelle stratégique entre le Royaume du Maroc et les opportunités commerciales internationales.</p>
                    <p class="text-muted"><small>Expertise • Stratégie • Performance</small></p>
                </div>
                
                <div class="col-lg-4 mb-4">
                    <h5 class="fw-bold mb-3">Contact</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2">
                            <i class="bi bi-envelope me-2"></i>
                            <span>hello@consortium-optimum.com</span>
                        </li>
                        <li class="mb-2">
                            <i class="bi bi-phone me-2"></i>
                            <span>+212 652 607 766</span>
                        </li>
                        <li class="mb-2">
                            <i class="bi bi-globe me-2"></i>
                            <span>www.consortium-optimum.com</span>
                        </li>
                    </ul>
                </div>
                
                <div class="col-lg-4 mb-4">
                    <h5 class="fw-bold mb-3">Liens rapides</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="{{ route('home') }}" class="text-light text-decoration-none">Accueil</a></li>
                        <li class="mb-2"><a href="{{ route('services') }}" class="text-light text-decoration-none">Nos Services</a></li>
                        <li class="mb-2"><a href="{{ route('contact') }}" class="text-light text-decoration-none">Contact</a></li>
                        @guest
                        <li class="mb-2"><a href="{{ route('login') }}" class="text-light text-decoration-none">Espace Client</a></li>
                        @endguest
                    </ul>
                </div>
            </div>
            
            <hr class="border-secondary my-4">
            
            <div class="row align-items-center">
                <div class="col-md-6">
                    <p class="mb-0">&copy; {{ date('Y') }} Consortium Optimum. Tous droits réservés.</p>
                </div>
                <div class="col-md-6 text-md-end">
                    <a href="#" class="text-light me-3"><i class="bi bi-linkedin"></i></a>
                    <a href="#" class="text-light"><i class="bi bi-facebook"></i></a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Custom JS -->
    <script>
        // Theme Toggle
        document.addEventListener('DOMContentLoaded', function() {
            const themeToggle = document.getElementById('themeToggle');
            const lightIcon = document.getElementById('lightIcon');
            const darkIcon = document.getElementById('darkIcon');
            const htmlElement = document.documentElement;
            
            // Vérifier le thème sauvegardé
            const savedTheme = localStorage.getItem('theme') || 'light';
            htmlElement.setAttribute('data-bs-theme', savedTheme);
            
            // Mettre à jour les icônes
            if (savedTheme === 'dark') {
                lightIcon.classList.remove('d-none');
                darkIcon.classList.add('d-none');
            } else {
                lightIcon.classList.add('d-none');
                darkIcon.classList.remove('d-none');
            }
            
            // Gérer le clic
            themeToggle.addEventListener('click', function() {
                const currentTheme = htmlElement.getAttribute('data-bs-theme');
                const newTheme = currentTheme === 'dark' ? 'light' : 'dark';
                
                htmlElement.setAttribute('data-bs-theme', newTheme);
                localStorage.setItem('theme', newTheme);
                
                if (newTheme === 'dark') {
                    lightIcon.classList.remove('d-none');
                    darkIcon.classList.add('d-none');
                } else {
                    lightIcon.classList.add('d-none');
                    darkIcon.classList.remove('d-none');
                }
            });
        });

        // Theme Toggle amélioré
document.addEventListener('DOMContentLoaded', function() {
    const themeToggle = document.getElementById('themeToggle');
    const lightIcon = document.getElementById('lightIcon');
    const darkIcon = document.getElementById('darkIcon');
    const htmlElement = document.documentElement;
    
    // Vérifier le thème sauvegardé
    const savedTheme = localStorage.getItem('theme') || 'light';
    htmlElement.setAttribute('data-bs-theme', savedTheme);
    updateThemeButton(savedTheme);
    
    // Gérer le clic
    if (themeToggle) {
        themeToggle.addEventListener('click', function() {
            const currentTheme = htmlElement.getAttribute('data-bs-theme');
            const newTheme = currentTheme === 'dark' ? 'light' : 'dark';
            
            htmlElement.setAttribute('data-bs-theme', newTheme);
            localStorage.setItem('theme', newTheme);
            updateThemeButton(newTheme);
        });
    }
    
    function updateThemeButton(theme) {
        if (!lightIcon || !darkIcon || !themeToggle) return;
        
        if (theme === 'dark') {
            lightIcon.classList.remove('d-none');
            darkIcon.classList.add('d-none');
            themeToggle.classList.remove('btn-outline-dark');
            themeToggle.classList.add('btn-dark', 'text-white');
        } else {
            lightIcon.classList.add('d-none');
            darkIcon.classList.remove('d-none');
            themeToggle.classList.remove('btn-dark', 'text-white');
            themeToggle.classList.add('btn-outline-dark');
        }
    }
    
    // Mobile menu toggle (si vous avez un menu mobile)
    const mobileMenuButton = document.getElementById('mobileMenuButton');
    const mobileMenu = document.getElementById('mobileMenu');
    
    if (mobileMenuButton && mobileMenu) {
        mobileMenuButton.addEventListener('click', function() {
            mobileMenu.classList.toggle('show');
        });
    }
});
    </script>
    
    @stack('scripts')
</body>
</html>