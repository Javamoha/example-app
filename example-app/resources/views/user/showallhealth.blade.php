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
<div class="back">
  @include('user.header')
  <section class="health_section layout_padding">
    <div class="health_carousel-container">
      <h2 class="text-uppercase">
        Medicine & Health

      </h2>

      

<div class="flex-container">


@foreach ($medii as $medicine)
   
        <div class="box">
            <div class="btn_container">
               
               <a href="{{ route('deatilsmedicine' ,['medicune_id'=>$medicine->id]) }}">
                <input type="hidden" name="medicine_id" value="{{ $medicine->id }}">
                
                <button type="submit">Detils</button>
</a>
                <form method="post" action="{{ route('storeOrder' ,['medicune_id'=>$medicine->id]) }}">
                @csrf
                <input type="hidden" name="medicine_id" value="{{ $medicine->id }}">
                <input type="number" name="quantity" value="1" min="1">
                <button type="submit">Buy Now</button>
            </form>
            </div>
           
            <div class="img-box">
                <img src="{{asset('Medicineimage/' .$medicine->image )}}" alt="">
            </div>
            <div class="detail-box">
                <!-- <div class="star_container">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star-o" aria-hidden="true"></i>
                </div> -->
                <div class="text">
                    <h6>
                    
                    </h6>
                    <h6 class="price">
                        <span>
                            $
                        </span>
                        {{$medicine->price}}
                                          </h6>
                </div>
            </div>
        </div>
      
    @endforeach
    
</div>


  
  </section>
  </div>

 


@include('user.footer')
  <!-- end footer section -->
@include('user.script')
</body>
</html>