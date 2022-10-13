@extends('layouts.main')

@section('title', 'LPV Doações')

@section('content')
    <div id="search-container" class="col-md-12">
        <h1>Busque um livro</h1>
        <form action="">
            <input type="text" id="search" name="search" class="form-control" placeholder="Procurar">
        </form>
    </div>
    <div id="books-container" class="col-md-12">
            <h2>Livros para ler</h2>
            <p class="subtitle">Veja os livros que estão chegando</p>
            <div id="cards-container" class="row"></div>
                @foreach ($donations as $donation)
                   <div class="card col-md-3">
                        <img src="/img/R.jpg" alt="{{ $donation->name }}">
                        <div class="card-body">
                            <p class="card-date">10/23/32</p>
                            <h5 class="card-title">{{$donation->name}}</h5>
                            <p class="card-quantidades"></p>
                            <a href="#" class="btn btn-primary">Saber mais</a>
                      
                        </div>
                    </div> 
                @endforeach
    </div>
@endsection
