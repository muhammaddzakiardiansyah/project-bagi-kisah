<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <div class="box d-flex justify-content-center align-items-center">
        @if(session()->has('success'))
        <div class="position-absolute">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Berhasil!</strong><br/> {{ session()->get('success') }}.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
        @elseif ($errors->any())
        <div class="position-absolute">
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Gagal!</strong><br/>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
        @endif
        <form action="{{ route('register') }}" method="post" class="form w-50">
            @csrf
            <h2 class="py-4 text-center">Registrasi Bagi Kisah</h2>
            <div class="mb-3">
                <label for="id_u" class="form-label">ID User</label>
                <input type="number" class="form-control" id="id_u" name="id_u" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" id="password" placeholder="******">
            </div>
            <button type="submit" class="btn btn-outline-primary fw-semibold mt-4 mb-2">Registrasi</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>