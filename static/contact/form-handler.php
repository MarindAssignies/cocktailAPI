<?php

// Error and success messages
$messages = [
    'error' => [],
    'success' => [],
];

// Form sent
if(!empty($_POST))
{
    // Get variables
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $request = trim($_POST['request']);

    // Handle errors
    if(empty($name))
    {
        $messages['error'][] = 'Missing name';
    };

    if (empty($email))
    {
        $message['error'][] = 'Missing email';
    }

    if (empty($request))
    {
        $message['error'][] = 'Missing request';
    }
    
    // Success
    if(empty($messages['error']))
    {

        $prepare = $pdo->prepare('
            INSERT INTO
                costumer_request (name, email, request)
            VALUES
                (:name, :email, :request)
        ');

        $prepare->bindValue('name', $name);
        $prepare->bindValue('email', $email);
        $prepare->bindValue('request', $request);

        $prepare->execute();
    }
}

// Form not sent
else
{
    $_POST['name'] = '';
    $_POST['depense'] = '';
    $_POST['request'] = '';
}


//sending the form to an email 
$email_address = 'official_sprit@gmail.com';

//set the subject line for email messsages
$subject = 'request user';

