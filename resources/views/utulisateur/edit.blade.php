@extends('utulisaateur.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">
      
      <form action="{{ url('utulisateur/' .$utulisateur->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$utulisateur->id}}" id="id" />
        <label>Name</label></br>
        <input type="text" name="name" id="name" value="{{$utulisateur->nom}}" class="form-control"></br>
        <label>prenom</label></br>
        <input type="text" name="address" id="address" value="{{$utulisateur->prenom}}" class="form-control"></br>
        <label>Address</label></br>
        <input type="text" name="address" id="address" value="{{$utulisateur->email}}" class="form-control"></br>
        <label>cin</label></br>
        <input type="text" name="address" id="address" value="{{$utulisateur->cin}}" class="form-control"></br>
        <label>Mobile</label></br>
        <input type="text" name="mobile" id="mobile" value="{{$utulisateur->numero}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
