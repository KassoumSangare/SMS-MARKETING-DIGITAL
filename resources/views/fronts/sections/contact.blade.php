@extends('fronts.layouts.base')
@section('title', 'Contact | TicAfrique')

@section('content')
<style>
    /* =========================
       PAGE CONTACT PREMIUM
    ========================= */
    .contact-page-section {
        padding: 100px 0 !important;
        background-color: var(--soft-white) !important;
    }

    .contact-container {
        background: var(--white) !important;
        border-radius: 20px !important;
        overflow: hidden !important;
        box-shadow: 0 30px 60px rgba(0, 0, 0, 0.05) !important;
        border: 1px solid rgba(0, 0, 0, 0.03) !important;
    }

    /* Partie Formulaire */
    .contact-form-wrapper {
        padding: 50px !important;
    }

    .contact-form-wrapper h3 {
        font-family: 'Saira', sans-serif !important;
        font-weight: 700 !important;
        color: var(--dark-blue) !important;
        margin-bottom: 35px !important;
        font-size: 1.75rem !important;
    }

    /* Style des Labels et Inputs */
    .form-group-custom {
        margin-bottom: 25px !important;
    }

    .form-group-custom label {
        font-weight: 600 !important;
        font-size: 0.85rem !important;
        color: var(--primary-blue) !important;
        text-transform: uppercase !important;
        letter-spacing: 1px !important;
        margin-bottom: 8px !important;
        display: block !important;
    }

    .form-control-contact {
        width: 100% !important;
        border: 2px solid #f1f1f1 !important;
        border-radius: 10px !important;
        padding: 12px 18px !important;
        font-size: 0.95rem !important;
        transition: all 0.3s ease !important;
        background-color: #fdfdfd !important;
    }

    .form-control-contact:focus {
        border-color: var(--primary-blue) !important;
        background-color: var(--white) !important;
        outline: none !important;
        box-shadow: 0 8px 20px rgba(1, 29, 154, 0.05) !important;
    }

    /* Sécurité */
    .security-row {
        background: rgba(1, 29, 154, 0.03) !important;
        padding: 20px !important;
        border-radius: 10px !important;
        border: 1px dashed var(--primary-blue) !important;
        margin-bottom: 30px !important;
    }

    /* Bouton Envoyer */
    .btn-send {
        background: #202157 !important;
        color: var(--white) !important;
        border: none !important;
        padding: 15px 45px !important;
        border-radius: 8px !important;
        font-weight: 700 !important;
        text-transform: uppercase !important;
        transition: all 0.3s ease !important;
        display: inline-flex !important;
        align-items: center !important;
        gap: 10px !important;
    }

    .btn-send:hover {
        background: var(--primary-blue) !important;
        transform: translateY(-3px) !important;
        box-shadow: 0 10px 20px rgba(1, 29, 154, 0.2) !important;
    }

    /* Colonne Adresse (Sidebar) */
    .contact-sidebar {
        background-color: #202157 !important;
        color: var(--white) !important;
        padding: 50px !important;
        height: 100% !important;
    }

    .contact-sidebar h4 {
        color: var(--white) !important;
        font-weight: 700 !important;
        margin-bottom: 40px !important;
        position: relative !important;
    }

    .info-item {
        display: flex !important;
        align-items: flex-start !important;
        gap: 20px !important;
        margin-bottom: 30px !important;
    }

    .info-item i {
        font-size: 1.25rem !important;
        color: rgba(206, 206, 206, 0.6) !important;
    }

    .info-item p {
        margin: 0 !important;
        font-size: 0.95rem !important;
        line-height: 1.6 !important;
    }

    @media (max-width: 991px) {

        .contact-form-wrapper,
        .contact-sidebar {
            padding: 30px !important;
        }
    }
</style>

<main class="contact-page-section">
    <div class="container">
        <div class="contact-container shadow-lg">
            <div class="row g-0">

                <div class="col-lg-8">
                    <div class="contact-form-wrapper">
                        <h3>Transmettez-nous votre demande</h3>

                        <form method="post" action="{{ route('ticafrique.store_contact') }}">
                            <div class="row">
                                <div class="col-md-6 form-group-custom">
                                    <label>Nom complet</label>
                                    <input type="text" class="form-control-contact" placeholder="Ex: Jean Koffi" name="nom" required>
                                </div>
                                <div class="col-md-6 form-group-custom">
                                    <label>E-mail</label>
                                    <input type="email" class="form-control-contact" placeholder="votre@email.com" name="email" required>
                                </div>
                                <div class="col-md-6 form-group-custom">
                                    <label>Téléphone</label>
                                    <input type="number" class="form-control-contact" placeholder="+225 00 00 00 00" name="contact" required>
                                </div>
                                <div class="col-md-6 form-group-custom">
                                    <label>Sujet</label>
                                    <input type="text" class="form-control-contact" placeholder="Objet de votre message" name="sujet" required>
                                </div>
                            </div>

                            <div class="form-group-custom">
                                <label>Message</label>
                                <textarea class="form-control-contact" rows="5" placeholder="Comment pouvons-nous vous aider ?" name="message" required></textarea>
                            </div>

                            <div class="security-row d-flex align-items-center justify-content-between flex-wrap">
                                <label class="mb-0 text-dark">Sécurité : entrez le nombre suivant : <strong id="captcha"></strong></label>
                                <input type="text" name="heure" class="form-control-contact py-1" style="width: 80px !important;" required>
                            </div>

                            <div class="text-end">
                                <button type="submit" name="contacter" class="btn-send">
                                    Envoyer le formulaire <i class="bi bi-send-fill"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="contact-sidebar">
                        <h4>Nos Coordonnées</h4>

                        <div class="info-item">
                            <i class="bi bi-geo-alt-fill"></i>
                            <div>
                                <p><strong>Adresse</strong><br>
                                    Abidjan Cocody Angré,<br>Cité Belle Fleur 3</p>
                            </div>
                        </div>

                        <div class="info-item">
                            <i class="bi bi-telephone-fill"></i>
                            <div>
                                <p><strong>Téléphone</strong><br>
                                    +225 25 22 00 20 77</p>
                            </div>
                        </div>

                        <div class="info-item">
                            <i class="bi bi-envelope-at-fill"></i>
                            <div>
                                <p><strong>Support Email</strong><br>
                                    info@ticafrique.com</p>
                            </div>
                        </div>

                        <div class="mt-5 pt-4 border-top border-secondary">
                            <p class="small text-white-75">Nos bureaux sont ouverts du Lundi au Vendredi de 08h00 à 18h00.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</main>


@endsection