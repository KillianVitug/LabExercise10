@extends('books.layout')
@section('content')
<div class="card">
  <div class="card-header">Book Page</div>
  <div class="card-body">
  
        <div class="card-body">
        <h5 class="card-title">Title : {{ $books->name }}</h5>
        <p class="card-text">Author's Name : {{ $books->name }}</p>
        <p class="card-text">Description : {{ $books->description }}</p>
        <p class="card-text">Published Year : {{ $books->published }}</p>

  </div>
      
    </hr>
  
  </div>
</div>