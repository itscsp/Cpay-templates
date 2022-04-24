<?php require_once('topHeader.php') ?>




<!--header start-->
<?php require_once('header.php') ?>
<!--header end-->


<!--page title start-->

<section class="page-title overflow-hidden position-relative text-center text-lg-start" data-bg-color="#d2f9fe">
  <div class="page-title-pattern topBottom" data-bg-img="images/bg/01.png"></div>
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-7 col-md-12">
        <h1 class="title"><span>Contact</span> Us</h1>
        <p>Contact us now to get free consultation and discuss your requirements.</p>
      </div>
      <div class="col-lg-5 col-md-12 text-lg-end mt-3 mt-lg-0">
        <nav aria-label="breadcrumb" class="page-breadcrumb">
          <ol class="breadcrumb">
            <li><a href="<?php echo $site_url ?>">Home </a><span>/ Contact us</span>
            </li>

          </ol>
        </nav>
      </div>
    </div>
  </div>
</section>

<!--page title end-->


<!--body content start-->

<div class="page-content">

<!--contact start-->

<section class="o-hidden p-0  z-index-0">
  <div class="container-fluid p-0">
    <div class="row">
      <div class="col">
        <div class="map iframe-h">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3609.6318849193804!2d55.27713221497599!3d25.2156337838876!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f43cd07af370f%3A0xe9bcb2e6c75713fe!2sAl%20Rostamani%20Group!5e0!3m2!1sen!2sin!4v1650712413380!5m2!1sen!2sin"  allowfullscreen="" loading="lazy" ></iframe>
        </div>
      </div>
    </div>
  </div>
</section>

<section>
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-5 col-md-12">
        <img class="img-fluid mb-7" src="images/svg/contact-us.svg" alt="">
        <div class="contact-media">
          <div class="d-flex align-items-center mb-5">
            <div class="flex-shrink-0"> <i class="la la-map-o"></i>
            </div>
            <div class="flex-grow-1 ms-3">
              <h5>Address</h5>
              <p>CPay Payment Provider Services Office No. 510, 5th Floor, Al Rostamani Group Building, Port Saeed, Deira, Dubai, Post Box 55281 United Arab Emirates</p>
            </div>
          </div>
          <div class="d-flex align-items-center mb-5">
            <div class="flex-shrink-0"> <i class="la la-envelope-o"></i>
            </div>
            <div class="flex-grow-1 ms-3">
              <h5>Email</h5>
              <a href="mailto:themeht23@gmail.com">info@cpaypayments.com</a>
            </div>
          </div>
          <div class="d-flex align-items-center">
            <div class="flex-shrink-0"> <i class="la la-phone"></i>
            </div>
            <div class="flex-grow-1 ms-3">
              <h5>Phone</h5>
              <a href="tel:+912345678900">+971-445-69396</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-7 col-md-12 mt-5 mt-lg-0">
        <div class="contact-inner white-bg">
          <div class="section-title">
            <h2 class="title">Stay <span>Contact</span> Us</h2>
            <div class="title-bdr">
              <div class="left-bdr"></div>
              <div class="right-bdr"></div>
            </div>
            <p>Get in touch and let us know how we can help. Fill out the form and we’ll be in touch as soon as possible.</p>
          </div>
          <form id="contact-form" method="post" action="http://www.themeht.com/sassaht/ltr/php/contact.php">
            <div class="messages"></div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <input id="form_name" type="text" name="name" class="form-control" placeholder="First name" required="required" data-error="Firstname is required.">
                  <div class="help-block with-errors"></div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Last name" required="required" data-error="Lastname is required.">
                  <div class="help-block with-errors"></div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <input id="form_email" type="email" name="email" class="form-control" placeholder="Email" required="required" data-error="Valid email is required.">
                  <div class="help-block with-errors"></div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <input id="form_phone" type="tel" name="phone" class="form-control" placeholder="Phone" required="required" data-error="Phone is required">
                  <div class="help-block with-errors"></div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <textarea id="form_message" name="message" class="form-control" placeholder="Message" rows="3" required="required" data-error="Please,leave us a message."></textarea>
                  <div class="help-block with-errors"></div>
                </div>
              </div>
              <div class="col-md-12 mt-2">
                <button class="btn btn-theme btn-circle"><span>Send Message</span>
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

<!--contact end-->

</div>

<!--body content end-->



<?php require_once('footer.php') ?>

<?php require_once('footerbottom.php') ?>