@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="text-center my-4">Aggiungi un nuovo progetto</h2>
            </div>
            <div class="col-12">
                <form action="{{route('admin.projects.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                    <div class="form-group mb-3">
                        <label for="nome_progetto">Nome del progetto</label>
                        <input type="text" class="form-control" name="nome_progetto" id="nome_progetto" placeholder="Nome del progetto">
                        @error('nome_progetto')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="descrizione">Descrizione</label>
                        <textarea class="form-control" name="descrizione" id="descrizione" cols="30" rows="10" placeholder="Descrizione"></textarea>
                        @error('descrizione')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="data">Data</label>
                        <input type="date" class="form-control" name="data" id="data" placeholder="data">
                        @error('data')
                            <div class="text-danger">{{$message}}</div> 
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="cover_immagine">Immagine copertina</label>
                        <input type="file" class="form-control" name="cover_immagine" id="cover_immagine" placeholder="">
                        @error('cover_immagine')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <button type="submit" class="btn btn-success">Salva</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection