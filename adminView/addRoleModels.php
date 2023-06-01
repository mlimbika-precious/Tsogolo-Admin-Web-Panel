<!DOCTYPE html>
<html>
<head>
  <title>Add Role Models</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-image: url('https://example.com/background-image.jpg');
      background-repeat: no-repeat;
      background-size: cover;
      background-position: center;
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

    #roleModelForm {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      align-items: center;
      margin-bottom: 20px;
      padding: 20px;
      background-color: #f9f9f9;
      box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
    }

    #roleModelForm input[type="text"],
    #roleModelForm input[type="file"] {
      margin: 5px;
      padding: 10px;
      width: 200px;
      box-sizing: border-box;
    }

    #roleModelForm button {
      margin: 5px;
      padding: 10px 20px;
      background-color: #4CAF50;
      color: white;
      border: none;
      cursor: pointer;
    }

    #roleModelForm button:hover {
      background-color: orange;
    }

    #roleModelList {
      list-style-type: none;
      padding: 0;
      margin: 0;
    }

    #roleModelList li {
      display: flex;
      align-items: center;
      margin-bottom: 10px;
      border: 1px solid #ccc;
      padding: 10px;
      background-color: #fff;
      box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
    }

    #roleModelList li img {
      width: 80px;
      height: 80px;
      object-fit: cover;
      margin-right: 10px;
      border-radius: 50%;
    }

    #roleModelList li span {
      font-weight: bold;
    }

    @media only screen and (max-width: 600px) {
      #roleModelForm input[type="text"],
      #roleModelForm input[type="file"] {
        width: 100%;
      }
    }
  </style>
</head>
<body>
  <div class="header">
    <h1>Add Role Models</h1>
  </div>

  <div id="roleModelForm">
    <input type="file" id="imageInput">
    <input type="text" id="nameInput" placeholder="Enter name">
    <input type="text" id="descriptionInput" placeholder="Enter description">
    <button onclick="addRoleModel()">Add Role Model</button>
  </div>

  <ul id="roleModelList"></ul>

  <script>
    function addRoleModel() {
      var imageInput = document.getElementById("imageInput");
      var nameInput = document.getElementById("nameInput");
      var descriptionInput = document.getElementById("descriptionInput");
      var roleModelList = document.getElementById("roleModelList");

      var image = imageInput.value;
      var name = nameInput.value;
      var description = descriptionInput.value;

      if (image && name && description) {
        var listItem = document.createElement("li");
        var imageElement = document.createElement("img");
        var nameSpan = document.createElement("span");
        var descriptionSpan = document.createElement("span");

        imageElement.src = image;
        nameSpan.innerText = name;
        descriptionSpan.innerText = description;

        listItem.appendChild(imageElement);
        listItem.appendChild(nameSpan);
        listItem.appendChild(descriptionSpan);

        roleModelList.appendChild(listItem);

        imageInput.value = "";
        nameInput.value = "";
        descriptionInput.value = "";
      }
    }
  </script>
</body>
</html>
