<?php 
include_once 'inclued/header.php';
?>

<section class="page-title bg-1">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block text-center">
          <span class="text-white">اتصل بنا</span>
          <h1 class="text-capitalize mb-5 text-lg">صحتك تهمنا</h1>

          <!-- <ul class="list-inline breadcumb-nav">
            <li class="list-inline-item"><a href="index.html" class="text-white">Home</a></li>
            <li class="list-inline-item"><span class="text-white">/</span></li>
            <li class="list-inline-item"><a href="#" class="text-white-50">Contact Us</a></li>
          </ul> -->
        </div>
      </div>
    </div>
  </div>
</section>
<!-- contact form start -->

<section class="section contact-info pb-0">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-6">
        <div class="contact-block mb-4 mb-lg-0">
          <i class="icofont-live-support"></i>
          <h5>تواصل معنا</h5>
          771-188-884
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="contact-block mb-4 mb-lg-0">
          <i class="icofont-support-faq"></i>
          <h5>Email Us</h5>
          3A2M@gmail.com
        </div>
      </div>
      <div class="col-lg-4 col-md-12">
        <div class="contact-block mb-4 mb-lg-0">
          <i class="icofont-location-pin"></i>
          <h5>الموقع</h5>
		  اليمن صنعاء
          
        </div>
      </div>
    </div>
  </div>
</section>

<section class="contact-form-wrap section">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-6">
        <div class="section-title text-center">
          <h2 class="text-md mb-2">اتصل بنا</h2>
          <div class="divider mx-auto my-4"></div>
          <p class="mb-5">معك من اجل الحفاظ على صحتك</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
        <form id="contact-form" class="contact__form " method="post" action="mail.php">
          <!-- form message -->
          <div class="row">
            <div class="col-12">
              <div class="alert alert-success contact__msg" style="display: none" role="alert">
                Your message was sent successfully.
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-6">
              <div class="form-group">
                <input name="name" id="name" type="text" class="form-control" placeholder="Your Full Name">
              </div>
            </div>

            <div class="col-lg-6">
              <div class="form-group">
                <input name="email" id="email" type="email" class="form-control" placeholder="Your Email Address" required>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <input name="subject" id="subject" type="text" class="form-control" placeholder="Your Query Topic" required>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <input name="phone" id="phone" type="text" class="form-control" placeholder="Your Phone Number" required>
              </div>
            </div>
          </div>

          <div class="form-group-2 mb-4">
            <textarea name="message" id="message" class="form-control" rows="8" placeholder="Your Message" required></textarea>
          </div>

          <div>
            <input class="btn btn-main btn-round-full" name="submit" type="submit" value="Send Messege"></input>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>


<!-- <div class="google-map ">
	<div id="map" data-latitude="40.712776" data-longitude="-74.005974" data-marker="images/marker.png"></div>
</div>-->
<?php  
include_once 'inclued/footer.php';
?>
