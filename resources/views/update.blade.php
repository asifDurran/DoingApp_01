@extends('layouts.app')

@section('content')

<div class="row">
     <div class="col-lg-12">
            <form action="{{route('todos.index')}}" method="post">
   
            <input type="text" class="form-control" name="todo"  value="{{$todo->todo}}" placeholder="ToDos">
    
             {{csrf_field()}}
    
              <input type="integer" class="form-control" name="completed" placeholder="Status">
              <input type="submit" class="btn btn-primary" value="Submit">
    
      </div><!--end second col here-->

       </form><!--end form here-->


       @endsection