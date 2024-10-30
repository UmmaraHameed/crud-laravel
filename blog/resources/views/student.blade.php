

<div>
    <h1> Add New Students</h1>
<form action="form" method="post">
        @csrf
  <label for="name">Name:</label><br>
  <input type="text" id="name" name="name" required><br><br>
  
  <label for="email">Email:</label><br>
  <input type="email" id="email" name="email" required><br><br>
  <label for="batch">Batch":</label><br>
  <input type="batch" id="batch" name="batch" required><br><br>
  <input type="submit" value="Add New User">
</form>
</div>
