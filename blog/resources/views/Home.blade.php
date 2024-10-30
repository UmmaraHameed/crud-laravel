<h1>
    Home page 
</h1>
<h3>
    {{URL::current()}}
</h3>
<h3>
    {{URL::full()}}
</h3>
<a href="/about">About page</a>
<!-- that is static  -->
<x-banner msg="User login successfully" class="success"></x-banner>
<x-banner msg="User signup successfully" class="success"></x-banner>

<br>
<br>

<x-banner msg="Password not correct please try again" class="error"></x-banner>
<x-banner msg="Warning: Something might be wrong!" class="warning"></x-banner>

<style>
    .success {
        background: lightgreen;
        color: darkgreen; /* Darker text for better visibility */
        padding: 3px 10px;
        border-radius: 2px;
        display: inline-block;
        margin: 10px;
    }
    .error {
        background: lightcoral; /* Softer background color for visibility */
        color: white; /* White text for better contrast */
        padding: 3px 10px;
        border-radius: 2px;
        display: inline-block;
        margin: 10px;
    }
    .warning {
        background: yellow;
        color: black; /* Black text for visibility */
        padding: 3px 10px;
        border-radius: 2px;
        display: inline-block;
        margin: 10px;
    }
</style>

<!-- Data send through main page to sub page -->




@include('common.hheader',['page'=>" This is my sub page that is header page "])


<!-- <h1>{{$name}}</h1>

<a href="/">welcome page</a>
<a href="/About/zoya">About page</a>

<h1>{{rand()}}</h1>
Make ifelse
@if($name=='Zoya')
<h2> This is zoya</h2>
@elseif($name=='Sara')
<h2> This is Sara</h2> 
@elseif($name=='Ummara')
<h2> This is Ummara</h2> 
@else
<h2> Undefine name</h2> 
@endif


<!-- making loop -->
 <div>
    @for($i=0;$i<=10;$i++)
    
        <h3>{{$i}}</h3>
    @endfor
 </div>
 <!-- Foreach -->
  <div>
  @foreach($users as $user)
   <h3>{{$user}}</h3>
  @endforeach
  </div> 

 