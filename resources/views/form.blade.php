<?php

//echo ".......hello {$name}.........";
echo "<h1>SIGN UP FORM</h1>";
echo  Form::open(array('url' => '/create'));
//echo Form::open(array('action' => 'StudentController@insert'));
echo Form::label('name', 'enter name');
echo Form::text('name');
echo "</br>";
echo Form::label('email', 'enter E-Mail');
echo Form::email('email');
echo "</br>";
echo Form::label('password','enter password');
echo Form::password('password');
echo "</br>";
echo Form::submit('sign up!');
echo  Form::close();
 ?>
