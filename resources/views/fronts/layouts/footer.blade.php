<style>
    /* =========================
       FOOTER STYLE - CLEAN WHITE
    ========================= */
    .footer-main {
        background-color: #1f2937 !important;
        color: var(--pure-white) !important;
        padding: 60px 0 30px 0 !important;
        border-top: 1px solid rgba(0, 0, 0, 0.05) !important;
        font-family: 'Inter', sans-serif !important;
    }

    .footer-title {
        color: var(--pure-white) !important;
        font-family: 'Saira', sans-serif !important;
        font-weight: 700 !important;
        font-size: 1.1rem !important;
        text-transform: uppercase !important;
        letter-spacing: 1px !important;
        margin-bottom: 25px !important;
    }

    .footer-link {
        color: var(--pure-white) !important;
        transition: var(--transition) !important;
        display: block !important;
        margin-bottom: 12px !important;
        font-size: 0.95rem !important;
        font-weight: 500 !important;
    }

    .footer-link:hover {
        color:#d1d1d1 !important;
        padding-left: 5px !important;
    }

    /* Icônes réseaux sociaux version sobre */
    .social-icon {
        width: 40px !important;
        height: 40px !important;
        background-color: var(--accent-blue) !important;
        display: inline-flex !important;
        align-items: center !important;
        justify-content: center !important;
        border-radius: 8px !important;
        color: white !important;
        margin-right: 10px !important;
        transition: var(--transition) !important;
        border: 1px solid rgba(0, 0, 0, 0.05) !important;
    }

    .social-icon:hover {
        background-color: white !important;
        color: var(--primary-blue) !important;
        transform: translateY(-3px) !important;
    }

    .contact-info-item {
        display: flex !important;
        align-items: center !important;
        margin-bottom: 15px !important;
        color: var(--pure-white) !important;
        font-size: 0.95rem !important;
    }

    .contact-info-item i {
        color: var(--pure-white) !important;
        font-size: 1.2rem !important;
        margin-right: 12px !important;
    }

    .footer-bottom {
        border-top: 1px solid rgba(0, 0, 0, 0.05) !important;
        padding-top: 30px !important;
        margin-top: 50px !important;
        font-size: 0.85rem !important;
        color: #d1d1d1 !important;
    }

    #mention{
        text-decoration: none;
        color: #d1d1d1;
    }
</style>

<footer class="footer-main">
    <div class="container">
        <div class="row gy-5">
            <div class="col-lg-4 col-md-12">
                <a href="{{ url('accueil') }}" class="d-block mb-4">
                    <img src="{{ asset('site/img/logo.jpg') }}" alt="Logo Ticafrique" width="150" class="img-fluid">
                </a>
                <p class="mb-4" style="max-width: 300px; line-height: 1.6;">
                    Expert en solutions numériques innovantes. Nous connectons vos ambitions au marché africain grâce à la technologie.
                </p>
                <div class="d-flex">
                    <a href="#" class="social-icon"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="social-icon"><i class="bi bi-linkedin"></i></a>
                    <a href="#" class="social-icon"><i class="bi bi-instagram"></i></a>
                </div>
            </div>

            <div class="col-lg-2 col-md-4">
                <h5 class="footer-title">Liens utiles</h5>
                <a href="" class="footer-link">Accueil</a>
                <a href="#" class="footer-link">À propos</a>
                <a href="#" class="footer-link">Nos Services</a>
                <a href="" class="footer-link">Contact</a>
            </div>

            <div class="col-lg-3 col-md-4">
                <h5 class="footer-title">FORCES DU SYSTEME</h5>
                <a href="#" class="footer-link">SMS Marketing</a>
                <a href="#" class="footer-link">2Way Communication</a>
                <a href="#" class="footer-link">SMS Vocal</a>
                <a href="#" class="footer-link">Intégration API</a>
            </div>

            <div class="col-lg-3 col-md-4">
                <h5 class="footer-title">Nous contacter</h5>
                <div class="contact-info-item">
                    <i class="bi bi-geo-alt"></i>
                    <span>Abidjan, Côte d'Ivoire</span>
                </div>
                <div class="contact-info-item">
                    <i class="bi bi-telephone"></i>
                    <span>+225 00 00 00 00 00</span>
                </div>
                <div class="contact-info-item">
                    <i class="bi bi-envelope"></i>
                    <span>contact@ticafrique.ci</span>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="row align-items-center">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; {{ date('Y') }} <span class="fw-bold" style="color: var(--pure-white);">TICAFRIQUE</span>. Tous droits réservés.
                </div>
                <div class="col-md-6 text-center text-md-end ">
                    <a href="#" class=" me-3 small" id="mention">Mentions Légales</a>
                    <a href="#" class="small" id="mention">Confidentialité</a>
                </div>
            </div>
        </div>
    </div>
</footer>