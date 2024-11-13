<x-layouts.main>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-200 leading-tight drop-shadow-lg">
            {{ __('Blog') }}
        </h2>
    </x-slot>
    <!-- Blog Hero Section -->
    <section class="blog-hero position-relative text-white text-center py-5" style="background-image: url('{{ asset('storage/' . $post->image) }}'); background-size: cover; background-position: center; height: 60vh;">
        <div class="overlay position-absolute top-0 start-0 w-100 h-100" style="background: rgba(0, 0, 0, 0.5);"></div>
        <div class="container position-relative z-index-1">
            <h1 class="display-4 fw-bold" data-aos="fade-up">{{ $post->title }}</h1>
            <p class="lead mb-0" data-aos="fade-up" data-aos-delay="100">By {{ $post->author }} | {{ $post->created_at->format('M d, Y') }}</p>
        </div>
    </section>

    <!-- Blog Content Section -->
    <section class="blog-content py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="content" data-aos="fade-up">
                        <div class="text-center mb-4">
                            <h2 class="mb-3" style="font-family: 'Playfair Display', serif; font-weight: 700;">{{ $post->title }}</h2>
                            <div class="line mb-4" style="width: 60px; height: 4px; background: linear-gradient(90deg, #3498db, #e91e63); margin: 0 auto;"></div>
                        </div>
                        
                        <div class="blog-body">
                            {!! $post->content !!}
                        </div>
                        
                        <!-- Back to Blog Button -->
                        <div class="text-center mt-5">
                            <a href="{{ route('blog.index') }}" class="btn-back">Back to Blog</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-4">
        <p>&copy; {{ date('Y') }} StaffingMadeEasy. All Rights Reserved.</p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- AOS Animation JS -->
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000,
            once: true
        });
    </script>
</body>

<!-- Custom Styles -->
<style>


    /* Blog Hero Section */
    .blog-hero {
        position: relative;
        background-size: cover;
        background-position: center;
        height: 60vh;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #fff;
    }

    .blog-hero .overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(0, 0, 0, 0.5);
    }

    /* Blog Title & Meta */
    .blog-hero h1 {
        font-size: 3.5rem;
        font-weight: bold;
        margin-bottom: 0.5rem;
    }

    .blog-hero p {
        font-size: 1.2rem;
        color: #e0e0e0;
    }

    /* Blog Content Section */
    .blog-content {
        padding: 60px 0;
    }

    .content h2 {
        font-size: 2rem;
        font-weight: bold;
        color: #333;
    }

    .content .line {
        width: 60px;
        height: 4px;
        background: linear-gradient(90deg, #3498db, #e91e63);
        margin: 0 auto;
        border-radius: 5px;
    }

    .blog-body {
        font-size: 1.1rem;
        line-height: 1.8;
        color: #555;
    }

    /* Buttons */
    .btn-back {
        display: inline-block;
        padding: 12px 30px;
        background: linear-gradient(90deg, #3498db, #e91e63);
        color: #fff;
        border-radius: 50px;
        text-decoration: none;
        font-size: 1rem;
        transition: background 0.3s ease, box-shadow 0.3s ease;
    }

    .btn-back:hover {
        background: linear-gradient(90deg, #2980b9, #c2185b);
        box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
    }

    /* Animations */
    [data-aos] {
        opacity: 0;
        transition-property: opacity, transform;
        transition-duration: 1s;
    }

    [data-aos].aos-animate {
        opacity: 1;
        transform: none;
    }
</style>


</x-layouts.main>