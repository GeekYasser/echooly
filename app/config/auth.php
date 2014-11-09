<?php

return array(
  'multi' => array(
    //Student() Auth
        'Student' => array(
            'driver' => 'eloquent',
            'model' => 'Student',
            
        ),
    //Teacher() Auth
        'Teacher' => array(
            'driver' => 'database',
            'table' => 'teachers'
        ),
    //Admin() Auth
        'Admin' => array(
            'driver' => 'database',
            'table' => 'administration'
        )
    ),

	'reminder' => array(

		'email' => 'emails.auth.reminder',

		'table' => 'password_reminders',

		'expire' => 60,

	),

);
