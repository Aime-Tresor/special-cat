<?php
// Start session
if (!session_id())
{
    session_start();
}

// Include Github client library
require_once 'Github_OAuth_Client.php';

/*
 * Configuration and setup GitHub API
*/
$clientID = '4ef7ae763684fd7359f6';
$clientSecret = 'c24c9acd37dc73551197ad48e20b30875c77d353';
$redirectURL = 'http://localhost/specialcat/github-login';
// $redirectURL     = 'https://www.codexworld.com/github-login/';
$gitClient = new Github_OAuth_Client(array(
    'client_id' => $clientID,
    'client_secret' => $clientSecret,
    'redirect_uri' => $redirectURL,
));

// Try to get the access token
if (isset($_SESSION['access_token']))
{
    $accessToken = $_SESSION['access_token'];
}

