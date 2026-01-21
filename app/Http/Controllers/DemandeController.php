<?php

namespace App\Http\Controllers;

use App\Models\Demande;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Services\EmailService;
use Illuminate\Routing\Controller;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\View;


class DemandeController extends Controller
{


    // les constructeurs
    protected $emailService;
    public function __construct(EmailService  $emailService)
    {
        $this->emailService = $emailService;
    }

    // demande de création de compte
    public function demande()
    {
        return view('fronts.sections.demande');
    }

    // store demande

    public function store_demande(Request $request)
    {
        try {
            $validated = $request->validate([
                'societe'        => 'required|string|max:255',
                'adresse'        => 'nullable|string|max:255',
                'raisonsocial'   => 'nullable|string|max:255',
                'rccm'           => 'nullable|string|max:255',
                'ville'          => 'nullable|string|max:255',
                'activite'       => 'required|string|max:255',

                'username'       => 'nullable|string|max:255',
                'expediteur'     => 'nullable|string|max:11',
                'nbcompte'       => 'nullable|integer|min:0',
                'montant'        => 'nullable|numeric|min:0',

                'nom'            => 'nullable|string|max:255',
                'fonction'       => 'nullable|string|max:255',
                'tel'            => 'nullable|string|max:50',
                'email'          => 'nullable|email|max:255',

                'complementaire' => 'nullable|string',
                'captcha'          => 'required|string',
                'validation'     => 'accepted',
            ]);

            // Checkbox
            $validated['validation'] = true;
            // Envoi mail
            try {

                // Sauvegarde
                $demande = Demande::create($validated);

                $this->emailService->SendEmailToAdmin($demande);
            } catch (\Exception $e) {
                Log::error('Erreur envoi mail demande : ' . $e->getMessage());
            }

            return redirect()
                ->back()
                ->with('success', 'Votre demande a été envoyée avec succès !');
        } catch (\Exception $e) {

            return $e->getMessage();
        }
    }
}
