@include('layout.navadmin')

    <div class="container">
        <h2>Add Carousel Item</h2>
        <br />
        <form method="post" action="{{url('/update_carousel')}}">
            {{ csrf_field() }}
            <input type="hidden" name="carousel_id" value="{{$carouselId}}">
            <label for="new_carousel_img_id">New Carousel Image ID:</label>
            <select name="new_carousel_img_id" id="new_carousel_img_id" required>
                @foreach ($gallery as $row)
                    <option value="{{$row->gallery_id}}" {{$row->gallery_id == $image_id ? "selected" : ""}}>{{$row->gallery_id . ' - ' . $row->img}}</option>
                @endforeach
            </select>

            <button type="submit">Update Carousel</button>
        </form>
    </div>
</body>

</html>