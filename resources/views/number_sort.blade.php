@extends('layout.admin')

@section('title')
Number Sort
@endsection

@section('header')
Number Sorter
@endsection

@section('page')
Number Sort
@endsection

@section('content')
<p>A form that accepts 5 numeric input, once submitted, the inputted numbers will be displayed in an ascending and descending order.</p>

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

        <h4 class="text-bold">5 Numbers to Sort<h4>
    </div>

    <div class="col-md-2">
        <form class="well" id="form_sort" method="post" action="{{ url('/number-sort') }}">
            <div class="form-group">
               
                <div class="input-group">
                    <span class="input-group-addon">#1</span>
                    <input type="text" name="number1" class="form-control" value="{{ (!empty($numbers) ? $numbers[0] : '') }}" onkeypress='return event.charCode >= 48 && event.charCode <= 57' placeholder="*1st number" required>
                </div>

                <div class="input-group">
                    <span class="input-group-addon">#2</span>
                    <input type="text" name="number2" class="form-control" value="{{ (!empty($numbers) ? $numbers[1] : '') }}" onkeypress='return event.charCode >= 48 && event.charCode <= 57' placeholder="*2nd number" required>
                </div>

                <div class="input-group">
                    <span class="input-group-addon">#3</span>
                    <input type="text" name="number3" class="form-control" value="{{ (!empty($numbers) ? $numbers[2] : '') }}" onkeypress='return event.charCode >= 48 && event.charCode <= 57' placeholder="*3rd number" required>
                </div>

                <div class="input-group">
                    <span class="input-group-addon">#4</span>
                    <input type="text" name="number4" class="form-control" value="{{ (!empty($numbers) ? $numbers[3] : '') }}" onkeypress='return event.charCode >= 48 && event.charCode <= 57' placeholder="*4th number" required>
                </div>

                <div class="input-group">
                    <span class="input-group-addon">#5</span>
                    <input type="text" name="number5" class="form-control" value="{{ (!empty($numbers) ? $numbers[4] : '') }}" onkeypress='return event.charCode >= 48 && event.charCode <= 57' placeholder="*5th number" required>
                </div>
            </div> 

            {{ csrf_field() }}
            <button type="submit" class="btn btn-success">Test</button>
            <a href="{{ url('number-sort') }}" class="btn btn-primary">Refresh</a>
        </form>
    </div>    

    @if(!empty($numbers))
    <div class="col-md-2">
        <ul class="list-group">   
            <li class="list-group-item active text-center text-bold">Ascending Order</li>       
            <span style="display: none">{{ sort($numbers) }}</span>
            @foreach($numbers as $number) 
                <li class="list-group-item">{{ $number }}</li>
            @endforeach
        </ul>
    </div>

    <div class="col-md-2">
        <ul class="list-group">   
            <li class="list-group-item active text-center text-bold">Descending Order</li>       
            <span style="display: none">{{ rsort($numbers) }}</span>
            @foreach($numbers as $number) 
                <li class="list-group-item">{{ $number }}</li>
            @endforeach
        </ul>
    </div>
    @endif

</div>
@endsection