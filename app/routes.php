<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});

Route::post('/mail', function(){
    $data = array();
    $data['name'] = stripcslashes($_POST['name']);
    $data['email'] = stripcslashes($_POST['email']);
    $data['body'] = stripcslashes($_POST['message']);
    $data['ip'] = $_SERVER['REMOTE_ADDR'];
    $data['sentFrom'] = $_SERVER['HTTP_HOST'];
    // $subject = stripcslashes($_POST['subject']);
    try{
        Mail::send('emails.received', $data, function($message)
    {

        $message->to('patrickwcurl@gmail.com', 'Patrick Curl')->subject('You got one!');

    });

    Mail::send('emails.sent', $data, function($message) use ($data) {

            $message->to($data['email'], $data['name'])->subject('Thanks for reaching out to me, I\'ll be in touch shortly.');

    });
        return Response::json(array('success' => true));
    } catch(Exception $e){
        return Response::json(array('success' => false, 'reason' => $e ));
    }


    // Set headers

    // Format message
    // Todo : : TRY CATch return true/false

    // Send and check the message status

    $output = json_encode(array("response" => $response));

    //header('content-type: application/json; charset=utf-8');
    return $output;
});