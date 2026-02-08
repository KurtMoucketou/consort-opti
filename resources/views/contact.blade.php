@extends('layouts.app')

@section('title', 'Contact - Consortium Optimum')

@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="text-center mb-5">
                    <h1 class="fw-bold mb-3">Contactez-nous</h1>
                    <p class="text-muted">Nous sommes à votre écoute pour discuter de vos projets</p>
                </div>
                
                <div class="card shadow-lg">
                    <div class="card-body p-4 p-md-5">
                        <form method="POST" action="{{ route('contact.store') }}">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="name" class="form-label">Nom complet</label>
                                    <input type="text" class="form-control" id="name" name="name" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                </div>
                            </div>
                            
                            <div class="mb-3">
                                <label for="company" class="form-label">Entreprise (optionnel)</label>
                                <input type="text" class="form-control" id="company" name="company">
                            </div>
                            
                            <div class="mb-3">
                                <label for="service" class="form-label">Service intéressé</label>
                                <select class="form-select" id="service" name="service">
                                    <option value="">Sélectionnez un service</option>
                                    <option value="matchmaking">Matchmaking B2B/B2G</option>
                                    <option value="business-plan">Business Model & Plan</option>
                                    <option value="appels-offres">Appels d'Offres</option>
                                    <option value="implantation">Gestion d'Implantation</option>
                                    <option value="identite-numerique">Identité Numérique</option>
                                    <option value="vetements">Vêtements d'Image</option>
                                </select>
                            </div>
                            
                            <div class="mb-3">
                                <label for="message" class="form-label">Message</label>
                                <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                            </div>
                            
                            <button type="submit" class="btn btn-primary btn-lg w-100">
                                Envoyer le message
                            </button>
                        </form>
                    </div>
                </div>
                
                <!-- Contact Info -->
                <div class="row mt-5">
                    <div class="col-md-4 mb-3">
                        <div class="card h-100 text-center border-0 shadow-sm">
                            <div class="card-body">
                                <i class="bi bi-envelope-fill text-primary display-6 mb-3"></i>
                                <h5>Email</h5>
                                <p class="text-muted mb-0">hello@consortium-optimum.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="card h-100 text-center border-0 shadow-sm">
                            <div class="card-body">
                                <i class="bi bi-telephone-fill text-primary display-6 mb-3"></i>
                                <h5>Téléphone</h5>
                                <p class="text-muted mb-0">+212 652 607 766</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="card h-100 text-center border-0 shadow-sm">
                            <div class="card-body">
                                <i class="bi bi-geo-alt-fill text-primary display-6 mb-3"></i>
                                <h5>Localisation</h5>
                                <p class="text-muted mb-0">Maroc - International</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection