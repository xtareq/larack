@extends('xdmin.layouts.app')
@section('content')
<div class="container">
<div class="card card-block">
    <div class="card-header">
        <strong class="card-title">Posts List</strong>
    </div>
    <div class="card-body">
        <form action="{{route('xdmin.posts.store')}}" class="form-horizontal" method="post">
            @csrf 
            <div class="form-group">
              <label for="title">Post Title</label>
              <input type="text" class="form-control" name="title" id="title" aria-describedby="helpId" placeholder="Title">
              <small id="helpId" class="form-text text-muted">your post title</small>
            </div>
            <div class="form-group">
              <label for="cks">Content</label>
              <textarea class="form-control" name="body" id="cks" ></textarea>
            </div>
            <button type="submit" class="btn btn-success">Save</button>
        </form>
    </div>
</div>    
</div>





@endsection
@push('scripts')
    <script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
    <script src="{{ asset('vendor/unisharp/laravel-ckeditor/adapters/jquery.js') }}"></script>


    <script>
          var options = {
    filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
    filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
    filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
    filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
  };
        CKEDITOR.replace( 'cks', options );
    </script>
@endpush