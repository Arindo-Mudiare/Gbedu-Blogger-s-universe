@extends('layouts.app')


@section('content')

<div class="card">
    <div class="">
        <div class="card-heading">
           Categories
         </div>
         <hr>
      <div class="card-body">
         <table class="table table-hover">
             <thead class="thead-dark">
               <th>Category name</th>
               <th>Editing</th>
               <th>Deleting</th>
             </thead>
           <tbody>
             @if ($categories->count() > 0)
                 @foreach ($categories as $category)
                 <tr>
                   <td>{{ $category->name }}</td>
                   <td>
                     <a href="{{ route('category.edit',['id'=> $category->id]) }}" class="btn btn-sm btn-info">
                         Edit
                     </a>
                   </td>
                   <td>
                     <a href="{{ route('category.delete',['id'=> $category->id]) }}" class="btn btn-sm btn-danger">
                         Delete
                     </a>
                   </td>
                 </tr>
                 
                 @endforeach
                 
                @else
                   <tr class="jumbotron">
                     <th colspan="5" class="text-center">No Categories created yet</th>
                   </tr>
                 
             @endif
               
       
           </tbody>
         </table>
      </div>
    </div>
</div>
     
@stop