<!-- Footer Section -->
<footer class="footer">
    <div class="footer-container">
        <!-- Logo and Links -->
        <div class="footer-left">
            <a href="#" aria-label="Home"><img src="path/to/logo.png" alt="Staffing Made Easy Logo" class="footer-logo"></a>
            <ul class="footer-nav">
                <li><a href="{{route('about')}}" aria-label="About Us">About Us</a></li>
                <li><a href="#services" aria-label="Our Services">Our Services</a></li>
                <li><a href="{{route('candidates.create')}}" aria-label="For Job Seekers">For Job Seekers</a></li>
                <li><a href="{{route('Employ')}}" aria-label="For Employers">For Employers</a></li>
                <li><a href="#" aria-label="Industries">Success Stories</a></li>
                <li><a href="{{route('contactpg')}}" aria-label="Contact Us">Contact Us</a></li>
            </ul>
            <div class="footer-socials">
                <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
            </div>
            <p class="footer-contact">Phone:  0424418307</p>
        </div>

        <!-- Contact Form Section -->
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
            <div class="certifications">
                <img src="path/to/iso9001.png" alt="ISO 9001 Certification" aria-label="ISO 9001 Certification">
                <img src="path/to/iso14001.png" alt="ISO 14001 Certification" aria-label="ISO 14001 Certification">
                <img src="path/to/iso45001.png" alt="ISO 45001 Certification" aria-label="ISO 45001 Certification">
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <p>© Staffing Made Easy. All Rights Reserved</p>
        <p>Designed & Developed by <span>Staffing Made Easy</span></p>
    </div>
</footer>

<script>
    @if(session('success'))
        $(document).ready(function() {
            $('#successModal').modal('show');
        });
    @endif
</script>

<style>



.footer-nav a:hover,
.footer-contact,
.footer-bottom span {
    color: #ff9f0a;
}

.footer-form input:focus,
.footer-form select:focus,
.footer-form textarea:focus {
    border-color: #ff9f0a;
    outline: none;
}

.certifications img {
    transition: transform 0.3s ease;
}

.certifications img:hover {
    transform: scale(1.05);
}

.footer-bottom {
    text-align: center;
    padding-top: 1.5rem;
    border-top: 1px solid rgba(224, 230, 237, 0.2);
    margin-top: 2rem;
}




.footer {
    background: linear-gradient(135deg, #0d1b3d, #4a90e2) !important;
    color:#e0e6ed;
    padding: 3rem 1rem;
    font-family: Arial, sans-serif;
}

.footer-container {
    display: flex;
    justify-content: space-between;
    max-width: 1200px;
    margin: 0 auto;
    flex-wrap: wrap;
}

.footer-left {
    flex: 1;
    max-width: 300px;
}

.footer-logo {
    width: 120px;
    margin-bottom: 1.5rem;
}

.footer-nav {
    list-style: none;
    padding: 0;
    margin: 0 0 1.5rem;
}

.footer-nav li {
    margin-bottom: 0.5rem;
}

.footer-nav a {
    color: #e0e6ed;
    text-decoration: none;
    font-size: 1rem;
    transition: color 0.3s ease;
}

.footer-nav a:hover {
    color: #ff9f0a;
}

.footer-socials {
    display: flex;
    gap: 0.5rem;
    margin-top: 1rem;
}

.footer-socials a {
    color: #e0e6ed;
    font-size: 1.5rem;
    text-decoration: none;
}

.footer-contact {
    font-size: 1.1rem;
    margin-top: 1rem;
    color: #ff9f0a;
}

.footer-right {
    flex: 2;
    padding-left: 1rem;
}

.footer-right h2 {
    font-size: 1.8rem;
    margin-bottom: 1rem;
    color: #ffffff;
}

.footer-form {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 1rem;
    max-width: 100%;
    color:#e0e6ed !important;
}

.form-row {
    display: flex;
    gap: 1rem;
}

.form-row input, 
.form-row select, 
.form-row textarea {
    width: 100%;
    padding: 0.8rem;
    border: 1px solid #e0e6ed;
    border-radius: 5px;
    background-color: #162447;
    color: #e0e6ed;
}

.full-width {
    grid-column: span 2;
}

textarea {
    resize: none;
    height: 80px;
}

.contact-btn {
    padding: 0.9rem;
    background-color: #ff9f0a;
    border: none;
    color: #fff;
    font-weight: bold;
    border-radius: 5px;
    cursor: pointer;
    transition: background 0.3s ease;
    grid-column: span 2;
}

.contact-btn:hover {
    background-color: #e58c00;
}

.certifications {
    display: flex;
    gap: 1rem;
    margin-top: 1.5rem;
}

.certifications img {
    width: 60px;
    height: auto;
}

.footer-bottom {
    text-align: center;
    padding-top: 1.5rem;
    border-top: 1px solid rgba(224, 230, 237, 0.2);
    margin-top: 2rem;
}

.footer-bottom p {
    margin: 0.2rem 0;
    font-size: 0.9rem;
    color: #b0bac9;
}

.footer-bottom span {
    color: #ff9f0a;
}










</style>