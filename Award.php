<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="./bootstrap-4.6.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./bootstrap-4.6.1-dist/js/bootstrap.min.js">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script type="text/javascript" charset="utf8"
        src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>

    <style>
        body {
            background-color: #EFF2FA;
        }
    </style>
    <title>Awards</title>
</head>

<body>
    <div class="container-fluid">
        <blockquote class="blockquote mt-2">
            <div class="conatiner-fluid">
                <!-- Navbar -->
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand" href="#">
                        <h4>Awards</h4>
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link text-light btn btn-primary btn-sm rounded mr-2" href="#">Add New
                                    Award </a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link btn mr-2" href="#" style="background-color: #DEE5F7;"><i
                                        class="fa-solid fa-envelope-circle-check"></i><span
                                        class="sr-only">(current)</span></a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link btn mr-2" href="#" style="background-color: #DEE5F7;"><i
                                        class="fa-solid fa-phone"></i> </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link btn btn-primary mr-2"><i
                                        class="fa-solid fa-circle-exclamation"></i></a>
                            </li>
                        </ul>
                    </div>
                </nav>
                <!-- Navbar -->
            </div>
        </blockquote>
        <hr>
        <section class="p-2 bg-light rounded">
            <div class="container-fluid overflow-auto">
                <table class="bg-light display" id="myTable" style="width:100%">
                    <thead>
                        <tr>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Emp ID</th>
                            <th scope="col">Emp Name</th>
                            <th scope="col">Designation</th>
                            <th scope="col">Attendance</th>
                            <th scope="col">Award Type</th>
                            <th scope="col">Gift Type</th>
                        </tr>
                        </tr>
                    </thead>
                    <tbody id="dataTable">
                        <tr href="javascript:void(0)" onclick="change_color(this)">
                            <th>01</th>
                            <th>#333</th>
                            <th><b><img src="photo.jpg" alt="Profile Pic" id="" data-id=""
                                        style="width: 40px; border-radius: 50%; height: 40px;" /> Hamid Zahid</b> <br>
                                Hamid@gmail.com</th>
                            <th>Developer </th>
                            <th>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 95%;" aria-valuenow="25"
                                        aria-valuemin="0" aria-valuemax="100">95%</div>
                                </div>
                            </th>
                            <th>Employee Of the Month </th>

                            <th>
                                <button type="button" class="btn btn-primary">Mobile</button>
                            </th>

                        </tr>
                        <tr href="javascript:void(0)" onclick="change_color(this)">

                            <th>01</th>
                            <th>#333</th>
                            <th><b><img src="photo.jpg" alt="Profile Pic"
                                        style="width: 40px; border-radius: 50%; height: 40px;" /> Hamid Zahid</b> <br>
                                Hamid@gmail.com</th>
                            <th>Developer </th>
                            <th>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 95%;" aria-valuenow="25"
                                        aria-valuemin="0" aria-valuemax="100">95%</div>
                                </div>
                            </th>
                            <th>Employee Of the Month </th>

                            <th>
                                <button type="button" class="btn btn-dark">Mobile</button>
                            </th>

                        </tr>
                        <tr href="javascript:void(0)" onclick="change_color(this)">

                            <th>01</th>
                            <th>#333</th>
                            <th><b><img src="photo.jpg" alt="Profile Pic"
                                        style="width: 40px; border-radius: 50%; height: 40px;" /> Hamid Zahid</b> <br>
                                Hamid@gmail.com</th>
                            <th>Developer </th>
                            <th>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 95%;" aria-valuenow="25"
                                        aria-valuemin="0" aria-valuemax="100">95%</div>
                                </div>
                            </th>
                            <th>Employee Of the Month </th>

                            <th>
                                <button type="button" class="btn btn-success">Mobile</button>
                            </th>

                        </tr>
                        <tr href="javascript:void(0)" onclick="change_color(this)">

                            <th>01</th>
                            <th>#333</th>
                            <th><b><img src="photo.jpg" alt="Profile Pic"
                                        style="width: 40px; border-radius: 50%; height: 40px;" /> Hamid Zahid</b> <br>
                                Hamid@gmail.com</th>
                            <th>Developer </th>
                            <th>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 95%;" aria-valuenow="25"
                                        aria-valuemin="0" aria-valuemax="100">95%</div>
                                </div>
                            </th>
                            <th>Employee Of the Month </th>

                            <th>
                                <button type="button" class="btn btn-warning">Ipad</button>
                            </th>

                        </tr>
                        <tr href="javascript:void(0)" onclick="change_color(this)">

                            <th>01</th>
                            <th>#333</th>
                            <th><b><img src="photo.jpg" alt="Profile Pic"
                                        style="width: 40px; border-radius: 50%; height: 40px;" /> Hamid Zahid</b> <br>
                                Hamid@gmail.com</th>
                            <th>Developer </th>
                            <th>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 95%;" aria-valuenow="25"
                                        aria-valuemin="0" aria-valuemax="100">95%</div>
                                </div>
                            </th>
                            <th>Employee Of the Month </th>

                            <th>
                                <button type="button" class="btn btn-danger">Laptop</button>
                            </th>

                        </tr>

                    </tbody>
                </table>
            </div>
        </section>
    </div>

    <script>
        $(document).ready(function () {
            $("#myInput").on("keyup", function () {
                var value = $(this).val().toLowerCase();
                $("#dataTable tr").filter(function () {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
        $(document).ready(function () {
            $("#myInput").on("keyup", function () {
                var value = $(this).val().toLowerCase();
                $("#dataTablee tr").filter(function () {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });

    </script>

    <script>
        $(document).ready(function () {
            $('#myTable').DataTable();
        });
        $(document).ready(function () {
            $('#myTablee').DataTable();
        });
    </script>

    <script>
        function change_color(key) {
            $(key).closest('tr').css({
                'background-color': '#F6FDF6',
                'color': 'black',
            }).siblings('tr').css({
                'background-color': 'white',
                'color': 'black',
            })
        }
    </script>
</body>

</html>