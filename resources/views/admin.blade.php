@include('layout.navadmin')
<div class="title">
    <h1>Unit Management System</h1>
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
    <a href="{{url('/add_unit')}}"><button class="btn btn-primary">Add a new unit</button></a>
</div>

<main class="content px-3 py-2">
    <div class="container-fluid">
        <form id="unitForm" method="POST">
            <div class="mb-3">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Units</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        @foreach ($unitsList as $unit)
                            <tr>
                                <th scope="row">{{ $unit->unit_id}}</th>
                                <td>{{ $unit->unit_name}}</td>
                                <td>
                                    <a href="{{url('/edit_unit'). '/'.$unit->unit_id}}" class="btn btn-warning">EDIT</a>
                                    <a href="{{url('/delete_unit'). '/'.$unit->unit_id}}" class="btn btn-danger">DELETE</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </form>
    </div>
</main>
</body>