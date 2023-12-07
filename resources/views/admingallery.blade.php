@include('layout.navadmin')

{{-- <link rel="stylesheet" href="path/to/lightbox.min.css"> --}}

<div class="container">
    <div class="title">
        <h1>Gallery Management System</h1>
        <br />
        @if (session('error'))
            <div class="alert alert-danger" role="alert">
                {{session('error')}}
            </div>
        @endif
        @if (session('success'))
            <div class="alert alert-success" role="alert">
                {{session('success')}}
            </div>
        @endif
        <a href="{{url('add_gallery')}}" class="btn btn-success">New</a>
    </div>

    <table class="table table-bordered">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Gallery ID</th>
                <th scope="col">Image Name</th>
                <th scope="col">Image</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($galleryData as $gallery) : ?>
                <tr>
                    <td>{{$gallery->gallery_id}}</td>
                    <td>{{$gallery->img}}</td>
                    <td>
                        <a href="{{url('/')}}/assets/img/{{$gallery->img}}" data-lightbox="gallery" data-title="{{$gallery->img}}">
                            <img src="{{url('/')}}/assets/img/{{$gallery->img}}" alt="{{$gallery->img}}" style="max-height: 50px;">
                        </a>
                    </td>
                    <td>
                        <a class="btn btn-primary" href="{{url('/edit_gallery'). "/" . $gallery->gallery_id}}">Edit</a>
                        <a class="btn btn-danger" href="{{url('/delete_gallery'). "/" . $gallery->gallery_id}}">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

{{-- <script src="path/to/lightbox.min.js"></script> --}}

</body>

</html>