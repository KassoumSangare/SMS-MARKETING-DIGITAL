<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'TICAFRIQUE | Solutions Numériques Innovantes')</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Saira:wght@600;700&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <style>
        :root {
            --primary-blue: #0b3c5d;
            --dark-blue: #082a3f;
            --accent-blue: #0c2180;
            --soft-white: #f8f9fa;
            --transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
        }

        body {
            font-family: 'Inter', sans-serif;
            overflow-x: hidden;
            scroll-behavior: smooth;
        }

        /* Classes d'Animation Globales */
        .hover-lift {
            transition: var(--transition);
        }

        .hover-lift:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }

        /* Custom Scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-track {
            background: var(--soft-white);
        }

        ::-webkit-scrollbar-thumb {
            background: var(--primary-blue);
            border-radius: 10px;
        }

        /* Loader Style */
        #preloader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999;
        }
    </style>
    @stack('styles')
</head>

<body class="d-flex flex-column min-vh-100">

    <div id="preloader">
        <div class="spinner-border text-primary" role="status">
            <span class="visually-hidden">Chargement...</span>
        </div>
    </div>

    @include('fronts.layouts.header')

    <main id="main-content" class="flex-grow-1">
        @yield('content')
    </main>

    @include('fronts.layouts.footer')

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // 1. Initialisation AOS
            AOS.init({
                duration: 800,
                once: true,
                offset: 100
            });

            // 2. Cacher le loader
            window.addEventListener('load', function() {
                gsap.to("#preloader", {
                    opacity: 0,
                    duration: 0.5,
                    onComplete: () => document.getElementById("preloader").style.display = "none"
                });
            });

            // 3. Micro-interactions GSAP pour les boutons
            const btns = document.querySelectorAll('.btn-primary, .signup-button');
            btns.forEach(btn => {
                btn.addEventListener('mouseenter', () => gsap.to(btn, {
                    scale: 1.05,
                    duration: 0.3
                }));
                btn.addEventListener('mouseleave', () => gsap.to(btn, {
                    scale: 1,
                    duration: 0.3
                }));
            });

            // // 4. Parallaxe doux sur les images au scroll
            // window.addEventListener('scroll', () => {
            //     const scrolled = window.pageYOffset;
            //     const parallaxImages = document.querySelectorAll('.img-fluid');
            //     parallaxImages.forEach(img => {
            //         let coords = scrolled * 0.05 + 'px';
            //         img.style.transform = `translateY(${coords})`;
            //     });
            // });
        });

        const captchaEl = document.querySelector('#captcha');

        // Génère un nombre aléatoire entre 10 et 99
        function generateCaptcha() {
            return Math.floor(Math.random() * 90) + 10;
        }

        // Actualise le captcha à l'écran et envoie la valeur au backend
        function refreshCaptcha() {
            const value = generateCaptcha();
            captchaEl.textContent = value;

            // Envoi au backend pour la stocker en session
            fetch('/set-captcha/' + value)
                .then(response => {
                    if (!response.ok) {
                        console.error('Erreur stockage captcha');
                    }
                })
                .catch(err => console.error(err));

            return value;
        }

        // Initialise le captcha à l'ouverture de la page
        let captchaValue = refreshCaptcha();
        console.log('Captcha généré :', captchaValue);

        // Optionnel : bouton pour recharger le captcha
        const refreshBtn = document.querySelector('#refresh-captcha');
        if (refreshBtn) {
            refreshBtn.addEventListener('click', function(e) {
                e.preventDefault();
                captchaValue = refreshCaptcha();
            });
        }
    </script>

    @stack('scripts')
</body>

</html>