@extends('layouts.app')


@section('content')


     <div class="card card-default">
         <div class="card-heading">
            Tags
          </div>
          <hr>
       <div class="card-body">
          <table class="table table-hover">
              <thead class="thead-dark">
                <th>Tag name</th>
                <th>Editing</th>
                <th>Deleting</th>
              </thead>
            <tbody>
              @if ($tags->count() > 0)
                  @foreach ($tags as $tag)
                  <tr>
                    <td>{{ $tag->tag }}</td>
                    <td>
                      <a href="{{ route('tag.edit',['id'=> $tag->id]) }}" class="btn btn-sm btn-info">
                          Edit
                      </a>
                    </td>
                    <td>
                      <a href="{{ route('tag.delete',['id'=> $tag->id]) }}" class="btn btn-sm btn-danger">
                          Delete
                      </a>
                    </td>
                  </tr>
                  
                  @endforeach
                  
                 @else
                    <tr class="jumbotron">
                      <th colspan="5" class="text-center">No Tags created yet</th>
                    </tr>
                  
              @endif
                
        
            </tbody>
          </table>
       </div>
     </div>
@stop