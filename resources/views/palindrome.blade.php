@extends('layout.admin')

@section('title')
Palindrome Tester
@endsection

@section('header')
Palindrome Tester
@endsection

@section('page')
Palindrome Tester
@endsection

@section('content')
<p>A palindrome is a word, phrase, verse, or sentence that reads the same backward or forward. </p>

<div class="row">
    <hr>
    <div class="col-md-12">
        <h4 class="text-bold">Activity parameters/requirements:</h4>
        <ul>
            <li>
                <p>Only the order of English alphabet letters (A-Z and a-z) should be considered, other characters should be ignored.</p>
            </li>
            <li>
                <p>On another PHP page, have a form that accepts user input and once submitted, returns true if a given sentence is a palindrome; false otherwise.</p>
            </li>
        </ul>

        <hr>

        <h4 class="text-bold">Expected Output:</h4>  
        <ul>
            <li>
                <p>For example, Palindrome::isPalindrome(‘Noel sees Leon.’) should return true as spaces, period, and case should be ignored.</p>
            </li>
            <li>
                <p>Resulting with <strong>'noelseesleon'</strong> which is a palindrome since it reads same backward and forward.
            </li>
        </ul>      
        <hr>
    </div>

    <div class="col-md-6">
        <form class="well" id="form_palindrome" method="post" action="{{ url('/palindrome') }}">
            <div class="form-group">
                <label>Original Phrase:</label>
                <input type="text" name="phrase" class="form-control" value="{{ (!empty($phrase) ? $phrase : '') }}" required>
            </div>

            @if(!empty($reverse))    
            <div class="form-group">
                <label>Palindrome:</label>
                <input type="text" class="form-control" value="{{ (!empty($reverse) ? $reverse : '') }}" readonly>
            </div>

            <div class="alert {{ (!empty($class) ? $class : 'alert-danger')}}">
                <p>Palindrome test says: <strong>{{ $msg }}</strong></p>
            </div>
            @endif

            {{ csrf_field() }}
           
            <button type="submit" class="btn btn-success">Test</button>
            <a href="{{ url('palindrome') }}" class="btn btn-primary">Refresh</a>
        </form>
    </div>    
</div>
@endsection