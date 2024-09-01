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
        <!-- partial:partials/_navbar.html -->
       @include('admin.navbar')
        <!-- partial -->
  
        <!-- partial:partials/_navbar.html -->
        <!-- include your navbar HTML code here -->
        <!-- partial -->
        <style>
        /* CSS styles for the page */
        body {
            font-family: Arial, sans-serif;
        }
        
        .container {
            margin: 20px;
        }
        
        h1 {
            text-align: center;
        }
        
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        
        th, td {
            padding: 10px;
            text-align: center;
            border: 1px solid #ddd;
            color:black;
        }
        
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>قائمة الأدوية</h1>

    <table >
        <tr>
            <th>Scientific Name </th>
            <th>Commercial Name</th>
            <th>Category</th>
            <th>Company Name</th>
            <th>Validity</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>image</th>
           

        </tr>

        @foreach ($medi as $medicine)
            <tr>
                <td>{{ $medicine->scientific_name }}</td>
                <td>{{ $medicine->commercial_name }}</td>
                <td>{{ $medicine->category }}</td>
                <td>{{ $medicine->company_name }}</td>
                <td>{{ $medicine->validity }}</td>
                <td>{{ $medicine->price }}</td>
                <td>{{ $medicine->quantity }}</td>
                <td>
                 <img src="{{asset('Medicineimage/' .$medicine->image )}}" alt="photo" width="100">
                </td>

               
            </tr>
        @endforeach
    </table>
</div>

        
                      
              
</body>
</html>