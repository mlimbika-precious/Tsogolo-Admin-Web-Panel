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

  <br>
  <h1 style="text-align: center; font-size: 16px;">Personality Questions</h1>

  <form action="your-url-for-processing-form-data" method="POST">
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
      <input type="submit" value="Save">
    </div>
  </form>

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
</body>
</html>
