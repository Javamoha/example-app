<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
    @include('admin.css')
</head>
<body>
    <style>
form {
  margin-top: 20px;
}





button[type="submit"] {
  background-color: #ff3366;
  color: #fff;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}


    </style>
     <!-- partial:partials/_sidebar.html -->
     @include('admin.sidebar')
      <!-- end  partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
       @include('admin.navbar')
        <!-- partial -->
  
   <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        <!-- include your navbar HTML code here -->
        <!-- partial -->

        <div class="row">
            
                <div class="card corona-gradient-card">
                    
                        <div class="col-4 col-sm-3 col-xl-2">
                            <!-- Form starts here -->
                            <form action="{{route('AddPosts')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <!-- Form fields -->
                                <label for="scientific_name"> Text :</label>
                                <input type="text" name="text"  required>
                                <label for="image">Image:</label>
                                <input type="file" name="post_image" id="image" accept="image/*" required>

                                <!-- Submit button -->
                                <button type="submit">Submit</button>
                            </form>
                            <!-- Form ends here -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
   </div>
</body>
</html>