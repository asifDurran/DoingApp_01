@extends('layouts.app')

@section('content')


     <div class="row">
       <div class="col-lg-6">
       
       @foreach($todos as $todo)
       <h4>{{$todo->todo}}</h4>
       
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
@endsection