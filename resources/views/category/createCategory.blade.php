@extends('Layouts.main')

@section('content')

<form action="/createNewCategory" method="post" enctype="multipart/form-data">
  @csrf
    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" name="name" id="name" class="form-control" placeholder="" aria-describedby="helpId">
    </div>
    
    <div class="form-group">
      <label for="name">Image</label>
      <input type="file" name="image" id="image" class="form-control" placeholder="" aria-describedby="helpId">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

  

@endsection