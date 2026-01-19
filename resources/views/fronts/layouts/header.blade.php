<style>
    /* =========================
       VARIABLES & CORE
    ========================= */
    :root {
        --primary-blue: #2e5281 !important;
        --dark-blue: #050b24 !important;
        /* Corrigé en bleu très sombre */
        --black: #111111 !important;
        --white: #ffffff !important;
        --transition-fast: all 0.3s ease !important;
    }

    /* =========================
       NAVBAR MODERNISÉE
    ========================= */
    .header-main {
        transition: var(--transition-fast) !important;
        border-bottom: 1px solid rgba(0, 0, 0, 0.05) !important;
    }

    .navbar {
        background-color: var(--white) !important;
        padding: 0.8rem 0 !important;
    }

    /* Effet Sticky au scroll (Optionnel via JS plus tard) */
    .sticky-top {
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08) !important;
    }

    .navbar-brand img {
        transition: transform 0.3s ease !important;
    }

    .navbar-brand:hover img {
        transform: scale(1.05) !important;
    }

    /* Liens de navigation */
    .navbar .nav-link {
        font-family: 'Inter', sans-serif !important;
        font-weight: 600 !important;
        color: var(--black) !important;
        font-size: 0.95rem !important;
        padding: 0.5rem 1rem !important;
        position: relative !important;
        transition: var(--transition-fast) !important;
    }

    /* Animation du soulignement au survol */
    .navbar .nav-link::after {
        content: '' !important;
        position: absolute !important;
        width: 0 !important;
        height: 2px !important;
        bottom: 0 !important;
        left: 1rem !important;
        background-color: var(--primary-blue) !important;
        transition: width 0.3s ease !important;
    }

    .navbar .nav-link:hover::after,
    .navbar .nav-link.active::after {
        width: calc(100% - 2rem) !important;
    }

    .navbar .nav-link:hover,
    .navbar .nav-link.active {
        color: var(--primary-blue) !important;
    }

    /* =========================
       BOUTON PORTAIL (MODERNE)
    ========================= */
    .btn-portail {
        background-color: var(--accent-blue) !important;
        color: var(--white) !important;
        border: none !important;
        padding: 0.7rem 1.8rem !important;
        border-radius: 8px !important;
        font-weight: 600 !important;
        letter-spacing: 0.5px !important;
        box-shadow: 0 4px 15px rgba(5, 11, 36, 0.2) !important;
        transition: var(--transition-fast) !important;
    }

    .btn-portail:hover {
        background-color: var(--primary-blue) !important;
        transform: translateY(-2px) !important;
        box-shadow: 0 6px 20px rgba(1, 29, 154, 0.3) !important;
        color: var(--white) !important;
    }

    /* =========================
       MOBILE OPTIMIZATION
    ========================= */
    @media (max-width: 991px) {
        .navbar-collapse {
            background: var(--white) !important;
            padding: 1.5rem !important;
            border-radius: 15px !important;
            margin-top: 1rem !important;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1) !important;
        }

        .navbar .nav-link::after {
            display: none !important;
        }

        .nav-item {
            text-align: center !important;
            margin-bottom: 0.5rem !important;
        }

        .btn-portail {
            width: 100% !important;
            margin-top: 10px !important;
        }
    }
</style>

<header class="header-main sticky-top">
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="{{route('ticafrique.index')}}">
                <img src="{{ asset('site/img/logo.jpg') }}" alt="Logo Ticafrique" width="140" class="img-fluid">
            </a>

            <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="mainNavbar">
                <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-2">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('accueil') ? 'active' : '' }}" href="{{route('ticafrique.index')}}">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('ticafrique.sms') }}">SMS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('ticafrique.way') }}">2Way</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('ticafrique.sms_voice') }}">SMS Vocal</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('nous_contacter') ? 'active' : '' }}" href="{{ route('ticafrique.contact') }}">Contact</a>
                    </li>
                    <li class="nav-item ms-lg-3">
                        <a class="btn btn-portail px-4" href="https://ticafrique.ci/" target="_blank">
                            <i class="bi bi-person-circle me-2"></i>Portail
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>