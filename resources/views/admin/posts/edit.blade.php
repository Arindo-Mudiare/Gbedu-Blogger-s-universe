@extends('layouts.app')

@section('content')

{{-- Show errors from create post form --}}
     @if (count($errors) > 0)
         <ul class="list-group">
           @foreach ($errors->all() as $error)
              <li class="list-group-item text-danger">
                  {{ $error }}

              </li>
               
           @endforeach
         </ul>
         
     @endif

     {{-- create post form --}}
    <div class="card">
      <div class="card-header">
        Edit post: {{ $post->title }}
      </div>
      <div class="card-body">
        <form action="{{ route('post.update',['id' =>$post->id]) }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" class="form-control" value="{{ $post->title }}">
                </div>
                <div class="form-group">
                    <label for="featured">Featured Image</label>
                    <input type="file" name="featured" class="form-control">
                </div>
                {{-- Select category --}}
                <div class="form-group">
                    <label for="category">Select a Category</label>
                    <select class="form-control" name="category_id" id="category">
                      @foreach ($categories as $category)
                          <option value="{{ $category->id }}">{{ $category->name }}</option>
                      @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label for="content">Content</label>
                  <textarea class="form-control" name="content" id="content" rows="3">{{ $post->content }}</textarea>
                </div>
                <div class="form-group">
                  <div class="text-center">
                    <button class="btn btn-success">
                     Update Post
                    </button>
                  </div>
                </div>
          </form>
        </div>
       
      </div>
    </div>
@stop