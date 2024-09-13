<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Skills</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>

    <section class="min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container-fluid ">
            <div class="row justify-content-md-center">
                <div class="col-md-10 ">
                    <div class="card px-5 py-3 mt-3 shadow">
                        <h1 class="text-info text-center mt-2 mb-4">Skills</h1>

                        <form class="needs-validation" action="{{route('saveSkills')}}" method="POST" novalidate>
                            @csrf
                            <div class="row">

                                <div class="col-md-6">
                                    <table class="table table-bordered" id="table_language">
                                        <thead>
                                            <tr>
                                                <th>Language</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody id="tableBody">
                                            <tr>
                                                <td><input type="text" name="data[0][language]" class="form-control">
                                                </td>

                                                <td><button type="button" name="add" id="add_language"
                                                        class="btn btn-success">Add Row </button>
                                                </td>

                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="col-md-6">

                                    <table class="table table-bordered" id="table_personal">
                                        <thead>
                                            <tr>
                                                <th>Personal Skills</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody id="tableBody">
                                            <tr>
                                                <td><input type="text" name="data[0][personal_skill]"
                                                        class="form-control"></td>

                                                <td><button type="button" name="add" id="add_personal"
                                                        class="btn btn-success">Add Row </button>
                                                </td>

                                            </tr>
                                        </tbody>
                                    </table>
                                </div>


                            </div>


                            <div class="row">

                                <div class="col-md-6">
                                    <table class="table table-bordered" id="table_tech">
                                        <thead>
                                            <tr>
                                                <th>Tech Skills</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody id="tableBody">
                                            <tr>
                                                <td><input type="text" name="data[0][tech_skill]"
                                                        class="form-control"></td>

                                                <td><button type="button" name="add" id="add_tech"
                                                        class="btn btn-success">Add Row </button>
                                                </td>

                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="col-md-6">

                                    <table class="table table-bordered" id="table_interest">
                                        <thead>
                                            <tr>
                                                <th>Interest</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody id="tableBody">
                                            <tr>
                                                <td><input type="text" name="data[0][interest]" class="form-control">
                                                </td>

                                                <td><button type="button" name="add" id="add_interest"
                                                        class="btn btn-success">Add Row </button>
                                                </td>

                                            </tr>
                                        </tbody>
                                    </table>
                                </div>


                            </div>

                            <div class="mb-2">
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-success float-right">Submit&gt;</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        var l = 0;
        $('#add_language').click(function() {
            ++l;
            $('#table_language').append(
                `<tr>
                    <td>
                        <input type="text" name="data[` + l + `][language]" class="form-control"/>
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

    <script>
        var p = 0;
        $('#add_personal').click(function() {
            ++p;
            $('#table_personal').append(
                `<tr>
                    <td>
                        <input type="text" name="data[` + p + `][personal_skill]" class="form-control"/>
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

    <script>
        var t = 0;
        $('#add_tech').click(function() {
            ++t;
            $('#table_tech').append(
                `<tr>
                    <td>
                        <input type="text" name="data[` + t + `][tech_skill]" class="form-control"/>
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

    <script>
        var i = 0;
        $('#add_interest').click(function() {
            ++i;
            $('#table_interest').append(
                `<tr>
                    <td>
                        <input type="text" name="data[` + i + `][interest]" class="form-control"/>
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
