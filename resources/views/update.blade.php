<?php
//echo $id;
echo Form::open(array('url' => '/modify'));
echo Form::label('id', 'id');
echo Form::text('id',$id);
echo "</br>";
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
