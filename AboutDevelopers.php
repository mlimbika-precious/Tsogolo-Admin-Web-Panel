<!DOCTYPE html>
<html>
<head>
  <title>About Developers</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }

    .header {
      background-color: orange;
      padding: 20px;
      text-align: center;
      color: #fff;
    }

    h1 {
      margin: 0;
      font-size: 24px;
    }

    #developerList {
      list-style-type: none;
      padding: 0;
      margin: 20px;
      display: flex;
      justify-content: center;
      align-items: flex-start;
      flex-wrap: wrap;
    }

    #developerList li {
      margin: 10px;
      padding: 10px;
      background-color: #f9f9f9;
      box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
      text-align: center;
      width: 100%;
      max-width: 300px;
    }

    #developerList li h2 {
      margin: 10px 0 5px;
      font-size: 20px;
    }

    #developerList li p {
      margin: 5px 0;
      font-size: 16px;
    }

    #developerList li img {
      width: 150px;
      height: 150px;
      object-fit: cover;
      border-radius: 50%;
      margin-bottom: 10px;
    }

    @media screen and (min-width: 480px) {
      #developerList li {
        flex-basis: calc(50% - 20px);
      }
    }

    @media screen and (min-width: 768px) {
      #developerList li {
        flex-basis: calc(33.33% - 20px);
      }
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
        <h3 style="text-align: center;">About Developers</h3>

       <ul id="developerList">
    <li>
      <img src="maliseni.jpg" alt="">
      <h2>Precious Mlimbika</h2>
      <p>Precious Mlimbika is a software engineer with expertise in mobile application development. He has a passion for helping individuals discover their career paths and developed the career guidance mobile application to provide comprehensive guidance and resources.</p>
    </li>
    <li>
      <img src="maliseni.png" alt="Sarah Johnson">
      <h2>Sarah Johnson</h2>
      <p>Sarah Johnson is a UX/UI designer who played a key role in designing the user interface and experience of the career guidance mobile application. She focused on creating a user-friendly and visually appealing interface to enhance the user's engagement and navigation.</p>
    </li>
    <li>
      <img src="maliseni.jpg" alt="Michael Davis">
      <h2>Michael Davis</h2>
      <p>Michael Davis is a career counselor with years of experience in guiding individuals towards successful career paths. He provided valuable insights and expertise in career planning and decision-making, ensuring that the career guidance mobile application offers accurate and reliable information.</p>
    </li>
  </ul>
            
        


    <script type="text/javascript" src="./assets/js/ajaxWork.js"></script>    
    <script type="text/javascript" src="./assets/js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
</body>
 
</html>