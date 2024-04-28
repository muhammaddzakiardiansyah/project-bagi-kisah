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
            <a class="navbar-brand nav-text fw-semibold" href="#">Bagi Kisah</a>
            <a class="navbar-brand badge text-bg-primary">Logout</a>
        </div>
    </nav>
    <div class="create-story">
        <a href="/buat-cerita" class="btn btn-primary">Buat Cerita</a>
        <p>Ceritakan apa masalahmu</p>
    </div>
    <div class="d-flex justify-content-center align-items-center mt-2">
        @if(session()->has('success'))
        <div class="position-absolute">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Berhasil!</strong><br /> {{ session()->get('success') }}.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
        @elseif ($errors->any())
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
        <div class="w-50">
            @foreach ([1,2,3,4,5] as $story)
            <div class="card my-3">
                <div class="card-body">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam velit tempora laboriosam eaque perferendis incidunt veritatis aspernatur necessitatibus fugit repudiandae. Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi eum labore nulla tenetur sint consectetur fugiat laborum harum, accusamus iure.
                </div>
                <div class="card-body">
                    <a href="#" class="badge text-bg-warning text-decoration-none">Edit</a>
                    <a href="#" class="badge text-bg-danger text-decoration-none">Hapus</a>

                </div>
            </div>
            @endforeach
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>