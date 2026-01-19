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

    /* ===================== HERO OPTIMISÉ (SUPERPOSITION) ===================== */
    .stadium-hero {
        background-color: #f8f9fa;
        padding: 100px 0;
        overflow: visible;
        /* Permet aux ombres et débordements d'être visibles */
    }

    /* Le texte occupe plus de place et passe au-dessus */
    .stadium-board {
        background: rgba(255, 255, 255, 0.96);
        border-left: 8px solid var(--accent-blue);
        border-radius: 20px;
        padding: 45px;
        box-shadow: 20px 15px 40px rgba(0, 0, 0, 0.08);
        position: relative;
        z-index: 10;
        /* Priorité d'affichage (dessus) */
        margin-right: -80px;
        /* Crée le chevauchement sur l'image */
    }

    .digital-text-static {
        font-size: 2.2rem;
        color: var(--primary-blue);
        text-transform: uppercase;
        font-weight: 800;
        line-height: 1.2;
    }

    /* L'image est en dessous */
    .hero-img-side {

        position: relative;
        z-index: 5;
        /* Priorité d'affichage (dessous) */
    }

    .hero-img-side img {
        width: 100%;
        height: auto;
        border-radius: 30px;
        box-shadow: -20px 30px 80px rgba(11, 60, 93, 0.2);
        transition: transform 0.5s ease;
        margin-left: 16px;
    }


    /* ===================== ICONES & CARTES ===================== */
    .hover-card {
        transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
        border-radius: 20px;
        border: none;
        background: #fff;
    }

    .hover-card.shadow-sm {
        box-shadow: 0 12px 35px rgba(0, 0, 0, 0.1) !important;
    }

    .hover-card:hover {
        transform: translateY(-12px);
        box-shadow: 0 25px 50px rgba(11, 60, 93, 0.2) !important;
    }

    .icon-box {
        width: 70px;
        height: 70px;
        border-radius: 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: rgba(38, 84, 145, 0.1);
        margin: 0 auto 1.5rem;
    }

    .btn-main {
        background: var(--accent-blue);
        border: var(--accent-blue);
        color: var(--pure-white);
        padding: 16px 40px;
        border-radius: 50px;
        font-weight: 600;
        border: none;
        text-decoration: none;
        display: inline-block;
        transition: 0.3s;
    }

    .btn-main:hover {
        background: var(--primary-blue);
        color: white;
        box-shadow: 0 10px 20px rgba(38, 84, 145, 0.3);
    }

    /* ===================== CONTACT & ANIMATIONS ===================== */
    .contact-modern-card {
        border-radius: 30px;
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

    .fade-up,
    .fade-left,
    .fade-right {
        opacity: 0;
        transition: all 0.8s ease-out;
    }

    .fade-up {
        transform: translateY(40px);
    }

    .fade-left {
        transform: translateX(-40px);
    }

    .fade-right {
        transform: translateX(40px);
    }

    .show {
        opacity: 1 !important;
        transform: translate(0, 0) !important;
    }

    /* ===================== RESPONSIVE ===================== */
    @media (max-width: 991px) {
        .stadium-board {
            margin-right: 0;
            margin-bottom: -40px;
            padding: 30px;
        }

        .hero-img-side {
            margin-top: 20px;
        }
    }
</style>

<main>
    <section class="stadium-hero">
        <div class="container">
            <div class="row align-items-center g-0">
                <div class="col-lg-7 hero-text-side fade-left">
                    <div class="stadium-board">
                        <h1 class="digital-text-static">
                            Avec le SMS professionnel de TICAFRIQUE, améliorez votre productivité.
                        </h1>
                        <p class="text-muted mt-4 fs-5">
                            Bénéficiez de nouveaux canaux de communication performants pour toucher vos cibles.
                        </p>
                        <a href="{{ route('ticafrique.demande') }}" class="btn btn-main mt-4">
                            Commander Maintenant
                        </a>
                    </div>
                </div>
                <div class="col-lg-5 hero-img-side fade-right">
                    <img src="{{ asset('site/img/1.jpg') }}" alt="Background Ticafrique">
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-white">
        <div class="container py-5">
            <div class="text-center mb-5 fade-up">
                <span class="badge bg-light text-primary px-4 py-2 rounded-pill fw-bold mb-2">NOS OBJECTIFS</span>
                <h2 class="section-title">Comment booster votre communication ?</h2>
            </div>

            <div class="row g-4">
                @php
                $objectifs = [
                ['icon'=>'fas fa-handshake','title'=>'Rassurer et fidéliser','text'=>'Relation de proximité avec vos clients'],
                ['icon'=>'fas fa-bullhorn','title'=>'Promouvoir','text'=>'Diffusion des promotions'],
                ['icon'=>'fas fa-chart-line','title'=>'Réduire les coûts','text'=>'Optimisation budgétaire'],
                ['icon'=>'fas fa-bolt','title'=>'Instantanéité','text'=>'Information en temps réel'],
                ['icon'=>'fas fa-cog','title'=>'Rendement accru','text'=>'Automatisation des tâches'],
                ['icon'=>'fas fa-bullseye','title'=>'Cible atteinte','text'=>'Clients joignables 24h/24']
                ];
                @endphp

                @foreach($objectifs as $obj)
                <div class="col-lg-4 col-md-6">
                    <div class="card p-4 text-center hover-card shadow-sm h-100 fade-up">
                        <div class="icon-box">
                            <i class="{{ $obj['icon'] }} fa-2x text-primary"></i>
                        </div>
                        <h5 class="fw-bold mb-3">{{ $obj['title'] }}</h5>
                        <p class="text-muted mb-0">{{ $obj['text'] }}</p>
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
                    <img src="{{ asset('site/img/augmenter_rendement.jpg') }}" class="img-fluid rounded-4 shadow-lg" alt="Rendement">
                </div>
                <div class="col-md-6 fade-right">
                    <h2 class="section-title">Augmentez votre rendement avec le <span class="text-primary">SMS PROFESSIONNEL</span></h2>
                    <p class="lead text-muted">Le SMS est le canal le plus direct et le plus efficace pour toucher vos clients instantanément.</p>
                    <ul class="list-unstyled mb-4">
                        <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Communication instantanée</li>
                        <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Message personnalisé</li>
                        <li><i class="fas fa-check-circle text-primary me-2"></i> Diffusion massive rapide</li>
                    </ul>
                    <a href="{{ route('ticafrique.demande') }}" class="btn btn-main">Commander</a>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5" style="background: #f4f7f9;">
        <div class="container py-5">
            @if(session('success'))
            <div class="alert alert-success border-0 shadow-sm rounded-4 mb-4">
                <i class="fas fa-check-circle me-2"></i> {{ session('success') }}
            </div>
            @endif

            <div class="contact-modern-card shadow-lg">
                <div class="row g-0">
                    <div class="col-lg-7 p-4 p-md-5 fade-left">
                        <h3 class="fw-bold mb-4 text-primary">Transmettez-nous votre demande</h3>
                        <form method="post" action="{{ route('ticafrique.store_contact') }}">
                            @csrf
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <input type="text" name="nom" class="form-modern" placeholder="Nom complet" required>
                                </div>
                                <div class="col-md-6">
                                    <input type="tel" name="contact" class="form-modern" placeholder="Ex: 0705030303" required>
                                </div>
                                <div class="col-12">
                                    <input type="email" name="email" class="form-modern" placeholder="Adresse email" required>
                                </div>
                                <div class="col-12">
                                    <textarea name="message" rows="4" class="form-modern" placeholder="Votre projet..." required></textarea>
                                </div>
                            </div>

                            <div class="d-flex align-items-center gap-3 mt-3 p-3 bg-white rounded-3 border">
                                <label class="mb-0 text-dark">Sécurité : entrez le nombre : <strong class="text-primary fs-5">{{ session('captcha') }}</strong></label>
                                <input type="number" name="heure" class="form-control" style="width: 100px !important;" required>
                            </div>

                            <button type="submit" class="btn btn-main mt-4 w-100">Envoyer le message</button>
                        </form>
                    </div>

                    <div class="col-lg-5 p-5 text-white fade-right" style="background: var(--primary-blue);">
                        <h4 class="fw-bold mb-4">Contact direct</h4>
                        <div class="mb-4">
                            <p class="mb-3"><i class="fas fa-map-marker-alt me-2"></i> Abidjan Cocody Angré, Belle Fleur 3</p>
                            <p class="mb-3"><i class="fas fa-phone-alt me-2"></i> +225 25 22 00 20 77</p>
                            <p class="mb-3"><i class="fas fa-envelope me-2"></i> info@ticafrique.com</p>
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