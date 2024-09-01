<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/profile.css">
    <title>edit profile user</title>
    @include('user.css')
</head>
<body>
<div class="hero_area">
 @include('user.header')
 <div class="profile"></div>
  
<div class="content__actions">
  <form action="{{route('update_image',['id'=> Auth::user()->id])}}" method="POST" enctype="multipart/form-data" nullable>
@csrf
<img class="imguser" src="{{asset('images/'.Auth::user()->image )}}" alt="photo" width="100" >  
<input   type="file" name="image" id="image" accept="image/*" nullable >
<div class="form-group">
    <label for="exampleInputEmail1">Last Name</label>
    <input type="text" class="form-control" name="last_name" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter last name" nullable>
    
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Facebook</label>
    <input type="text" class="form-control" name="facebook" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter facebook" nullable>
    
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Twiter</label>
    <input type="text" class="form-control" name="twitter" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter twitter" nullable>
    
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">LinkedIn</label>
    <input type="text" class="form-control" name="linkedin" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter linkedin" nullable>
    
  </div>
  
  <div class="form-group">
    <label for="exampleInputEmail1">University</label>
    <input type="text" class="form-control" name="university" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter university" nullable>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Type</label>
    <input type="text" class="form-control" name="type" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter type" nullable>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Address</label>
    <input type="text" class="form-control" name="address" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter address" nullable>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1"> Age</label>
    <input type="text" class="form-control" name="age" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter age" nullable>
  </div>
    <div class="but">
      <button class="button-profile " type="submit">Submit</button>
    </div>



</form>
</div>
 






</div>
</div>
</div>






</head>
<body>


  




<script src="./js/script.js"></script>
<script>
document.getElementById("connectBtn").addEventListener("click", function() {
  var phoneNumberElement = document.getElementById("phoneNumber");
  if (phoneNumberElement.style.display === "none") {
      phoneNumberElement.style.display = "block";
  } else {
      phoneNumberElement.style.display = "none";
  }
});
</script>
@include('user.footer')
  <!-- end footer section -->
@include('user.script')

</body>
</html>