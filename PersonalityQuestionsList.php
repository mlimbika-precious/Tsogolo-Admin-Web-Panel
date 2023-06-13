<!DOCTYPE html>
<html>
<head>
  <title>Personality Questions</title>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/style.css"></link>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  </head>
</head>
<style>
    body {
      margin: 0;
      padding: 0;
      font-family:!important;
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
<body>
    
<?php
include "./adminHeader.php";
include "./sidebar.php";
include "./footer.php";

// Set the API endpoint URL
$apiUrl = 'http://localhost:3000/personality-questions/';

// Retrieve the submitted questions from the API
$response = file_get_contents($apiUrl);

?>

<main>
  <h2 style="text-align: center; font-size:30px">Question List</h2>

  <table>
    <thead>
      <tr>
        <th>ID</th>
        <th>Question</th>
        <th>Agree Type</th>
        <th>Denial Type</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
      <?php
        // Check if the API response is valid
        if ($response !== false) {
          // Decode the API response
          $responseData = json_decode($response, true);

          // Check if the API response is an array
          if (is_array($responseData)) {
            // Check if there are submitted questions
            if (!empty($responseData)) {
              foreach ($responseData as $submittedQuestion) {
                $id = $submittedQuestion['id'];
                $question = $submittedQuestion['question'];
                $agreeType = $submittedQuestion['agreeType'];
                $denialType = $submittedQuestion['denialType'];

                echo '<tr>';
                echo '<td>' . $id . '</td>';
                echo '<td>' . $question . '</td>';
                echo '<td>' . $agreeType . '</td>';
                echo '<td>' . $denialType . '</td>';
                echo '<td><button onclick="editQuestion(' . $id . ')"><i class="fa fa-pencil"></i></button></td>';
                echo '<td>
                <button onclick="deleteQuestion(' . $id . ')">
                  <i class="fa fa-trash" style="color: red;"></i>
                </button>
              </td>';
        
                echo '</tr>';
              }
            } else {
              echo '<tr><td colspan="4">No submitted questions found.</td></tr>';
            }
          } else {
            echo '<tr><td colspan="4">Invalid API response format.</td></tr>';
          }
        } else {
          echo '<tr><td colspan="4">Failed to retrieve submitted questions.</td></tr>';
        }
      ?>
    </tbody>
  </table>
</main>

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


    function editQuestion(id) {
        // Implement the logic to open a form or perform any other action for editing the question
        console.log("Edit question with ID: " + id);
    }

    function deleteQuestion(questionId) {
  // Set the API endpoint URL
  const apiUrl = 'http://localhost:3000/personality-questions/';

  // Set the HTTP request options
  const requestOptions = {
    method: 'DELETE',
    headers: {
      'Content-Type': 'application/json'
    }
  };

  // Send the HTTP request
  fetch(apiUrl + questionId, requestOptions)
    .then(response => {
      if (response.ok) {
        

        // Question successfully deleted
        alert('Question deleted');
        location.reload();
        
        // Remove the question from the form
        const questionRow = document.getElementById('questionRow_' + questionId);
        if (questionRow) {
          questionRow.remove();
          
        } else {
          console.log('Question row not found.');
        }
      } else {
        // Handle the error response from the server
        console.error('Failed to delete question');
      }
    })
    .catch(error => {
      console.error('Error:', error);
    });
}


  </script>
</body>
</html>
