<section class="footer">
  <div class="container">
    <div class="row">
      <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6 footer3 mt-5">
        <a href="index.php"> <img src="images/logo1.png" class="img-fluid" alt="img"> </a>
        <div class="footer1">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>


        <!-- Social Box -->
        <ul class="d-flex social-box">
          <li>
            <a href="#" class="fab fa-facebook-f"></a>
          </li>
          <li>
            <a href="https://www.twitter.com/" class="fab fa-twitter"></a>
          </li>
          <li>
            <a href="#" class="fa-brands fa-instagram"></a>
          </li>

        </ul>
      </div>

      <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 col-xxl-3 footer4">
        <h4 class="mb-4">QUICK LINKS</h4>
        <ul class="footer2">
          <li><a href="index.php">HOME</a></li>
          <li><a href="about.php">ABOUT US</a></li>
          <li><a href="#">SERVICES</a></li>
          <li><a href="contact.php">CONTACT US</a></li>
        </ul>
      </div>

      <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 col-xxl-3  footer4">
        <h4 class="mb-4">CONTACT US</h4>
        <div class="footer3">
          <h6>Address</h6>
          <p>Houston 8835 Long Point Rd</p>
          <h6>Email Address</h6>
          <p>Info@gmail.com</p>
          <h6>Phone Number</h6>
          <p>(832) 393-2000</p>
        </div>
      </div>


      <div class="col-md-12 col-lg-12 col-xl-12 col-xxl-12 text-center  mb-3">
        <div class="footer-bottom">
          <div class="clearfix">
            <div class="pull-left">
              <div class="copyright ">
                Copyright © 2023 Herbert Logistics - All Rights Reserved.
              </div>
            </div>

          </div>
        </div>
      </div>


    </div>
  </div>
</section>





<script src="js/jquery-3.6.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- <script src="js/bootstrap.min.js.map"></script> -->
<script src="js/slick.js"></script>
<script src="js/slick.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/owl-custom.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<!-- <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/jquery.inputmask.bundle.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
<script src="js/custom.js"></script>

<script>
  document.getElementsByTagName("body")[0].style.overflowX = "hidden";
</script>

<script>
  $('.owl-carousel').owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    autoplay: true,
    autoplayTimeout: 3000,
    responsive: {
      0: {
        items: 1
      },
      600: {
        items: 2.5
      },
      1000: {
        items: 2.5
      }
    }
  })
</script>

<!-- upload file  -->

<script>
  $("#FileInput").on('change', function(e) {
    var labelVal = $(".title").text();
    var oldfileName = $(this).val();
    fileName = e.target.value.split('\\').pop();

    if (oldfileName == fileName) {
      return false;
    }
    var extension = fileName.split('.').pop();

    if ($.inArray(extension, ['jpg', 'jpeg', 'png']) >= 0) {
      $(".filelabel i").removeClass().addClass('fa fa-file-image-o');
      $(".filelabel i, .filelabel .title").css({
        'color': '#208440'
      });
      $(".filelabel").css({
        'border': ' 2px solid #208440'
      });
    } else if (extension == 'pdf') {
      $(".filelabel i").removeClass().addClass('fa fa-file-pdf-o');
      $(".filelabel i, .filelabel .title").css({
        'color': 'red'
      });
      $(".filelabel").css({
        'border': ' 2px solid red'
      });

    } else if (extension == 'doc' || extension == 'docx') {
      $(".filelabel i").removeClass().addClass('fa fa-file-word-o');
      $(".filelabel i, .filelabel .title").css({
        'color': '#2388df'
      });
      $(".filelabel").css({
        'border': ' 2px solid #2388df'
      });
    } else {
      $(".filelabel i").removeClass().addClass('fa fa-file-o');
      $(".filelabel i, .filelabel .title").css({
        'color': 'black'
      });
      $(".filelabel").css({
        'border': ' 2px solid black'
      });
    }

    if (fileName) {
      if (fileName.length > 10) {
        $(".filelabel .title").text(fileName.slice(0, 4) + '...' + extension);
      } else {
        $(".filelabel .title").text(fileName);
      }
    } else {
      $(".filelabel .title").text(labelVal);
    }
  });
</script>

<!-- full page loader -->

<script>
  // Set the time in milliseconds for the loader to be visible
  const loaderTime = 3000;

  // Function to hide the loader
  function hideLoader() {
    const loader = document.getElementById('cms-loading');
    loader.style.display = 'none';
  }

  // Wait for the specified time and then hide the loader
  setTimeout(hideLoader, loaderTime);
</script>

</body>

</html>