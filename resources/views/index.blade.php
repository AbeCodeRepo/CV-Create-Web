<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Personal Details</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
</head>

<body>

    <section class="min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container-fluid">
            <div class="row justify-content-md-center">
                <div class="col-md-10 ">
                    <div class="card px-5 py-3 mt-3 minHeight shadow">
                        <h1 class="text-info text-center mt-2 mb-4">Personal Details</h1>

                        <form class="needs-validation" action="{{route('savePersonalDetails')}}" method="POST" enctype="multipart/form-data"
                            novalidate>
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div>
                                        <div class="mb-3 mt-3">
                                            <label class="form-label">Name</label>
                                            <input type="text" class="form-control" name="name"
                                                placeholder="Your Name" required>
                                            <div class="invalid-feedback">
                                                Please Enter Your Name.
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <label for="formFile" class="form-label">
                                            Upload your picture
                                        </label>
                                        <input class="form-control" type="file" name="cv_img" id="formFile"
                                            required>
                                        <div class="invalid-feedback">
                                            Please Add Your picture.
                                        </div>
                                    </div>
                                    <div>
                                        <div class="mb-3 mt-3">
                                            <label class="form-label">Address</label>
                                            <input type="text" class="form-control" name="address"
                                                placeholder="Your address" required>
                                            <div class="invalid-feedback">
                                                Please Enter Your address.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="inputEmail3" class="col-sm-4 col-form-label">Marital status</label>
                                        <div class="col-sm-8">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="marital_status"
                                                    id="marital_statusSingle" value="Single" required>
                                                <label class="form-check-label"
                                                    for="marital_statusSingle">Single</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="marital_status"
                                                    id="marital_statusMarried" value="Married" required>
                                                <label class="form-check-label"
                                                    for="marital_statusMarried">Married</label>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Gender</label>
                                        <div class="col-sm-10">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="gender"
                                                    id="genderMale" value="Male" required>
                                                <label class="form-check-label" for="genderMale">Male</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="gender"
                                                    id="genderFemale" value="Female" required>
                                                <label class="form-check-label" for="genderFemale">Female</label>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-6">

                                    <div class="mb-3 mt-3">
                                        <label class="form-label">Designation</label>
                                        <input type="text" class="form-control" name="designation"
                                            placeholder="Your Current Designation" required>
                                        <div class="invalid-feedback">
                                            Please Enter Your Current Designation.
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Email</label>
                                        <input type="email" class="form-control" name="email"
                                            placeholder="Your email" required>
                                        <div class="invalid-feedback">
                                            Please Enter Your Email.
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Mobile Number</label>
                                        <input type="text" class="form-control" name="mobile_no"
                                            placeholder="Your Mobile Number"
                                            pattern="^(070|071|072|074|075|076|077|078)\d{7}$" maxlength="10"
                                            required>
                                        <div class="invalid-feedback">
                                            Please Enter Your Mobile Number.
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Birth Day</label>
                                        <input type="date" class="form-control" name="birthday"
                                            placeholder="Your Birthday" required>
                                        <div class="invalid-feedback">
                                            Please Enter Your Birthday.
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="row">
                                <h1 class="text-info text-center mt-2 mb-4">About You</h1>
                                <div class="col">
                                    <div class="mb-3">
                                        <textarea type="text" class="form-control" name="about_you" placeholder="Type About You" rows="5"
                                            required> </textarea>
                                        <div class="invalid-feedback">
                                            Please Type About You.
                                        </div>
                                    </div>
                                </div>
                            </div>



                            <div class="mb-2">
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary float-right">Next&gt;</button>
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


