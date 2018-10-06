@extends('layouts.app')

@section('content')
<head>
<style>
.todo{
  margin-top:40px;
  }

</style>
</head>
  
  <div class="container-fluid">
  <div class="row">
  
  <div class="col-lg-12">
  
  <table>
  
  <thead>
  <th>Todos List</th>
  <th>Status</th>
  
  </thead>
  @foreach($todos as $todo)
  <tr>
  <td>{{$todo->todo}}</td>
  <td>
  @if(!$todo->completed)

  <a href="{{route('todos.show',['id'=>$todo->id])}}" class="btn btn-success" >Mark As completed</a>
  @else
   
   <span class="text-success">Completed!</span>


  @endif
  </td>
  <td><a type="button" class="btn btn-warning"  href="{{route('todos.edit',['id'=>$todo->id])}}">Edit</a></td>
  <td><form action="{{route('todos.update',['id'=>$todo->id])}}" method="post">
  {{csrf_field()}}
  
  {{method_field('PUT')}}

  <input type="hidden" name="_method" value="DELETE">
  <input type="submit" name="submit" class="btn btn-primary" value="Delete">
  </form></td>
  </tr>
  @endforeach
  
  </table>
  
  
  </div><!--end of col-->
  

  
  
  
  </div><!--end of row -->
  
  
  
  
  
  </div><!--end of container fluid -->

    <div class="container-fluid todo">
    <div class="row">
       <div class="col-lg-12 ">
       <h3>Add new Todos</h3>
            <form action="{{route('todos.store')}}" method="post">
   
            <input type="text" class="form-control" name="todo" placeholder="ToDos">
    
             {{csrf_field()}}
    
              <input type="integer" class="form-control" name="completed" placeholder="Status">
              <input type="submit" class="btn btn-primary" value="Submit">
    
      </div><!--end second col here-->

       </form><!--end form here-->

     </div><!--second row end here-->
     </div><!--end of container fluid-->

     

     
     
     </div>
@endsection