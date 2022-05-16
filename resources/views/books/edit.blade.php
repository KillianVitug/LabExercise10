@extends('books.layout')
@section('content')
<div class="card">
  <div class="card-header">Book Page</div>
  <div class="card-body">
      
      <form action="{{ url('books/' .$books->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$books->id}}" id="id" />
        <label>Title</label></br>
        <input type="text" name="title" id="title" value="{{$books->title}}" class="form-control"></br>
        <label>Author's Name</label></br>
        <input type="text" name="name" id="name" value="{{$books->name}}" class="form-control"></br>
        <label>Description</label></br>
        <input type="text" name="description" id="description" value="{{$books->description}}" class="form-control"></br>
        <label>Published Year</label></br>
        <input type="text" name="published" id="published" value="{{$books->published}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop