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
  <h2> Edit Category</h2>    
  <h2>Comment</h2>  
  <div class="row">
  <div class="col-sm-4">
    <h4>{{ $post->title}}</h4>
    <h4>{{ $post->content}}</h4>
      <h4>Add a Comment</h4>
        <form action="{{ route('comments.store', $post->id) }}" method="POST">
            @csrf
            <div class="form-group">
                <textarea name="content" class="form-control" rows="3" placeholder="Enter your comment here" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary mt-2">Add Comment</button>
        </form>
    </form>    
</div>
</body>
</html>
