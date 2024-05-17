@extends('layout.app')
@section('content')

<main class="mt-2 pt-4">
<form action="{{route('role.store')}}" method="Post">
@csrf 
    <h1>FORMULAIRE D'AJOUT DE ROLE</h1>
  
  <div class="row mb-4">
    <div class="col">
      <div data-mdb-input-init class="form-outline">
        <input type="text" id="form6Example1" class="form-control"  name="intitule"/>
        <label class="form-label" for="form6Example1">INTITULE</label>
      </div>
    </div>
    

  <!-- Submit button -->
  <button data-mdb-ripple-init type="submit" class="btn btn-primary btn-block mb-4">Enregistrer</button>
</form>
</main>
@endsection