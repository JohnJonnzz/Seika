@include('layout.navadmin')    
    <div class="container">
        <h2>Edit Gallery Item</h2>
        <br />
        <form method="post" action="{{url('/update_gallery')}}">
            {{ csrf_field() }}
            <input type="hidden" name="gallery_id" value="{{$galleryId}}">

            <label for="img">New Image Name:</label>
            <input type="text" name="img" value="{{$existingImageName}}" required>

            <button type="submit">Save Changes</button>
        </form>
    </div>
</body>

</html>