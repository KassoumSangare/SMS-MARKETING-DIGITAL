@extends('fronts.layouts.base')

@section('title', 'Accueil - TICAFRIQUE')

@section('content')

<style>
    /* ===================== VARIABLES & GLOBAL ===================== */
    :root {
        --primary-blue: #0b3c5d;
        --accent-blue: #0d6efd;
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

    /* ===================== HERO ===================== */
    .stadium-hero {
        position: relative;
        min-height: 80vh;
        display: flex;
        align-items: center;
        background-color: #01146cbb;
        padding: 60px 0;
        overflow: hidden;
    }

    .hero-bg-container {
        position: absolute;
        top: 0;
        right: 0;
        width: 50%;
        height: 100%;
        z-index: 1;
    }

    .hero-bg-img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        mask-image: linear-gradient(to left, black 70%, transparent 100%);
        -webkit-mask-image: linear-gradient(to left, black 70%, transparent 100%);
    }

    .hero-content-container {
        position: relative;
        z-index: 10;
    }

    .stadium-board {
        background: rgba(5, 5, 5, 0.85);
        border-left: 5px solid var(--accent-blue);
        border-radius: 10px;
        padding: 40px;
        backdrop-filter: blur(5px);
    }

    .digital-text-static {
        font-family: 'Saira', sans-serif;
        font-size: 2.5rem;
        color: var(--pure-white);
        text-transform: uppercase;
        font-weight: 800;
        line-height: 1.2;
    }

    /* ===================== CARTES ===================== */
    .hover-card {
        transition: all 0.4s ease;
        border-radius: 15px;
        border: none;
    }

    .hover-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 30px rgba(11, 60, 93, 0.15);
    }

    .icon-box {
        width: 70px;
        height: 70px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        background: rgba(13, 110, 253, 0.08);
        margin: 0 auto 1.5rem;
    }

    .btn-main {
        background: var(--accent-blue);
        color: var(--pure-white);
        padding: 15px 40px;
        border-radius: 30px;
        font-weight: 600;
        border: none;
    }

    /* ===================== ANIMATIONS ===================== */
    .fade-up {
        opacity: 0;
        transform: translateY(40px);
        transition: opacity .8s ease, transform .8s ease;
    }

    .fade-left {
        opacity: 0;
        transform: translateX(-40px);
        transition: opacity .8s ease, transform .8s ease;
    }

    .fade-right {
        opacity: 0;
        transform: translateX(40px);
        transition: opacity .8s ease, transform .8s ease;
    }

    .show {
        opacity: 1;
        transform: translate(0, 0);
    }

    .btn-pulse {
        animation: pulse 2.5s infinite;
    }

    @keyframes pulse {
        0% {
            box-shadow: 0 0 0 0 rgba(13, 110, 253, .6);
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
            opacity: 0.4;
        }

        .digital-text-static {
            font-size: 1.8rem;
        }
    }
</style>

<main>

    <!-- ===================== HERO ===================== -->
    <section class="stadium-hero">
        <div class="hero-bg-container">
            <img src="{{ asset('site/img/bg_home.jpg') }}" class="hero-bg-img">
        </div>

        <div class="container hero-content-container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="stadium-board fade-left">
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

    <!-- ===================== OBJECTIFS ===================== -->
    <section class="py-5 bg-white">
        <div class="container py-4">
            <div class="text-center mb-5 fade-up">
                <span class="badge bg-light text-primary px-4 py-2 rounded-pill fw-bold">NOS OBJECTIFS</span>
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
                <div class="col-md-4">
                    <div class="card p-4 text-center hover-card shadow-sm fade-up">
                        <div class="icon-box">
                            <img src="{{ asset('site/img/'.$obj['img']) }}" width="40">
                        </div>
                        <h6 class="fw-bold">{{ $obj['title'] }}</h6>
                        <p class="text-muted small">{{ $obj['text'] }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- ===================== RENDEMENT ===================== -->
    <section class="py-5 bg-light">
        <div class="container py-4">
            <div class="row align-items-center g-5">
                <div class="col-md-6 fade-left">
                    <img src="{{ asset('site/img/augmenter_rendement.jpg') }}" class="img-fluid rounded-4 shadow-lg">
                </div>
                <div class="col-md-6 fade-right">
                    <h2 class="section-title">
                        Augmentez votre rendement avec le <span class="text-primary">SMS PROFESSIONNEL</span>
                    </h2>
                    <p class="lead text-muted">
                        Le SMS est le canal le plus direct et le plus efficace.
                    </p>
                    <ul class="list-unstyled">
                        <li class="mb-2">✔ Communication instantanée</li>
                        <li class="mb-2">✔ Message personnalisé</li>
                        <li class="mb-2">✔ Diffusion massive rapide</li>
                    </ul>
                    <a href="{{ route('ticafrique.demande') }}" class="btn btn-main mt-3">Commander</a>
                </div>
            </div>
        </div>
    </section>

</main>

<!-- ===================== JS ANIMATIONS ===================== -->
<script>
    document.addEventListener('DOMContentLoaded', () => {

        const observer = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('show');
                }
            });
        }, {
            threshold: 0.15
        });

        document.querySelectorAll('.fade-up, .fade-left, .fade-right')
            .forEach(el => observer.observe(el));

    });
</script>

@endsection