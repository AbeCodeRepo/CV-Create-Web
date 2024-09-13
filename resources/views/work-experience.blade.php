<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Work Experience</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"
        integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg=="
        crossorigin="anonymous"></script>
</head>

<body>

    <section class="min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container-fluid  ">
            <div class="row justify-content-md-center">
                <div class="col-md-10 ">
                    <div class="card px-5 minHeight py-3 mt-3 shadow">
                        <h1 class="text-info text-center mt-2 mb-4">Work Experience</h1>

                        <form class="needs-validation" action="{{route('saveWorkExperience')}}" method="POST" novalidate>
                            @csrf
                            <div class="row">

                                <table class="table table-bordered" id="table">
                                    <thead>
                                        <tr>
                                            <th>Designation</th>
                                            <th>Company Name</th>
                                            <th>Description </th>
                                            <th>Started Date</th>
                                            <th>End Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody id="tableBody">

                                        <tr>
                                            <td><input type="text" name="data[0][designation]" class="form-control">
                                            </td>
                                            <td><input type="text" name="data[0][company_name]" class="form-control">
                                            </td>
                                            <td>
                                                <textarea type="text" name="data[0][description]" class="form-control" rows="3"></textarea>
                                            </td>
                                            <td><input type="date" name="data[0][started_date]" class="form-control">
                                            </td>
                                            <td><input type="date" name="data[0][end_date]" class="form-control">
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
        var i = 0;
        $('#add').click(function() {
            ++i;
            $('#table').append(
                `<tr>
                    <td>
                        <input type="text" name="data[` + i + `][designation]" class="form-control"/>
                    </td>
                    <td>
                        <input type="text" name="data[` + i + `][company_name]" class="form-control"/>
                    </td>
                    <td>
                        <textarea type="text" name="data[` + i + `][description]" class="form-control" rows="3"></textarea>
                    </td>
                    <td>
                        <input type="date" name="data[` + i + `][started_date]" class="form-control"/>
                    </td>
                    <td>
                        <input type="date" name="data[` + i + `][end_date]" class="form-control"/>
                    </td>
                    <td>
                        <button type="button" class="btn btn-danger remove-table-row">Remove</button>
                    </td>
                </tr>`);
        });

        $(document).on('click', '.remove-table-row', function() {
            $(this).parents('tr').remove();
        });
    </script>
</body>

</html>
