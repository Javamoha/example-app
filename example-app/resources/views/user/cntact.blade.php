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

  <title>Contact Us</title>
  @include('user.css')
  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

  <!-- font awesome style -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700|Roboto:400,700&display=swap" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body class="sub_page">
  <div class="hero_area">
    @include('user.header')
  </div>



  <!-- contact section -->
  <section class="contact_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="custom_heading-container ">
          <h2>
            Request A call back
          </h2>
        </div>
      </div>
    </div>
    <div class="container layout_padding2">
      <div class="row">
        <div class="col-md-5">
          <div class="form_contaier">
            <form action="{{ route('AddMessage') }}" method="POST">
              @csrf
              <div class="form-group">
                <label for="exampleInputName1">Name</label>
                <input type="text" class="form-control" name="name" id="exampleInputName1" value="{{ old('name') }}">
              </div>
              <div class="form-group">
                <label for="exampleInputNumber1">Phone Number</label>
                <input type="text" class="form-control" name="number" id="exampleInputNumber1"
                  value="{{ old('number') }}">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="email" class="form-control" name="email" id="exampleInputEmail1"
                  value="{{ old('email') }}">
              </div>
              <div class="form-group">
                <label for="inputState">Select medicine</label>
                <select id="inputState" name="medicine" class="form-control">
                  @foreach($meds as $med)
            <option value="{{ $med->id }}" {{ old('medicine') == $med->id ? 'selected' : '' }}>
            {{ $med->scientific_name }}
            </option>
          @endforeach
                </select>
              </div>
              <div class="form-group">
                <label for="exampleInputMessage">Message</label>
                <input type="text" class="form-control" name="message" id="exampleInputMessage"
                  value="{{ old('message') }}">
              </div>
              <button type="submit" class="btn btn-primary">Send</button>
            </form>

          </div>
        </div>
        <div class="col-md-7">
          <div class="detail-box">
            <h3>
              Get Now Medicines
            </h3>
            <p>
              There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration
              in some form, by injected humour, or randomised words which don't look even slightly believable.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end contact section -->

  @include('user.footer')
  <!-- end footer section -->
  @include('user.script')
</body>

</html>