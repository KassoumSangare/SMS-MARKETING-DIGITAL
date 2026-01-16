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
        return view('fronts.sections.contact');
    }

  
    public function store_contact(Request $request)
    {
        // 1. Validation
        $validated = $request->validate([
            'nom'     => 'required|string|max:150',
            'email'   => 'required|email|max:150',
            'contact' => 'required|string|max:30',
            'sujet'   => 'required|string|max:200',
            'message' => 'required|string',
            'heure'   => 'required|numeric'
        ]);

        // 2. Vérification captcha
        if ((int)$request->heure !== (int)session('captcha')) {
            return back()
                ->withInput()
                ->withErrors(['heure' => 'Captcha incorrect']);
        }

        // 3. Enregistrement
        Contact::create([
            'nom'     => $validated['nom'],
            'email'   => $validated['email'],
            'contact' => $validated['contact'],
            'sujet'   => $validated['sujet'],
            'message' => $validated['message'],
            'ip'      => $request->ip()
        ]);

        // 4. Nettoyage captcha
        session()->forget('captcha');

        return back()->with('success', 'Votre message a été envoyé avec succès.');
    }
}
