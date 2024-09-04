<section id="contact" class="contact">

    <!--  Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Contact</h2>
        <p>We’re here to help you. Whether you have questions, need support, or want to get in touch with us for any reason, feel free to reach out. Our team is dedicated to providing you with the assistance you need. Connect with us today!</p>
      </div>
      <!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="row gy-4">

        <div class="col-lg-6">

          <div class="row gy-4">
            <div class="col-md-6">
              <div class="info-item" data-aos="fade" data-aos-delay="200">
                <i class="bi bi-geo-alt"></i>
                <h3>Address</h3>
                <p>Morogoro, Tanzania Ujenzi road</p>
                <p>Tanzania</p>
              </div>
            </div><!-- End Info Item -->

            <div class="col-md-6">
              <div class="info-item" data-aos="fade" data-aos-delay="300">
                <i class="bi bi-telephone"></i>
                <h3>Call Us</h3>
                <p>+255-23-261 4986</p>

              </div>
            </div><!-- End Info Item -->

            <div class="col-md-6">
              <div class="info-item" data-aos="fade" data-aos-delay="400">
                <i class="bi bi-envelope"></i>
                <h3>Email Us</h3>
                <p>mlt@mkwawatanz.com</p>
              </div>
            </div><!-- End Info Item -->

            <div class="col-md-6">
              <div class="info-item" data-aos="fade" data-aos-delay="500">
                <i class="bi bi-clock"></i>
                <h3>Open Hours</h3>
                <p>Monday - Friday</p>
                <p>9:00AM - 05:00PM</p>
              </div>
            </div><!-- End Info Item -->

          </div>

        </div>

        <div class="col-lg-6">
            <form id="contact-form" action="{{ route('contact.send') }}" method="POST" class="php-email-form">
                @csrf
                <div class="row gy-4">
                    <div class="col-md-6">
                        <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                    </div>
                    <div class="col-md-6">
                        <input type="email" class="form-control" name="email" placeholder="Your Email" required>
                    </div>
                    <div class="col-md-12">
                        <input type="text" class="form-control" name="subject" placeholder="Subject" required>
                    </div>
                    <div class="col-md-12">
                        <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
                    </div>
                    <div class="col-md-12 text-center">
                        <div class="loading" style="display: none;">Loading...</div>
                        <div class="error-message" style="display: none;"></div>
                        <div class="sent-message" style="display: none;">Your message has been sent. Thank you!</div>
                        <button type="submit">Send Message</button>
                    </div>
                </div>
            </form>

        </div><!-- End Contact Form -->

      </div>

    </div>

  </section>


  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    $('#contact-form').on('submit', function(e) {
        e.preventDefault(); // Prevent the form from submitting via the browser

        var form = $(this);
        var url = form.attr('action');
        var formData = form.serialize();

        $.ajax({
            type: "POST",
            url: url,
            data: formData,
            beforeSend: function() {
                form.find('.loading').show();
                form.find('.error-message').hide();
                form.find('.sent-message').hide();
            },
            success: function(response) {
                form.find('.loading').hide();
                form.find('.sent-message').show();
                form[0].reset(); // Clear the form
            },
            error: function(xhr) {
                form.find('.loading').hide();
                var errorMessage = xhr.responseJSON ? xhr.responseJSON.message : 'There was an error. Please try again.';
                form.find('.error-message').text(errorMessage).show();
            }
        });
    });
});
</script>
