<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Admin login</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Alegreya:wght@800&display=swap" rel="stylesheet">
</head>

<body class="bg-danger" style="background-color: #da723c;">

    <div class="container">
        <div class="align-middle row justify-content-center " style="margin-top: 115px;">
            <div class=" align-middle col-lg-5 col-md-8 card rounded"  >
                <div class=" align-middle border-0">
                    <div class="card-body  bg-light p-5">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group row">
                            <div class="col col-lg-12 col-md-12 col-sm-12 text-center" >
                            <span class="h2 text-center" style="font-family: 'Alegreya', serif;color: #91091e;">MEATTY WAYLAND</span>
                            <br>
                            <span class="p text-center" style="color: #91091e;">Basic point of Sale system </span>

                            </div>


                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <br>
                                <label class="col col-md-12 col-lg-12 col-sm-12 col-form-label ">Email</label>
                                <div class="col-md-12">
                                    <input id="email" type="email"
                                        class="form-control  @error('email') is-invalid @enderror" name="email" required
                                        autocomplete="email" autofocus>

                                </div>
                                <label class="col col-md-12 col-lg-12 col-sm-12 col-form-label ">Password</label>

                                <div class="col-md-12">

                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>



                            <div class="form-group row mb-0">
                                <div class="col-md-12 offset-md-12 ">
                                    <button type="submit" class="btn btn-danger float-right" >
                                        Confirm
                                    </button>


                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer">
      <div class="container text-center mt-5">
        <span class="text-light text-center">Demo system by Junneil Adsuara</span>
      </div>
    </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
</body>

</html>
