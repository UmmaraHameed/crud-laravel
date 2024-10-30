<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
   
     <!-- it pass section  -->
     <title>@yield('title')</title>
    <style>
        /* General reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Header styling */
        .header {
            background-color: #007BFF; /* Green background */
            padding: 10px 0;
            text-align: center;
        }

        .header ul {
            list-style-type: none;
        }

        .header ul li {
            display: inline;
            margin-right: 20px;
        }

        .header ul li a {
            text-decoration: none;
            color: white;
            font-size: 18px;
            font-weight: bold;
            padding: 10px 20px;
            transition: background-color 0.3s;
        }

        .header ul li a:hover {
            background-color: #45a049; /* Slightly darker green on hover */
            border-radius: 5px;
        }

        /* Content styling */
        .content {
            padding: 20px;
            text-align: center;
        }

        .content h1 {
            font-size: 32px;
            margin-bottom: 10px;
        }

        .content h3 {
            font-size: 24px;
            margin-bottom: 15px;
        }

        .content p {
            font-size: 18px;
            color: #555;
        }

        /* Footer styling */
        .footer {
            background-color: #333; /* Dark background */
            color: white;
            padding: 10px 0;
            text-align: center;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        .footer p {
            margin: 0;
        }
    </style>
</head>
<body>

    <div class="header">
        <ul>
            <li><a href="/home2">Home</a></li>
            <li><a href="/about2">About</a></li>
            <li><a href="/login2">Login</a></li>
            <li><a href="">Contact us</a></li>
        </ul>
    </div>
      <div>
        @section('main')
        @show
      </div>

    

    <div class="footer">
        <p>Footer page</p>
    </div>

</body>
</html>
