

<x-layouts.main>

<section id="hero-contact" class="hero-contact-section">
  <div class="hero-overlay">
    <div class="container">
      <div class="row">
        <div class="col-12 text-center hero-content">
          <h1 class="hero-title">Get in Touch With Us</h1>
          <p class="hero-description">
            Whether you have a question or need more information, we are here to assist you. Contact us and we'll get back to you as soon as possible.
          </p>
          <a href="#contact-form" class="hero-btn primary-btn">Contact Us</a>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="contact-description" class="contact-description-section">
  <div class="container">
    <div class="row align-items-center">
      <!-- Left Column: Image -->
      <div class="col-lg-6 col-md-12 contact-image">
        <img src="{{ asset('images/img1.png') }}" alt="Contact Us" class="img-fluid">
      </div>
      
      <!-- Right Column: Text Description -->
      <div class="col-lg-6 col-md-12 contact-text">
        <h2 class="section-title">Why Contact Us?</h2>
        <p class="section-description">
          We are here to help you with any questions you may have. Whether you need more information, have concerns, or just want to get in touch with us, our team is ready to assist you. Fill out the form, and we’ll respond as soon as possible!
        </p>
        <ul class="contact-benefits">
          <li><strong>Personalized Support:</strong> Get tailored responses to your specific needs.</li>
          <li><strong>Quick Response:</strong> We aim to get back to you in the shortest time possible.</li>
          <li><strong>Reliable Communication:</strong> Always receive clear and consistent updates.</li>
        </ul>
      </div>
    </div>
  </div>
</section>



<section id="map-section" class="map-section">
  <div class="container">
    <div class="row align-items-center">
      <!-- Left Column: Map Embed -->
      <div class="col-lg-8 col-md-12 map-container">
        <iframe 
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.835434509665!2d144.9559283153186!3d-37.81720997975171!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d43f1f5a1bb%3A0xbbf91562b0709e!2sFederation%20Square%2C%20Melbourne%20VIC%203000%2C%20Australia!5e0!3m2!1sen!2sus!4v1633996760421!5m2!1sen!2sus" 
          width="100%" 
          height="400" 
          style="border:0;" 
          allowfullscreen="" 
          loading="lazy">
        </iframe>
      </div>
      
      <!-- Right Column: Text Description -->
      <div class="col-lg-4 col-md-12 map-info">
        <h2 class="section-title">Visit Us</h2>
        <p class="section-description">
          Come by our office and connect with our team in person! We’re located in the heart of Melbourne, easily accessible by public transport and close to all major landmarks.
        </p>
        <p class="section-address">
          <strong>Address:</strong> Federation Square, Melbourne VIC 3000, Australia
        </p>
        <p class="section-phone">
          <strong>Phone:</strong> +61 3 1234 5678
        </p>

        <p class="section-email">
          <strong>Email:</strong> admin@staffingmadeeasy.com
        </p>

        <p class="section-hours">
          <strong>Hours:</strong> Mon - Fri, 9:00 AM - 5:00 PM
        </p>
      </div>
    </div>
  </div>
</section>




      <!-- Right Column: Enquiry Form -->
      <section id="enquiry-section" class="enquiry-section">
  <div class="container">
    <div class="row align-items-center">
      <!-- Left Column: Enquiry Image/Description -->
      <div class="col-lg-6 col-md-12 enquiry-info">
        <h2 class="enquiry-title">Have Questions?<br>Let’s Help You Find Your Perfect Fit.</h2>
        <p class="enquiry-description">
          Our team is here to assist you with any questions you may have. Just fill in the form, and we’ll help you get started on finding your ideal solution.
        </p>
      </div>

      <!-- Right Column: Enquiry Form -->
      <div class="col-lg-6 col-md-12 enquiry-form">
        <form action="{{ route('contact.submit') }}" method="POST" class="footer-form">
          @csrf
          <div class="form-row">
            <input type="text" name="name" placeholder="Your Name" required>
          </div>
          <div class="form-row">
            <input type="email" name="email" placeholder="Your Email" required>
          </div>
          <div class="form-row">
            <input type="tel" name="phone" placeholder="Your Phone">
          </div>
          <div class="form-row">
            <select name="location" required>
              <option value="">Preferred Location</option>
              <option value="NSW">NSW</option>
            <option value="VIC">VIC</option>
            <option value="QLD">QLD</option>
            <option value="WA">WA</option>
            <option value="SA">SA</option>
            <option value="NT">NT</option>
            <option value="ACT">ACT</option>
            <option value="TAS">TAS</option>
            </select>
          </div>
          <div class="form-row">
            <textarea name="message" placeholder="Your Message (optional)" class="full-width"></textarea>
          </div>
          <button type="submit" class="contact-btn full-width">Get In Touch</button>
        </form>


        <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="successModalLabel">Success</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p id="successMessage"></p>
            </div>
        </div>
    </div>
</div>


      </div>
    </div>
  </div>
</section>




<script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
$(document).ready(function () {
    $('#contactForm').on('submit', function (e) {
        e.preventDefault(); // Prevent the default form submission
        
        $.ajax({
            url: $(this).attr('action'),
            method: 'POST',
            data: $(this).serialize(),
            success: function (response) {
                if (response.success) {
                    // Show success message in the modal
                    $('#successMessage').text(response.message);
                    $('#successModal').modal('show');
                    
                    // Clear the form fields
                    $('#contactForm')[0].reset();
                }
            },
            error: function (xhr) {
                console.error(xhr.responseText);
            }
        });
    });
});
</script>

<style>




.hero-contact-section {
  position: relative;
  height: 700px; /* Set the height of the hero section */
  background-image: url("{{ asset('images/map.jpg') }}"); /* Add background image */
  background-size: cover;
  background-position: center;
  display: flex;
  align-items: center;
  justify-content: center;
  text-align: center;
  color: white;
}

.hero-overlay {
  background-color: rgba(0, 0, 0, 0.5); /* Dark overlay for contrast */
  width: 100%;
  height: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
}

.hero-content {
  padding: 20px;
  max-width: 800px;
}

.hero-title {
  font-size: 48px;
  font-weight: 700;
  margin-bottom: 20px;
  text-transform: uppercase;
  letter-spacing: 3px;
  color: #fff;
}

.hero-description {
  font-size: 20px;
  font-weight: 400;
  margin-bottom: 30px;
  color: #fff;
}

.hero-btn {
  padding: 15px 30px;
  font-size: 18px;
  font-weight: 600;
  color: #fff;
  text-decoration: none;
  border-radius: 30px;
  background-color: #3498db;
  transition: background-color 0.3s ease, transform 0.3s ease;
}

.hero-btn:hover {
  background-color: #2980b9;
  transform: translateY(-3px);
}

@media (max-width: 768px) {
  .hero-title {
    font-size: 36px;
  }

  .hero-description {
    font-size: 16px;
  }
}


.contact-description-section {
  padding: 80px 20px;
  background-color: #f4f6f9;
  background-color: #aacc0010;
}

.contact-description-section .container {
  max-width: 1200px;
  margin: 0 auto;
}

.contact-image img {
  width: 100%;
  height: auto;
  border-radius: 10px;
  box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
}

.contact-text {
  padding-left: 30px;
}

.section-title {
  font-size: 36px;
  font-weight: 700;
  color: #333;
  margin-bottom: 20px;
  text-transform: uppercase;
}

.section-description {
  font-size: 18px;
  line-height: 1.6;
  color: #555;
  margin-bottom: 30px;
}

.contact-benefits {
  list-style: none;
  padding-left: 0;
}

.contact-benefits li {
  font-size: 16px;
  line-height: 1.6;
  color: #777;
  margin-bottom: 15px;
}

.contact-benefits li strong {
  color: #3498db;
}

@media (max-width: 768px) {
  .contact-description-section {
    padding: 60px 20px;
  }

  .contact-text {
    padding-left: 0;
    padding-top: 20px;
  }

  .section-title {
    font-size: 30px;
  }

  .section-description {
    font-size: 16px;
  }

  .contact-benefits li {
    font-size: 14px;
  }
}



.map-section {
  padding: 60px 20px;
  background-color: #00aaff10;
}

.map-container iframe {
  border-radius: 10px;
  box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
}

.map-info {
  padding: 30px;
  background-color: #ffffff;
  border-radius: 10px;
  box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
  margin-top: 20px;
}

.section-title {
  font-size: 32px;
  font-weight: 700;
  color: #333;
  margin-bottom: 20px;
}

.section-description {
  font-size: 18px;
  color: #555;
  margin-bottom: 15px;
  line-height: 1.6;
}

.section-address,
.section-phone,
.section-email {
  font-size: 16px;
  color: #777;
  margin-bottom: 10px;
}

.section-address strong,
.section-phone strong,
.section-hours strong
.section-email strong  {
  color: #3498db;
}

@media (max-width: 768px) {
  .map-info {
    margin-top: 20px;
    padding: 20px;
  }

  .section-title {
    font-size: 28px;
  }

  .section-description,
  .section-address,
  .section-phone,
  .section-hours {
    font-size: 14px;
  }
}




.enquiry-section {
  padding: 60px 20px;
  background-color: #f4f6f9;
}

.enquiry-info {
  padding-right: 30px;
}

.enquiry-title {
  font-size: 32px;
  font-weight: 700;
  color: #333;
  margin-bottom: 20px;
}

.enquiry-description {
  font-size: 18px;
  line-height: 1.6;
  color: #555;
  margin-bottom: 20px;
}

.footer-form .form-row {
  margin-bottom: 15px;
}

.footer-form input,
.footer-form select,
.footer-form textarea {
  width: 100%;
  padding: 12px;
  font-size: 16px;
  border: 1px solid #ddd;
  border-radius: 5px;
  transition: border-color 0.3s ease;
}

.footer-form input:focus,
.footer-form select:focus,
.footer-form textarea:focus {
  border-color: #3498db;
}

.full-width {
  width: 100%;
}

.contact-btn {
  padding: 12px;
  font-size: 18px;
  font-weight: 600;
  color: #fff;
  background-color: #3498db;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  transition: background-color 0.3s ease;
  width: 100%;
}

.contact-btn:hover {
  background-color: #2980b9;
}

@media (max-width: 768px) {
  .enquiry-info {
    padding-right: 0;
    margin-bottom: 20px;
  }

  .enquiry-title {
    font-size: 28px;
  }

  .enquiry-description {
    font-size: 16px;
  }
}



</style>


</x-layouts.main>