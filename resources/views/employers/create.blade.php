<x-app-layout>

<div class="container">
    <h1>Create Employer</h1>
    
    <form action="{{ route('employers.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @include('employers.form')
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

</x-app-layout>