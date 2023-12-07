@include('layout.navadmin')

    <div class="container">
        <h1 class="mt-5 mb-4 text-center">Add Gallery Item</h1>

        <form method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="mb-3">
                <label for="img" class="form-label">Image Name</label>
                <input type="text" class="form-control" id="img" name="img" required>
            </div>

            <div class="mb-3">
                <label for="gallery_image" class="form-label">Upload Image</label>
                <input type="file" class="form-control" id="gallery_image" name="gallery_image" accept="image/*">
            </div>

            <button type="submit" class="btn btn-primary">Add Gallery Item</button>
        </form>
    </div>
</body>

</html>