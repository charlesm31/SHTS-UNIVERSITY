@extends('layout.admin')

@section('title')
Fibonacci Tester
@endsection

@section('header')
Fibonacci Tester
@endsection

@section('page')
Fibonacci Tester
@endsection

@section('content')
<p>The Fibonacci series is a series of numbers which the next number is the sum of the previous two number. </p>


<div class="row">
    <hr>
    <div class="col-md-12">
        <h4 class="text-bold">Activity parameters/requirements:</h4>
        <ul>
            <li>
                <p>First two numbers of the sequence is: 1 and 1</p>
            </li>
            <li>
                <p>On a new PHP file, have a form with a text field that allows the user to input the desired number of elements in the series. Once submitted, the series will be shown on the page.</p>
            </li>
        </ul>

        <hr>        
    </div>

    <div class="col-md-4">
        <form class="well" id="form_palindrome" method="post" action="{{ url('/fibonacci') }}">
            <div class="form-group">
                <label>How many number do you want on the series?</label>
                <input type="text" name="number" class="form-control" value="{{ (!empty($number) ? $number : '') }}" onkeypress="return event.charCode >= 48 && event.charCode <= 57" required>
            </div>           

            {{ csrf_field() }}
           
            <button type="submit" class="btn btn-success">Test</button>
            <a href="{{ url('fibonacci') }}" class="btn btn-primary">Refresh</a>
        </form>
    </div>    

    @if(!empty($series))
    <div class="col-md-8">
        <div class="well">
            @foreach($series as $number) 
                <span class="badge">{{ $number  }}</span>
            @endforeach
        </div>
    </div>   
    @endif
</div>
@endsection