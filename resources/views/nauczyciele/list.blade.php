@extends('template')

@section('title')
  @if(isset($title))
    - {{$title}}
  @endif

@endsection('title')

@section('content')
          <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">name</th>                
                <th scope="col">Email</th>                
                <th scope="col">Phone</th>
                <th scope="col">Status</th>
                
              </tr>
            </thead>
            <tbody>
            @foreach ($nauczycieleList as $nauczyciel)
            
              <tr>
                <th scope="row">{{$nauczyciel->id}}</th>
                <td><a href="{{ URL::to('nauczyciele/'.$nauczyciel->id) }}"> {{ $nauczyciel->name }} </a></td> 
                <td>{{$nauczyciel->name}}</td>               
                <td>{{$nauczyciel->email}}</td>
                <td>{{$nauczyciel->phone}}</td>                
                <td>{{$nauczyciel->status}}</td>
              
              </tr>
             
              @endforeach  
            </tbody>
          </table>
          

@endsection('content')
  