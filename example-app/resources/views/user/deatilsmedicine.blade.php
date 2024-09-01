<!DOCTYPE html>
<html>
<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>Medion</title>
  @include('user.css')
</head>
<body>
<style>
    .flex-container {
        display: flex;
        flex-wrap: wrap;
    }
    .back{
        background-image:url("images/hero-bg.jpg");
    }
  
    .box {
        width: 25%; /* تعديل حجم العناصر حسب الاحتياج */
        padding: 10px;
        background: linear-gradient(150deg, #0fe8f5 20%, #00f2c3 100%);
    }
</style>
<style>
    table {
        width: 100%;
        border-collapse: collapse;
    }

    th, td {
        padding: 8px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    th {
        background-color: #f2f2f2;
    }

    tr:hover {
        background-color: #f5f5f5;
    }
</style>

<div class="back">
  @include('user.header')
  <section class="health_section layout_padding">
    <div class="health_carousel-container">
      <h2 class="text-uppercase">
        Medicine & Health

      </h2>

      

<div class="flex-container">


<h1>تفاصيل الدواء</h1>

    <table >
        <tr>
            
            <th>scientific_name</th>
            <th>commercial_name </th>
            <th>category</th>
            <th>validity</th>
            <th>price</th>
            <th>company_name</th>
            </tr>
            
            @foreach($meds as $med)
            <tr>
                
                <td> {{ $med['scientific_name'] }}</td>
                <td>{{ $med['commercial_name'] }}</td>
                <td>{{ $med['category'] }}</td>
                <td>{{ $med['validity'] }}</td>
                <td>{{ $med['price'] }}</td>
                <td>{{ $med['company_name'] }}</td>
            </tr>
            @endforeach
          
          
       
    </table>
</div>
</div>


  
  </section>
  </div>

 


@include('user.footer')
  <!-- end footer section -->
@include('user.script')
</body>
</html>