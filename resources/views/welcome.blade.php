<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>laravel-google-sheet-app</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
          rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body class="antialiased">
<section class="container border mt-2">
    <p class="fw-bold fs-3 text text-decoration-underline">Upload your sheet from here</p>
    <form>
        <div class="input-group mb-3">
            <label class="input-group-text" for="sheet">Sheet</label>
            <input type="file" class="form-control" id="sheet">
        </div>
        <button type="submit" class="btn btn-primary mb-2">Upload</button>
    </form>

</section>
<section class="container border mt-2 bg-dark">
    <p class="fw-bold fs-3 text mt-1 text-center text-light">Or</p>
</section>
<section class="container border mt-2">
    <p class="fw-bold fs-3 text text-decoration-underline">Sync from google sheet</p>
    <form>
        <button type="submit" class="btn btn-primary mb-2">Sync</button>
    </form>
</section>
<section class="container border border-3 mt-5">
    <p class="fw-bold fs-3 text text-decoration-underline">Contacts</p>
    <table class="table  table-hover table-bordered border-secondary">
        <thead class="bg-info text-light">
        <tr>
            <th>Name</th>
            <th>Phone</th>
        </tr>
        </thead>
        <tbody>
        @forelse($contacts as $contact)
            <tr>
                <td>{{ $contact['name'] }}</td>
                <td>{{ $contact['mobile'] }}</td>
            </tr>
        @empty
            <tr>
                <td colspan="2" class="text-center">No contacts to view</td>
            </tr>
        @endforelse
        </tbody>
    </table>
</section>
</body>
</html>
