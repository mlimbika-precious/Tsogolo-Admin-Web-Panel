<!DOCTYPE html>
<html>
<head>
  <title>Personality Questions</title>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       <link rel="stylesheet" href="./assets/css/style.css"></link>
  </head>
</head>
<style>
    body {
      margin: 0;
      padding: 0;
      font-family: cursive;
        }

    

    h2 {
      margin: 0;
      font-family:!important;
    }

    main {
      padding: 20px;
    }

    table {
      width: 70%;
      border-collapse: collapse;
      align-content: center;
      margin-left: 20%;
    }

    table th, table td {
      padding: 10px;
      border: 1px solid #ccc;
      text-align: left;
      align-content: center;
    }

    footer {
      background-color: orange;
      color: #fff;
      padding: 10px;
      text-align: center;
    }

    @media only screen and (max-width: 600px) {
      header {
        text-align: center;
      }

      h2 {
        font-size: 24px;
        text-align: center;
      }

      main {
        padding: 10px;
      }
    }
  </style>
<body >
    
        <?php
            include "./adminHeader.php";
            include "./sidebar.php";
           
            include_once "./config/dbconnect.php";
        ?>

       
          <main>
    <h2 style="text-align: center;">Question List</h2>


        <table >
      <thead>
        <tr>
          <th>ID</th>
          <th>Question</th>
          <th>Agree Type</th>
          <th>Denial Type</th>
          <th>Update</th>
          <th>Delete</th>
        </tr>
      </thead>
      
    </table>
    
  </main>  
        


    <script type="text/javascript" src="./assets/js/ajaxWork.js"></script>    
    <script type="text/javascript" src="./assets/js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
</body>
 
</html>