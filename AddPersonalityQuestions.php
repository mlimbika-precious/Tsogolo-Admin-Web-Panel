<!DOCTYPE html>
<html>
<head>
  <title>Personality Questions</title>
  <style>
    /* CSS styling for the form */
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
    }
    
   
    

    form {
      width: 400px;
      margin: 0 auto;
      background-color: #fff;
      padding: 20px;
      border-radius: 4px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
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
      background-color: #45a049;
    }
  </style>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       <link rel="stylesheet" href="./assets/css/style.css"></link>
  </head>

</head>
<body >
    
        <?php
            include "./adminHeader.php";
            include "./sidebar.php";
           
            include_once "./config/dbconnect.php";
        ?>

       
  <br>
      <h1 style="text-align: center;">Personality Questions</h1>
    
  

  <form>
    <label for="id">ID              :</label>
    <input type="text" id="id" name="id" required><br>

    <label for="question">Question          :</label>
    <textarea id="question" name="question" required></textarea><br>

    <label for="agreeType">Agree Type:</label>
    <input type="text" id="agreeType" name="agreeType" required><br>

    <label for="denialType">Denial Type:</label>
    <input type="text" id="denialType" name="denialType" required><br>

    <label for="update">Update:</label>
    <input type="checkbox" id="update" name="update"><br>

    <label for="delete">Delete:</label>
    <input type="checkbox" id="delete" name="delete">

    <div class="center">
      <input type="submit" value="Save">
    </div>
  </form>
            
        


    <script type="text/javascript" src="./assets/js/ajaxWork.js"></script>    
    <script type="text/javascript" src="./assets/js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
</body>
 
</html>