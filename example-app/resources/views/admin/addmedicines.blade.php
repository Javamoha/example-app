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
                            <form action="{{route('AddMedicine')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <!-- Form fields -->
                                <label for="scientific_name">Scientific Name:</label>
                                <input type="text" name="scientific_name"  required>

                                <label for="commercial_name">Commercial Name:</label>
                                <input type="text" name="commercial_name"  required>

                                <label for="category">Category:</label>
                                <input type="text" name="category"  required>

                                <label for="company_name">Company Name:</label>
                                <input type="text" name="company_name"  required>

                                <label for="validity">Validity:</label>
                                <input type="text" name="validity"  required>

                                <label for="price">Price:</label>
                                <input type="text" name="price"  required>

                                <label for="quantity">Quantity:</label>
                                <input type="text" name="quantity"  required>

                                <label for="image">Image:</label>
                                <input type="file" name="image" id="image" accept="image/*" required>

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