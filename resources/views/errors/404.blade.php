@extends('errors::minimal')

@section('title', __('404 Error has Occur'))
{{-- @section('code', '404') --}}

{{-- @section('content') --}}
<style>
html {
        height: 100%;
}

body {  
        height: 100%;
        background: url("https://wallpapercave.com/wp/6SLzBEY.jpg") no-repeat left top;
        background-size: cover;  
        overflow: hidden;

        display: flex;
        flex-flow: column wrap;
        justify-content: center;
        align-items: center;
}

.text h1{
        color: #fff;
        margin-top: -200px;
        font-size: 10em;
	text-align: center;
	font-family: cursive;
        font-weight: bold;
}

.text h2{
        color: White;
        font-size: 3em;
	text-align: center;
	margin-top: -150px;
	font-family: cursive;
        font-weight: bold;
}
.text h3{
        color: white;
	margin-left: 30px;
        font-size: 2em;
	margin-top: -40px;
	font-family: cursive;
        font-weight: bold;
}
/* .torch {
        margin: -150px 0 0 -150px;
        width: 200px;
        height: 200px;
        box-shadow: 0 0 0 9999em #000000f7;
        opacity: 1;
        border-radius: 50%;
        position: fixed;
        background: rgba(0,0,0,0.3);
}
.torch:after {
        content: '';
        display: block;
        border-radius: 50%;
        width: 100%;
        height: 100%;
        top: 0px;
        left: 0px;
        box-shadow: inset 0 0 40px 2px #000, 0 0 20px 4px rgba(13,13,10,0.2);  
} */
#backtohome{
        border: 2px soldi blue;
        border-radius: 20px;
        box-shadow: 0 0 40px 20px 20px 4px rgba(0,0,0,0.7);
}

.backtohome{
        text-decoration: none;
        font-size: 5rem;
        font-weight: 600;
        font-family: 'Arial Narrow Bold', sans-serif;
        color: seagreen;
        font-style: normal;
        text-transform: uppercase;
}

</style>
    
<div class="text">
        <h1>404</h1>
              <h2>Uh, Ohh</h2>
        <h3>Sorry we cant find what you are looking for 'cuz its will soon get dark in here</h3>
      </div>

      
      <div class="torch"></div>
      <div>
        <button id='backtohome'><a href='{{ url('../') }}' class="backtohome">Back to Home</a></button>
</div>



<script>
$(document).mousemove(function (event) {
  $('.torch').css({
    'top': event.pageY,
    'left': event.pageX
  });
});
</script>