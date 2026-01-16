@extends('fronts.layouts.base')

@section('title', 'SMS')

@section('content')
<style>
    /* =========================
       SECTION SERVICE SMS PRO
    ========================= */
    .about-section {
        padding: 100px 0 !important;
        background-color: var(--pure-white) !important;
    }

    /* Style du badge supérieur */
    .service-badge {
        display: inline-block !important;
        background-color: rgba(11, 60, 93, 0.05) !important;
        color: var(--primary-blue) !important;
        font-weight: 700 !important;
        font-size: 0.85rem !important;
        padding: 6px 16px !important;
        border-radius: 4px !important;
        margin-bottom: 20px !important;
        text-transform: uppercase !important;
        letter-spacing: 1px !important;
    }

    .about-section h3 {
        font-size: 2.8rem !important;
        font-weight: 800 !important;
        color: var(--dark-blue) !important;
        margin-bottom: 25px !important;
        line-height: 1.2 !important;
    }

    /* Texte descriptif */
    .service-description {
        color: #555 !important;
        font-size: 1.05rem !important;
        line-height: 1.8 !important;
        margin-bottom: 30px !important;
    }

    /* Liste de fonctionnalités moderne */
    .features-list {
        padding: 0 !important;
        margin-bottom: 40px !important;
        list-style: none !important;
    }

    .features-list li {
        position: relative !important;
        padding-left: 35px !important;
        margin-bottom: 15px !important;
        font-weight: 500 !important;
        color: var(--dark-blue) !important;
        display: flex !important;
        align-items: center !important;
    }

    .features-list li::before {
        content: "\f633" !important;
        /* Icône Check Bootstrap */
        font-family: "bootstrap-icons" !important;
        position: absolute !important;
        left: 0 !important;
        color: var(--primary-blue) !important;
        font-size: 1.2rem !important;
        font-weight: bold !important;
    }

    /* Image avec effet de profondeur */
    .about-image-wrapper {
        position: relative !important;
        z-index: 1 !important;
    }

    .about-image-wrapper img {
        border-radius: 20px !important;
        box-shadow: 0 30px 60px rgba(0, 0, 0, 0.12) !important;
        transition: var(--transition) !important;
    }

    .about-image-wrapper:hover img {
        transform: translateY(-10px) !important;
    }

    /* Décoration géométrique derrière l'image */
    .about-image-wrapper::after {
        content: "" !important;
        position: absolute !important;
        width: 80% !important;
        height: 80% !important;
        background: var(--primary-blue) !important;
        bottom: -20px !important;
        right: -20px !important;
        z-index: -1 !important;
        border-radius: 20px !important;
        opacity: 0.1 !important;
    }

    /* Bouton spécifique */
    .btn-commander {
        background-color: var(--dark-blue) !important;
        color: var(--white) !important;
        padding: 16px 35px !important;
        border-radius: 8px !important;
        font-weight: 700 !important;
        text-transform: uppercase !important;
        letter-spacing: 1px !important;
        display: inline-flex !important;
        align-items: center !important;
        gap: 10px !important;
        box-shadow: 0 10px 20px rgba(8, 42, 63, 0.15) !important;
    }

    .btn-commander:hover {
        background-color: var(--primary-blue) !important;
        color: var(--white) !important;
        transform: scale(1.03) !important;
    }

    @media (max-width: 991px) {
        .about-section {
            padding: 60px 0 !important;
        }

        .about-image-wrapper {
            margin-top: 50px !important;
        }

        .about-section h3 {
            font-size: 2rem !important;
        }
    }
</style>

<section class="about-section">
    <div class="container">
        <div class="row align-items-center">


            <div class="col-lg-6 order-1 order-lg-2 mb-5 mb-lg-0" data-aos="fade-left">
                <div class="about-image-wrapper ms-lg-5">
                    <img src="{{ asset('site/img/7.jpg') }}" alt="Solutions SMS Ticafrique" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-6 order-2 order-lg-1" data-aos="fade-right">
                <span class="service-badge">Solutions SMS</span>
                <!-- <h3>La stratégie de communication <br><span class="text-primary">la plus efficace.</span></h3> -->

                <div class="service-description">
                    <p>
                        Le SMS professionnel de <strong>TICAFRIQUE</strong> est un outil conçu avec des fonctionnalités pratiques et évolutives, intégré au sein d'une plateforme haute sécurité.
                    </p>
                    <p>
                        Qu'il s'agisse de SMS marketing, en masse ou transactionnel, améliorez votre productivité et restez proche de vos cibles grâce à nos nouveaux canaux de diffusion.
                    </p>
                </div>

                <ul class="features-list">
                    <li>Simple à utiliser et intuitif</li>
                    <li>Intégration rapide avec notre API robuste</li>
                    <li>Suivi en temps réel et statistiques détaillées</li>
                    <li>Sensibiliser vos prospects, fidéliser vos clients et rester en contact avec votre cible</li>
                </ul>

                <a href="{{ route('ticafrique.demande') }}" class="btn-commander text-decoration-none">
                    <span>Commander</span>
                    <i class="bi bi-arrow-right-short fs-4"></i>
                </a>
            </div>


        </div>
    </div>
</section>
@endsection