@extends('Layouts.main')

@section('content')

<form action="/save-updated-blog" method="post" enctype="multipart/form-data">
  @csrf
    <input type="hidden" name="id" value="{{$blog->id}}">
    <div class="form-group">
      <label for="name">Title</label>
      <input type="text" name="title" id="name" value="{{$blog->title}}" class="form-control" placeholder="" aria-describedby="helpId">
    </div>
    
    <div class="form-group">
      <label for="image">Image</label>
      <input type="file" name="image" id="image" value="{{asset($blog->image)}}" class="form-control" placeholder="" aria-describedby="helpId">
      <img src="{{asset($blog->image)}}" alt="" style="height: 30px; width:30px">
    </div>

    <div class="form-group">
        <label for="description">description</label>
        <textarea name="description" id="description" value="{{$blog->description}}" cols="30" rows="10"></textarea>
      </div>

      <div class="form-group">
        <label for="author">author</label>
        <input type="text" name="author" id="author" value="{{$blog->author}}" class="form-control" placeholder="" aria-describedby="helpId">
      </div>
      <div class="form-group">
        <label for="category_id">category</label>
        <select name="category_id" id="category_id" >
          @foreach ($category as $item)
                <option value="{{$item->id}}" @if($blog->id == $item->id) selected @endif>{{$item->name}}</option>
                @endforeach
        </select>
      </div>
      

    <button type="submit" class="btn btn-primary">Submit</button>
    <button type="clear" class="btn btn-danger">Clear</button>
  </form>

  

@endsection