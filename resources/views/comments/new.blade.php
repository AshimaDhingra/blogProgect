<!DOCTYPE html>
<html lang="en">
<head>
  <title>Categories</title>
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
  <h2> Add Comment</h2>      
  <div class="row">
  <div class="col-sm-4">
    <form method="POST" action="/comment-store">
      @csrf
      <label>Content</label>
      <input type="text" name="content" class="form-control"/>
      <button class="btn btn-info mt-4" type="submit">Create</button>
    </form>    
</div>
</body>
</html>
