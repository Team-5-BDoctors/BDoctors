@extends("layouts.app")

@section("content")
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __("Messaggi") }}</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th scope="col">Nome</th>
                                                <th scope="col">Cognome</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">Titolo</th>
                                                <th scope="col">Contenuto</th>
                                                <th scope="col">Data</th>
                                                <th scope="col">Rispondi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($messages as $message)
                                                <tr>
                                                    <td>{{ $message->name }}</td>
                                                    <td>{{ $message->surname }}</td>
                                                    <td>{{ $message->email }}</td>
                                                    <td>{{ $message->title }}</td>
                                                    <td>{{ $message->content }}</td>
                                                    <td>{{ $message->created_at }}</td>
                                                    <td><a href="mailto:{{ $message->email }}?subject=In risposta a '{{$message->title}}'"><i class="fas fa-reply"></i></a></td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection