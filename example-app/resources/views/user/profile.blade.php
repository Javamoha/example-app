<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Profile User</title>
    @include('user.css')
    <style>
      body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
      }

      .card {
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        max-width: 350px;
        margin: 40px auto;
       
        
        background-color: #fff;
        border-radius: 10px;
        overflow: hidden;
        text-align: center;
        padding: 20px;
      }

      .card img {
        border-radius: 50%;
        width: 150px;
        height: 150px;
        object-fit: cover;
        margin-bottom: 20px;
      }

      .card h1 {
        font-size: 24px;
        margin: 10px 0;
      }

      .title {
        color: #888;
        font-size: 16px;
        margin-bottom: 20px;
      }
      

      .card p {
        color: #666;
        margin: 8px 0;
      }

      .social-icons {
        margin: 20px 0;
      }

      .social-icons a {
        color: #555;
        font-size: 20px;
        margin: 0 10px;
        transition: color 0.3s ease;
      }

      .social-icons a:hover {
        color: #000;
      }

      button {
        border: none;
        outline: 0;
        padding: 10px 20px;
        margin: 10px 0;
        color: white;
        background-color: #000;
        text-align: center;
        cursor: pointer;
        width: 80%;
        font-size: 16px;
        border-radius: 25px;
        transition: background-color 0.3s ease;
      }

      button:hover {
        background-color: #444;
      }

      a {
        text-decoration: none;
        font-size: 18px;
        color: black;
      }

      a:hover {
        opacity: 0.7;
      }
    </style>
</head>
<body>
  <div class="hero_area">
    @include('user.header')
    
    <div class="card">
      <img src="{{asset('images/'.Auth::user()->image )}}" alt="User Image">
      <h1>{{Auth::user()->name}}</h1>
      <p class="title">{{Auth::user()->type}} & {{Auth::user()->address}}</p>
      <p>{{Auth::user()->university}} University</p>
      <div class="social-icons">
        <a href="{{Auth::user()->twitter}}"><i class="fa fa-twitter"></i></a>  
        <a href="{{Auth::user()->linkedin}}"><i class="fa fa-linkedin"></i></a>  
        <a href="{{Auth::user()->facebook}}"><i class="fa fa-facebook"></i></a> 
      </div>
     
      <a href="{{route('edit_profile',['id'=> Auth::user()->id])}}">
    <button>edit</button>
  </a>
    </div>

  </div>
  @include('user.footer')
  @include('user.script')

</body>
</html>
