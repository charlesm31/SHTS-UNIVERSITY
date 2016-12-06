<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BackendController extends Controller
{
    public function Fibonacci(Request $request)
    {
         if ($request->isMethod('post')) {

            $count = ($request['number']);
            $first = 1;
            $second = 1;
            $series = array($first, $second);

            for($i=1; $i <= $count-2;  $first=$second, $second=$third, $i++ ) {
                $third = $first + $second;
                $series[] =  $third;
            }

           return view('fibonacci', compact('series'));            
        }

        return view('fibonacci');
    }

    public function Palindrome(Request $request)
    {
        if ($request->isMethod('post')) {
            
            $phrase = $request['phrase'];

            //check if a phrase is accepted
            if($phrase){                
                $cleaned_phrase = strtolower(preg_replace("/[^a-zA-Z]+/", "", $phrase)); // Strip special charaters and white spaces
                $reverse =  strrev($cleaned_phrase); // outputs reverse value
            }       

            //Test phrase if valid palindrome
            if($cleaned_phrase === $reverse){
                $msg = "True";
                $class = "alert-success";
            }else{
                $msg = "False";
            }

            //return to palindrome page with data
            return view('palindrome', compact('phrase', 'reverse', 'msg', 'class'));
        }   

        return view('palindrome');
    }

    public function Anagram(Request $request)
    {
         if ($request->isMethod('post')) {
            
            $first_word = $request['first_word'];
            $second_word = $request['second_word'];

            if(count_chars($first_word, 1) == count_chars($second_word, 1)){
                $msg = "True";
                $class = "alert-success";
            }else{
                $msg = "False";
            }

            //return to palindrome page with data
            return view('anagram', compact('first_word', 'second_word', 'msg', 'class'));
         }
        
        return view('anagram');
    }

    public function NumberSort(Request $request)
    {
        if ($request->isMethod('post')) {

            $numbers = array($request['number1'], $request['number2'], $request['number3'], $request['number4'], $request['number5']);
            $array_length = count($numbers);
            
            //return to palindrome page with data
            return view('number_sort', compact('array_length', 'numbers'));
         }
         
        return view('number_sort');
    }
}
