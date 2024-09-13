<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Educational Qualifications</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"
        integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg=="
        crossorigin="anonymous"></script>
</head>

<body>
    <section class="min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container-fluid ">
            <div class="row justify-content-md-center">
                <div class="col-md-10 ">
                    <div class="card px-5 py-3 mt-3 shadow">
                        <h1 class="text-info text-center mt-2 mb-4">Educational Qualification</h1>

                        <form class="needs-validation" action="{{route('saveEducationalQualification')}}" method="POST" novalidate>
                            @csrf
                            <div class="row">

                                <table class="table table-bordered" id="table">
                                    <thead>
                                        <tr>
                                            <th>Qualification</th>
                                            <th>Institute Name</th>
                                            <th>Description </th>
                                            <th>Started Date</th>
                                            <th>End Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody id="tableBody">
                                        <!-- Table rows go here -->
                                        <tr>
                                            <td><input type="text" name="data[0][qualification]"
                                                    class="form-control"></td>
                                            <td><input type="text" name="data[0][institute_name]"
                                                    class="form-control">
                                            </td>
                                            <td>
                                                <textarea type="text" name="data[0][description]" class="form-control" rows="3"></textarea>
                                            </td>
                                            <td>
                                                <input type="text" name="data[0][started_date]"
                                                    class="form-control year-picker" placeholder="YYYY" maxlength="4"
                                                    pattern="\d{4}">
                                            </td>
                                            <td>
                                                <input type="text" name="data[0][end_date]"
                                                    class="form-control year-picker" placeholder="YYYY" maxlength="4"
                                                    pattern="\d{4}">
                                            </td>
                                            <td><button type="button" name="add" id="add"
                                                    class="btn btn-success">Add Row </button>
                                            </td>

                                        </tr>
                                    </tbody>
                                </table>

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
        $(document).ready(function() {
            $('.year-picker').on('input', function() {
                this.value = this.value.replace(/[^0-9]/g, '');
                if (this.value.length > 4) this.value = this.value.slice(0, 4);
            });

            var i = 0;
            $('#add').click(function() {
                ++i;
                $('#table').append(
                    `<tr>
                        <td>
                            <input type="text" name="data[` + i + `][qualification]" class="form-control"/>
                        </td>
                        <td>
                            <input type="text" name="data[` + i + `][institute_name]" class="form-control"/>
                        </td>
                        <td>
                            <textarea type="text" name="data[` + i + `][description]" class="form-control" rows="3"></textarea>
                        </td>
                        <td>
                            <input type="text" name="data[` + i + `][started_date]" class="form-control year-picker" placeholder="YYYY" maxlength="4" pattern="\d{4}"/>
                        </td>
                        <td>
                            <input type="text" name="data[` + i + `][end_date]" class="form-control year-picker" placeholder="YYYY" maxlength="4" pattern="\d{4}"/>
                        </td>
                        <td>
                            <button type="button" class="btn btn-danger remove-table-row">Remove</button>
                        </td>
                    </tr>`);

                $('.year-picker').on('input', function() {
                    this.value = this.value.replace(/[^0-9]/g, '');
                    if (this.value.length > 4) this.value = this.value.slice(0, 4);
                });
            });

            $(document).on('click', '.remove-table-row', function() {
                $(this).parents('tr').remove();
            });
        });
    </script>
</body>

</html>
