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
    <nav class="navbar bg-body-tertiary z-3">
        <div class="container">
            <a class="navbar-brand nav-text fw-semibold" href="#">Buat Cerita</a>
            <a href="/dashboard" class="navbar-brand nav-text fw-semibold">Kembali</a>
        </div>
    </nav>
    <div class="box d-flex justify-content-center align-items-center">
        @if ($errors->any())
        <div class="position-absolute">
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Gagal!</strong><br />
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
        @endif
        <form action="{{ route('login') }}" method="post" class="form w-50">
            @csrf
            <h2 class="py-4 text-center">Buat Cerita</h2>
            <div class="mb-3">
                <label for="story" class="form-label">Apa yang ingin kamu ceritakan ?</label>
                <textarea name="story" class="form-control" id="story" cols="30" rows="10" placeholder="Ceritakan semuanya disini" required></textarea>
    
            </div>
            <button type="submit" class="btn btn-outline-primary fw-semibold mt-4 mb-2">Upload</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>