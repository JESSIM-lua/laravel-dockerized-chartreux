<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Villes de {{ $country->Name }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Villes de {{ $country->Name }}</h1>
        <table class="table table-striped table-hover mt-4">
            <thead class="table-dark">
                <tr>
                    <th>#</th>
                    <th>Nom</th>
                    <th>District</th>
                    <th>Population</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($country->cities as $city)
                    <tr>
                        <td>{{ $city->City_Id }}</td>
                        <td>{{ $city->Name }}</td>
                        <td>{{ $city->District }}</td>
                        <td>{{ number_format($city->Population) }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a href="/countries" class="btn btn-secondary mt-3">Retour</a>
    </div>
</body>
</html>
