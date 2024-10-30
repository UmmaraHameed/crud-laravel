<div>
  <!-- Dispaly message from session to the form -->
 
    <h1> Login Page And form with session & flash session</h1>
    @if(session('message'))
   <span class="success-message"> {{session('message')}}</span>
   @endif
   <!-- {{seession()->reflash()}} -->
    <form action="login" method="post">
        @csrf
  <label for="name">Name:</label><br>
  <input type="text" id="name" name="name" required><br><br>
  
  <label for="age">Age:</label><br>
  <input type="number" id="age" name="age" required><br><br>
  <label for="password">password:</label><br>
  <input type="password" id="password" name="password" required><br><br>
  <input type="submit" value="Add New User">
</form>

</div>
<style>
  .success-message{
    background-color:lightgreen;
    
  }
</style>