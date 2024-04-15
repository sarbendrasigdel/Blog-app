@extends('Layouts.main')

@section('content')

<form action="/createNewBlog" method="post" enctype="multipart/form-data">
  @csrf
    <div class="form-group">
      <label for="name">Title</label>
      <input type="text" name="title" id="name" class="form-control" placeholder="" aria-describedby="helpId">
    </div>
    
    <div class="form-group">
      <label for="image">Image</label>
      <input type="file" name="image" id="image" class="form-control" placeholder="" aria-describedby="helpId">
    </div>

    <div class="form-group">
        <label for="description">description</label>
        <textarea name="description" id="description" cols="30" rows="10"></textarea>
      </div>

      <div class="form-group">
        <label for="author">author</label>
        <input type="text" name="author" id="author" class="form-control" placeholder="" aria-describedby="helpId">
      </div>
      <div class="form-group">
        <label for="category_id">category</label>
        <select name="category_id" id="category_id">
          @foreach($category as $items)
            <option value="{{$items->id}}">{{$items->name}}</option>
            @endforeach
        </select>
      </div>
      

    <button type="submit" class="btn btn-primary">Submit</button>
    <button type="clear" class="btnbtn-danger">Clear</button>
  </form>

  

@endsection