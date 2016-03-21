<?php

Validator::extend('gt', function($attribute, $value, $parameters) 
{ 
	$other = Input::get($parameters[0]);

    return isset($other) and intval($value) > intval($other);
});

Validator::extend('lt', function($attribute, $value, $parameters)
{
    $other = Input::get($parameters[0]);

    return isset($other) and intval($value) < intval($other);
});