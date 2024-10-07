<!DOCTYPE html>
<html lang="en">
<head>
  <title>Posts</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  {{-- <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}"> --}}
</head>
<body>
 
<div class="container pt-5">
  <h2>POST<a class="btn btn-info" href="/post-create">New  Post</a></h2>          
  <table class="table">
    <thead>
      <tr>
        <th>S.no</th>
        <th>Ttile</th>
        <th>Content</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($posts as $post )
      <tr>
        <td>{{ $loop->index+1}}</td>
        <td>{{ $post->title}}</td>
        <td>{{ $post->content}}</td>
        <td>
            <a href="/post-edit/{{$post->id}}" class="btn btn-sm btn-info">Edit </a>
            <a href="/post-delete/{{$post->id}}" class="btn btn-sm btn-danger">delete </a>
            <a href="/post-show/{{$post->id}}" class="btn btn-sm btn-warning">Show</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
</body>
</html>
