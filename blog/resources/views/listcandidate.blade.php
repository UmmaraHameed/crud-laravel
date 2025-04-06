<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Styled Candidate List</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 20px;
        }
        .container {
            width: 80%;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            color: #333;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 12px;
            text-align: left;
        }
        th {
            background-color: #f8f8f8;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        a {
            text-decoration: none;
        }
        /* Button styling */
        .delete-btn, .success-btn {
            padding: 6px 12px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-align: center;
            color: white;
        }
        .delete-btn {
            background-color: #ff4d4d;
        }
        .delete-btn:hover {
            background-color: #e60000;
        }
        .success-btn {
            background-color: #4CAF50; /* Green for the edit button */
        }
        .success-btn:hover {
            background-color: #45a049;
        }

        /* Search form styling */
        .search-form {
            display: flex;
            justify-content: center;
            margin-bottom: 20px;
        }
        .search-input {
            width: 300px;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ddd;
            border-radius: 5px;
            outline: none;
        }
        .search-button {
            padding: 10px 15px;
            margin-left: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        .search-button:hover {
            background-color: #45a049;
        }

    </style>
</head>
<body>

<div class="container">
    <h2>Candidate List</h2>
   <!-- Search form -->
<form action="{{ url('list') }}" method="get" class="search-form">
    <input type="text" placeholder="Search with name" name="search" class="search-input" value="{{ request('search') }}">
    <button type="submit" class="search-button">Search</button>
</form>

    <!-- add candidate -->
    <div style="text-align: right; margin-bottom: 10px;">
        <a href="{{ url('form') }}" class="add-btn">Add Candidate</a>
    </div>
 <form action="delete_multi" method="post">
    @csrf
    <button> Delete</button>
    <table>
        <tr>
            <th>Selection</th>
            <th>Name</th>
            <th>Email</th>
            <th>Operation</th>
        </tr>
        @foreach($candidates as $candidate)
        <tr>
             <td><input type="checkbox" name="ids[]" value="{{ $candidate->id}}"></td>
            <td>{{ $candidate->name }}</td>
            <td>{{ $candidate->email }}</td>
            <td>
            <a href="{{ 'edit/'.$candidate->id }}" class="success-btn">Edit</a>
            <a href="{{ 'delete/'.$candidate->id }}" class="delete-btn">Delete</a>
            </td>
        </tr>
        @endforeach
    </table>
    </form>
    {{$candidates->links()}}
</div>
<style>
    /* Targeting elements with class 'w-5' and 'h-3' */
    .w-5, .h-3 {
        width: 20px; /* Adjust the width as needed */
        height: 20px; /* You can also adjust the height if needed */
    }
</style>


</body>
</html>
