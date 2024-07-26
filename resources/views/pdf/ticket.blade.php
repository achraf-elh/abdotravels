<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticket de Réservation</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Arial', sans-serif;
        }
        .container {
            padding: 20px;
        }
        .header {
            text-align: center;
            margin-bottom: 30px;
        }
        .header h2 {
            margin-bottom: 0;
        }
        .info-table, .voyage-table {
            width: 100%;
            margin-bottom: 20px;
        }
        .info-table th, .voyage-table th, .info-table td, .voyage-table td {
            padding: 10px;
            border: 1px solid #ddd;
        }
        .info-table th, .voyage-table th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>Ticket de Réservation</h2>
            <p>Réservation effectuée avec succès</p>
        </div>

        <h4>Informations du Client</h4>
        <table class="info-table table table-bordered">
            <tr>
                <th>Nom</th>
                <td>{{ $reservation->nom }}</td>
            </tr>
            <tr>
                <th>Prénom</th>
                <td>{{ $reservation->prenom }}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{ $reservation->email }}</td>
            </tr>
            <tr>
                <th>Téléphone</th>
                <td>{{ $reservation->telephone }}</td>
            </tr>
            <tr>
                <th>Date de Réservation</th>
                <td>{{ $reservation->created_at }}</td>
            </tr>
        </table>

        <h4>Détails du Voyage</h4>
        <table class="voyage-table table table-bordered">
            <tr>
                <th>Ville de Départ</th>
                <td>{{ $reservation->voyage->villeDepart->nom }}</td>
            </tr>
            <tr>
                <th>Ville d'Arrivée</th>
                <td>{{ $reservation->voyage->villeArrivee->nom }}</td>
            </tr>
            <tr>
                <th>Heure de Départ</th>
                <td>{{ $reservation->voyage->heure_depart }}</td>
            </tr>
            <tr>
                <th>Heure d'Arrivée</th>
                <td>{{ $reservation->voyage->heure_arrivee }}</td>
            </tr>
            <tr>
                <th>Durée</th>
                <td>{{ $reservation->voyage->calculerDuree() }}</td>
            </tr>
            <tr>
                <th>Date du Voyage</th>
                <td>{{ $reservation->voyage->date }}</td>
            </tr>
            <tr>
                <th>Prix</th>
                <td>{{ $reservation->voyage->prix }}</td>
            </tr>
        </table>
    </div>
</body>
</html>
