@extends('layouts.app')

@section('title', 'Nos Services - Consortium Optimum')

@section('content')
    <div class="container py-5">
        <div class="text-center mb-5">
            <h1 class="fw-bold mb-3">Nos Services</h1>
            <p class="lead text-muted">Découvrez notre gamme complète de services d'intelligence commerciale</p>
        </div>
        
        <div class="row">
            @foreach([
                [
                    'title' => 'Matchmaking B2B / B2G',
                    'description' => 'Mise en relation ciblée avec des partenaires privés et donneurs d\'ordres publics internationaux.',
                    'features' => ['Analyse de marché', 'Identification de partenaires', 'Organisation de rencontres']
                ],
                [
                    'title' => 'Business Model & Plan',
                    'description' => 'Coaching personnalisé pour l\'élaboration et la validation de vos modèles économiques.',
                    'features' => ['Étude de faisabilité', 'Business plan', 'Modèle économique']
                ],
                [
                    'title' => 'Appels d\'Offres',
                    'description' => 'Constitution de dossiers de candidature et rédaction de mémoires techniques experts.',
                    'features' => ['Analyse des cahiers des charges', 'Rédaction technique', 'Suivi administratif']
                ],
                [
                    'title' => 'Gestion d\'Implantation',
                    'description' => 'Pilotage de vos projets d\'investissement pour une installation sereine à distance.',
                    'features' => ['Plan d\'implantation', 'Coordination locale', 'Suivi opérationnel']
                ],
                [
                    'title' => 'Identité Numérique',
                    'description' => 'Pack création : site vitrine et création de vos réseaux sociaux professionnels.',
                    'features' => ['Site web', 'Réseaux sociaux', 'Branding digital']
                ],
                [
                    'title' => 'Vêtements d\'Image',
                    'description' => 'Conception sur mesure de vêtements qui reflètent le prestige de votre organisation.',
                    'features' => ['Design personnalisé', 'Matériaux qualité', 'Branding textile']
                ]
            ] as $service)
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100 card-hover shadow-sm">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-center mb-3">
                            <div class="bg-primary bg-opacity-10 text-primary rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 50px; height: 50px;">
                                <i class="bi bi-check-circle-fill"></i>
                            </div>
                            <h5 class="card-title fw-bold mb-0">{{ $service['title'] }}</h5>
                        </div>
                        <p class="card-text text-muted mb-3">{{ $service['description'] }}</p>
                        <ul class="list-unstyled">
                            @foreach($service['features'] as $feature)
                            <li class="mb-2">
                                <i class="bi bi-arrow-right-short text-primary me-1"></i>
                                <small>{{ $feature }}</small>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="card-footer bg-transparent border-0 pt-0">
                        <a href="{{ route('contact') }}" class="btn btn-outline-primary w-100">Demander ce service</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection