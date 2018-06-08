<?php
/*a function refers to a block of statements
that can be used more than once is a code /repeated.
we have two types of functions
inbuilt functions and user defined function,
Functions do not execute immeadiately unless there is 
a function call for it
*/
echo "str_word_count(string:"<p>My name is Bla bla bla bla bla</p>")";
/*when working a user defined functions you have to indicate the term 
function and give it the function a name that will be used when calling it*/
function classmay(){
	//in the above case classmay is our function name 
	echo "Class May";
}
//function call below
classmay();