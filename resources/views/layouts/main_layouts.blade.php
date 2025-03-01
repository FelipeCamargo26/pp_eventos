<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ProPonto - Eventos</title>
    <link rel="stylesheet" href="{{ asset('build/assets/bootstrap/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('build/assets/fontawesome/css/all.min.css') }}">
</head>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col">
            <!-- no notes available -->
            @if (count($events) == 0)
                <div class="row mt-5">
                    <div class="col text-center">
                        <p class="display-6 mb-5 text-secondary opacity-50">You have no notes available!</p>
                        <a href="{{ route('new') }}" class="btn btn-secondary btn-lg p-3 px-5">
                            <i class="fa-regular fa-pen-to-square me-3"></i>Cadastre seu primeiro evento
                        </a>
                    </div>
                </div>
            @else
                <!-- notes are available -->
                <div class="d-flex justify-content-end mb-3">
                    <a href="#" class="btn btn-secondary px-3">
                        <i class="fa-regular fa-pen-to-square me-2"></i>Novo evento
                    </a>
                </div>

                @foreach ($events as $event)
                    @include('evento')
                @endforeach
            @endif
        </div>
    </div>
</div>

<script src="{{ asset('build/assets/bootstrap/bootstrap.bundle.min.js') }}"></script>
</body>


</html>
