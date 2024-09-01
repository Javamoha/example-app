<section class="health_section layout_padding">
    <div class="health_carousel-container">
      <h2 class="text-uppercase">
        Medicine & Health

      </h2>

      <style>
    .flex-container {
        display: flex;
        flex-wrap: wrap;
    }
  
    .box {
        width: 25%; /* تعديل حجم العناصر حسب الاحتياج */
        padding: 10px;
       
    }
</style>

<div class="flex-container">


@foreach ($medii as $key => $medicine)
    @if ($key < 4)
        <div class="box">
            <div class="btn_container">
                <a href="">
                    Buy Now
                </a>
            </div>
            <div class="img-box">
                <img src="images/p-5.jpg" alt="">
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
        @endif
    @endforeach
    
</div>

       
    <div class="d-flex justify-content-center">
      <a href="{{route('showallhealth')}}">
        See more
      </a>
    </div>
  </section>
