
<x-layouts.main>


<section class="jobb">
<div class="container">
    <h1>Job Listings</h1>

    <!-- Search Form -->
    <!-- Search Form -->
    <!-- <form action="{{ route('job.listings') }}" method="GET" class="mb-5">
        <div class="input-group search-bar shadow-sm">
            <input type="text" name="search" class="form-control" placeholder="Search by job title, company, or location" value="{{ request('search') }}">
            <button class="btn btn-primary" type="submit">Search</button>
        </div>
    </form> -->

    <div class="row">
        @if($employers->isEmpty())
            <p class="text-center">No job listings available at the moment.</p>
        @else
            @foreach($employers as $employer)
                <div class="col-md-4 mb-4">
                    <div class="card job-card h-100 shadow">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">{{ $employer->job_title }}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">{{ $employer->company_name }}</h6>
                            <p class="card-text">{{ Str::limit($employer->additional_info, 100, '...') }}</p>
                            <p><strong>Location:</strong> {{ $employer->job_location ?? 'Not specified' }}</p>
                            <a href="{{ route('job.details', $employer->id) }}" class="btn btn-primary mt-auto">View Details</a>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
</div>

</section>


<style>


.jobb{
padding:150px;
}

    /* Page Title */
    h1 {
        font-weight: 700;
        color: #4a90e2;
        margin-bottom: 20px;
    }

    /* Search Bar */
    .search-bar {
        max-width: 1600px;
        margin: 0 auto;
        border-radius: 50px;
        overflow: hidden;
        
    }

    .search-bar .form-control {
        border: none;
        padding: 15px;
        max-height:10px;

    }

    .search-bar .btn-primary {
        background-color: #4a90e2 ;
        border: none;
        font-weight: bold;
        transition: background-color 0.3s;
        padding: 0 25px;
    }

    .search-bar .btn-primary:hover {
        background-color: #357ABD;
    }

    /* Card Styles */
    .job-card {
        border: none;
        border-radius: 10px;
        background-color: #fff;
        transition: transform 0.3s, box-shadow 0.3s;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .job-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
    }

    .card-title {
        color: #0d1b3d;
        font-weight: 600;
    }

    .card-subtitle {
        color: #7a869a;
        font-size: 0.9em;
    }

    .btn-primary {
        background-color: #4a90e2;
        border: none;
        font-weight: 600;
        width: 100%;
        padding: 10px 0;
        border-radius: 8px;
        transition: background-color 0.3s;
    }

    .btn-primary:hover {
        background-color: #357ABD;
    }

    /* Responsive Spacing */
    @media (max-width: 768px) {
        .job-card {
            margin: 0 auto;
        }
    }
</style>
</x-layouts.main>