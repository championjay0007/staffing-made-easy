<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Staffing Made Easy' }}</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Add this in your <head> -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Add this before your closing </body> tag -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"> </script>
   
   <!-- Include Bootstrap CSS in the head -->

<!-- Include Bootstrap JS (optional) before closing body tag -->
<script src="https://code.jquery.com/jquery-3.6.0.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.min.js"></script>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"> </script>
  
<link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">

<!-- AOS JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>

<script>

function toggleMenu() {
    const mobileNav = document.getElementById('mobileNav');
    mobileNav.classList.toggle('show');
}




    AOS.init({
        duration: 1200, // Increase duration for a slower animation
        offset: 200, // Adjust the offset value for when animation should start
        delay: 200, // Adds a delay before animation starts
        once: false, // Set to true to animate only once while scrolling down
        mirror: true // Whether elements should animate out while scrolling past them
    });

</script>

</head>



<body>

    <!-- Header section -->
    <header>
        @include('layouts.header')
    </header>

    <!-- Main Content Slot -->
    <main>
        {{ $slot }}
    </main>

    <!-- Footer section -->
    <footer>
        @include('layouts.footer')
    </footer>

    <script src="{{ asset('js/app.js') }}"></script>

    



    <style>
@media (max-width: 768px) {

section{

padding:100px 50px 100px 50px !important;
}
}








/* About Us Section Styles */



/* General Hero Section Styling */
/* General Hero Section Styling */
.hero-section {
position: relative;

height: 100vh;
overflow: hidden;
display: flex;
align-items: center;
justify-content: center;
color: #fff;
}




.overlayhero {
position: absolute;
top: 0;
left: 0;
width: 100%;
height: 100%;
background-color: rgba(0, 0, 0, 0.8); /* Darker overlay */
z-index: 1;
}

.hero-content {
position: relative;
z-index: 2;
top:100px ;
max-width: 800px;
text-align: center;
padding-bottom:100px;
}

.hero-text h1 {
font-size: 2.8em;
font-weight: bold;
margin-bottom: 20px;
}

.hero-text p {
font-size: 1.2em;
margin-bottom: 20px;
}

.hero-buttons {
display: flex;
justify-content: center;
gap: 15px;
margin-bottom: 30px;
}

.btn {
padding: 12px 24px;
border-radius: 30px;
text-decoration: none;
font-weight: 600;
transition: transform 0.2s;
}

.primary {
background-color: #6C63FF;
color: #fff;
}

.secondary {
background-color: #E0E0E0;
color: #333;
}

.stats {
display: flex;
justify-content: center;
gap: 40px;
margin-top: 20px;
}

.stat-item h3 {
font-size: 1.5em;
margin: 0;
}

.stat-item p {
font-size: 0.9em;
margin: 0;
}

/* Hero Slideshow Styling */
.hero-slideshow {
position: absolute;
top: 0;
left: 0;
width: 100%;
height: 100%;
z-index: 0;
overflow: hidden;
}

.hero-slideshow img {
width: 100%;
height: 100%;
object-fit: cover;
position: absolute;
animation: slideShow 15s infinite;
}

.hero-slideshow img:nth-child(1) {
animation-delay: 0s;
}

.hero-slideshow img:nth-child(2) {
animation-delay: 5s;
}

.hero-slideshow img:nth-child(3) {
animation-delay: 10s;
}

@keyframes slideShow {
0% { opacity: 0; }
10% { opacity: 1; }
33% { opacity: 1; }
43% { opacity: 0; }
100% { opacity: 0; }
}

/* Mobile Responsive */
@media (max-width: 768px) {
    .hero-content{
        position: relative;
        
       
        

}

.hero-text h1 {
    font-size: 2em;
}

.hero-text p {
    font-size: 1em;
}

.stats {
    flex-direction: column;
    gap: 15px;
}
}


/* Clickable Options Styling */
.clickable-options {
display: flex;
gap: 30px;
margin-top: 50px;
justify-content: center; /* Center align */
}

.clickable-div {
width: 500px; /* Make larger */
height:250px;
padding: 25px;
text-align: center;
background-color: #ffffff10; /* Light transparent background */
color: #fff;
border-radius: 12px;
cursor: pointer;
transition: transform 0.3s, background-color 0.3s;
position: relative;
}

.clickable-div i {
font-size: 2.2em; /* Larger icon */
margin-bottom: 10px;
color: #007BFF; /* Icon color set to blue */
}

.clickable-div:hover {
background-color: #ffffff20;
transform: scale(1.08);
}

.clickable-div .title {
font-size: 1.3em;
font-weight: bold;
margin-bottom: 5px;
}

.clickable-div .description {
font-size: 1em;
color: #e0e0e0;
}

/* Mobile Responsive */
@media (max-width: 768px) {
    .hero-section {
position: relative;
min-height: 200vh;
overflow: hidden;
display: flex;
align-items: center;
justify-content: center;
color: #fff;
}


    .clickable-options {
    flex-direction: column;
    align-items: center; /* Center align on mobile */
    gap: 20px;
}

.clickable-div {
    width: 220px; /* Slightly larger on mobile */
}
}


.about-section {
padding: 100px ;
background-color: #F9FAFB;
display: flex;
align-items: center;
justify-content: center;
position: relative;

}

.about-container {
max-width: 100% !important;
margin: 0 auto;
display: flex;
flex-wrap: wrap;
gap: 30px;
align-items: center;
justify-content: space-between;
}

.about-text {
flex: 1;
max-width: 550px;
z-index: 2;
}

.about-text h2 {
font-size: 2.5em;
font-weight: bold;
color: #333;
margin-bottom: 15px;
}

.about-text p {
font-size: 1.1em;
color: #555;
margin-bottom: 20px;
line-height: 1.6;
}

.about-features {
list-style: none;
padding: 0;
margin: 20px 0 30px;
}

.about-features li {
font-size: 1em;
margin-bottom: 15px;
color: #333;
position: relative;
padding-left: 25px;
}

.about-features li::before {
content: "✔";
position: absolute;
left: 0;
color: #6C63FF;
font-weight: bold;
font-size: 1.2em;
}

.about-image {
position: relative;
flex: 1;
max-width: 500px;
}

.main-img {
width: 100%;
border-radius: 15px;
box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
transition: transform 0.3s ease;
}

.main-img:hover {
transform: scale(1.05);
}

.img-overlay {
position: absolute;
top: 150px;
right: -100px;
width: 100%;
border-radius: 10px;
overflow: hidden;
box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
transition: transform 0.3s ease;
}

.img-overlay .overlay-img {
width: 100%;
height: auto;
border-radius: 10px;
transform: scale(1.1);
}

.img-overlay:hover {
transform: scale(1.08);
}

.btn {
display: inline-block;
padding: 12px 24px;
font-weight: 600;
border-radius: 30px;
text-decoration: none;
color: #fff;
background-color: #6C63FF;
transition: background-color 0.3s ease, transform 0.2s;
}

.btn:hover {
background-color: #5147d9;
transform: scale(1.05);
}

/* Decorative Shapes */
.about-section::before {
content: '';
position: absolute;
top: 10%;
left: 10%;
width: 150px;
height: 150px;
background-color: #6C63FF;
border-radius: 50%;
opacity: 0.1;
}

.about-section::after {
content: '';
position: absolute;
bottom: 10%;
right: 15%;
width: 100px;
height: 100px;
background-color: #FFC107;
border-radius: 50%;
opacity: 0.1;
}

/* Responsive Design */
@media (max-width: 768px) {
.about-container {
    flex-direction: column;
    text-align: center;
}

.about-text, .about-image {
    max-width: 100%;
}

.about-text h2 {
    font-size: 2em;
}

.about-features li {
    font-size: 1em;
}

.img-overlay {
    position: relative;
    top: 15px;
    right: 0;
    margin-top: -30px;
    width: 80%;
}
}



/* Industries Section Styles */
/* Industries Section Styles */
.industries-section {
padding: 100px 20px;
background: linear-gradient(135deg, #EDF2FF, #FFFFFF);
text-align: center;
padding-top: 100px !important;
}

.industries-container {
max-width: 1200px;
margin: 0 auto;
}

.industries-container h2 {
font-size: 2.75em;
color: #1a1f71;
font-weight: 700;
margin-bottom: 15px;
}

.industries-container p {
font-size: 1.2em;
color: #4F46E5;
font-weight: 600;
margin-bottom: 50px;
}

.industries-grid {
display: grid;
grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
gap: 30px;
}

.industry-card {
background: #FFFFFF;
padding: 35px;
border-radius: 15px;
box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.07);
transition: transform 0.3s ease, box-shadow 0.3s ease;
text-align: left;
position: relative;
}

.industry-card:hover {
transform: translateY(-8px);
box-shadow: 0px 15px 30px rgba(0, 0, 0, 0.15);
}

.icon-container {
width: 60px;
height: 60px;
background-color: #E5E9F2;
border-radius: 50%;
display: flex;
align-items: center;
justify-content: center;
margin-bottom: 20px;
transition: background-color 0.3s ease;
}

.icon-container img {
width: 32px;
height: 32px;
transition: transform 0.3s ease;
}

.industry-card:hover .icon-container {
background-color: #6366F1;
}

.industry-card:hover .icon-container img {
transform: scale(1.1);
}

.industry-card h3 {
font-size: 1.3em;
color: #1a1f71;
font-weight: 700;
margin-bottom: 10px;
}

.industry-card p {
font-size: 1em;
color: #555;
line-height: 1.6;
}

.btn {
display: inline-block;
padding: 12px 25px;
font-size: 1em;
font-weight: 600;
color: #FFFFFF;
background-color: #4F46E5;
border-radius: 30px;
text-decoration: none;
transition: background-color 0.3s ease, transform 0.3s ease;
margin-top: 40px;
}

.btn:hover {
background-color: #4338CA;
transform: translateY(-3px);
}

/* Responsive Design */
@media (max-width: 768px) {
.industries-container h2 {
    font-size: 2.2em;
}

.industries-container p {
    font-size: 1.1em;
}

.btn {
    padding: 10px 20px;
    font-size: 0.95em;
}
}


/* Services Section Styles */
.services-section {
padding: 100px 20px;
background-color: #F9FAFB;
text-align: center;
}

.services-container {
max-width: 100%;
margin: 0 auto;
padding: 0 20px;
padding-bottom:100px;
}

.services-container h2 {
font-size: 2.75em;
color: #222;
margin-bottom: 10px;
}

.services-container p {
font-size: 1.2em;
color: #6366F1;
font-weight: 600;
margin-bottom: 50px;
}

.services-grid {
display: grid;
grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
gap: 30px;
}

.service-card {
position: relative;
height: 300px;
background-size: cover;
background-position: center;
border-radius: 15px;
overflow: hidden;
transition: transform 0.3s ease;
box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.1);
height:500px;
}

.service-card:hover {
transform: scale(1.05);
box-shadow: 0px 16px 32px rgba(0, 0, 0, 0.15);
}

.overlay {
position: absolute;
bottom: 0;
left: 0;
right: 0;
height: 100%;
background: rgba(0, 0, 0, 0.5);
color: #FFFFFF;
display: flex;
flex-direction: column;
justify-content: flex-end;
align-items: center;
padding: 20px;
transition: background 0.3s ease;
opacity: 0;
}

.service-card:hover .overlay {
opacity: 1;
background: rgba(0, 0, 0, 0.8);
}


.service-card h2 {
font-size: 2.7em;
position: relative;
top: 250px;
font-weight: 700;
margin-bottom: 10px;
text-align: center;
transition: transform 0.3s ease;
background-color:white;

}

.overlay h3 {
font-size: 1.5em;
font-weight: 700;
margin-bottom: 10px;
text-align: center;
transition: transform 0.3s ease;
}

.overlay .description {
font-size: 1em;
line-height: 1.6;
max-height: 0;
overflow: hidden;
transition: max-height 0.3s ease, opacity 0.3s ease;
opacity: 0;
}

.service-card:hover .overlay .description {
max-height: 100px;
opacity: 1;
}

.service-card:hover .overlay h3 {
transform: translateY(-10px);
}


/* CTA Section Styling */
.cta-section {
display: flex;
justify-content: center;
align-items: center;
padding: 0px !important  ; /* Maintain vertical padding */
background-color: #f0f4f8; /* Light background color */
}

.cta-container {
width: 100%; /* Ensure it takes full width */
/* max-width: 1200px; Limit maximum width */

display: flex;
border-radius: 15px; /* Rounded corners */
overflow: hidden; /* Prevent overflow from children */
box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1); /* Soft shadow for depth */
height:700px;
}

.cta-image {
flex: 1; /* Flex to take equal space */
overflow: hidden; /* Hide overflow */
position: relative; /* Position relative for any child positioning */
}

.cta-image img {
width: 100%; /* Full width */
height: auto; /* Maintain aspect ratio */
object-fit: cover; /* Cover the area while maintaining aspect ratio */
transition: transform 0.5s ease, filter 0.3s ease; /* Smooth transitions */
}

.cta-image img:hover {
transform: scale(1.1); /* Scale up on hover */
filter: brightness(90%); /* Darken on hover */
}

/* Right Column Styling */
.cta-content {
flex: 1; /* Flex to take equal space */
padding: 3rem; /* Padding for content */
background: linear-gradient(135deg, #4a90e2, #375ea8); /* Gradient background */
color: #fff; /* White text */
display: flex;
flex-direction: column; /* Column layout */
justify-content: center; /* Center content vertically */
}

.cta-content h2 {
font-size: 2.5rem; /* Large heading */
margin-bottom: 1rem; /* Margin for spacing */
color: #fff; /* White text */
line-height: 1.2; /* Line height */
}

.cta-content p {
font-size: 1.2rem; /* Medium text size */
margin-bottom: 2rem; /* Margin for spacing */
color: #d1e2f3; /* Lighter text color */
line-height: 1.6; /* Line height */
}

.cta-buttons {
display: flex;
gap: 1rem; /* Space between buttons */
}

.cta-btn {
padding: 0.9rem 2rem; /* Padding for buttons */
border-radius: 8px; /* Rounded corners */
font-weight: 600; /* Bold text */
text-align: center; /* Center text */
text-decoration: none; /* No underline */
transition: background-color 0.3s ease, color 0.3s ease, transform 0.2s ease; /* Transitions for button effects */
box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15); /* Soft shadow for buttons */
}

.cta-btn.primary {
background-color: #ffbe0b; /* Primary button color */
color: #333; /* Dark text color */
}

.cta-btn.primary:hover {
background-color: #d99d00; /* Darker color on hover */
transform: translateY(-2px); /* Lift effect on hover */
}

.cta-btn.secondary {
background-color: transparent; /* Transparent background */
color: #fff; /* White text */
border: 2px solid #fff; /* White border */
}

.cta-btn.secondary:hover {
background-color: rgba(255, 255, 255, 0.2); /* Lighten background on hover */
transform: translateY(-2px); /* Lift effect on hover */
}

/* Responsive Styling */
@media (max-width: 768px) {
    .cta-section{
        
    }
.cta-container {
    flex-direction: column;
    margin-top:100px !important;
    /* Stack elements vertically on small screens */
}

.cta-content {
    padding: 2rem; /* Adjust padding */
}

.cta-content h2 {
    font-size: 2rem; /* Smaller heading on mobile */
}

.cta-content p {
    font-size: 1rem; /* Smaller text on mobile */
}
}


/* Features Section Styling */
/* Features Section Styling */
.features-section {
padding: 5rem 1rem;
background-color: #f9fafb;

text-align: center;
}

.features-container {
max-width:100%;
margin: 0 auto;
}

.features-container h2 {
font-size: 2.5rem;
color: #333;
margin-bottom: 1rem;
}

.features-intro {
font-size: 1.2rem;
color: #666;
margin-bottom: 3rem;
}

/* Grid Layout */
.features-grid {
display: grid;
grid-template-columns: repeat(3, 1fr);
gap: 2rem;
}

/* Feature Item Styling with Colored Backgrounds */
/* Features Section Styling */


.features-section {
padding: 5rem 1rem;
background: linear-gradient(135deg, #EDF2FF, #FFFFFF) !important;
text-align: center;
}

.features-container {
max-width: 1200px;
margin: 0 auto;
}

.features-container h2 {
font-size: 2.5rem;
color: #333;
margin-bottom: 1rem;
}

.features-intro {
font-size: 1.2rem;
color: #666;
margin-bottom: 3rem;
}

/* Grid Layout */
.features-grid {
display: grid;
grid-template-columns: repeat(3, 1fr);
gap: 2rem;
}

/* Feature Item Styling with Colored Backgrounds */
.feature-item {
background-color: #e8f4fd; /* Light blue background for feature cards */
padding: 2rem;
border-radius: 12px;
box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
text-align: center;
transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.feature-item:hover {
transform: translateY(-5px);
box-shadow: 0 8px 15px rgba(0, 0, 0, 0.15);
}

.feature-item:nth-child(2n) {
background-color: #fdece8; /* Light coral background for even items */
}

.feature-item:nth-child(3n) {
background-color: #e8fdee; /* Light green background for every third item */
}

/* Font Awesome Icon Styling */
.feature-item i {
font-size: 3rem; /* Large icon size */
color: #4a90e2; /* Icon color */
margin-bottom: 1rem;
}

.feature-item h3 {
font-size: 1.5rem;
color: #333;
margin-bottom: 0.5rem;
}

.feature-item p {
font-size: 1rem;
color: #666;
line-height: 1.6;
}

/* Responsive Styling */
@media (max-width: 992px) {
.features-grid {
    grid-template-columns: 1fr 1fr; /* Two columns for tablet */
}
}

@media (max-width: 768px) {
.features-grid {
    grid-template-columns: 1fr; /* Single column for mobile */
}

.features-container h2 {
    font-size: 2rem;
}

.features-intro {
    font-size: 1rem;
}
}




.testimonial-section {
padding: 60px 0;
display: flex;
justify-content: center;
align-items: center;
background-color: #f8f9fa;
color: #333;
}

.testimonial-text {
display: flex;
flex-direction: column;
justify-content: center;
}

.testimonial-text h2 {
font-size: 2rem;
font-weight: 700;
margin-bottom: 15px;
}

.testimonial-text p {
font-size: 1rem;
color: #666;
margin-bottom: 20px;
line-height: 1.6;
}

.view-more-btn {
background: linear-gradient(90deg, #ff416c, #ff4b2b);
color: #fff;
padding: 10px 25px;
border: none;
border-radius: 5px;
cursor: pointer;
font-size: 1rem;
font-weight: 600;
text-transform: uppercase;
}

.testimonials-carousel {
overflow: hidden;
position: relative;
height: 160px; /* Adjust based on the height of one testimonial */
}

.testimonial-card {
display: flex;
align-items: center;
background-color: #fff;
padding: 20px;
border-radius: 10px;
box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
transition: transform 0.5s ease;
position: absolute;
width: 100%;
top: 100%; /* Start off-screen below */
}

.testimonial-card.active {
top: 0;
position: relative;
}

.testimonial-img {
width: 50px;
height: 50px;
border-radius: 50%;
margin-right: 15px;
}

.testimonial-content {
position: relative;
}

.testimonial-content h5 {
font-size: 1rem;
font-weight: 600;
margin: 0;
color: #333;
}

.testimonial-content p {
font-size: 0.9rem;
color: #666;
margin: 5px 0 0;
line-height: 1.5;
}

@media (max-width: 768px) {
.testimonial-section {
    text-align: center;
}

.view-more-btn {
    width: 100%;
    margin-top: 15px;
}

.testimonial-card {
    flex-direction: column;
    align-items: flex-start;
    text-align: left;
}

.testimonial-img {
    margin-right: 0;
    margin-bottom: 10px;
}
}






/* General Hero Section Styling */
/* General Hero Section Styling */
.hero-section {
    
    position: relative;
    height: 100vh;
    overflow: hidden;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #fff;
}

.overlayhero {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.8); /* Darker overlay */
    z-index: 1;
}

.hero-content {
    position: relative;
    z-index: 2;
    max-width: 800px;
    text-align: center;
}

.hero-text h1 {
    font-size: 2.8em;
    font-weight: bold;
    margin-bottom: 20px;
}

.hero-text p {
    font-size: 1.2em;
    margin-bottom: 20px;
}

.hero-buttons {
    display: flex;
    justify-content: center;
    gap: 15px;
    margin-bottom: 30px;
}

.btn {
    padding: 12px 24px;
    border-radius: 30px;
    text-decoration: none;
    font-weight: 600;
    transition: transform 0.2s;
}

.primary {
    background-color: #6C63FF;
    color: #fff;
}

.secondary {
    background-color: #E0E0E0;
    color: #333;
}

.stats {
    display: flex;
    justify-content: center;
    gap: 40px;
    margin-top: 20px;
}

.stat-item h3 {
    font-size: 1.5em;
    margin: 0;
}

.stat-item p {
    font-size: 0.9em;
    margin: 0;
}

/* Hero Slideshow Styling */
.hero-slideshow {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 0;
    overflow: hidden;
}

.hero-slideshow img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    position: absolute;
    animation: slideShow 15s infinite;
}

.hero-slideshow img:nth-child(1) {
    animation-delay: 0s;
}

.hero-slideshow img:nth-child(2) {
    animation-delay: 5s;
}

.hero-slideshow img:nth-child(3) {
    animation-delay: 10s;
}

@keyframes slideShow {
    0% { opacity: 0; }
    10% { opacity: 1; }
    33% { opacity: 1; }
    43% { opacity: 0; }
    100% { opacity: 0; }
}

/* Mobile Responsive */
@media (max-width: 768px) {
    .hero-section{
        
        background-color: red;
    }

    .hero-content {
        
        padding-top:200px;
        padding-bottom:200px;
       

    }

    .hero-text h1 {
        font-size: 2em;
    }

    .hero-text p {
        font-size: 1em;
    }

    .stats {
        flex-direction: column;
        gap: 15px;
    }
}


/* Clickable Options Styling */
.clickable-options {
    display: flex;
    gap: 30px;
    margin-top: 50px;
    justify-content: center; /* Center align */
}

.clickable-div {
    width: 500px; /* Make larger */
    height:250px;
    padding: 25px;
    text-align: center;
    background-color: #ffffff10; /* Light transparent background */
    color: #fff;
    border-radius: 12px;
    cursor: pointer;
    transition: transform 0.3s, background-color 0.3s;
    position: relative;
}

.clickable-div i {
    font-size: 2.2em; /* Larger icon */
    margin-bottom: 10px;
    color: #007BFF; /* Icon color set to blue */
}

.clickable-div:hover {
    background-color: #ffffff20;
    transform: scale(1.08);
}

.clickable-div .title {
    font-size: 1.3em;
    font-weight: bold;
    margin-bottom: 5px;
}

.clickable-div .description {
    font-size: 1em;
    color: #e0e0e0;
}

/* Mobile Responsive */
@media (max-width: 768px) {
    .clickable-options {
        flex-direction: column;
        align-items: center; /* Center align on mobile */
        gap: 20px;
        
    }
    
    .clickable-div {
        width: 220px;
        /* Slightly larger on mobile */
    }
}


.about-section {
    padding: 100px ;
    background-color: #F9FAFB;
    display: flex;
    align-items: center;
    justify-content: center;
    position: relative;
    
}

.about-container {
    max-width: 100% !important;
    margin: 0 auto;
    display: flex;
    flex-wrap: wrap;
    gap: 30px;
    align-items: center;
    justify-content: space-between;
}

.about-text {
    flex: 1;
    max-width: 550px;
    z-index: 2;
}

.about-text h2 {
    font-size: 2.5em;
    font-weight: bold;
    color: #333;
    margin-bottom: 15px;
}

.about-text p {
    font-size: 1.1em;
    color: #555;
    margin-bottom: 20px;
    line-height: 1.6;
}

.about-features {
    list-style: none;
    padding: 0;
    margin: 20px 0 30px;
}

.about-features li {
    font-size: 1em;
    margin-bottom: 15px;
    color: #333;
    position: relative;
    padding-left: 25px;
}

.about-features li::before {
    content: "✔";
    position: absolute;
    left: 0;
    color: #6C63FF;
    font-weight: bold;
    font-size: 1.2em;
}

.about-image {
    position: relative;
    flex: 1;
    max-width: 500px;
}

.main-img {
    width: 100%;
    border-radius: 15px;
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease;
}

.main-img:hover {
    transform: scale(1.05);
}

.img-overlay {
    position: absolute;
    top: 150px;
    right: -100px;
    width: 100%;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease;
}

.img-overlay .overlay-img {
    width: 100%;
    height: auto;
    border-radius: 10px;
    transform: scale(1.1);
}

.img-overlay:hover {
    transform: scale(1.08);
}

.btn {
    display: inline-block;
    padding: 12px 24px;
    font-weight: 600;
    border-radius: 30px;
    text-decoration: none;
    color: #fff;
    background-color: #6C63FF;
    transition: background-color 0.3s ease, transform 0.2s;
}

.btn:hover {
    background-color: #5147d9;
    transform: scale(1.05);
}

/* Decorative Shapes */
.about-section::before {
    content: '';
    position: absolute;
    top: 10%;
    left: 10%;
    width: 150px;
    height: 150px;
    background-color: #6C63FF;
    border-radius: 50%;
    opacity: 0.1;
}

.about-section::after {
    content: '';
    position: absolute;
    bottom: 10%;
    right: 15%;
    width: 100px;
    height: 100px;
    background-color: #FFC107;
    border-radius: 50%;
    opacity: 0.1;
}

/* Responsive Design */
@media (max-width: 768px) {

    .about-container {
        flex-direction: column;
        text-align: left;
        padding:50px;
    }
    
    .about-text, .about-image {
        max-width: 100%;
    }

    .about-text h2 {
        font-size: 2em;
    }

    .about-features li {
        font-size: 1em;
    }
    .about-features {
        text-align:left;
    }


    .img-overlay {
        position: relative;
        top: 15px;
        right: 0;
        margin-top: -30px;
        width: 50%;
        border-radius:50%;
    }
}



/* Industries Section Styles */
/* Industries Section Styles */
.industries-section {
    padding: 100px 20px;
    background: linear-gradient(135deg, #EDF2FF, #FFFFFF);
    text-align: center;
    padding-top: 100px !important;
}

.industries-container {
    max-width: 1200px;
    margin: 0 auto;
}

.industries-container h2 {
    font-size: 2.75em;
    color: #1a1f71;
    font-weight: 700;
    margin-bottom: 15px;
}

.industries-container p {
    font-size: 1.2em;
    color: #4F46E5;
    font-weight: 600;
    margin-bottom: 50px;
}

.industries-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 30px;
}

.industry-card {
    background: #FFFFFF;
    padding: 35px;
    border-radius: 15px;
    box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.07);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    text-align: left;
    position: relative;
}

.industry-card:hover {
    transform: translateY(-8px);
    box-shadow: 0px 15px 30px rgba(0, 0, 0, 0.15);
}

.icon-container {
    width: 60px;
    height: 60px;
    background-color: #E5E9F2;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 20px;
    transition: background-color 0.3s ease;
}

.icon-container img {
    width: 32px;
    height: 32px;
    transition: transform 0.3s ease;
}

.industry-card:hover .icon-container {
    background-color: #6366F1;
}

.industry-card:hover .icon-container img {
    transform: scale(1.1);
}

.industry-card h3 {
    font-size: 1.3em;
    color: #1a1f71;
    font-weight: 700;
    margin-bottom: 10px;
}

.industry-card p {
    font-size: 1em;
    color: #555;
    line-height: 1.6;
}

.btn {
    display: inline-block;
    padding: 12px 25px;
    font-size: 1em;
    font-weight: 600;
    color: #FFFFFF;
    background-color: #4F46E5;
    border-radius: 30px;
    text-decoration: none;
    transition: background-color 0.3s ease, transform 0.3s ease;
    margin-top: 40px;
}

.btn:hover {
    background-color: #4338CA;
    transform: translateY(-3px);
}

/* Responsive Design */
@media (max-width: 768px) {

    .industries-section {
    padding: 50px !important;
   
}

    .industries-container h2 {
        font-size: 2.2em;
    }

    .industries-container p {
        font-size: 1.1em;
    }

    .btn {
        padding: 10px 20px;
        font-size: 0.95em;
    }
}


/* Services Section Styles */
.services-section {
    padding: 100px 20px;
    background-color: #F9FAFB;
    text-align: center;
}

.services-container {
    max-width: 1500px;
    margin: 0 auto;
    padding: 0 20px;
    padding-bottom:100px;
}

.services-container h2 {
    font-size: 2.75em;
    color: #222;
    margin-bottom: 10px;
}

.services-container p {
    font-size: 1.2em;
    color: #6366F1;
    font-weight: 600;
    margin-bottom: 50px;
}

.services-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 30px;
}

.service-card {
    position: relative;
    height: 300px;
    background-size: cover;
    background-position: center;
    border-radius: 15px;
    overflow: hidden;
    transition: transform 0.3s ease;
    box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.1);
    height:500px;
}

.service-card:hover {
    transform: scale(1.05);
    box-shadow: 0px 16px 32px rgba(0, 0, 0, 0.15);
}

.overlay {
    position: absolute;
    bottom: 59px
    left: 0;
    right: 0;
    height: 100%;
    background: rgba(0, 0, 0, 0.5);
    color: #FFFFFF;
    display: flex;
    flex-direction: column;
    justify-content: flex-end;
    align-items: center;
    padding: 20px;
    transition: background 0.3s ease;
    opacity: 0;
}

.service-card:hover .overlay {
    opacity: 1;
    background: rgba(0, 0, 0, 0.8);
}


.service-card h2 {
    font-size: 2.7em;
    position: relative;
    top: 250px;
    font-weight: 700;
    margin-bottom: 10px;
    text-align: center;
    transition: transform 0.3s ease;
    background-color:white;

}

.overlay h3 {
    font-size: 1.5em;
    font-weight: 700;
    margin-bottom: 10px;
    text-align: center;
    transition: transform 0.3s ease;
}

.overlay .description {
    font-size: 1em;
    line-height: 1.6;
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.3s ease, opacity 0.3s ease;
    opacity: 0;
}

.service-card:hover .overlay .description {
    max-height: 100px;
    opacity: 1;
}

.service-card:hover .overlay h3 {
    transform: translateY(-10px);
}


@media (max-width: 768px) {
.services-section {
    padding: 100px 50px 100px 50px !important;
}

}
.cta-containers
     {
        flex-direction: column; /* Stack elements vertically on small screens */
    }



/* CTA Section Styling */
.cta-section {
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 0px !important  ; /* Maintain vertical padding */
    background-color: #f0f4f8; /* Light background color */
}

.cta-container {
    width: 100%; /* Ensure it takes full width */
    /* max-width: 1200px; Limit maximum width */
    display: flex;
    border-radius: 15px; /* Rounded corners */
    overflow: hidden; /* Prevent overflow from children */
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1); /* Soft shadow for depth */
    height:700px;
}

.cta-image {
    flex: 1; /* Flex to take equal space */
    overflow: hidden; /* Hide overflow */
    position: relative; /* Position relative for any child positioning */
}

.cta-image img {
    width: 100%; /* Full width */
    height: auto; /* Maintain aspect ratio */
    object-fit: cover; /* Cover the area while maintaining aspect ratio */
    transition: transform 0.5s ease, filter 0.3s ease; /* Smooth transitions */
}

.cta-image img:hover {
    transform: scale(1.1); /* Scale up on hover */
    filter: brightness(90%); /* Darken on hover */
}

/* Right Column Styling */
.cta-content {
    flex: 1; /* Flex to take equal space */
    padding: 3rem; /* Padding for content */
    background: linear-gradient(135deg, #4a90e2, #375ea8); /* Gradient background */
    color: #fff; /* White text */
    display: flex;
    flex-direction: column; /* Column layout */
    justify-content: center; /* Center content vertically */
}

.cta-content h2 {
    font-size: 2.5rem; /* Large heading */
    margin-bottom: 1rem; /* Margin for spacing */
    color: #fff; /* White text */
    line-height: 1.2; /* Line height */
}

.cta-content p {
    font-size: 1.2rem; /* Medium text size */
    margin-bottom: 2rem; /* Margin for spacing */
    color: #d1e2f3; /* Lighter text color */
    line-height: 1.6; /* Line height */
}

.cta-buttons {
    display: flex;
    gap: 1rem; /* Space between buttons */
}

.cta-btn {
    padding: 0.9rem 2rem; /* Padding for buttons */
    border-radius: 8px; /* Rounded corners */
    font-weight: 600; /* Bold text */
    text-align: center; /* Center text */
    text-decoration: none; /* No underline */
    transition: background-color 0.3s ease, color 0.3s ease, transform 0.2s ease; /* Transitions for button effects */
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15); /* Soft shadow for buttons */
}

.cta-btn.primary {
    background-color: #ffbe0b; /* Primary button color */
    color: #333; /* Dark text color */
}

.cta-btn.primary:hover {
    background-color: #d99d00; /* Darker color on hover */
    transform: translateY(-2px); /* Lift effect on hover */
}

.cta-btn.secondary {
    background-color: transparent; /* Transparent background */
    color: #fff; /* White text */
    border: 2px solid #fff; /* White border */
}

.cta-btn.secondary:hover {
    background-color: rgba(255, 255, 255, 0.2); /* Lighten background on hover */
    transform: translateY(-2px); /* Lift effect on hover */
}

/* Responsive Styling */
@media (max-width: 768px) {
    
  
    .cta-container {
        flex-direction: column; /* Stack elements vertically on small screens */
    }

    .cta-content {
        padding: 2rem; /* Adjust padding */
    }

    .cta-content h2 {
        font-size: 2rem; /* Smaller heading on mobile */
    }

    .cta-content p {
        font-size: 1rem; /* Smaller text on mobile */
    }
}


/* Features Section Styling */
/* Features Section Styling */
.features-section {
    padding: 5rem 1rem;
    background-color:rgb(22,36,71,0.1) !important;   
    
    text-align: center;
}

.features-container {
    max-width:100%;
    margin: 0 auto;
}

.features-container h2 {
    font-size: 2.5rem;
    color: #333;
    margin-bottom: 1rem;
}

.features-intro {
    font-size: 1.2rem;
    color: #666;
    margin-bottom: 3rem;
}

/* Grid Layout */
.features-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 2rem;
}

/* Feature Item Styling with Colored Backgrounds */
/* Features Section Styling */


.features-section {
    padding: 5rem 1rem;
    background-color: #f9fafb;
    text-align: center;
}

.features-container {
    max-width: 1200px;
    margin: 0 auto;
}

.features-container h2 {
    font-size: 2.5rem;
    color: #333;
    margin-bottom: 1rem;
}

.features-intro {
    font-size: 1.2rem;
    color: #666;
    margin-bottom: 3rem;
}

/* Grid Layout */
.features-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 2rem;
}

/* Feature Item Styling with Colored Backgrounds */
.feature-item {
    background-color: #e8f4fd; /* Light blue background for feature cards */
    padding: 2rem;
    border-radius: 12px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    text-align: center;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.feature-item:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 15px rgba(0, 0, 0, 0.15);
}

.feature-item:nth-child(2n) {
    background-color: #fdece8; /* Light coral background for even items */
}

.feature-item:nth-child(3n) {
    background-color: #e8fdee; /* Light green background for every third item */
}

/* Font Awesome Icon Styling */
.feature-item i {
    font-size: 3rem; /* Large icon size */
    color: #4a90e2; /* Icon color */
    margin-bottom: 1rem;
}

.feature-item h3 {
    font-size: 1.5rem;
    color: #333;
    margin-bottom: 0.5rem;
}

.feature-item p {
    font-size: 1rem;
    color: #666;
    line-height: 1.6;
}

/* Responsive Styling */
@media (max-width: 992px) {



    .features-grid {
        grid-template-columns: 1fr 1fr; 
        /* Two columns for tablet */
    }
}

@media (max-width: 768px) {

    .features-section{
padding:100px 50px 100px 50px !important;


    }
    .features-grid {
        grid-template-columns: 1fr; /* Single column for mobile */
    }

    .features-container h2 {
        font-size: 2rem;
    }

    .features-intro {
        font-size: 1rem;
    }

    .form-row{

        display:block!important;
    }
}




.testimonial-section {
    padding: 60px 0;
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: #f8f9fa;
    color: #333;
}

.testimonial-text {
    display: flex;
    flex-direction: column;
    justify-content: center;
}

.testimonial-text h2 {
    font-size: 2rem;
    font-weight: 700;
    margin-bottom: 15px;
}

.testimonial-text p {
    font-size: 1rem;
    color: #666;
    margin-bottom: 20px;
    line-height: 1.6;
}

.view-more-btn {
    background: linear-gradient(90deg, #ff416c, #ff4b2b);
    color: #fff;
    padding: 10px 25px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 1rem;
    font-weight: 600;
    text-transform: uppercase;
}

.testimonials-carousel {
    overflow: hidden;
    position: relative;
    height: 160px; /* Adjust based on the height of one testimonial */
}

.testimonial-card {
    display: flex;
    align-items: center;
    background-color: #fff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    transition: transform 0.5s ease;
    position: absolute;
    width: 100%;
    top: 100%; /* Start off-screen below */
}

.testimonial-card.active {
    top: 0;
    position: relative;
}

.testimonial-img {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    margin-right: 15px;
}

.testimonial-content {
    position: relative;
}

.testimonial-content h5 {
    font-size: 1rem;
    font-weight: 600;
    margin: 0;
    color: #333;
}

.testimonial-content p {
    font-size: 0.9rem;
    color: #666;
    margin: 5px 0 0;
    line-height: 1.5;
}

@media (max-width: 768px) {
    .testimonial-section {
        text-align: center;
    }

    .view-more-btn {
        width: 100%;
        margin-top: 15px;
    }

    .testimonial-card {
        flex-direction: column;
        align-items: flex-start;
        text-align: left;
    }

    .testimonial-img {
        margin-right: 0;
        margin-bottom: 10px;
    }


    .blog-section {
   
     
    padding:100px 50px 100px 50px !important;
}
}

.blog-section {
    
    background-color:rgb(22,36,71,0.1);   
    padding: 60px 0;
}

.section-title {
    font-size: 2.5rem;
    font-weight: bold;
    color: #333;
    margin-bottom: 40px;
}

.blog-grid {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
}

.blog-card {
    border-radius: 10px;
    overflow: hidden;
    background-color: #fff;
    transition: all 0.3s ease-in-out;
    height: 100%;
}

.blog-card:hover {
    transform: translateY(-10px);
}

.blog-image-wrapper {
    height: 250px;
    overflow: hidden;
    border-bottom: 2px solid #ddd;
}

.blog-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.4s ease;
}

.blog-card:hover .blog-image {
    transform: scale(1.1);
}

.blog-date {
    font-size: 0.85rem;
    color: #777;
}

.card-title {
    font-size: 1.25rem;
    color: #333;
    font-weight: 600;
}

.card-text {
    color: #555;
    font-size: 0.95rem;
    margin-top: 10px;
}

.btn-outline-primary {
    border-color: #0056b3;
    color: #0056b3;
    transition: background-color 0.3s ease, color 0.3s ease;
}

.btn-outline-primary:hover {
    background-color: #0056b3;
    color: #fff;
}

.shadow-sm {
    box-shadow: 0px 2px 8px rgba(0, 0, 0, 0.1);
}























    </style>
</body>


</html>