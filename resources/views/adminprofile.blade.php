@include('layout.navadmin')
<div class="container">

    <div class="title">
        <h1>Admin Profile Management System</h1>
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
    </div>

    <h3>Emails :</h3>
    <table class="table table-bordered">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Admin ID</th>
                <th scope="col">Email</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($adminData as $admin) : ?>
                <tr>
                    <td> {{$admin->id}}</td>
                    <td> {{$admin->email}}</td>
                    <td>
                        <a href="{{url('/edit_profile')}}?id={{$admin->id}}&field=email" class="btn btn-primary">Edit</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <h3>Passwords :</h3>
    <table class="table table-bordered">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Admin ID</th>
                <th scope="col">Password</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($adminData as $admin) : ?>
                <tr>
                    <td>{{$admin->id}}</td>
                    <td>**********</td>
                    <td>
                        <a href="{{url('/edit_profile')}}?id={{$admin->id}}&field=password" class="btn btn-primary">Edit</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</div>

</body>

</html>