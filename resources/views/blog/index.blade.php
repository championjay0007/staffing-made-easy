<x-layouts.main>
    <section class="blog-section all py-5" data-aos="fade-up">
        <div class="container">
            <h2 class="section-title text-center mb-5">Featured Articles</h2>

            <!-- Blog Grid -->
            <div class="row blog-grid">
                @foreach($posts as $post)
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="blog-card h-100 shadow-sm">
                            <div class="blog-image-wrapper">
                                <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid blog-image" alt="{{ $post->title }}">
                            </div>
                            <div class="card-body p-4">
                                <small class="blog-date text-muted">{{ $post->created_at->format('M d, Y') }}</small>
                                <h5 class="card-title mt-2">{{ $post->title }}</h5>
                                <p class="card-text">{{ Str::limit($post->description, 150) }}</p>
                                <a href="{{ route('blog.show', $post->id) }}" class="btn btn-outline-primary mt-3 text-white">Read More</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Pagination Links -->
            <div class="pagination-wrapper mt-5 d-flex justify-content-center">
                {{ $posts->links() }}
            </div>
        </div>
    </section>

    <style>




.blog-card {
    border-radius: 8px;
    overflow: hidden;
    transition: transform 0.2s ease;
}

.blog-card:hover {
    transform: translateY(-10px);
}

.blog-image-wrapper {
    max-height: 200px;
    overflow: hidden;
}

.blog-image {
    width: 100%;
    object-fit: cover;
}

.pagination-wrapper .pagination .page-link {
    color: #007bff;
}

.pagination-wrapper .pagination .page-link:hover {
    background-color: #007bff;
    color: white;
}
    </style>

</x-layouts.main>