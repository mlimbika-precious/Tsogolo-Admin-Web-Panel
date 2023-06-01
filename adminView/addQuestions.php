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

    .header {
      display: inline-block;
      text-align: center;
      margin-top: 0;
      background-color: orange;
      color: #fff;
    }

    nav {
      text-align: center;
      background-color: #333;
      color: #fff;
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

    /* Sidebar styling */
    .sidebar {
      width: 200px;
      height: 100%;
      position: fixed;
      z-index: 1;
      top: 0;
      left: 0;
      background-color: orange;
      overflow-x: hidden;
      padding-top: 20px;
    }

    .sidebar .side-header img {
      display: block;
      margin-left: auto;
      margin-right: auto;
    }

    .sidebar .side-header h5 {
      color: #fff;
      text-align: center;
      margin-top: 10px;
    }

    .sidebar hr {
      border: 1px solid;
      background-color: orange;
      border-color: #3B3131;
    }

    .sidebar a {
      padding: 10px;
      font-size: 18px;
      color: #fff;
      display: block;
      text-align: left;
      text-decoration: none;
    }

    .sidebar a:hover {
      background-color: #3B3131;
    }

    #main {
      margin-left: 200px;
      padding: 20px;
    }
  </style>
</head>
<body>
  <!-- Sidebar -->
  <div class="sidebar" id="mySidebar">
    <div class="side-header">
      <img src="./assets/images/logo.png" width="120" height="120" alt="Swiss Collection"> 
      <h5 style="margin-top:10px;">Admin</h5>
    </div>
    <hr>
    <a href="./index.php"><i class="fa fa-home"></i> Dashboard</a>
    
    <a href="adminView/personalityQuestionsList.php"><i class="fa fa-th-large"></i>List Personality Questions</a>
    <a href="adminView/addRoleModels.php"><i class="fa fa-th"></i> Add Role Model</a>
    <a href="adminView/roleModelsList.php"><i class="fa fa-th-list"></i>List Role Models</a>
    <a href="adminView/aboutDevelopers.php" onclick="showProductItems()"><i class="fa fa-th"></i> About</a>
  </div>

  <div id="main">
    <!-- Form -->
    <nav  class="navbar navbar-expand-lg navbar-light px-5" style="background-color: orange;">
      <div style="text-align: center; width: 100%;">
        <h2 style="color: white;">ADD PERSONALITY QUESTIONS</h2>
      </div>
      
      <a class="navbar-brand ml-5" href="./index.php"></a>
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0"></ul>
      
      <div class="user-cart">  
        <?php           
        if(isset($_SESSION['user_id'])){
          ?>
          <a href="" style="text-decoration:none;">
            <i class="fa fa-user mr-5" style="font-size:30px; color:#fff;" aria-hidden="true"></i>
          </a>
          <?php
        } else {
          ?>
          <a href="" style="text-decoration:none;">
            <i class="fa fa-sign-in mr-5" style="font-size:30px; color:#fff;" aria-hidden="true"></i>
          </a>
          <?php
        } ?>
      </div>  
    </nav>

    <form>
      <label for="id">ID:</label>
      <input type="text" id="id" name="id" required><br>

      <label for="question">Question:</label>
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
        <input type="submit" value="Submit">
      </div>
    </form>

    <script>
      function openNav() {
        document.getElementById("mySidebar").style.width = "200px";
        document.getElementById("main").style.marginLeft = "200px";
      }

      function closeNav() {
        document.getElementById("mySidebar").style.width = "0";
        document.getElementById("main").style.marginLeft = "0";
      }
    </script>
  </div>
</body>
</html>
