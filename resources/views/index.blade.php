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

    img {
        overflow-clip-margin: content-box;
        overflow: clip;
    }



    a {
        text-decoration: none;
    }

    body {
        color: var(--deep-black);
        background-color: #fff;
    }

    .section-title {
        color: var(--primary-blue);
        font-weight: 700;
        margin-bottom: 1.5rem;
    }

    /* ===================== SECTION STADIUM (HERO) OPTIMISÉE ===================== */
    .stadium-hero {
        background-color: #eaf6ff;
        padding: 80px 0;
    }

    /* Conteneur du texte : s'étire sur toute la hauteur */
    .stadium-board {
        background: #eaf6ff;
        border-radius: 20px 0 0 20px;
        padding: 50px;
        height: 100%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        z-index: 10;

    }

    .digital-text-static {
        font-size: 2rem;
        color: var(--primary-blue);
        text-transform: uppercase;
        font-weight: 800;
        line-height: 1.2;
    }

    /* Conteneur de l'image : s'étire sur toute la hauteur */
    .hero-img-side {
        height: 100%;
    }

    .hero-img-side img {
        max-width: 100%;
        height: 100%;
        object-fit: cover;
        /* Remplit tout l'espace sans déformation */
        border-radius: 0 20px 20px 0;
        /* Arrondi à droite */
       
    }

    /* ===================== BOUTONS & CARTES ===================== */
    .btn-main {
        background: var(--accent-blue);
        color: var(--pure-white);
        padding: 16px 40px;
        border-radius: 50px;
        font-weight: 600;
        border: none;
        transition: 0.3s;
        display: inline-block;
    }

    .btn-main:hover {
        background: var(--primary-blue);
        color: white;
        transform: translateY(-3px);
        box-shadow: 0 10px 20px rgba(38, 84, 145, 0.3);
    }

    .hover-card {
        transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
        border-radius: 20px;
        border: none;
        background: #fff;
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

    /* ===================== CONTACT & STATS ===================== */
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

    .pre-footer-cta {
        background: linear-gradient(135deg, var(--primary-blue) 0%, #2e5281 100%);
        padding: 80px 0;
        color: white;
    }

    .stat-number {
        font-size: 3rem;
        font-weight: 800;
        color: #ffffff;
        display: block;
    }

    /* ===================== ANIMATIONS ===================== */
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
            border-radius: 20px;
            margin-bottom: 0;
            padding: 30px;
        }

        .hero-img-side img {
            border-radius: 20px;
            height: 300px;
            /* Hauteur fixe sur mobile */
            margin-top: 20px;
        }

        .digital-text-static {
            font-size: 1.8rem;
        }
    }
</style>

<main>
    <section class="stadium-hero">
        <div class="container">
            <div class="row align-items-stretch g-0">
                <div class="col-lg-6 fade-left">
                    <div class="stadium-board">
                        <h1 class="digital-text-static">
                            Avec le SMS professionnel de TICAFRIQUE, améliorez votre productivité.
                        </h1>
                        <p class="text-muted mt-4 fs-5">
                            Bénéficiez de nouveaux canaux de communication performants pour toucher vos cibles.
                        </p>
                        <div class="mt-2">
                            <a href="{{ route('ticafrique.demande') }}" class="btn btn-main">
                                Commander Maintenant
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 fade-right">
                    <div class="hero-img-side">
                        <img src="{{ asset('site/img/new_bg.png') }}" alt="Background Ticafrique">
                    </div>
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
                            <i class="{{ $obj['icon'] }} fa-2x" style="color: #265491;"></i>
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
                    <h2 class="section-title">Augmentez votre rendement avec le <span class="text-dark">SMS PROFESSIONNEL</span></h2>
                    <p class="lead text-muted">Le SMS est le canal le plus direct et le plus efficace pour toucher vos clients instantanément.</p>
                    <ul class="list-unstyled mb-4">
                        <li class="mb-2"><i class="fas fa-check-circle me-2" style="color: #265491;"></i> Communication instantanée</li>
                        <li class="mb-2"><i class="fas fa-check-circle me-2" style="color: #265491;"></i> Message personnalisé</li>
                        <li><i class="fas fa-check-circle me-2" style="color: #265491;"></i> Diffusion massive rapide</li>
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
                        <h3 class="fw-bold mb-4 text-dark">Transmettez-nous votre demande</h3>
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
                                <label class="mb-0 text-dark">Sécurité : <strong class="text-primary">{{ session('captcha') }}</strong></label>
                                <input type="number" name="heure" class="form-control" style="width: 100px;" required>
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
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3972.3361474582!2d-3.9856!3d5.3484!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfc1934983057e93%3A0x6a0a000000000000!2sCocody%2C%20Abidjan!5e0!3m2!1sfr!2sci!4v1620000000000!5m2!1sfr!2sci"
                            width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        <hr class="opacity-25">
                        <p class="small text-white-50">Nos experts vous répondent sous 24h ouvrées.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pre-footer-cta">
        <div class="container">
            <div class="row g-4 text-center justify-content-center fade-up">
                <div class="col-6 col-md-3">
                    <span class="stat-number">98%</span>
                    <span class="stat-label text-uppercase small">Taux d'ouverture</span>
                </div>
                <div class="col-6 col-md-3">
                    <span class="stat-number">10M+</span>
                    <span class="stat-label text-uppercase small">SMS envoyés</span>
                </div>
                <div class="col-6 col-md-3">
                    <span class="stat-number">24/7</span>
                    <span class="stat-label text-uppercase small">Support Technique</span>
                </div>
                <div class="col-6 col-md-3">
                    <span class="stat-number">100%</span>
                    <span class="stat-label text-uppercase small">Sécurisé</span>
                </div>
            </div>

            <div class="text-center mt-5 fade-up">
                <div class="p-5 rounded-4" style="background: rgba(255,255,255,0.1); backdrop-filter: blur(10px);">
                    <h2 class="fw-bold mb-3">Prêt à transformer votre communication ?</h2>
                    <div class="d-flex flex-wrap justify-content-center gap-3 mt-4">
                        <a href="{{ route('ticafrique.demande') }}" class="btn btn-light px-5 py-3 rounded-pill fw-bold">Démarrer mon projet</a>
                        <a href="tel:+2252522002077" class="btn btn-outline-light px-5 py-3 rounded-pill fw-bold">Nous appeler</a>
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