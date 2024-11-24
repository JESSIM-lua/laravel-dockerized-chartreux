<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Pays</title>
    <!-- Lien vers Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Liste des Pays</h1>
        <table class="table table-striped table-hover">
            <thead class="table-dark">
                <tr>
                    <th>#</th>
                    <th>Code</th>
                    <th>Nom</th>
                    <th>Continent</th>
                    <th>Population</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($countries as $country)
                    <tr>
                        <td>{{ $country->Country_Id }}</td>
                        <td>{{ $country->Code }}</td>
                        <td>{{ $country->Name }}</td>
                        <td>{{ $country->Continent }}</td>
                        <td>{{ number_format($country->Population) }}</td>
                        <td>
                            <a href="{{ route('countries.cities', $country->Code) }}" class="btn btn-primary btn-sm">
                                Voir les villes
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
            
        </table>
    </div>

    <!-- Lien vers Bootstrap JS (facultatif) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
