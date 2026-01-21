<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Nouvelle demande de création de compte</title>
</head>

<body style="font-family: Arial, sans-serif; background-color: #f6f6f6; margin: 0; padding: 20px;">
    <div
        style="background-color: #ffffff; padding: 20px; border-radius: 8px; max-width: 700px; margin: auto; box-shadow: 0 2px 6px rgba(0,0,0,0.1);">

        <h1 style="color: #333; text-align:center;">📢 Nouvelle demande de création de compte</h1>

        <p style="line-height: 1.5; color: #555;">
            Un nouveau client vient de soumettre une demande. Voici les informations :
        </p>

        <table style="width:100%; border-collapse: collapse; margin-top: 15px;">
            <tr>
                <td style="padding: 8px; border: 1px solid #ddd;"><strong>Nom complet</strong></td>
                <td style="padding: 8px; border: 1px solid #ddd;">{{ $data['nom'] }}</td>
            </tr>
            <tr>
                <td style="padding: 8px; border: 1px solid #ddd;"><strong>Email</strong></td>
                <td style="padding: 8px; border: 1px solid #ddd;">{{ $data['email'] }}</td>
            </tr>
            <tr>
                <td style="padding: 8px; border: 1px solid #ddd;"><strong>Société</strong></td>
                <td style="padding: 8px; border: 1px solid #ddd;">{{ $data['societe'] }}</td>
            </tr>
            <tr>
                <td style="padding: 8px; border: 1px solid #ddd;"><strong>Ville</strong></td>
                <td style="padding: 8px; border: 1px solid #ddd;">{{ $data['ville'] ?? '-' }}</td>
            </tr>
            <tr>
                <td style="padding: 8px; border: 1px solid #ddd;"><strong>Activité</strong></td>
                <td style="padding: 8px; border: 1px solid #ddd;">{{ $data['activite'] ?? '-' }}</td>
            </tr>
            <tr>
                <td style="padding: 8px; border: 1px solid #ddd;"><strong>Téléphone</strong></td>
                <td style="padding: 8px; border: 1px solid #ddd;">{{ $data['tel'] }}</td>
            </tr>
            <tr>
                <td style="padding: 8px; border: 1px solid #ddd;"><strong>Montant</strong></td>
                <td style="padding: 8px; border: 1px solid #ddd;">{{ number_format($data['montant'], 0, ',', ' ') }}
                    FCFA</td>
            </tr>
        </table>

        <p style="line-height: 1.5; color: #555; margin-top:20px;">
            Merci de prendre en charge ce client dès que possible.
        </p>

        {{-- <div style="text-align:center; margin-top: 20px;">
            <a href="{{ url('/admin/demandes') }}"
                style="display: inline-block; padding: 12px 20px; background-color: #28a745; color: white; text-decoration: none; border-radius: 5px; font-weight: bold;">
                📂 Consulter dans le back-office
            </a> --}}
    </div>

    <p style="line-height: 1.5; color: #999; margin-top:20px; text-align:center;">
        -- <br>
        Message automatique de <strong>Ticafrique</strong>
    </p>
    </div>
</body>

</html>
