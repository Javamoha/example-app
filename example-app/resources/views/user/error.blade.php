<!DOCTYPE html>
<!-- Website - www.codingnepalweb.com -->
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8" />
    <title>Error</title>
    <!-- <link rel="stylesheet" href="style.css" /> -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>
@include('user.css')

<body>
    <style>
        .erooor
        {
            padding: 450px;
            text-align: center;

        }
    </style>


    <div class="hero_area">
        @include('user.header')
        <h1 class="erooor">
            {{$message}}
        </h1>
    </div>
    @include('user.footer')
</body>

</html>