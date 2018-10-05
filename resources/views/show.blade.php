@extends('layouts.app')

@section('content')


     <div class="row">
       <div class="col-lg-6">
       
       @foreach($todos as $todo)
       <h4>{{$todo->todo}}
       
       <a class="btn btn-info btn-xs" href="{{route('todos.update',['id'=>$todo->id])}}" >Update </a>
       <form action="{{route('todos.destroy',['id'=>$todo->id])}}" method="post">
       {{csrf_field()}}
       <input type="hidden" name="_method" value="DELETE">
       <button type="submit" class="btn btn-danger">Delete</button>

       </form>
         </h4>
       
       @endforeach
       </div><!--end first columm-->

       <div class="col-lg-6">
            <form action="{{route('todos.store')}}" method="post">
   
            <input type="text" class="form-control" name="todo" placeholder="ToDos">
    
             {{csrf_field()}}
    
              <input type="integer" class="form-control" name="completed" placeholder="Status">
              <input type="submit" class="btn btn-primary" value="Submit">
    
      </div><!--end second col here-->

       </form><!--end form here-->

     </div><!--row end here-->


     

     
     
     </div>
@endsection