@extends('fronts.layouts.base')

@section('title', 'SMS 2WAY | Communication Bidirectionnelle')

@section('content')
<style>
    /* =========================
       SECTION 2-WAY SMS PRO
    ========================= */
    .section-2way {
        padding: 100px 0 !important;
        background-color: var(--soft-white) !important;
        /* Léger gris pour différencier du blanc */
    }

    /* Badge Style */
    .badge-2way {
        display: inline-block !important;
        background-color: var(--dark-blue) !important;
        color: var(--white) !important;
        font-weight: 700 !important;
        font-size: 0.8rem !important;
        padding: 5px 15px !important;
        border-radius: 50px !important;
        margin-bottom: 20px !important;
        letter-spacing: 2px !important;
    }

    .section-2way h3 {
        font-size: 2.8rem !important;
        font-weight: 800 !important;
        color: var(--dark-blue) !important;
        margin-bottom: 30px !important;
        line-height: 1.2 !important;
    }

    .text-content-2way {
        color: #444 !important;
        font-size: 1.05rem !important;
        line-height: 1.7 !important;
        margin-bottom: 35px !important;
    }

    /* Points forts - Style Cards minimalistes */
    .highlight-grid {
        display: grid !important;
        grid-template-columns: repeat(2, 1fr) !important;
        gap: 15px !important;
        margin-bottom: 40px !important;
    }

    .highlight-item {
        background: var(--white) !important;
        padding: 15px !important;
        border-radius: 12px !important;
        border: 1px solid rgba(0, 0, 0, 0.05) !important;
        font-weight: 600 !important;
        font-size: 0.9rem !important;
        color: var(--dark-blue) !important;
        display: flex !important;
        align-items: center !important;
        gap: 10px !important;
        transition: var(--transition) !important;
    }

    .highlight-item i {
        color: var(--primary-blue) !important;
        font-size: 1.2rem !important;
    }

    .highlight-item:hover {
        transform: translateY(-3px) !important;
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.05) !important;
        border-color: var(--primary-blue) !important;
    }

    /* Image Wrapper */
    .image-2way-container {
        position: relative !important;
    }

    .image-2way-container img {
        border-radius: 30px !important;
        box-shadow: 20px 20px 60px rgba(0, 0, 0, 0.1) !important;
    }

    /* Bouton spécifique */
    .btn-2way {
        background: linear-gradient(135deg, var(--primary-blue) 0%, var(--dark-blue) 100%) !important;
        color: var(--white) !important;
        padding: 18px 40px !important;
        border-radius: 10px !important;
        font-weight: 700 !important;
        display: inline-block !important;
        box-shadow: 0 10px 25px rgba(1, 29, 154, 0.2) !important;
        transition: var(--transition) !important;
    }

    .btn-2way:hover {
        transform: scale(1.05) !important;
        color: var(--white) !important;
        box-shadow: 0 15px 30px rgba(1, 29, 154, 0.3) !important;
    }

    @media (max-width: 991px) {
        .highlight-grid {
            grid-template-columns: 1fr !important;
        }

        .section-2way h3 {
            font-size: 2.2rem !important;
        }
    }
</style>

<section class="section-2way">
    <div class="container">
        <div class="row align-items-center">

            <div class="col-lg-6 mb-5 mb-lg-0" data-aos="zoom-in-right">
                <div class="image-2way-container pe-lg-5">
                    <img src="{{ asset('site/img/away.jpg') }}" alt="SMS 2WAY Ticafrique" class="img-fluid">
                </div>
            </div>

            <div class="col-lg-6" data-aos="fade-left">
                <span class="badge-2way">Dialogue Interactif</span>
                <h3>SMS Bidirectionnel <br><span class="text-secondary">Engagez la conversation.</span></h3>

                <div class="text-content-2way">
                    <p>
                        Le <strong>SMS 2-WAY</strong> de TICAFRIQUE permet d'établir un véritable dialogue avec vos correspondants via des numéros locaux ou virtuels.
                    </p>
                    <p class="small text-muted">
                        Permettez à vos clients de répondre instantanément et traitez les retours de façon automatique, sans aucun surcoût sur le tarif d'envoi initial.
                    </p>
                </div>

                <div class="highlight-grid">
                    <div class="highlight-item">
                        <i class="bi bi-gear-fill"></i> Facile à installer
                    </div>
                    <div class="highlight-item">
                        <i class="bi bi-cpu-fill"></i> Facilement combiné avec SMS (MT)
                    </div>
                    <div class="highlight-item">
                        <i class="bi bi-chat-dots-fill"></i> Canal de communication interactive
                    </div>
                    <div class="highlight-item">
                        <i class="bi bi-phone-fill"></i> Accessible depuis tous les téléphones mobiles dans le réseau GSM.
                    </div>
                </div>

                <a href="{{ route('ticafrique.demande') }}" class="btn-2way text-decoration-none">
                    Commander
                </a>
            </div>

        </div>
    </div>
</section>
@endsection