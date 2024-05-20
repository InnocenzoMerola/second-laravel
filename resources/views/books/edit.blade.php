@extends('templates.base')

@section('title', 'I&M - Modifica')
@section('content')


<h1 class="text-center">Area di modifica</h1>
<div class="row justify-content-center">
    <div class="col-5">
        <form method="post" action="">
            <div class="row row-gap-2">
                <div class="col-12">
                    <label for="titolo" class="form-label">Titolo:</label>
                    <input type="text" name="titolo" id="titolo" class="form-control"><br><br>
                </div>

                <div class="col-12">
                    <label for="autore">Autore:</label>
                    <input type="text" name="autore" id="autore" class="form-control"><br><br>
                </div>
                
                <div class="col-12">
                    <label for="anno">Anno:</label>
                    <input type="number" name="anno" id="anno" class="form-control"><br><br>
                </div>

                <div class="col-12">
                    <label for="immagine">Copertina:</label>
                    <input type="text" name="immagine" id="immagine" class="form-control"><br><br>
                </div>

                <label for="descrizione" class="form-label mb-0">Trama</label>
                <div class="form-floating">
                    <textarea class="form-control pt-2" placeholder="Piccola trama" name="descrizione" id="floatingTextarea2" style="height: 100px"></textarea>
                </div>

                <div class="col-12 mt-3">
                    <input type="submit" value="Aggiungi Libro" class="btn btn-primary">
                </div>
        </form>
    </div>
</div>

@endsection