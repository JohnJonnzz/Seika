@include('layout.navadmin')

<div class="container">
    <div class="title">
        <h1>Carousel Management System</h1>
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
        <a href="{{url('add_carousel')}}" class="btn btn-success">New</a>
    </div>

    <table class="table table-bordered">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Carousel ID</th>
                <th scope="col">Carousel Image ID</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($carouselData as $carousel) : ?>
                <tr>
                    <td>{{$carousel->carousel_id}}</td>
                    <td>{{$carousel->carousel_img_id}}</td>
                    <td>
                        <a class="btn btn-primary" href="{{url('edit_carousel'). '/' . $carousel->carousel_id}}">Edit</a>
                        <a class="btn btn-danger" href="{{url('delete_carousel'). '/' . $carousel->carousel_id}}">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

</body>

</html>