<!DOCTYPE html>
<!-- Website - www.codingnepalweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8" />
    <title>Register</title>
    <!-- <link rel="stylesheet" href="style.css" /> -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  </head>
  <body>
    <style>
         .error-box {
            background-color: #ffeaea;
            color: #d9534f;
            padding: 10px;
            margin-top: 10px;
            border: 1px solid #d9534f;
            border-radius: 5px;
        }

        .error-box ul {
            list-style-type: none;
            padding: 0;
        }

        .error-box ul li {
            margin-bottom: 5px;
        }

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}
body {

  display: grid;
  height: 100vh;
  width: 100%;
  place-items: center;
  background: linear-gradient(to right, #10e7f4  0%, #10e7f4  100%);
}
::selection {
  background: #ff80bf;
}
.container {
  background: white;
  max-width: 400px;
  width: 100%;
  padding: 10px 30px;
  border-radius: 5px;
  box-shadow: 0 10px 10px rgba(0, 0, 0, 0.15);

}
.container form .title {
  font-size: 30px;
  font-weight: 600;
  margin: 20px 0 10px 0;
  position: relative;
}
.container form .title:before {
  content: "";
  position: absolute;
  height: 4px;
  width: 33px;
  left: 0px;
  bottom: 3px;
  border-radius: 5px;
  background: linear-gradient(to right, #ed4599 0%, #ff0080 100%);
}
.container form .input-box {
  width: 100%;
  height: 50px;
  margin-top: 30px;
  position: relative;
}
.container form .input-box input {
  width: 100%;
  height: 100%;
  outline: none;
  font-size: 18px;
  border: none;
}
.container form .underline::before {
  content: "";
  position: absolute;
  height: 2px;
  width: 100%;
  background: #ccc;
  left: 0;
  bottom: 0;
}
.container form .underline::after {
  content: "";
  position: absolute;
  height: 2px;
  width: 100%;
  background: #ed4599;
  left: 0;
  bottom: 0;
  transform: scaleX(0);
  transform-origin: left;
  transition: all 0.3s ease;
}
.container form .input-box input:focus ~ .underline::after,
.container form .input-box input:valid ~ .underline::after {
  transform: scaleX(1);
  transform-origin: left;
}
.container form .button {
  margin: 40px 0 20px 0;
}
.container .input-box input[type="submit"] {
  background: #ed4599;
  font-size: 18px;
  color: #fff;
  border-radius: 5px;
  cursor: pointer;
}
.container .input-box input[type="submit"]:hover {
  background: linear-gradient(to left, #99004d 0%, #ff0080 100%);
}
.container .option {
  font-size: 14px;
  text-align: center;
}
.container .option div {
  display: flex;
  align-items: center;
}
.container .facebook a,
.container .twitter a {
  display: block;
  height: 50px;
  width: 100%;
  font-size: 15px;
  text-decoration: none;
  padding-left: 20px;
  line-height: 50px;
  color: #fff;
  border-radius: 5px;
  transition: all 0.3s ease;
}

.container .facebook i,
.container .twitter i {
  padding-right: 12px;
  font-size: 20px;
}
.container .twitter a {
  background: linear-gradient(to right, #00acee 0%, #1abeff 100%);
  margin: 20px 0 15px 0;
}
.container .twitter a:hover {
  background: linear-gradient(to left, #00acee 0%, #1abeff 100%);
  margin: 20px 0 15px 0;
}
.container .facebook a {
  background: linear-gradient(to right, #3b5998 0%, #476bb8 100%);
  margin: 20px 0 50px 0;
}
.container .facebook a:hover {
  background: linear-gradient(to left, #3b5998 0%, #476bb8 100%);
  margin: 20px 0 50px 0;
}

    </style>
    <div class="container">
      <form action="register1" method="post">
              @csrf
        <div class="title">Register</div>
        <div class="input-box underline">
          <input type="text" placeholder="Enter Your Name" name="name" required />
          <div class="underline"></div>
        </div>
        <div class="input-box underline">
          <input type="text" placeholder="Enter Your Number"  name="number" required />
          <div class="underline"></div>
        </div>
        <div class="input-box">
          <input type="password" placeholder="Enter Your Password" name="password" required />
          <div class="underline"></div>
        </div>
      
        <div class="input-box button">
          <input type="submit" name="" value="Continue" />
          @if(count($errors) > 0)
                <div class="error-box">
                
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>

            @endif
        </div>
      </form>
      <div class="option">or Connect With Social Media</div>
      <div class="twitter">
        <a href="#"><i class="fab fa-twitter"></i>Register in With Twitter</a>
      </div>
      <div class="facebook">
        <a href="#"><i class="fab fa-facebook-f"></i>Register in With Facebook</a>
      </div>
    </div>
  </body>
</html>
