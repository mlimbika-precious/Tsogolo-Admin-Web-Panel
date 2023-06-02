<!DOCTYPE html>
<html>
<head>
  <title>Admin Login</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-image: url('career.png');
      background-repeat: no-repeat;
      background-size: cover;
      margin: 0;
      padding: 0;
    }

    .container {
      max-width: 400px;
      margin: 40px auto;
      padding: 20px;
      background-color: #fff;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    
    .container h2 {
      text-align: center;
      margin-top: 0;
    }
    
    .container .form-group {
      margin-bottom: 20px;
    }
    
    .container label {
      display: block;
      margin-bottom: 5px;
      font-weight: bold;
    }
    
    .container input[type="text"],
    .container input[type="password"] {
      width: 100%;
      padding: 10px;
      font-size: 16px;
      border-radius: 3px;
      border: 1px solid #ddd;
    }
    
    .container input[type="submit"] {
      width: 100%;
      padding: 10px;
      font-size: 16px;
      border-radius: 3px;
      border: none;
      background-color: green;
      color: #fff;
      cursor: pointer;
    }
    
    .container input[type="submit"]:hover {
      background-color: orange;
    }

    /* Responsive Header Styles */
    .header {
      background-color: orange;
      padding: 10px;
      text-align: center;
      color: #fff;
      display: flex;
      justify-content: center; /* Added property */
    }

    .header h1 {
      margin: 0;
      font-size: 24px;
    }

    .menu-toggle {
      display: none;
    }

    .nav {
      display: flex;
      justify-content: flex-end; /* Updated property */
      margin-top: 20px;
    }


    .nav a {
      color: #fff;
      text-decoration: none;
      margin: 0 10px;
    }

    /* Responsive Styles */
    @media screen and (max-width: 600px) {
      .header h1 {
        font-size: 20px;
      }

      .menu-toggle {
        display: block;
        text-align: right;
        cursor: pointer;
      }

      .nav {
        display: none;
      }

      .nav.active {
        display: flex;
        flex-direction: column;
        align-items: center;
      }

      .nav.active {
        /* ... existing styles ... */
        justify-content: flex-start; /* Updated property */
      }
    }
  </style>
  <!-- Include Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
  <header class="header">
    <h1>Career Guidance App Admin Panel</h1>
  </header>
  <div class="container">
    <h2><i class="fas fa-user-lock"></i> <br>Admin Login</h2>
    <form action="#" onsubmit="submitForm(); return false;">
      <div class="form-group">
        <label for="username">Username</label>
        <input type="text" id="username" name="username" placeholder="Enter your username" required>
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="Enter your password" required>
      </div>
      <input type="submit" value="Login">
    </form>
  </div>

  <script>
    // Toggle navigation menu for small screens
    const menuToggle = document.querySelector('.menu-toggle');
    const nav = document.querySelector('.nav');

    menuToggle.addEventListener('click', () => {
      nav.classList.toggle('active');
    });

    function submitForm() {
      // Perform form submission logic here

      // Redirect to the desired page after submission
      window.location.href = "admin.php";
    }
  </script>
</body>
</html>
