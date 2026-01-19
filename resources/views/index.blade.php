@extends('fronts.layouts.base')

@section('title', 'Accueil - TICAFRIQUE')

@section('content')

<style>
    /* ===================== VARIABLES & GLOBAL ===================== */
    :root {
        --primary-blue: #0b3c5d;
        --accent-blue: #265491;
        --deep-black: #050505;
        --soft-gray: #f8f9fa;
        --pure-white: #ffffff;
    }

    body {
        font-family: 'Poppins', sans-serif !important;
        color: var(--deep-black);
    }

    .section-title {
        color: var(--primary-blue);
        font-weight: 700;
        margin-bottom: 1.5rem;
    }

    /* ===================== HERO (FLUIDE ET SANS ANIMATION) ===================== */
    .stadium-hero {
        position: relative;
        min-height: 75vh;
        display: flex;
        align-items: center;
        background-color: #2e5281;
        /* Bleu de secours */
        padding: 60px 0;
        overflow: hidden;
    }

    .hero-bg-container {
        position: absolute;
        top: 0;
        right: 0;
        width: 60%;
        height: 100%;
        z-index: 1;
    }

    .hero-bg-img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        /* Effet de fondu fluide vers le texte */
        mask-image: linear-gradient(to left, black 60%, transparent 100%);
        -webkit-mask-image: linear-gradient(to left, black 60%, transparent 100%);
    }

    .hero-content-container {
        position: relative;
        z-index: 10;
    }

    .stadium-board {
        background: rgba(5, 5, 5, 0.8);
        border-left: 5px solid var(--accent-blue);
        border-radius: 10px;
        padding: 45px;
        backdrop-filter: blur(8px);
        /* Pas d'opacité 0 ici car on veut un affichage immédiat */
    }

    .digital-text-static {
        font-family: 'Saira', sans-serif;
        font-size: 2.8rem;
        color: var(--pure-white);
        text-transform: uppercase;
        font-weight: 800;
        line-height: 1.1;
    }

    /* ===================== COMPOSANTS ===================== */
    .hover-card {
        transition: all 0.3s ease-in-out;
        border-radius: 15px;
        border: none;
    }

    .hover-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 12px 25px rgba(11, 60, 93, 0.15);
    }

    .icon-box {
        width: 65px;
        height: 65px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        background: rgba(13, 110, 253, 0.1);
        margin: 0 auto 1.2rem;
    }

    .btn-main {
        background: var(--accent-blue);
        color: var(--pure-white);
        padding: 14px 35px;
        border-radius: 30px;
        font-weight: 600;
        border: none;
        display: inline-block;
        text-decoration: none;
        transition: 0.3s;
    }

    .btn-main:hover {
        background: var(--primary-blue);
        color: white;
    }

    /* ===================== ANIMATIONS (JS OBSERVER) ===================== */
    .fade-up,
    .fade-left,
    .fade-right {
        opacity: 0;
        transition: all 0.8s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .fade-up {
        transform: translateY(30px);
    }

    .fade-left {
        transform: translateX(-30px);
    }

    .fade-right {
        transform: translateX(30px);
    }

    .show {
        opacity: 1 !important;
        transform: translate(0, 0) !important;
    }

    /* Animation subtile du bouton */
    .btn-pulse {
        animation: pulse 3s infinite;
    }

    @keyframes pulse {
        0% {
            box-shadow: 0 0 0 0 rgba(13, 110, 253, 0.5);
        }

        70% {
            box-shadow: 0 0 0 15px rgba(13, 110, 253, 0);
        }

        100% {
            box-shadow: 0 0 0 0 rgba(13, 110, 253, 0);
        }
    }

    @media (max-width: 991px) {
        .hero-bg-container {
            width: 100%;
            opacity: 0.3;
        }

        .digital-text-static {
            font-size: 1.8rem;
        }

        .stadium-hero {
            min-height: 60vh;
        }
    }

    /* ===================== CONTACT ===================== */
    .contact-modern-card {
        border-radius: 25px;
        overflow: hidden;
        background: white;
    }

    .form-modern {
        width: 100%;
        padding: 12px 15px;
        border-radius: 10px;
        border: 1px solid #eee;
        background: #fdfdfd;
        margin-bottom: 15px;
    }

    .form-modern:focus {
        border-color: var(--accent-blue);
        outline: none;
    }
</style>

<main>
    <section class="stadium-hero">
        <div class="hero-bg-container">
            <img src="{{ asset('site/img/bg_home.jpg') }}" class="hero-bg-img" alt="Background Ticafrique">
        </div>

        <div class="container hero-content-container">
            <div class="row">
                <div class="col-lg-7 col-xl-6">
                    <div class="stadium-board">
                        <h1 class="digital-text-static">
                            Avec le SMS professionnel de TICAFRIQUE, améliorez votre productivité.
                        </h1>
                        <p class="text-white-50 mt-3 fs-5">
                            Bénéficiez de nouveaux canaux de communication performants.
                        </p>
                        <a href="{{ route('ticafrique.demande') }}" class="btn btn-main btn-pulse mt-3">
                            Commander Maintenant
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-white">
        <div class="container py-4">
            <div class="text-center mb-5 fade-up">
                <span class="badge bg-light text-primary px-4 py-2 rounded-pill fw-bold mb-2">NOS OBJECTIFS</span>
                <h2 class="section-title">Comment booster votre communication ?</h2>
            </div>

            <div class="row g-4">
                @php
                $objectifs = [
                ['img'=>'5.png','title'=>'Rassurer et fidéliser','text'=>'Relation de proximité avec vos clients'],
                ['img'=>'6.png','title'=>'Promouvoir','text'=>'Diffusion des promotions'],
                ['img'=>'7.png','title'=>'Réduire les coûts','text'=>'Optimisation budgétaire'],
                ['img'=>'8.jpg','title'=>'Instantanéité','text'=>'Information en temps réel'],
                ['img'=>'9.png','title'=>'Rendement accru','text'=>'Automatisation des tâches'],
                ['img'=>'10.png','title'=>'Cible atteinte','text'=>'Clients joignables 24h/24']
                ];
                @endphp

                @foreach($objectifs as $obj)
                <div class="col-lg-4 col-md-6">
                    <div class="card p-4 text-center hover-card shadow-sm h-100 fade-up">
                        <div class="icon-box">
                            <img src="{{ asset('site/img/'.$obj['img']) }}" width="40" alt="{{ $obj['title'] }}">
                        </div>
                        <h6 class="fw-bold">{{ $obj['title'] }}</h6>
                        <p class="text-muted small mb-0">{{ $obj['text'] }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="py-5 bg-light">
        <div class="container py-4">
            <div class="row align-items-center g-5">
                <div class="col-md-6 fade-left">
                    <img src="{{ asset('site/img/augmenter_rendement.jpg') }}" class="img-fluid rounded-4 shadow-lg" alt="Rendement Ticafrique">
                </div>
                <div class="col-md-6 fade-right">
                    <h2 class="section-title">
                        Augmentez votre rendement avec le <span class="text-primary">SMS PROFESSIONNEL</span>
                    </h2>
                    <p class="lead text-muted">
                        Le SMS est le canal le plus direct et le plus efficace pour toucher vos clients instantanément.
                    </p>
                    <ul class="list-unstyled mb-4">
                        <li class="mb-2"><i class="bi bi-check2-circle text-primary me-2"></i> Communication instantanée</li>
                        <li class="mb-2"><i class="bi bi-check2-circle text-primary me-2"></i> Message personnalisé</li>
                        <li class="bi bi-check2-circle text-primary me-2"></i> Diffusion massive rapide</li>
                    </ul>
                    <a href="{{ route('ticafrique.demande') }}" class="btn btn-main">Commander</a>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5" style="background: #f4f7f9;">
        <div class="container py-5">
            {{-- Alertes de Succès --}}
            @if(session('success'))
            <div class="alert alert-success border-0 shadow-sm rounded-4 mb-4">
                <i class="bi bi-check-circle-fill me-2"></i> {{ session('success') }}
            </div>
            @endif

            {{-- Alertes d'Erreurs --}}
            @if ($errors->any())
            <div class="alert alert-danger border-0 shadow-sm rounded-4 mb-4">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <div class="contact-modern-card shadow-lg">
                <div class="row g-0">
                    <div class="col-lg-7 p-4 p-md-5 fade-left">
                        <h3 class="fw-bold mb-3 text-primary">Transmettez-nous votre demande</h3>

                        <form method="post" action="{{ route('ticafrique.store_contact') }}">
                            @csrf
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <input type="text" name="nom" class="form-modern" placeholder="Nom complet" value="{{ old('nom') }}" required>
                                </div>
                                <div class="col-md-6">
                                    <input type="tel" name="contact" class="form-modern" id="contact" placeholder="Ex: 0705030303" value="{{ old('contact') }}" required>
                                </div>
                                <div class="col-md-12">
                                    <input type="email" name="email" class="form-modern" placeholder="Adresse email" value="{{ old('email') }}" required>
                                </div>
                                <div class="col-12">
                                    <textarea name="message" rows="4" class="form-modern" placeholder="Votre projet..." required>{{ old('message') }}</textarea>
                                </div>
                            </div>

                            {{-- Zone de Sécurité Corrigée --}}
                            <div class="d-flex align-items-center gap-3 mt-3 p-3 bg-white rounded-3 border">
                                <label class="mb-0 text-dark">
                                    Sécurité : entrez le nombre suivant :
                                    <strong class="text-primary fs-5">{{ session('captcha') }}</strong>
                                </label>
                                <input type="number" name="heure" class="form-control" style="width: 100px !important;" placeholder="????" required>
                            </div>

                            <button type="submit" class="btn btn-main mt-4 w-100">Envoyer le message</button>
                        </form>
                    </div>

                    {{-- Infos de contact --}}
                    <div class="col-lg-5 p-4 p-md-5 text-white fade-right" style="background: var(--primary-blue); min-height: 400px;">
                        <h4 class="fw-bold mb-4">Contact direct</h4>
                        <div class="mb-3">
                            <p class="mb-2"><i class="bi bi-geo-alt me-2"></i> Abidjan Cocody Angré, Belle Fleur 3</p>
                            <p class="mb-2"><i class="bi bi-telephone me-2"></i> +225 25 22 00 20 77</p>
                            <p class="mb-2"><i class="bi bi-envelope me-2"></i> info@ticafrique.com</p>
                        </div>
                        <hr class="opacity-25">
                        <p class="small text-white-50">Nos experts vous répondent sous 24h ouvrées.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        // Observer pour les animations au scroll
        const observer = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('show');
                }
            });
        }, {
            threshold: 0.1
        });

        document.querySelectorAll('.fade-up, .fade-left, .fade-right').forEach(el => observer.observe(el));


    });
</script>

@endsection