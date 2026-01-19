<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\storeContact;
use App\Models\Contact;
use Illuminate\Http\Request;

class MarketingController extends Controller
{
    //index
    public function index()
    {
        // On génère le code ici
        $captcha = rand(10, 99);
        // On le stocke en session pour la vérification future
        session(['captcha' => $captcha]);
        return view('index');
    }

    // sms
    public function sms()
    {
        return view('fronts.sections.sms');
    }

    // sms 2way
    public function way()
    {
        return view('fronts.sections.sms2way');
    }

    // sms_voice
    public function sms_voice()
    {
        return view('fronts.sections.smsVoice');
    }
    // contact
    public function contact()

    {

        // On génère le code ici
        $captcha = rand(10, 99);
        // On le stocke en session pour la vérification future
        session(['captcha' => $captcha]);
        return view('fronts.sections.contact', compact('captcha'));
    }


    public function store_contact(Request $request)
    {

        // Validation
        $validated = $request->validate([
            'nom'     => 'nullable|string|max:150',
            'email'   => 'nullable|email|max:150',
            'contact' => 'nullable|string|max:30',
            'sujet'   => 'nullable|string|max:200',
            'message' => 'nullable|string',
            'heure'   => 'nullable|numeric'
        ]);

       

        // Vérification du Captcha
        if ((int)$request->heure !== (int)session('captcha')) {
            return back()
                ->withInput()
                ->withErrors(['heure' => 'Le code de sécurité est incorrect.']);
        }


        // Enregistrement
        // Contact::create([
        //     'nom'     => $validated['nom'],
        //     'email'   => $validated['email'],
        //     'contact' => $validated['contact'],
        //     'sujet'   => $validated['sujet'],
        //     'message' => $validated['message'],
        //     'ip'      => $request->ip()
        // ]);

        Contact::created($validated);
        // Reset du captcha
        session()->forget('captcha');

        return back()->with('success', 'Votre message a été envoyé avec succès.');
    }
}
