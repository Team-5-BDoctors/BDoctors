@extends("layouts.app")

@section("content")
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __("Recensioni") }}</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th scope="col">Nome</th>
                                                <th scope="col">Titolo</th>
                                                <th scope="col">Contenuto</th>
                                                <th scope="col">Valutazione</th>
                                                <th scope="col">Data</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($reviews as $review)
                                                <tr>
                                                    <td>{{ $review->name }}</td>
                                                    <td>{{ $review->title }}</td>
                                                    <td>{{ $review->content }}</td>
                                                    <td>{{ $review->rating }}</td>
                                                    <td>{{ $review->created_at }}</td>
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