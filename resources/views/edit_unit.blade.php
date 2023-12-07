@include('layout.navadmin')

<div class="container">
        <h1 class="mt-5 mb-4 text-center">Add Unit</h1>
        <form id="addUnitForm" method="POST" action="{{url('/edit_unit')}}" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input type="hidden" name="unit_id" value="{{$unitId}}">
            <div class="mb-3">
                <label for="unit_name" class="form-label">Unit Name</label>
                <input type="text" class="form-control" id="unit_name" name="unit_name" value="{{$unit->unit_name}}" required>
            </div>
            <div class="mb-3">
                <label for="subjudul" class="form-label">subjudul</label>
                <input type="text" class="form-control" id="subjudul" name="subjudul" value="{{$unit->subjudul}}" required>
            </div>
            <div class="mb-3">
                <label for="room" class="form-label">room</label>
                <input type="text" class="form-control" id="room" name="room" value="{{$unit->room}}" required>
            </div>
            <div class="mb-3">
                <label for="category" class="form-label">category</label>
                <select class="form-select" id="category" name="category" required>
                    <option value=""></option>
                    <option value="Apartment" {{$unit->category === 'Apartment' ? 'selected' : ''}}>Apartment</option>
                    <option value="House" {{$unit->category === 'House' ? 'selected' : ''}}>House</option>
                    <option value="Villa" {{$unit->category === 'Villa' ? 'selected' : ''}}>Villa</option>
                    <option value="Hotel" {{$unit->category === 'Hotel' ? 'selected' : ''}}>Hotel</option>
                    <option value="Penthouse" {{$unit->category === 'Penthouse' ? 'selected' : ''}}>Penthouse</option>
                    <option value="ShareHouse" {{$unit->category === 'ShareHouse' ? 'selected' : ''}}>Share House</option>
                    <option value="ShopHouse" {{$unit->category === 'ShopHouse' ? 'selected' : ''}}>Shop House</option>
                    <option value="WareHouse" {{$unit->category === 'WareHouse' ? 'selected' : ''}}>WareHouse</option>
                    <option value="ComingSoon" {{$unit->category === 'ComingSoon' ? 'selected' : ''}}>Coming Soon</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="units_desc" class="form-label">Unit Descriptions</label>
                <textarea class="form-control" id="units_desc" name="units_desc" rows="4" required>{{$unit->units_desc}}</textarea>
            </div>

            <div class="mb-3">
                <label for="location_link" class="form-label">Location link (API)</label>
                <input type="text" class="form-control" id="location_link" name="location_link" value="{{$unit->location_link}}" required>
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">price</label>
                <input type="text" class="form-control" id="price" name="price" value="{{$unit->price}}" required>
            </div>
            <div class="mb-3">
                <label for="availability" class="form-label">availability</label>
                <input type="text" class="form-control" id="availability" name="availability" value="{{$unit->availability}}" required>
            </div>

            <div class="mb-3">
                <label for="gallery_id" class="form-label">gallery id</label>
                <input type="text" class="form-control" id="gallery_id" name="gallery_id" value="{{$unit->gallery_id}}" required>
            </div>

            <div class="mb-3">
                @for ($i = 1; $i <= 8; $i++)
                    <label for="display{{$i}}" class="form-label">Display {{$i}} Photos</label>
                    <select name="display{{$i}}" class="form-select" id="display{{$i}}" accept="image/*">
                        <option value=""></option>
                        @foreach ($gallery as $row)
                            <option value="{{$row->img}}" {{$unit->{'display' . $i} === $row->img ? 'selected' : ''}}>{{$row->gallery_id . ' - ' . $row->img}}</option>
                        @endforeach
                    </select>
                @endfor
            </div>

            <button type="submit" class="btn btn-primary">Add</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>