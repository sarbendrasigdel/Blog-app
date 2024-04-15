@extends('Layouts.main')
@section('content')

<table class="table">
    <thead>
      <tr>
        <th scope="col">SN</th>
        <th scope="col">Category</th>
        <th scope="col">Image</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach($category as $data)
      <tr>
        <th scope="row">{{$data->id}}</th>
        <td>{{$data->name}}</td>
        <td><img src="{{asset($data->image)}}" alt="" style="width: 30px;height:30px"></td>
        <td><a href="/update-category/{{$data->id}}" class="btn btn-primary">update</a>
          <a href="/deleteCategory/{{$data->id}}" class="btn btn-danger">delete</a></td>
      </tr>
      @endforeach
    </tbody>
  </table>

@endsection