<!DOCTYPE html>
<html>
<head>
  <title>About the Developers</title>
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
</head>
<body>
  <div class="header">
    <h1>Mobile Career Guidance App Developers</h1>
  </div>

  <ul id="developerList">
    <li>
      <img src="maliseni.jpg" alt="">
      <h2>Precious Mlimbika</h2>
      <p>Precious Mlimbika is a software engineer with expertise in mobile application development. He has a passion for helping individuals discover their career paths and developed the career guidance mobile application to provide comprehensive guidance and resources.</p>
    </li>
    <li>
      <img src="sarah.jpg" alt="Sarah Johnson">
      <h2>Sarah Johnson</h2>
      <p>Sarah Johnson is a UX/UI designer who played a key role in designing the user interface and experience of the career guidance mobile application. She focused on creating a user-friendly and visually appealing interface to enhance the user's engagement and navigation.</p>
    </li>
    <li>
      <img src="michael.jpg" alt="Michael Davis">
      <h2>Michael Davis</h2>
      <p>Michael Davis is a career counselor with years of experience in guiding individuals towards successful career paths. He provided valuable insights and expertise in career planning and decision-making, ensuring that the career guidance mobile application offers accurate and reliable information.</p>
    </li>
  </ul>
</body>
</html>
