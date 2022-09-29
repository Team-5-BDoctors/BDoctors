@extends("layouts.app")

@section("content")
    <div class="container">
        <div class="table-container">
            <h1 class="my-table-title">Recensioni</h1>
            <div class="my-table">
                <div class="tb-head">
                    <div class="row .flex-nowrap fw-bold fs-5">
                        <div class="col">Nome</div>
                        <div class="col">Titolo</div>
                        <div class="col col-lg-3">Contenuto</div>
                        <div class="col">Voto</div>
                        <div class="col">Data</div>   
                         
                    </div>
                </div>
                <div class="tb-body">
                    @foreach ($reviews as $review)
                        <div class="row .flex-nowrap">
                            <div class="col fw-bold">{{ $review->name }}</div>
                            <div class="col">{{ $review->title }}</div>
                            <div class="col col-lg-3">{{ $review->content }}</div>
                            <div class="col">{{ $review->rating }}</div>
                            <div class="col">{{ $review->created_at }}</div>               
                        </div>
                    @endforeach
                </div>
                {{ $reviews->links() }}
            </div>
        </div>  
    </div>
@endsection