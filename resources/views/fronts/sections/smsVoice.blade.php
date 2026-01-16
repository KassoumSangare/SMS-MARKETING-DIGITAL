@extends('fronts.layouts.base')

@section('title', 'SMS Vocal | Communication par la Voix')

@section('content')
<style>
    /* =========================
       SECTION SMS VOCAL PRO
    ========================= */
    .section-vocal {
        padding: 120px 0 !important;
        background-color: var(--pure-white) !important;
        position: relative !important;
    }

    /* Badge spécifique Vocal */
    .badge-vocal {
        display: inline-flex !important;
        align-items: center !important;
        gap: 8px !important;
        background-color: rgba(1, 29, 154, 0.05) !important;
        color: var(--primary-blue) !important;
        font-weight: 700 !important;
        font-size: 0.85rem !important;
        padding: 8px 18px !important;
        border-radius: 50px !important;
        margin-bottom: 25px !important;
        text-transform: uppercase !important;
    }

    .section-vocal h3 {
        font-size: 3rem !important;
        font-weight: 800 !important;
        color: var(--dark-blue) !important;
        line-height: 1.1 !important;
        margin-bottom: 30px !important;
    }

    .vocal-intro {
        font-size: 1.1rem !important;
        color: #555 !important;
        line-height: 1.8 !important;
        margin-bottom: 35px !important;
        border-left: 4px solid var(--primary-blue) !important;
        padding-left: 20px !important;
    }

    /* Liste de points forts style "Audio Wave" */
    .vocal-features {
        list-style: none !important;
        padding: 0 !important;
        margin-bottom: 45px !important;
    }

    .vocal-features li {
        display: flex !important;
        align-items: flex-start !important;
        gap: 15px !important;
        margin-bottom: 20px !important;
        font-weight: 500 !important;
        color: var(--dark-blue) !important;
    }

    .vocal-features li i {
        color: var(--primary-blue) !important;
        font-size: 1.4rem !important;
        background: var(--soft-white) !important;
        width: 40px !important;
        height: 40px !important;
        display: flex !important;
        align-items: center !important;
        justify-content: center !important;
        border-radius: 10px !important;
        flex-shrink: 0 !important;
    }

    /* Image avec effet "Glow" */
    .vocal-img-wrapper {
        position: relative !important;
    }

    .vocal-img-wrapper img {
        border-radius: 25px !important;
        box-shadow: 0 40px 80px rgba(1, 29, 154, 0.1) !important;
        z-index: 2 !important;
        position: relative !important;
    }

    /* Bouton Vocal */
    .btn-vocal {
        background-color: var(--dark-blue) !important;
        color: var(--white) !important;
        padding: 16px 40px !important;
        border-radius: 12px !important;
        font-weight: 700 !important;
        text-transform: uppercase !important;
        transition: all 0.3s ease !important;
        border: none !important;
        display: inline-flex !important;
        align-items: center !important;
        gap: 12px !important;
    }

    .btn-vocal:hover {
        background-color: var(--primary-blue) !important;
        transform: translateY(-5px) !important;
        box-shadow: 0 15px 30px rgba(1, 29, 154, 0.2) !important;
        color: var(--white) !important;
    }

    @media (max-width: 991px) {
        .section-vocal {
            padding: 70px 0 !important;
        }

        .section-vocal h3 {
            font-size: 2.5rem !important;
        }
    }
</style>

<section class="section-vocal">
    <div class="container">
        <div class="row align-items-center">

            <div class="col-lg-6 order-2 order-lg-1" data-aos="fade-up">
                <div class="badge-vocal">
                    <i class="bi bi-mic-fill"></i>
                    <span>Smart Communication</span>
                </div>

                <h3>SMS Vocal <br></h3>

                <div class="vocal-intro">
                  SMS vocal de TICAFRIQUE, une autre façon plus smart de communiquer.
Rédigez votre message et TICAFRIQUE le converti en message vocal ou enregistrez votre propre voix et
TICAFRIQUE s’occupe de la transmission à votre interlocuteur via un simple appel.
Les points forts de la solution :
                </div>

                <ul class="vocal-features">
                    <li>
                        <i class="bi bi-broadcast"></i>
                        <span>Délivrabilité optimale sur téléphones fixes et mobiles.</span>
                    </li>
                    <li>
                        <i class="bi bi-arrow-repeat"></i>
                        <span>Système de rappel automatique en cas de non-décrochage.</span>
                    </li>
                    <li>
                        <i class="bi bi-translate"></i>
                        <span>Diffusion en langues locales et internationales pour une proximité maximale.</span>
                    </li>
                </ul>

                <a href="{{ route('ticafrique.demande') }}" class="btn-vocal text-decoration-none">
                    <span>Commander</span>
                    <!-- <i class="bi bi-play-circle-fill fs-5"></i> -->
                </a>
            </div>

            <div class="col-lg-6 order-1 order-lg-2 mb-5 mb-lg-0" data-aos="zoom-in">
                <div class="vocal-img-wrapper ps-lg-5">
                    <img src="{{ asset('site/img/voice.jpg') }}" alt="SMS Vocal Ticafrique" class="img-fluid">
                </div>
            </div>

        </div>
    </div>
</section>
@endsection