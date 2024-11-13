
<x-layouts.main>

<section class="about-hero-section">
    <div class="about-hero-overlay">
        <div class="about-hero-content">
            <h1 class="about-hero-title">IndustrieDriving Success with Exceptional Talent:
            Customized Staffing Solutions for Diverse Industriess</h1>
            <p class="about-hero-subtitle">Discover our mission, values, and commitment to excellence in staffing solutions.</p>
            <a href="#more-info" class="btn btn-primary">Learn More</a>
        </div>
    </div>
</section>







<!-- Industries We Serve Section -->
<section class="industries-section" id="industries">
    <div class="industries-container">
        <h2>Industries We Serve</h2>
        <p>We specialise in a wide range of industries</p>

        <div class="industries-grid">
            @foreach ($industries as $industry)
                <div class="industry-card" onclick="window.location='{{ route('industries.show', $industry->id) }}'">
                    <div class="icon-container">
                        <!-- Dynamically Displaying the Icon Image -->
                        <img src="{{ asset('storage/' . $industry->image) }}" alt="{{ $industry->name }} Icon" class="industry-icon">
                    </div>
                    <h3>{{ $industry->name }}</h3>
                    <p>{{ \Str::limit($industry->description, 120) }}</p>
                </div>
            @endforeach
        </div>

        
    </div>
</section>



   


<section id="cta" class="cta-section">
  <div class="container">
    <div class="row">
      <!-- Left Column (Image) -->
      <div class="col-lg-6 col-md-12 cta-image">
        <img src="{{ asset('images/job1.jpg') }}" alt="Call to Action" class="cta-img">
      </div>

      <!-- Right Column (CTA) -->
      <div class="col-lg-6 col-md-12 cta-text">
        <h2 class="cta-title">Ready to Get Started?</h2>
        <p class="cta-description">
          Take the first step toward transforming your staffing process. Let’s work together to find the best talent for your team.
        </p>
        <div class="cta-buttons">
          <a href="#contact" class="cta-btn primary-btn">Contact Us</a>
          <a href="#learn-more" class="cta-btn secondary-btn">Learn More</a>
        </div>
      </div>
    </div>
  </div>
</section>



<section id="counters" class="counters-section">
  <div class="container">
    <div class="row">
      <!-- Counter 1: Personnel in numbers -->
      <div class="col-lg-4 col-md-6 counter">
        <div class="counter-icon">
          <i class="fas fa-users"></i>
        </div>
        <div class="counter-number" data-count="436">0</div>
        <p class="counter-description">Personnel in numbers</p>
        <p class="counter-details">Our expansive network allows us to connect qualified candidates with the right opportunities nationwide.</p>
      </div>

      <!-- Counter 2: Clients across Australia -->
      <div class="col-lg-4 col-md-6 counter">
        <div class="counter-icon">
          <i class="fas fa-briefcase"></i>
        </div>
        <div class="counter-number" data-count="63251">0</div>
        <p class="counter-description">Clients across Australia</p>
        <p class="counter-details">With our extensive network of skilled candidates, we can quickly fulfill workforce needs across various industries.</p>
      </div>

      <!-- Counter 3: Australian States -->
      <div class="col-lg-4 col-md-6 counter">
        <div class="counter-icon">
          <i class="fas fa-map-marker-alt"></i>
        </div>
        <div class="counter-number" data-count="6">0</div>
        <p class="counter-description">Australian States</p>
        <p class="counter-details">We operate throughout all six states across Australia, providing comprehensive recruitment solutions from coast to coast.</p>
      </div>
    </div>
  </div>
</section>





<style>



.about-hero-section {
    position: relative;
    background-image: url('images/services1.webp'); /* Add your hero background image here */
    background-size: cover;
    background-position: center;
    height: 80vh;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #fff;
}

.about-hero-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.6); /* Dark overlay */
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 100px ;
}

.about-hero-content {
    text-align: center;
    padding: 20px;
    max-width: 600px;
}

.about-hero-title {
    font-size: 3em;
    font-weight: bold;
    margin-bottom: 10px;
    text-shadow: 1px 1px 5px rgba(0, 0, 0, 0.5);
}

.about-hero-subtitle {
    font-size: 1.2em;
    margin-bottom: 20px;
    color: #ddd;
    line-height: 1.5;
}

.btn-primary {
    padding: 12px 30px;
    font-size: 1em;
    font-weight: 600;
    color: #fff;
    background-color: #6366F1;
    border-radius: 25px;
    text-decoration: none;
    transition: background-color 0.3s ease;
}

.btn-primary:hover {
    background-color: #4F46E5;
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .about-hero-title {
        font-size: 2.5em;
    }

    .about-hero-subtitle {
        font-size: 1em;
    }
}





.dei-section {
  padding: 100px ;
  background: #f8f8f8;
  padding: 80px 20px;
  text-align: center;
  position: relative;
}

.dei-section .container {
  max-width: 1200px;
  margin: 0 auto;
}

.section-title {
  font-size: 40px;
  font-weight: 800;
  color: #2c3e50;
  margin-bottom: 20px;
  text-transform: uppercase;
  letter-spacing: 3px;
}

.section-subtitle {
  font-size: 18px;
  margin-bottom: 40px;
  color: #7f8c8d;
  line-height: 1.6;
}

.dei-cards {
  display: flex;
  justify-content: space-between;
  gap: 30px;
  flex-wrap: wrap;
}

.dei-card {
  width: 30%;
  background: #fff;
  border-radius: 15px;
  overflow: hidden;
  box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
  transition: transform 0.3s ease, box-shadow 0.3s ease;
  text-align: left;
  opacity: 0;
  animation: cardFadeIn 1s ease-out forwards;
}

.dei-card .card-image {
  height: 200px;
  background-size: cover;
  background-position: center;
  position: relative;
}

.dei-card h3 {
  font-size: 24px;
  color: #2c3e50;
  padding: 20px;
  font-weight: 700;
  text-transform: uppercase;
}

.dei-card p {
  font-size: 16px;
  color: #7f8c8d;
  padding: 0 20px 20px;
  line-height: 1.6;
}

.dei-card:hover {
  transform: translateY(-10px);
  box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
}

.dei-card:hover .card-image {
  filter: brightness(0.8);
}

@keyframes cardFadeIn {
  0% {
    opacity: 0;
    transform: translateY(20px);
  }
  100% {
    opacity: 1;
    transform: translateY(0);
  }
}

@media (max-width: 768px) {
  .dei-cards {
    flex-direction: column;
    align-items: center;
  }

  .dei-card {
    width: 80%;
    margin-bottom: 30px;
  }

  .section-title {
    font-size: 30px;
  }
}


.why-choose-us {
  padding: 100px ;
  background: #f7f7f7;
  padding: 80px 20px;
  position: relative;
}

.why-choose-us .container {
  max-width: 1200px;
  margin: 0 auto;
}

.section-title {
  font-size: 40px;
  font-weight: 800;
  color: #2c3e50;
  margin-bottom: 20px;
  text-transform: uppercase;
  letter-spacing: 3px;
}

.section-subtitle {
  font-size: 18px;
  margin-bottom: 50px;
  color: #7f8c8d;
  line-height: 1.6;
}

.why-choose-us-content {
  display: flex;
  justify-content: space-between;
  gap: 50px;
}

.left-column {
  width: 48%;
}

.choose-us-image {
  width: 100%;
  height: auto;
  border-radius: 15px;
  box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.choose-us-image:hover {
  transform: scale(1.05);
  box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
}

.right-column {
  width: 48%;
 
}

.accordion {
  display: flex;
  flex-direction: column;
}

.accordion-item {
  background: #fff;
  border-radius: 10px;
  margin-bottom: 15px;
  box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
  overflow: hidden;
  transition: transform 0.3s ease;
}

.accordion-button {
  background-color: #2c3e50;
  color: #fff;
  padding: 20px;
  font-size: 18px;
  font-weight: 600;
  text-align: left;
  width: 100%;
  border: none;
  cursor: pointer;
  transition: background-color 0.3s ease;
  border-radius: 0;
  text-transform: uppercase;
}

.accordion-button:hover {
  background-color: #34495e;
}

.accordion-content {
  height: 0; /* Initial height is 0, it will expand */
  opacity: 0;
  padding: 0 20px; /* Add padding, but it won't be visible */
  font-size: 16px;
  color: #7f8c8d;
  line-height: 1.6;
  background-color: #ecf0f1;
  overflow: hidden; /* Hide overflow until content expands */
  transition: height 0.3s ease, opacity 0.3s ease; /* Smooth transition */
}

.accordion-button.active + .accordion-content {
  height: auto; /* Expand height */
  opacity: 1; /* Make content visible */
  padding: 20px; /* Make padding visible */
}

.accordion-button:focus {
  outline: none;
}

@media (max-width: 768px) {
  .why-choose-us-content {
    flex-direction: column;
    align-items: center;
  }

  .left-column, .right-column {
    width: 100%;
  }

  .choose-us-image {
    width: 80%;
    margin-bottom: 20px;
  }

  .accordion-button {
    font-size: 16px;
  }
}


.cta-section {
  padding: 100px ;
  background-color: #162447 !important;
  color: white;
  padding: 60px 20px;
}

.cta-section .container {
  max-width: 100%;
  margin: 0 auto;
  padding:100px;
}

.cta-image {
  flex: 1;
}

.cta-img {
  width: 100%;
  max-height: 40rem;
  border-radius: 15px;
  box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.cta-img:hover {
  transform: scale(1.05);
  box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
}

.cta-text {
  flex: 1;

  padding:100px 0 0 100px;
}

.cta-title {
  font-size: 36px;
  font-weight: 800;
  color: #fff;
  margin-bottom: 20px;
  text-transform: uppercase;
  letter-spacing: 2px;
}

.cta-description {
  font-size: 18px;
  line-height: 1.6;
  margin-bottom: 30px;
}

.cta-buttons {
  display: flex;
  gap: 20px;
}

.cta-btn {
  padding: 15px 30px;
  font-size: 16px;
  font-weight: 600;
  text-decoration: none;
  border-radius: 30px;
  text-transform: uppercase;
  transition: background-color 0.3s ease, transform 0.3s ease;
}

.primary-btn {
  background-color: #3498db;
  color: #fff;
  border: 2px solid #3498db;
}

.primary-btn:hover {
  background-color: #2980b9;
  transform: translateY(-3px);
}

.secondary-btn {
  background-color: transparent;
  color: #fff;
  border: 2px solid #fff;
}

.secondary-btn:hover {
  background-color: #fff;
  color: #2c3e50;
  transform: translateY(-3px);
}

/* Responsive Design */
@media (max-width: 768px) {
  .cta-img {
    max-width: 700px;
    margin-bottom: 20px;
  }

  .cta-image{
    max-width: 700px;

  }
  .cta-title {
    font-size: 30px;
  }

  .cta-description {
    font-size: 16px;
  }

  .cta-buttons {
    flex-direction: column;
    align-items: center;
  }

  .cta-btn {
    width: 100%;
    text-align: center;
  }
}


.counters-section {
  padding: 100px ;
  background-color: #f4f6f9;
  padding: 60px 20px;
}

.counters-section .container {
  max-width: 1200px;
  margin: 0 auto;
}

.counter {
  background-color: #fff;
  padding: 30px;
  margin: 20px 0;
  border-radius: 10px;
  box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
  text-align: center;
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.counter:hover {
  transform: translateY(-10px);
  box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
}

.counter-icon {
  font-size: 40px;
  color: #3498db;
  margin-bottom: 20px;
}

.counter-number {
  font-size: 48px;
  font-weight: 800;
  color: #333;
  margin-bottom: 15px;
  transition: transform 1s ease-out;
}

.counter-description {
  font-size: 18px;
  font-weight: 600;
  color: #555;
  text-transform: uppercase;
  letter-spacing: 1px;
  margin-bottom: 10px;
}

.counter-details {
  font-size: 16px;
  line-height: 1.6;
  color: #777;
}

@media (max-width: 768px) {
  .counter {
    margin: 15px 0;
  }

  .counter-number {
    font-size: 36px;
  }

  .counter-description {
    font-size: 16px;
  }

  .counter-details {
    font-size: 14px;
  }
}



</style>









<script>
  // Select all accordion buttons
  const accordionButtons = document.querySelectorAll('.accordion-button');

  accordionButtons.forEach(button => {
    button.addEventListener('click', () => {
      // Toggle active class for clicked button
      button.classList.toggle('active');
      
      // Close other open accordions
      const accordionContent = button.nextElementSibling;
      if (button.classList.contains('active')) {
        // Expand this accordion content
        accordionContent.style.height = `${accordionContent.scrollHeight}px`;
        accordionContent.style.opacity = 1;
      } else {
        // Collapse the content
        accordionContent.style.height = '0';
        accordionContent.style.opacity = 0;
      }
    });
  });



  const counters = document.querySelectorAll('.counter-number');

  const animateCounters = () => {
    counters.forEach(counter => {
      const countTo = counter.getAttribute('data-count');
      let currentCount = 0;
      
      const counterInterval = setInterval(() => {
        counter.innerText = currentCount;
        if (currentCount >= countTo) {
          clearInterval(counterInterval);
        } else {
          currentCount++;
        }
      }, 10); // Adjust the speed of animation here
    });
  };

  // Intersection Observer to trigger the counter animation when the section comes into view
  const options = {
    threshold: 0.5
  };

  const observer = new IntersectionObserver((entries, observer) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        animateCounters();
        observer.unobserve(entry.target);
      }
    });
  }, options);

  observer.observe(document.querySelector('#counters'));
</script>
</x-layouts.main>