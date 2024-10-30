<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Candidate</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      margin: 0;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
    }

    .container {
      width: 50%;
      max-width: 600px;
      background-color: #fff;
      padding: 25px;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);
      transition: transform 0.2s ease-in-out;
    }

    .container:hover {
      transform: scale(1.02);
    }

    h1 {
      text-align: center;
      color: #333;
      margin-bottom: 1.5rem;
    }

    form {
      display: flex;
      flex-direction: column;
    }

    label {
      font-size: 16px;
      margin-bottom: 8px;
      color: #555;
      font-weight: bold;
    }

    input[type="text"],
    input[type="email"] {
      padding: 12px;
      font-size: 16px;
      margin-bottom: 20px;
      border: 1px solid #ddd;
      border-radius: 5px;
      width: 100%;
      box-sizing: border-box;
      outline: none;
      transition: border-color 0.3s, box-shadow 0.3s;
    }

    input[type="text"]:focus,
    input[type="email"]:focus {
      border-color: #4CAF50;
      box-shadow: 0 0 5px rgba(76, 175, 80, 0.2);
    }

    .button-group {
      display: flex;
      align-items: center;
      justify-content: flex-end;
      gap: 15px;
    }

    input[type="submit"] {
      background-color: #4CAF50;
      color: white;
      padding: 12px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      font-size: 18px;
      font-weight: bold;
      transition: background-color 0.3s;
    }

    input[type="submit"]:hover {
      background-color: #45a049;
    }

    .cancel-btn {
      color: #555;
      text-decoration: underline;
      font-size: 18px;
      cursor: pointer;
      background: none;
      border: none;
      padding: 0;
    }

    .cancel-btn:hover {
      color: #333;
      text-decoration: none;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
      .container {
        width: 90%;
        padding: 20px;
      }
    }
  </style>
</head>
<body>

<div class="container">
  <h1>Edit Candidate</h1>
  <form action="/edit-candidate/{{$data->id}}" method="post">
    @csrf
    <input type="hidden" name="_method" value="put">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" value="{{$data->name}}" required>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" value="{{$data->email}}" required>

    <div class="button-group">
      <input type="submit" value="Update">
      <a href="/list" class="cancel-btn">Cancel</a>
    </div>
  </form>
</div>

</body>
</html>
