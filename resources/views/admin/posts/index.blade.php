@extends('layouts.app')


@section('content')


     <div class="card card-default">
       <div class="card-body">
          <table class="table table-hover">
              <thead class="thead-dark">
                <th>Image</th>
                <th>Title</th>
                <th>Edit</th>
                <th>Delete </th>
              </thead>
            <tbody>
              @foreach ($posts as $post)
                  <tr>
                    <td><img src="http://authsystem.test/{{ $post->featured }}" alt="{{ $post->title }}" height="50px" width="90px"></td>
                    <td>{{ $post->title }}</td>
                    <td>
                        <a href="{{ route('category.edit',['id'=> $post->id]) }}" class="btn btn-sm btn-info">
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
            </tbody>
          </table>
       </div>
     </div>
@stop