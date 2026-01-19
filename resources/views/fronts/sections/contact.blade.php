@extends('fronts.layouts.base')
@section('title', 'Contact | TicAfrique')

@section('content')
<style>
    /* ... Vos styles CSS existants (gardez-les tels quels) ... */
    .contact-page-section {
        padding: 100px 0 !important;
        background-color: #f8f9fa !important;
    }

    .contact-container {
        background: #fff !important;
        border-radius: 20px !important;
        overflow: hidden !important;
        box-shadow: 0 30px 60px rgba(0, 0, 0, 0.05) !important;
        border: 1px solid rgba(0, 0, 0, 0.03) !important;
    }

    .contact-form-wrapper {
        padding: 50px !important;
    }

    .form-group-custom {
        margin-bottom: 25px !important;
    }

    .form-control-contact {
        width: 100% !important;
        border: 2px solid #f1f1f1 !important;
        border-radius: 10px !important;
        padding: 12px 18px !important;
        transition: all 0.3s ease !important;
    }

    .security-row {
        background: rgba(1, 29, 154, 0.03) !important;
        padding: 20px !important;
        border-radius: 10px !important;
        border: 1px dashed #2e5281 !important;
        margin-bottom: 30px !important;
    }

    .btn-send {
        background: #2e5281 !important;
        color: #fff !important;
        padding: 15px 45px !important;
        border-radius: 8px !important;
        font-weight: 700;
        cursor: pointer;
        border: none;
    }

    .contact-sidebar {
        background-color: #2e5281 !important;
        color: #fff !important;
        padding: 50px !important;
        height: 100% !important;
    }
</style>

<main class="contact-page-section">
    <div class="container">
        {{-- Affichage des messages de succès --}}
        @if(session('success'))
        <div class="alert alert-success border-0 shadow-sm rounded-4 mb-4">
            <i class="bi bi-check-circle-fill me-2"></i> {{ session('success') }}
        </div>
        @endif

        {{-- Affichage des erreurs de validation --}}
        @if ($errors->any())
        <div class="alert alert-danger border-0 shadow-sm rounded-4 mb-4">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <div class="contact-container shadow-lg">
            <div class="row g-0">
                <div class="col-lg-8">
                    <div class="contact-form-wrapper">
                        <h3>Transmettez-nous votre demande</h3>

                        <form method="post" action="{{ route('ticafrique.store_contact') }}">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 form-group-custom">
                                    <label>Nom complet</label>
                                    <input type="text" class="form-control-contact" placeholder="Ex: Jean Koffi" name="nom" value="{{ old('nom') }}" required>
                                </div>
                                <div class="col-md-6 form-group-custom">
                                    <label>E-mail</label>
                                    <input type="email" class="form-control-contact" placeholder="votre@email.com" name="email" value="{{ old('email') }}" required>
                                </div>
                                <div class="col-md-6 form-group-custom">
                                    <label>Téléphone</label>
                                    <input type="text" class="form-control-contact" placeholder="+225 00 00 00 00" name="contact" value="{{ old('contact') }}" required>
                                </div>
                                <div class="col-md-6 form-group-custom">
                                    <label>Sujet</label>
                                    <input type="text" class="form-control-contact" placeholder="Objet de votre message" name="sujet" value="{{ old('sujet') }}" required>
                                </div>
                            </div>

                            <div class="form-group-custom">
                                <label>Message</label>
                                <textarea class="form-control-contact" rows="5" placeholder="Comment pouvons-nous vous aider ?" name="message" required>{{ old('message') }}</textarea>
                            </div>

                            {{-- Sécurité : Captcha via Session --}}
                            <div class="security-row d-flex align-items-center justify-content-between flex-wrap">
                                <label class="mb-0 text-dark">
                                    Sécurité : entrez le nombre suivant :
                                    <strong class="text-primary fs-4 ms-2">{{ session('captcha') }}</strong>
                                </label>
                                <input type="number" name="heure" class="form-control-contact py-1" style="width: 100px !important;" required>
                            </div>

                            <div class="text-end">
                                <button type="submit" class="btn-send">
                                    Envoyer le formulaire <i class="bi bi-send-fill ms-2"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

                {{-- Sidebar --}}
                <div class="col-lg-4">
                    <div class="contact-sidebar">
                        <h4>Nos Coordonnées</h4>
                        <div class="info-item">
                            <i class="bi bi-geo-alt-fill"></i>
                            <div>
                                <p><strong>Adresse</strong><br>Abidjan Cocody Angré, Cité Belle Fleur 3</p>
                            </div>
                        </div>
                        <div class="info-item">
                            <i class="bi bi-telephone-fill"></i>
                            <div>
                                <p><strong>Téléphone</strong><br>+225 25 22 00 20 77</p>
                            </div>
                        </div>
                        <div class="info-item">
                            <i class="bi bi-envelope-at-fill"></i>
                            <div>
                                <p><strong>Support Email</strong><br>info@ticafrique.com</p>
                            </div>
                        </div>
                        <div class="mt-5 pt-4 border-top border-secondary">
                            <p class="small text-white-75">Bureaux ouverts : Lun - Ven (08h00 - 18h00).</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection