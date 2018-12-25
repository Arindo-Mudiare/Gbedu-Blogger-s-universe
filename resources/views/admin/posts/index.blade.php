@extends('layouts.app')


@section('content')


     <div class="card card-default">
          <div class="card-heading">
            Published Posts
          </div>
          <hr>
       <div class="card-body">
          <table class="table table-hover">
              <thead class="thead-dark">
                <th>Image</th>
                <th>Title</th>
                <th>Edit</th>
                <th>Delete </th>
              </thead>
            <tbody>
             @if ($posts->count() > 0)
                  @foreach ($posts as $post)
                  <tr>
                    <td><img src="http://authsystem.test/{{ $post->featured }}" alt="{{ $post->title }}" height="50px" width="90px"></td>
                    <td>{{ $post->title }}</td>
                    <td>
                        <a href="{{ route('post.edit',['id'=> $post->id]) }}" class="btn btn-sm btn-info">
                              Edit
                        </a>
                      </td>
                    <td>
                      <a href="{{ route('post.delete',['id'=> $post->id]) }}" class="btn btn-sm btn-danger">
                          Trash
                      </a>
                    </td>
                  </tr>
                  @endforeach
                 
             @else
                <tr class="jumbotron">
                  <th colspan="5" class="text-center">No published Posts</th>
                </tr> 
             @endif
            </tbody>
          </table>
       </div>
     </div>
@stop