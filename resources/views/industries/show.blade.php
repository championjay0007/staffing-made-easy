<x-layouts.main>

<section class="hero-section" style="background-image: url('{{ asset('storage/' . $industry->image_2) }}'); ">
    <div class="overlayshow"></div>
    <div class="container d-flex flex-column align-items-center justify-content-center h-100">
        <h1 class="display-4 text-white fw-bold">{{ $industry->name }}</h1>
        <p class="lead text-white text-center">{!! $industry->description !!}</p>
    </div>
</section>



<!-- Section 1: Industry Overview -->
<section class="industry-overview py-5">
    <div class="container">
        <div class="row align-items-center">
            <!-- Image on Left -->
            <div class="col-lg-6 mb-4 mb-lg-0 order-lg-1 order-2">
                <div class="position-relative">
                    <img src="{{ asset('storage/' . $industry->image) }}" alt="{{ $industry->name }} Overview" class="img-fluid rounded shadow-lg">
                    <div class="overlay position-absolute w-100 h-100" style="background-color: rgba(0, 0, 0, 0.4); border-radius: .5rem;"></div>
                </div>
            </div>
            <!-- Content on Right -->
            <div class="col-lg-6 order-lg-2 order-1">
                <h2 class="fw-bold mb-4 text-primary">Why Choose Us</h2>
                <p class="mb-4 text-muted">{!! $industry->content !!}</p>
                <a href="{{ route('industries.index') }}" class="btn btn-primary px-4 py-2">Learn More</a>
            </div>
        </div>
    </div>
</section>





<section class="services-section py-5 bg-light">
    <div class="container">
        <div class="row align-items-center">
            <!-- Services List -->
            <div class="col-lg-6">
                <h2 class="mb-4">Our Services</h2>
                
                                     
                        <p class="mb-0">{!!$industry->services!!}</p>
                
            </div>

            <!-- Image -->
            <div class="col-lg-6">
                <img src="{{ asset('storage/' . $industry->image_2) }}" alt="{{ $industry->name }}" class="img-fluid rounded shadow">
            </div>
        </div>
    </div>


    </section>





<!-- Section 2: Benefits & Features -->
<section class="benefits-section py-5 bg-dark text-white">
    <div class="container">
        <div class="row align-items-center">
            <!-- Content on Left -->
            <div class="col-lg-6 mb-4 mb-lg-0">
                <h2 class="fw-bold mb-4 text-success">Key Benefits</h2>
                <ul class="list-unstyled">
                    @foreach (explode('.', $industry->content) as $benefit)
                    <li class="d-flex align-items-start mb-3">
                        <span class="me-3 text-warning">
                            <i class="bi bi-star-fill"></i>
                        </span>
                        <p class="mb-0">{!!$benefit!!}</p>
                    </li>
                    @endforeach
                </ul>
            </div>
            <!-- Image on Right -->
            <div class="col-lg-6">
                <div class="text-center text-lg-end">
                    <img src="{{ asset('storage/' . $industry->image_3) }}" alt="{{ $industry->name }} Benefits" class="img-fluid rounded shadow-lg">
                </div>
            </div>
        </div>
    </div>
</section>







    <style>

.hero-section {
    position: relative;
    overflow: hidden;
    background-size: cover;
    background-position: center;
    height: 80vh;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #fff;

}

.hero-section .container {
    z-index: 2;
}

 .overlayshow {
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

.hero-section h1, .hero-section p {
    z-index: 2;
    text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.7);
}


.services-section{
background-color: rgba(13, 109, 251, 0.1) !important;
padding: 100px !important;
}
.services-section h2 {
    font-weight: bold;
    color: #333;
    text-align:left;
}

.services-section ul {
    padding-left: 0;
    text-align:left;
}

.services-section li {
    font-size: 1.1rem;
    line-height: 1.6;
}

.services-section .bi-check-circle-fill {
    font-size: 1.5rem;
    color: #0d6efd;
}




/* Section 1: Industry Overview */
.industry-overview {
    background-color: #f9f9f9;
    padding: 100px !important;
}

.industry-overview .container {
    max-width: 1140px;
}

.industry-overview img {
    border-radius: 0.5rem;
    transition: transform 0.3s ease-in-out;
}

.industry-overview img:hover {
    transform: scale(1.05);
}

.industry-overview .overlay {
    border-radius: 0.5rem;
}

.industry-overview h2 {
    font-size: 2.25rem;
    font-weight: bold;
}

.industry-overview p {
    font-size: 1.125rem;
    line-height: 1.6;
}

.industry-overview .btn {
    font-size: 1rem;
    transition: background-color 0.3s ease;
}

.industry-overview .btn:hover {
    background-color: #0056b3;
}

/* Section 2: Benefits & Features */
.benefits-section {
    background-color: #343a40;
    padding: 100px !important;
}

.benefits-section .container {
    max-width: 1140px;
}

.benefits-section h2 {
    font-size: 2.25rem;
    font-weight: bold;
}

.benefits-section ul li {
    font-size: 1.125rem;
    line-height: 1.6;
}

.benefits-section .bi-star-fill {
    font-size: 1.25rem;
    color: #ffc107; /* Star Icon Color */
}

.benefits-section .btn {
    font-size: 1rem;
    transition: background-color 0.3s ease;
}

.benefits-section .btn:hover {
    background-color: #28a745;
}

/* Responsive */
@media (max-width: 767px) {
    .industry-overview h2 {
        font-size: 1.875rem;
    }

    .industry-overview p {
        font-size: 1rem;
    }

    .benefits-section h2 {
        font-size: 1.875rem;
    }

    .benefits-section ul li {
        font-size: 1rem;
    }
}


    </style>

</x-layouts.main>