<?php 

require 'app/start.php';

// quick test of if everything is working
// Create
// 1 
// $user = new User();
// $user->username = 'ramesh';
// $user->email = 'ramesh@gmail.com';
// $user->save();
// 2
// $parameters = array('username' => 'gita', 
// 	'email' => 'gita@gmail.com');
// $user2 = new User($parameters);
// $user2->save();  
// 3
// User::create([
//  		'username' =>'acti',
//  		'email' =>'acti@gmail.com'
//  	]);

// // Read 

$user = User::find(38);
echo $user->email ."</br>";


$user = User::last();
echo $user->username;

// $users = User::find('all');
// "</pre>".print_r($users);

// var_dump($users);

// $users = User::find_by_email('acti@gmail.com');
// var_dump($users);

// $users = User::find('all', array(
// 	'conditions' => array('username=?', 'acti')));
// var_dump($users);


// Update
$user = User::find(38);
echo $user->email;
$user->email = 'jpt@gmail.com';
$user->save();

// // Delete
// // Deleting a record will not destroy the object.

$user->delete(1);
