<div>
    <h2 class="align-center">Add New User</h2>
    <form action="adduser" method="POST">
       @csrf
        <div class="input-wrapper">
            <input type="text" placeholder="Enter your name" name="username">
        </div>
        <div class="input-wrapper">
            <input type="text" placeholder="Enter your email" name="email">
        </div>
        <div class="input-wrapper">
            <input type="text" placeholder="Enter your city" name="city">
        </div>
        <div class="input-wrapper">
          <button type="submit">Add user</button>
        </div>
        <div class="input-wrapper">
            <h4> Add skills</h4>
            <lable for="php">PHP</lable>
          <input type="checkbox" name="Skills" value="PHP" id="php">
        </div> 
        <label for="city">Choose your city:</label>
    <select id="city" name="city">
        <option value="Gujrat">Gujrat</option>
        <option value="Lahore">Lahore</option>
        <option value="GRW">GRW</option>
       
    </select>
    </form> 
</div>

<style>
    .input-wrapper {
        margin-bottom: 15px; /* Adds space between fields */
    }
    input {
        width: 50%; /* Makes the input fields take full width of the wrapper */
        padding: 10px; /* Adds padding inside the input field */
        border: 2px solid #ccc; /* Adds a border around the input */
        border-radius: 5px; /* Rounds the corners of the border */
        box-sizing: border-box; /* Ensures padding does not affect the width */
    }
    button {
        padding: 10px 20px;
        background-color: #4CAF50;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }
    button:hover {
        background-color: #45a049;
    }
</style>

</div>