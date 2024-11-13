<div class="form-group mb-3">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" value="{{ old('name', $industry->name ?? '') }}" required>
        </div>

        <div class="form-group mb-3">
            <label for="description">Description</label>
            <textarea name="description" id="" class="form-control">{{ old('description', $industry->description ?? '') }}</textarea>
        </div>

        <div class="form-group mb-3">
            <label for="content">Content</label>
            <textarea name="content" id="content-editor" class="form-control">{{ old('content', $industry->content ?? '') }}</textarea>
        </div>

        <div class="form-group mb-3">
            <label for="services">Services</label>
            <textarea name="services" id="services-editor" class="form-control">{{ old('services', $industry->services ?? '') }}</textarea>
        </div>

        <div class="form-group mb-3">
            <label for="image">Image 1</label>
            <input type="file" name="image" class="form-control">
        </div>

        <div class="form-group mb-3">
            <label for="image_2">Image 2</label>
            <input type="file" name="image_2" class="form-control">
        </div>

        <div class="form-group mb-3">
            <label for="image_3">Image 3</label>
            <input type="file" name="image_3" class="form-control">
        </div>