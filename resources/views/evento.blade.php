<div class="row">
    <div class="col">
        <div class="card p-4">
            <div class="row">
                <div class="col">
                    <h4 class="text-info">{{ $event['titulo'] }}</h4>
                    <small class="text-danger"><span class="me-2">Tipo do
                            Evento:</span><strong>{{ $event['tipo'] }}</strong></small>
                    <br>
                    <small class="text-danger"><span class="me-2">Data do
                            evento:</span><strong>{{ date('d-m-Y', strtotime($event['data'])) }}</strong></small>
                    <br>
                    <small class="text-danger"><span class="me-2">
                            Valor:</span><strong>{{ $event['valor'] }}</strong></small>
                </div>

                <div class="col text-end">
                    <a href="/edit/{{ $event['id'] }}" class="btn btn-outline-secondary btn-sm mx-1"><i
                            class="fa-regular fa-pen-to-square"></i></a>
                    <a href="/delete/{{ $event['id'] }}" class="btn btn-outline-danger btn-sm mx-1"><i
                            class="fa-regular fa-trash-can"></i></a>
                </div>
            </div>
            <hr>
            <p class="card-text">{{ $event['descricao'] }}</p>
            <a href="{{ $event['google_maps_link'] }}" class="card-link">{{ $event['google_maps_link'] }}</a>
        </div>
    </div>
</div>
