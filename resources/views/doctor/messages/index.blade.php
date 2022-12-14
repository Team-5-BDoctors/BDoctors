@extends("layouts.app")

@section("content")
    <div class="container">
        <div class="table-container">
            <h1 class="my-table-title">Messaggi</h1>
            <div class="my-table">
                <div class="tb-head">
                    <div class="row .flex-nowrap fw-bold fs-5">
                        <div class="col">Nome</div>
                        <div class="col d-none d-xl-block col-lg-3">Email</div>
                        <div class="col d-none d-md-block">Titolo</div>
                        <div class="col-4 ">Messaggio</div>
                        <div class="col">Data</div>   
                        <div class="col">Contatta</div>    
                    </div>
                </div>
                <div class="tb-body">
                    @foreach ($messages as $message)
                        <div class="row .flex-nowrap">
                            <div class="col fw-bold">{{ $message->name }}
                                <div class="tb-surname fw-light">{{$message->surname}}</div>
                            </div>
                            <div class="col d-none d-xl-block col-lg-3">{{ $message->email }}</div>
                            <div class="col d-none d-md-block">{{ $message->title }}</div>
                            <div class="col-4">{{ $message->content }}</div>
                            <div class="col">{{ $message->created_at }}</div> 
                            <div class="col">
                                <a href="mailto:{{$message->email}}?subject=In risposta al suo messaggio '{{$message->title}}'" class="btn btn-primary text-white">
                                    <i class="fa-solid fa-reply"></i>
                                </a>
                            </div>                    
                        </div>
                    @endforeach
                </div>
                {{ $messages->links() }}
            </div>
        </div>  
        

        

        <!-- <div class="row justify-content-center">
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
        </div> -->
    </div>
@endsection