@extends('template.second')
@section('content')
    <form action="/update-header/{{$edit->id}}" method="post">
        @csrf
        <div class="form-group">
            <label for="">Titre</label>
            <input type="text" name="titre" value="{{old('titre' ) ? old('titre') : $edit->titre}}">
        </div>
        <div class="form-group">
            <label for="">Sous Titre</label>
            <input type="text" name="sousTitre" value="{{old('sousTitre' ) ? old('sousTitre') : $edit->sousTitre}}">
        </div>
        <div class="form-group">
            <label for="">Button</label>
            <input type="text" name="button" value="{{old('button' ) ? old('button') : $edit->button}}">
        </div>
        <button class="btn btn-p" type="submit">SUBMIT</button>

    </form>
    
@endsection