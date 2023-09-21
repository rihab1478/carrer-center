@extends('utulisateur.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">
      
      <form action="{{ url('utulisateur') }}" method="post">
        {!! csrf_field() !!} 
        <label>nom</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <label>prenom</label></br>
        <input type="text" name="address" id="address" class="form-control"></br>
        <label>email</label></br>
        <input type="text" name="mobile" id="mobile" class="form-control"></br>
        <label>cin</label></br>
        <input type="text" name="mobile" id="mobile" class="form-control"></br>
        <label>numéro</label></br>
        <input type="text" name="mobile" id="mobile" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
