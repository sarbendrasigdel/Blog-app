@extends('Layouts.main')

@section('content')

<form action="/save-updated-category" method="post" enctype="multipart/form-data">
    @csrf
    <input type="hidden" value="{{$category->id}}" name="id">
    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" name="name" id="name" value="{{$category->name}}" class="form-control" placeholder="" aria-describedby="helpId">
    </div>
    
    <div class="form-group">
      <label for="image">Image</label>
      <input type="file" name="image" id="image" class="form-control" value="{{$category->image}}" placeholder="" aria-describedby="helpId">
    </div>
    <img src="{{asset($category->image)}}" alt="" style="height: 40px; width:40px;">

    <button type="submit" class="btn btn-primary">update</button>
  </form>

  

@endsection