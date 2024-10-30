<div>
    Profile page
</div>
<!-- <h1>{{session('name')}}</h1> -->
@if(session('name'))
    <h1>{{session('name')}}</h1>
    @else
    <h1>No user found in session <a href="login">Login</a></h1>  
    @endif 
<a href="logout">Logout</a>