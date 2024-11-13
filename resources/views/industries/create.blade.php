
<x-app-layout>

<div class="container">
    <h1>Add New Industry</h1>
    <form action="{{ route('industries.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @include('industries.form')
        <button type="submit" class="btn btn-success">Save</button>
    </form>
</div>



<script src="https://cdn.ckeditor.com/4.20.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('description-editor');
        CKEDITOR.replace('content-editor');
        CKEDITOR.replace('services-editor');
    </script>

</x-app-layout>