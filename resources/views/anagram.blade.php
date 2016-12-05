@extends('layout.admin')

@section('title')
Anagram Tester
@endsection

@section('header')
Anagram Tester 
@endsection

@section('page')
Anagram Tester 
@endsection

@section('content')
<p>
    An anagram is a word formed from another by rearranging its letters, using all the original letters exactly once; 
    for example, orchestra can be rearranged into carthorse.
</p>

<div class="row">
    <hr>
    <div class="col-md-12">
        <h4 class="text-bold">Activity parameters/requirements:</h4>
        <ul>
            <li>
                <p>On another PHP page, have a form that has two text field where the user will place his/her inputs for testing. Once the form is submitted, </p>
            </li>
            <li>
                <p>a result will display on the page that returns true if two words are each other's anagrams; false otherwise.</p>
            </li>
        </ul>

        <hr>

        <h4 class="text-bold">Expected Output:</h4>  
        <ul>
            <li>
                <p>For example, AreAnagrams::areStringsAnagrams('momdad', 'dadmom') should return true as arguments are anagrams.</p>
            </li>            
        </ul>      
        <hr>
    </div>

    <div class="col-md-6">
        <form class="well" id="form_anagram" method="post" action="{{ url('/anagram') }}">
            <div class="form-group">
                <label>First Word:</label>
                <input type="text" name="first_word" class="form-control" value="{{ (!empty($first_word) ? $first_word : '') }}" onkeyup="this.value=this.value.replace(/[^a-z]/g,'');" placeholder="small letters only" required>
            </div>

            <div class="form-group">
                <label>Second Word:</label>
                <input type="text" name="second_word" class="form-control" value="{{ (!empty($second_word) ? $second_word : '') }}" onkeyup="this.value=this.value.replace(/[^a-z]/g,'');" placeholder="small letters only" required>
            </div>

            @if(!empty($msg))
            <div class="alert {{ (!empty($class) ? $class : 'alert-danger')}}">
                <p>Anagram test says: <strong>{{ $msg }}</strong></p>
            </div>
            @endif

            {{ csrf_field() }}
           
            <button type="submit" class="btn btn-success">Test</button>
            <a href="{{ url('anagram') }}" class="btn btn-primary">Refresh</a>
        </form>
    </div>    
</div>
@endsection