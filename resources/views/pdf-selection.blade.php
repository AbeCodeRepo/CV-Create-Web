<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PDF Selection</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

        <link rel="stylesheet" href="{{asset('css/custom.css')}}">
</head>

<body>

    <section class="min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container-fluid  ">
            <div class="row justify-content-md-center">
                <div class="col-md-10 ">
                    <div class="card px-5 py-3 mt-3 minHeight shadow">
                        <h1 class="text-info text-center mt-2 mb-4">Select the PDF Style</h1>


                        <form action="{{route('pdf.download')}}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 text-center">

                                    <div>
                                        <img class="mt-4 mb-3 shadow" src="{{ asset('img/template/template_1.png') }}"
                                            width="60%" height="60%" alt="image">
                                        <div>
                                            <a href="{{route('pdf.template')}}?preview=pdf.template"
                                                class="btn btn-primary"> Preview</a>
                                            <button type="submit" name="download" value="pdf.pdf1"
                                                class="btn btn-success">Download</button>
                                        </div>
                                    </div>

                                </div>

                                <div class="col-md-6 text-center">

                                    <div class="">
                                        <img class="mt-4 mb-3 shadow" src="{{ asset('img/template/template_2.png') }}"
                                            width="60%" height="60%" alt="image">
                                        <div>
                                            <a href="{{route('pdf.template')}}?preview=pdf.template-two"
                                                class="btn btn-primary"> Preview</a>
                                            <button type="submit" name="download" value="pdf.pdf2"
                                                class="btn btn-success">Download</button>
                                        </div>
                                    </div>


                                </div>
                            </div>


                        </form>
                </div>
            </div>
        </div>
    </div>
    </section>

</body>

</html>
