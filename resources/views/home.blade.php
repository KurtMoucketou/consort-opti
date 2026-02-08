@extends('layouts.app')

@section('title', 'Consortium Optimum - Accueil')

@section('content')
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="display-4 fw-bold mb-4">Consortium Optimum</h1>
                    <p class="lead mb-4">MATCHMAKING & GESTION DE PROJET INTERNATIONAL</p>
                    <p class="mb-5">Une passerelle stratégique entre le Royaume du Maroc et les opportunités commerciales internationales.</p>
                    <div class="d-flex flex-wrap gap-3">
                        <a href="{{ route('services') }}" class="btn btn-light btn-lg">Nos Services</a>
                        <a href="{{ route('contact') }}" class="btn btn-outline-light btn-lg">Nous Contacter</a>
                    </div>
                </div>
                <div class="col-lg-6 text-center">
                    <div class="bg-white rounded p-4 shadow-lg d-inline-block">
                        <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center mx-auto mb-3" style="width: 80px; height: 80px;">
                            <i class="bi bi-briefcase-fill" style="font-size: 2rem;"></i>
                        </div>
                        <h4 class="text-primary">Expertise Internationale</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Preview -->
    <section class="py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold mb-3">Nos Services</h2>
                <p class="text-muted">Une gamme complète de services d'intelligence commerciale</p>
            </div>
            
            <div class="row g-4">
                @foreach([
                    ['icon' => 'bi-people-fill', 'title' => 'Matchmaking B2B/B2G', 'desc' => 'Mise en relation ciblée avec des partenaires'],
                    ['icon' => 'bi-graph-up', 'title' => 'Business Model & Plan', 'desc' => 'Coaching pour modèles économiques'],
                    ['icon' => 'bi-file-text', 'title' => 'Appels d\'Offres', 'desc' => 'Dossiers de candidature experts'],
                    ['icon' => 'bi-building', 'title' => 'Gestion d\'Implantation', 'desc' => 'Pilotage de projets d\'investissement'],
                    ['icon' => 'bi-globe', 'title' => 'Identité Numérique', 'desc' => 'Création de présence digitale'],
                    ['icon' => 'bi-person-badge', 'title' => 'Vêtements d\'Image', 'desc' => 'Branding textile personnalisé']
                ] as $service)
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 card-hover border-0 shadow-sm">
                        <div class="card-body text-center p-4">
                            <div class="bg-primary bg-opacity-10 text-primary rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="bi {{ $service['icon'] }}" style="font-size: 1.5rem;"></i>
                            </div>
                            <h5 class="card-title fw-bold">{{ $service['title'] }}</h5>
                            <p class="card-text text-muted">{{ $service['desc'] }}</p>
                            <a href="{{ route('services') }}" class="btn btn-outline-primary btn-sm">En savoir plus</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h2 class="fw-bold mb-4">Un partenaire stratégique depuis le Maroc</h2>
                    <p class="mb-4">
                        Nous accompagnons entreprises et institutions à concrétiser leurs projets commerciaux avec une gamme complète de services stratégiques.
                    </p>
                    <ul class="list-unstyled">
                        <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Expertise reconnue internationalement</li>
                        <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Réseau de partenaires étendu</li>
                        <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Accompagnement personnalisé</li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <div class="card border-0 shadow">
                        <div class="card-body p-4">
                            <h4 class="fw-bold mb-3">M. Marcel Sindryc Faubert</h4>
                            <p class="text-muted mb-3">
                                Startuper dynamique et visionnaire, Lauréat de l'association Réseau Entreprendre Maroc.
                            </p>
                            <div class="border-start border-primary border-3 ps-3">
                                <p class="mb-1"><small>Recommandé par l'Ambassade du Gabon</small></p>
                                <p class="mb-1"><small>Expert en relations économiques Maroc-Gabon-France</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-5">
        <div class="container">
            <div class="card border-0 shadow-lg bg-primary text-white">
                <div class="card-body p-5 text-center">
                    <h3 class="fw-bold mb-3">Prêt à développer votre entreprise à l'international ?</h3>
                    <p class="mb-4">Contactez-nous pour un accompagnement sur mesure</p>
                    <a href="{{ route('contact') }}" class="btn btn-light btn-lg">Demander un accompagnement</a>
                </div>
            </div>
        </div>
    </section>
@endsection