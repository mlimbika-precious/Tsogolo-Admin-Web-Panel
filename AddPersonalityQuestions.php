
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Extract the form data
  $question = $_POST['question'];
  $agreeType = $_POST['agreeType'];
  $denialType = $_POST['denialType'];

  // Create an associative array with the form data
  $formData = [
    'question' => $question,
    'agreeType' => $agreeType,
    'denialType' => $denialType
  ];

  // Convert the form data to JSON
  $jsonData = json_encode($formData);

  // Set the API endpoint URL
  $apiUrl = 'http://localhost:3000/personality-questions/';

  // Create a new cURL resource
  $curl = curl_init($apiUrl);

  // Set the cURL options
  curl_setopt($curl, CURLOPT_POST, true);
  curl_setopt($curl, CURLOPT_POSTFIELDS, $jsonData);
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($curl, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);

  // Execute the cURL request
  $response = curl_exec($curl);

  // Check for errors
  if ($response === false) {
    echo 'Error: ' . curl_error($curl);
  } else {
    // Handle the API response
    echo 'API response: ' . $response;
  }

  // Close the cURL resource
  curl_close($curl);
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Personality Questions</title>
  <style>
    /* CSS styling for the form */
    body {
      margin: 0;
      padding: 0;
      font-family: !important;
      background-color: dimgray;
    }
    
    form {
      margin-top: ;
      width: 600px;
      margin: 0 auto;
      background-color: #ffffff;
      padding: 20px;
      border-radius: 4px;
      box-shadow: 0 2px 4px rgba(2, 0, 0, 0.1);
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    label {
      display: inline-block;
      margin-top: 10px;
      width: 120px;
    }

    input[type="text"],
    textarea {
      width: 250px;
      padding: 5px;
      margin-top: 5px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    input[type="checkbox"] {
      margin-top: 10px;
    }

    .center {
      text-align: center;
    }

    input[type="submit"] {
      padding: 10px 20px;
      background-color: #4CAF50;
      color: #fff;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    .form-container {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 80vh; /* Adjust this value if needed */
  }


    input[type="submit"]:hover {
      background-color: #ff6600; /* Orange color */
    }
  </style>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="./assets/css/style.css"></link>
</head>
<body>
  <?php
    include "./adminHeader.php";
    include "./sidebar.php";
    include "./footer.php";
    //include_once "./config/dbconnect.php";
  ?>

  <!-- <br> -->
  <!-- <h1 style="text-align: center; font-size: 16px;">Personality Questions</h1> -->

  <div class="form-container">
  <script>
  function validateInput(input) {
    var errorMessage = input.id === "agreeType" ? "lowercase-message-agree" : "lowercase-message-denial";
    var uppercasePattern = /^[A-Z]+$/;
    var isUppercase = uppercasePattern.test(input.value);

    if (isUppercase) {
      document.getElementById(errorMessage).style.display = "block";
    } else {
      document.getElementById(errorMessage).style.display = "none";
    }
  }

  function validateForm(event) {
    var agreeType = document.getElementById("agreeType").value;
    var denialType = document.getElementById("denialType").value;
    var uppercasePattern = /^[A-Z]+$/;
    var isAgreeUppercase = uppercasePattern.test(agreeType);
    var isDenialUppercase = uppercasePattern.test(denialType);

    if (isAgreeUppercase && isDenialUppercase) {
      
      alert("Submitted successful");
    }else{
      event.preventDefault();
      alert("please use uppercase letter")
    }
  }
</script>

<form id="personalityQuestionForm" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" onsubmit="validateForm(event)">
<h4>Personality Questions<h2>
</br>  

<label for="question">Question:</label>
  <textarea id="question" name="question" required></textarea><br>

  <label for="agreeType">Agree Type:</label>
  <input type="text" id="agreeType" name="agreeType" required oninput="validateInput(this)" maxlength="1"><br>
  <span id="error-message-agree" style="color: red; display: none;">Please enter a single alphabetic character.</span>
  <span id="lowercase-message-agree" style="color: red; display: none;">Please use uppercase letters only.</span>

  <label for="denialType">Denial Type:</label>
  <input type="text" id="denialType" name="denialType" required oninput="validateInput(this)" maxlength="1"><br>
  <span id="error-message-denial" style="color: red; display: none;">Please enter a single alphabetic character.</span>
  <span id="lowercase-message-denial" style="color: red; display: none;">Please use uppercase letters only.</span><br>

  <div class="center">
    <input type="submit" name="Submit" value="Save">
  </div>
</form>

  </div>

  <script type="text/javascript">
    function validateInput(input) {
      var value = input.value.trim();
      var errorId = input.id === 'agreeType' ? 'error-message-agree' : 'error-message-denial';
      var lowercaseId = input.id === 'agreeType' ? 'lowercase-message-agree' : 'lowercase-message-denial';
      
      if (/^[A-Za-z]+$/.test(value)) {
        document.getElementById(errorId).style.display = 'none';
        
        if (value === value.toUpperCase()) {
          document.getElementById(lowercaseId).style.display = 'none';
        } else {
          document.getElementById(lowercaseId).style.display = 'block';
        }
      } else {
        document.getElementById(errorId).style.display = 'block';
      }
    }
  </script>

  <script type="text/javascript" src="./assets/js/ajaxWork.js"></script>    
  <script type="text/javascript" src="./assets/js/script.js"></script>
  <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>

  <script>
function openNav() {
      document.getElementById("mySidebar").style.width = "250px";
    }

    function closeNav() {
      document.getElementById("mySidebar").style.width = "0";
    }

    function toggleSubcategory(event, subcategoryId) {
      event.preventDefault();
      var subcategory = document.getElementById(subcategoryId);
      if (subcategory.style.display === "none") {
        subcategory.style.display = "block";
      } else {
        subcategory.style.display = "none";
      }
    }
  </script>
</body>
</html>
