
@extends('utulisateur.layout')
@section('content')
<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">
  
        <div class="card-body">
        <h5 class="card-title">Nom : {{ $utulisateur->nom }}</h5>
        <p class="card-text">Prenom : {{ $utulisateur->prenom }}</p>
        <p class="card-text">Telphone : {{ $utulisateur->numero }}</p>
        <p class="card-text">Email : {{ $utulisateur->email }}</p>
        <p class="card-text">Cin : {{ $utulisateur->cin }}</p>

  </div>
      
    </hr>
  
  </div>
</div