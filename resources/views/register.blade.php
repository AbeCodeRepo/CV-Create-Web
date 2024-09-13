<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
</head>

<body>

    <section class="min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container-fluid">
            <div class="row justify-content-md-center">
                <div class="col-md-6 ">
                    <div class="card px-5 py-3 mt-3 shadow">
                        <h1 class="text-info text-center mt-2 mb-4">Create a new Account </h1>
                        <h6 class="text-center mb-3">Enter your details to register</h6>


                        <form class="needs-validation" action="{{route('registerPost')}}" method="POST" novalidate>
                            @csrf
                            <div class="mb-2">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" name="name" id="name" placeholder="Your Name" required>
                                <div class="invalid-feedback">
                                    Please Enter Your Name.
                                </div>
                            </div>
                            <div class="mb-2">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                                <div class="invalid-feedback">
                                    Please Enter Your Email.
                                </div>
                            </div>
                            <div class="mb-2">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" name="password" id="password" placeholder="Your Password"
                                    required>
                                <div class="invalid-feedback">
                                    Please Enter Your Password.
                                </div>
                            </div>
                            <div class="mb-2">
                                <p>If you already have an account? <span><a class="text-primary"
                                            href="{{ route('login') }}">Login</a></span></p>
                            </div>
                            <div class="mt-2 mb-2">
                                <div class="d-grid">
                                    <button class="btn btn-success float-right">Register</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        (function() {
            'use strict'

            var forms = document.querySelectorAll('.needs-validation')

            Array.prototype.slice.call(forms)
                .forEach(function(form) {
                    form.addEventListener('submit', function(event) {
                        if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                        }

                        form.classList.add('was-validated')
                    }, false)
                })
        })()
    </script>
</body>

</html>
