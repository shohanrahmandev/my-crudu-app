<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Crudu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>

    <section>
        <div class="text-center mt-5">

            <h1>My Crudu App</h1>
        </div>

        <div class="d-flex justify-content-center mt-5 p-4">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Insert
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">My Crudu Insert</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="mb-3">
                                    <label for="name" class="form-label">Name :</label>
                                    <input type="text" class="form-control" id="name">
                                </div>

                                <div class="mb-3">
                                    <label for="roll" class="form-label">Roll :</label>
                                    <input type="number" class="form-control" id="roll">
                                </div>

                                <div class="mb-3">
                                    <label for="reg" class="form-label">Reg :</label>
                                    <input type="number" class="form-control" id="reg">
                                </div>
                                <div class="mb-3">
                                    <label for="dept" class="form-label">Department :</label>
                                    <input type="text" class="form-control" id="dept">
                                </div>
                                <div class="mb-3">
                                    <label for="session" class="form-label">Session :</label>
                                    <input type="number" class="form-control" id="session">
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Cancel</button>
                                    <button type="button" class="btn btn-success">Save</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
</body>

</html>
