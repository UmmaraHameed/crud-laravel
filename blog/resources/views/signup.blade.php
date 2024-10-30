 <!-- <h1>
    signup page 
</h1> -->
<div>
 <h1>
    Login page 
</h1>
</div>
<form action="/signup" method="post">
    <!-- <input type="hidden" name="_method" value="PUT"> -->
    @csrf
  <label for="name">Name:</label><br>
  <input type="text" id="name" name="name" required><br><br>
  
  <label for="Password">Password:</label><br>
  <input type="password" id="age" name="age" required><br><br>
  
  <input type="submit" value="Login">
</form> 
