@extends('fronts.layouts.base')

@section('title', 'Demande de création de compte | TicAfrique')

@section('content')
<style>
    /* =========================
       WIZARD FORM STYLE
    ========================= */
    .wizard-container {
        padding: 60px 0 !important;
        background-color: var(--soft-white) !important;
    }

    .wizard-card {
        background: var(--white) !important;
        border-radius: 20px !important;
        box-shadow: 0 20px 50px rgba(0, 0, 0, 0.05) !important;
        border: none !important;
    }

    /* Progress Bar */
    .wizard-steps {
        display: flex !important;
        justify-content: space-between !important;
        margin-bottom: 40px !important;
        position: relative !important;
    }

    .step-item {
        text-align: center !important;
        flex: 1 !important;
        position: relative !important;
        z-index: 1 !important;
    }

    .step-number {
        width: 40px !important;
        height: 40px !important;
        background: #eee !important;
        color: #999 !important;
        border-radius: 50% !important;
        display: flex !important;
        align-items: center !important;
        justify-content: center !important;
        margin: 0 auto 10px !important;
        font-weight: 700 !important;
        transition: var(--transition) !important;
    }

    .step-item.active .step-number {
        background: var(--primary-blue) !important;
        color: white !important;
        box-shadow: 0 0 0 5px rgba(11, 60, 93, 0.1) !important;
    }

    .step-item.completed .step-number {
        background: #28a745 !important;
        color: white !important;
    }

    /* Form Sections */
    .wizard-section {
        display: none !important;
        /* Caché par défaut */
    }

    .wizard-section.active {
        display: block !important;
        animation: fadeIn 0.5s ease !important;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(10px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .form-label-pro {
        font-weight: 600 !important;
        color: var(--dark-blue) !important;
        margin-bottom: 8px !important;
    }

    .input-pro {
        border: 2px solid #f0f0f0 !important;
        border-radius: 10px !important;
        padding: 12px 15px !important;
        transition: all 0.3s ease !important;
    }

    .input-pro:focus {
        border-color: var(--primary-blue) !important;
        box-shadow: none !important;
    }

    /* Buttons Navigation */
    .wizard-buttons {
        margin-top: 40px !important;
        padding-top: 20px !important;
        border-top: 1px solid #f0f0f0 !important;
        display: flex !important;
        justify-content: space-between !important;
    }

    .btn-next,
    .btn-prev,
    .btn-submit-final {
        padding: 12px 30px !important;
        border-radius: 8px !important;
        font-weight: 700 !important;
        text-transform: uppercase !important;
        letter-spacing: 1px !important;
    }

    .btn-next {
        background: var(--primary-blue) !important;
        color: white !important;
        border: none !important;
    }

    .btn-prev {
        background: #eee !important;
        color: #666 !important;
        border: none !important;
    }

    .btn-submit-final {
        background: #28a745 !important;
        color: white !important;
        border: none !important;
    }

    /* Condition Sections */
    #entreprise-fields {
        transition: all 0.3s ease !important;
    }
</style>

<div class="wizard-container">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="card wizard-card">
                    <div class="card-body p-5">
                        <h2 class="text-center mb-5 fw-bold" style="color: var(--dark-blue);">Demande de Création de Compte</h2>

                        <div class="wizard-steps">
                            <div class="step-item active" id="s1">
                                <div class="step-number">1</div><span>Identité</span>
                            </div>
                            <div class="step-item" id="s2">
                                <div class="step-number">2</div><span>Compte</span>
                            </div>
                            <div class="step-item" id="s3">
                                <div class="step-number">3</div><span>Contact</span>
                            </div>
                            <div class="step-item" id="s4">
                                <div class="step-number">4</div><span>Finalisation</span>
                            </div>
                        </div>

                        <form method="POST" action="{{ route('ticafrique.store_demande') }}" id="multiStepForm">
                            @csrf

                            <section class="wizard-section active">
                                <div class="row g-4">
                                    <div class="col-md-6">
                                        <label class="form-label-pro">Type de profil :</label>
                                        <select name="societe" id="type_profil" class="form-select input-pro">
                                            <option value="Personne Physique">Personne Physique</option>
                                            <option value="Société">Société</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label-pro">Adresse :</label>
                                        <input type="text" name="adresse" class="form-control input-pro">
                                    </div>

                                    <div id="entreprise-fields" class="col-12" style="display:none;">
                                        <div class="row g-4">
                                            <div class="col-md-6">
                                                <label class="form-label-pro">Nom de l'entreprise :</label>
                                                <input type="text" name="raisonsocial" class="form-control input-pro uppercase">
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label-pro">RCCM :</label>
                                                <input type="text" name="rccm" class="form-control input-pro">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <label class="form-label-pro">Ville :</label>
                                        <input type="text" name="ville" class="form-control input-pro uppercase">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label-pro">Activité :</label>
                                        <input type="text" name="activite" class="form-control input-pro uppercase" required>
                                    </div>
                                </div>
                            </section>

                            <section class="wizard-section">
                                <div class="row g-4">
                                    <div class="col-md-6">
                                        <label class="form-label-pro">Nom d’utilisateur :</label>
                                        <input type="text" name="username" class="form-control input-pro uppercase" placeholder="Un seul mot">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label-pro">Nom d’expéditeur :</label>
                                        <input type="text" name="expediteur" class="form-control input-pro uppercase" maxlength="11">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label-pro">Nombre de sous-comptes :</label>
                                        <input type="number" name="nbcompte" class="form-control input-pro" value="0">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label-pro">Montant (FCFA) :</label>
                                        <input type="text" name="montant" class="form-control input-pro">
                                    </div>
                                </div>
                            </section>

                            <section class="wizard-section">
                                <div class="row g-4">
                                    <div class="col-md-6">
                                        <label class="form-label-pro">Nom complet :</label>
                                        <input type="text" name="nom" class="form-control input-pro uppercase">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label-pro">Fonction :</label>
                                        <input type="text" name="fonction" class="form-control input-pro uppercase">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label-pro">Téléphone :</label>
                                        <input type="tel" name="tel" class="form-control input-pro">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label-pro">Email professionnel :</label>
                                        <input type="email" name="email" class="form-control input-pro">
                                    </div>
                                </div>
                            </section>

                            <section class="wizard-section text-center">
                                <div class="mb-4">
                                    <label class="form-label-pro">Informations complémentaires :</label>
                                    <textarea name="complementaire" rows="4" class="form-control input-pro"></textarea>
                                </div>
                                <div class="alert alert-info py-3 border-0">
                                    <label class="mb-0 fw-bold">Code de sécurité : <span id="captcha"></span></label>
                                    <input type="text" name="heure" class="form-control d-inline-block ms-2" style="width: 80px;" required>
                                </div>
                                <div class="form-check d-inline-block mt-3 text-start">
                                    <input type="checkbox" name="validation" class="form-check-input" id="checkTerms" required>
                                    <label class="form-check-label" for="checkTerms">J'ai lu et j'accepte les <a href="#" class="text-primary">conditions d'utilisation</a></label>
                                </div>
                            </section>

                            <div class="wizard-buttons">
                                <button type="button" class="btn-prev" id="prevBtn" onclick="nextPrev(-1)">Précédent</button>
                                <button type="button" class="btn-next" id="nextBtn" onclick="nextPrev(1)">Suivant</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    var currentTab = 0;
    showTab(currentTab);

    function showTab(n) {
        var x = document.getElementsByClassName("wizard-section");
        x[n].classList.add("active");

        // Bouton précédent
        if (n == 0) {
            document.getElementById("prevBtn").style.visibility = "hidden";
        } else {
            document.getElementById("prevBtn").style.visibility = "visible";
        }

        // Bouton Suivant / Envoyer
        if (n == (x.length - 1)) {
            document.getElementById("nextBtn").innerHTML = "Soumettre la demande";
            document.getElementById("nextBtn").classList.replace("btn-next", "btn-submit-final");
        } else {
            document.getElementById("nextBtn").innerHTML = "Suivant";
            document.getElementById("nextBtn").classList.replace("btn-submit-final", "btn-next");
        }
        updateSteps(n);
    }

    function nextPrev(n) {
        var x = document.getElementsByClassName("wizard-section");
        // Sortie de l'étape actuelle
        x[currentTab].classList.remove("active");
        currentTab = currentTab + n;

        if (currentTab >= x.length) {
            document.getElementById("multiStepForm").submit();
            return false;
        }
        showTab(currentTab);
    }

    function updateSteps(n) {
        var steps = document.getElementsByClassName("step-item");
        for (var i = 0; i < steps.length; i++) {
            steps[i].classList.remove("active", "completed");
            if (i < n) steps[i].classList.add("completed");
            if (i == n) steps[i].classList.add("active");
        }
    }

    // Logique Affichage Entreprise
    document.getElementById('type_profil').addEventListener('change', function() {
        const fields = document.getElementById('entreprise-fields');
        fields.style.display = (this.value === 'Société') ? 'block' : 'none';
    });

    // Auto UpperCase
    document.querySelectorAll('.uppercase').forEach(input => {
        input.addEventListener('input', function() {
            this.value = this.value.toUpperCase();
        });
    });

    
</script>
@endsection