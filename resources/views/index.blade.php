@extends('fronts.layouts.base')

@section('title', 'Accueil - TICAFRIQUE')

@section('content')

<style>
    /* ===================== VARIABLES & GLOBAL ===================== */
    :root {
        --primary-blue: #0b3c5d;
        /* Bleu Foncé Ticafrique */
        --accent-blue: #0d6efd;
        /* Bleu Action */
        --deep-black: #050505;
        /* Noir Profond */
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
        position: relative;
        margin-bottom: 1.5rem;
    }

    /* ===================== COMPOSANTS UNIFORMES ===================== */
    .hover-card {
        transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
        border-radius: 15px;
        border: none;
    }

    .hover-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 30px rgba(11, 60, 93, 0.1) !important;
    }

    .btn-main {
        background: var(--accent-blue) !important;
        color: var(--pure-white) !important;
        padding: 12px 30px !important;
        border-radius: 30px !important;
        font-weight: 600 !important;
        border: none !important;
        transition: all 0.3s ease;
    }

    .btn-main:hover {
        background: var(--primary-blue) !important;
        transform: scale(1.05);
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

    /* ===================== HERO STADIUM ===================== */
    .stadium-hero {
        position: relative;
        height: 85vh;
        min-height: 550px;
        display: flex;
        align-items: center;
        overflow: hidden;
        background-color: var(--deep-black);
    }

    .hero-bg-img {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        z-index: 0;
    }

    .stadium-hero::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(135deg, rgba(8, 42, 63, 0.85) 0%, rgba(5, 5, 5, 0.28) 100%);
        z-index: 1;
    }

    .hero-content-container {
        position: relative;
        z-index: 10;
        width: 100%;
    }

    .stadium-board {
        background: rgba(5, 5, 5, 0.9);
        border: 3px solid var(--primary-blue);
        border-radius: 20px;
        padding: 50px;
        box-shadow: 0 0 30px rgba(11, 60, 93, 0.4);
    }

    .digital-text {
        font-family: 'Saira', sans-serif;
        font-size: 2.2rem;
        color: var(--pure-white);
        text-transform: uppercase;
        font-weight: 800;
        line-height: 1.3;
        min-height: 160px;
    }

    .cursor {
        display: inline-block;
        width: 12px;
        height: 35px;
        background-color: var(--accent-blue);
        margin-left: 8px;
        animation: blink 0.6s infinite;
        vertical-align: middle;
    }

    @keyframes blink {
        50% {
            opacity: 0;
        }
    }

    @media (max-width: 768px) {
        .digital-text {
            font-size: 1.4rem;
            min-height: 220px;
        }

        .stadium-board {
            padding: 30px;
        }
    }
</style>

<main>
    <section class="stadium-hero">
        <img src="{{ asset('site/img/4.png') }}" class="hero-bg-img" alt="Background Ticafrique">
        <div class="container hero-content-container">
            <div class="row">
                <div class="col-lg-10 col-xl-9">
                    <div class="stadium-board animate__animated animate__fadeInLeft">
                        <div class="digital-text">
                            <span id="stadium-display"></span><span class="cursor"></span>
                        </div>
                        <div class="mt-5 d-flex gap-3 flex-wrap">
                            <a href="{{ route('ticafrique.demande')}}" class="btn btn-main btn-lg">Commander</a>
                            <!-- <a href="#services" class="btn btn-outline-light rounded-pill px-5 py-3 fw-bold">NOS SERVICES</a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="services" class="py-5 bg-white">
        <div class="container py-4">
            <div class="text-center mb-5" data-aos="fade-up">
                <span class="badge bg-light text-primary px-4 py-2 rounded-pill fw-bold mb-3">NOS OBJECTIFS</span>
                <h2 class="section-title">Comment booster votre communication ?</h2>
            </div>

            <div class="row g-4">
                @php
                $objectifs = [
                ['img'=>'5.png','title'=>'Rassurer et fidéliser','text'=>'Privilégiez une relation de proximité avec vos clients.'],
                ['img'=>'6.png','title'=>'Promouvoir','text'=>'Informez votre cible des arrivages et des promotions.'],
                ['img'=>'7.png','title'=>'Réduire les coûts','text'=>'Optimisez vos budgets sans sacrifier la qualité.'],
                ['img'=>'8.jpg','title'=>'Instantannéité','text'=>'Informez vos partenaires des évènements en temps réel.'],
                ['img'=>'9.png','title'=>'Rendement Accru','text'=>'Automatisez vos tâches quotidiennes efficacement.'],
                ['img'=>'10.png','title'=>'Cible Atteinte','text'=>'Une relation directe avec une cible joignable 24h/24.']
                ];
                @endphp

                @foreach($objectifs as $obj)
                <div class="col-lg-4 col-md-6" data-aos="zoom-in">
                    <div class="card h-100 p-4 text-center hover-card shadow-sm">
                        <div class="icon-box">
                            <img src="{{ asset('site/img/'.$obj['img']) }}" width="40" class="rounded-circle">
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
                <div class="col-md-6" data-aos="fade-right">
                    <img src="{{ asset('site/img/augmenter_rendement.jpg') }}" class="img-fluid rounded-4 shadow-lg" alt="Rendement">
                </div>
                <div class="col-md-6" data-aos="fade-left">
                    <h2 class="section-title">Augmentez votre rendement avec le <span class="text-primary">SMS PROFESSIONNEL</span></h2>
                    <p class="text-muted lead">Le SMS est l'outil le plus puissant pour atteindre directement votre cible en quelques secondes.</p>

                    <ul class="list-unstyled mt-4">
                        <li class="mb-3 d-flex align-items-center"><i class="bi bi-check-circle-fill text-primary me-3 fs-5"></i> Relation instantanée avec vos partenaires</li>
                        <li class="mb-3 d-flex align-items-center"><i class="bi bi-check-circle-fill text-primary me-3 fs-5"></i> Communication directe et personnalisée</li>
                        <li class="mb-3 d-flex align-items-center"><i class="bi bi-check-circle-fill text-primary me-3 fs-5"></i> Diffusion massive ultra-rapide</li>
                    </ul>

                    <div class="mt-4">
                        <a href="{{ route('ticafrique.demande') }}" class="btn btn-main btn-lg px-5">Commander maintenant</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-white">
        <div class="container py-4">
            <div class="text-center mb-5" data-aos="fade-up">
                <h2 class="section-title">Pourquoi choisir TICAFRIQUE ?</h2>
                <p class="text-primary fw-bold">Votre succès numérique est notre priorité</p>
            </div>

            <div class="row g-4">
                @php
                $atouts = [
                ['t'=>'Rapidité','d'=>'Compte créé en 10 minutes avec un conseiller dédié.'],
                ['t'=>'Proximité','d'=>'Une équipe locale qui comprend vos défis réels.'],
                ['t'=>'Clé en main','d'=>'Tout le nécessaire pour une prise en main immédiate.'],
                ['t'=>'Assistance','d'=>'Un support technique disponible pour toutes vos attentes.']
                ];
                @endphp
                @foreach($atouts as $atout)
                <div class="col-md-3" data-aos="fade-up">
                    <div class="p-4 bg-light border-start border-4 border-primary h-100 rounded-end">
                        <h5 class="fw-bold">{{ $atout['t'] }}</h5>
                        <p class="small text-muted mb-0">{{ $atout['d'] }}</p>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="mt-5 bg-blue-dark text-white p-4 rounded-4 text-center shadow" style="background: var(--primary-blue)">
                <p class="lead mb-0 fw-bold">Prêt à toucher des milliers de clients ? Contactez-nous.</p>
            </div>
        </div>
    </section>

    <section class="py-5 bg-light">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-md-6" data-aos="fade-right">
                    <h2 class="section-title">Voulez-vous tout savoir sur le <span class="text-primary">SMS MARKETING ?</span></h2>
                    <p class="text-muted fs-5">Laissez-nous un message, nos experts vous rappellent gratuitement sous 24h.</p>
                </div>

                <div class="col-md-6" data-aos="fade-left">
                    <div class="card border-0 shadow-lg p-4 rounded-4">
                        <form id="contactForm" method="post" action="{{ route('ticafrique.store_contact') }}">
                            <div class="mb-3">
                                <input type="text" class="form-control form-control-lg border-light bg-light" placeholder="Nom complet">
                            </div>
                            <div class="mb-3">
                                <input type="text" class="form-control form-control-lg border-light bg-light" placeholder="Téléphone">
                            </div>
                            <div class="mb-3">
                                <input type="email" class="form-control form-control-lg border-light bg-light" placeholder="Email professionnel">
                            </div>
                            <div class="mb-3">
                                <textarea class="form-control form-control-lg border-light bg-light" rows="3" placeholder="Votre projet..."></textarea>
                            </div>
                            <button type="submit" class="btn btn-main w-100 py-3 fs-5">ENVOYER LE MESSAGE</button>
                            <div class="text-center mt-4">
                                <a href="tel:+2252522002077" class="text-primary fw-bold text-decoration-none">
                                    <i class="bi bi-telephone-fill me-2"></i> +225 25 22 00 20 77
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Animation Typewriter Stadium
        const textElement = document.getElementById('stadium-display');
        const fullText = "Avec le SMS professionnel de TICAFRIQUE, bénéficiez de nouveaux canaux de communication sur la plateforme de TICAFRIQUE et améliorez votre productivité.";
        let charIndex = 0;

        function typeStadiumEffect() {
            if (charIndex < fullText.length) {
                textElement.textContent += fullText.charAt(charIndex);
                charIndex++;
                setTimeout(typeStadiumEffect, 40);
            } else {
                gsap.to(".stadium-board", {
                    borderColor: "#ffffff",
                    duration: 0.8,
                    repeat: 3,
                    yoyo: true,
                    ease: "power2.inOut"
                });
            }
        }

        // Lancement avec un délai pour laisser le preloader finir
        setTimeout(typeStadiumEffect, 1200);
    });
</script>

@endsection