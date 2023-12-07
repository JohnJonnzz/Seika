<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/assets/css/login.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>

<body>

    <section class="vh-100">
        <div class="container-fluid h-custom">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-9 col-lg-6 col-xl-5">
                    <img src="{{url('/')}}/assets/img/Logo Seika.jpg" class="img-fluid" alt="Sample image">
                </div>
                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                    <form method="post">
                        {{ csrf_field() }}
                        <div class="form-outline mb-4">
                            <div class="text-center title">
                                <h2>Seika Admin Security</h2> <br />
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
                            <label class="form-label" for="question">Nama Kucing Putih</label>
                            <input type="question" id="question" name="question" class="form-control form-control-lg" placeholder="Enter a valid answer" required />
                            <label class="form-label" for="new_password">New Password</label>
                            <input type="password" id="new_password" name="new_password" class="form-control form-control-lg" placeholder="Enter new password" required />
                            <a href="{{url('/login')}}">Go Back</a>
                        </div>
                        <div class="text-center text-lg-start mt-4 pt-2">
                            <button type="submit" class="btn btn-primary btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

</body>

</html>