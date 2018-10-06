@extends('layouts.app')

@section('content')
<div class="col-lg-12">  
            <form method="post" action="{{route('todos.update',['id'=>$todo->id])}}">
            {{csrf_field()}}
            {{ method_field('PUT')}} 
            <input type="text" class="form-control" value="{{$todo->todo}}" name="todo" placeholder="ToDos">
            <input type="integer" class="form-control" value="{{$todo->completed}}" name="completed" placeholder="Status">
          
    
             
             <input type="submit" name="submit" value="Submit" class="btn btn-primary">
             </form><!--end form here-->
      

       
     </div><!--row end here-->



       @endsection