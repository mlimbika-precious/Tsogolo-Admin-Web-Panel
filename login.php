<?php
// Retrieve the form data
$email = $_POST['email'];
$password = $_POST['password'];

// Perform login validation using the Nest API (replace this with your own logic)
$apiEndpoint = 'http://41.70.47.48:3000/users/login';
$data = array('email' => $email, 'password' => $password);

$options = array(
  'http' => array(
    'method' => 'POST',
    'header' => 'Content-Type: application/json',
    'content' => json_encode($data),
  ),
);

$context = stream_context_create($options);
$response = file_get_contents($apiEndpoint, false, $context);

if ($response !== false) {
  $responseData = json_decode($response, true);

  var_dump($response); // Dump the response to inspect its contents

  var_dump($email);
  var_dump($password);

  if ($responseData['success']) {
    // Login successful
    header('Location: admin.php');
    exit;
  } else {
    // Login failed
    echo 'Login failed. Invalid email or password.';
  }
} else {
  // API request failed
  echo 'An error occurred during login.';
}
?>

