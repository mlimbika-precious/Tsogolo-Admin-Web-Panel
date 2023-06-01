<!DOCTYPE html>
<html>
<head>
  <title>Basic Page</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: Arial, sans-serif;
    }

    header {
      background-color: orange;
      color: #fff;
      padding: 20px;
    }

    h1 {
      margin: 0;
    }

    main {
      padding: 20px;
    }

    table {
      width: 100%;
      border-collapse: collapse;
    }

    table th, table td {
      padding: 10px;
      border: 1px solid #ccc;
      text-align: left;
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

      h1 {
        font-size: 24px;
        text-align: center;
      }

      main {
        padding: 10px;
      }
    }
  </style>
</head>
<body>
  <header>
    <h1>Personality Questions List</h1>
  </header>

  <main>
    <h2>Question List</h2>

    <table>
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

  <footer>
    <p>© 2023 My Page. All rights reserved.</p>
  </footer>
</body>
</html>
