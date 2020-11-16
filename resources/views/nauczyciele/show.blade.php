@extends('template')

@section('title')
  @if(isset($title))
    - {{$title}}
  @endif
@endsection('title')

@section('content')
<div class="container">
    <div class="card">
        <div class="card_header">
            {{$nauczyciel->name}}    
        </div>    
        <div class="card-body">
            <table class="table">
                <tr>
                    <td>Name:</td>
                    <td>{{$nauczyciel->name}}</td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td>{{$nauczyciel->email}}</td>
                </tr><tr>
                    <td>Phone:</td>
                    <td>{{$nauczyciel->phone}}</td>
                </tr><tr>
                    <td>Adress:</td>
                    <td>{{$nauczyciel->adress}}</td>
                </tr><tr>
                    <td>Status:</td>
                    <td>{{$nauczyciel->status}}</td>
                </tr>
                </tr><tr>
                    <td>typ:</td>
                    <td>{{$nauczyciel->type}}</td>
                </tr>
            </table>
        </div>

    </div>
</div>

@endsection('content')