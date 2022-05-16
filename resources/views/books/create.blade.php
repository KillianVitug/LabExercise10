@extends('books.layout')
@section('content')
<div class="card">
  <div class="card-header">Book Page</div>
  <div class="card-body">
      
      <form action="{{ url('books') }}" method="post">
        {!! csrf_field() !!}
        <label>Title</label></br>
        <input type="text" name="title" id="title" class="form-control"></br>
        <label>Author's Name</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <label>Description</label></br>
        <input type="text" name="description" id="description" class="form-control"></br>
        <label>Published year</label></br>
        <input type="text" name="published" id="published" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop