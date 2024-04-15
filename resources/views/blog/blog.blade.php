@extends('Layouts.main')
@section('content')

<table class="table">
    <thead>
      <tr>
        <th scope="col">SN</th>
        <th scope="col">Title</th>
        <th scope="col">Image</th>
        <th scope="col">Description</th>
        <th scope="col">Author</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach($blog as $data)
      <tr>
        <th scope="row">{{$data->id}}</th>
        <td>{{$data->title}}</td>
        <td><img src="{{asset($data->image)}}" alt="" style="width: 30px;height:30px"></td>
        <td>{{$data->description}}</td>
        <td>{{$data->author}}</td>
        <td>{{$data->category->name}}</td>
        <td><a href="/update-blog/{{$data->id}}" class="btn btn-primary">update</a>
          <a href="/delete-blog/{{$data->id}}" class="btn btn-danger">delete</a></td>
      </tr>
      @endforeach
    </tbody>
  </table>

@endsection