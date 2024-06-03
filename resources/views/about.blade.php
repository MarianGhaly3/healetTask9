<!DOCTYPE html>
<html>

<head>
    @include('includes.head')
</head>

<body>

    <!-- header section strats -->
    <header class="header_section innerpage_header">
    @include('includes.nav')
    </header>
    <!-- end header section -->

    
  <!-- end about section -->
    <section class="about_section  layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="img-box">
            <img src="{{ asset('assets/images/about-img.jpg') }}" alt="">
          </div>
        </div>
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                About Us
              </h2>
            </div>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti dolorem eum consequuntur ipsam repellat dolor soluta aliquid laborum, eius odit consectetur vel quasi in quidem, eveniet ab est corporis tempore.
            </p>
            <a href="">
              Read More
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end about section -->

      <!-- info section -->
      @include('includes.info')
    <!-- end info_section -->

    <!-- footer section -->
    @include('includes.footer')
    <!-- end footer section -->

    <!-- JS Scripts section -->
    @include('includes.scripts')
    <!-- end JS Scripts section -->

</body>

</html>