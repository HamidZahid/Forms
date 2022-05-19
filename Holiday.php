<!DOCTYPE html>
<html lang="en">

<head>
    <?php
         include('./includes/header/header.php');
    ?>
    <title>Attendance</title>
</head>
<body>
    <div class="container-fluid">
        <blockquote class="blockquote mt-2">
            <div class="conatiner-fluid">
                <!-- Navbar -->
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand" href="#">
                        <h4>Attendance</h4>
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link text-light btn btn-primary btn-sm rounded mr-2" href="#">Mark
                                    Attendance</a>
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
        <div class="container-fluid mx-2">
            <div class="row ">
                <div class="col-xl-4 col-lg-6">
                    <fieldset class="">
                        <div class="row mb-1 mt-1 ">
                            <label for="overtime" class="col-xl-5 col-md-4 col-sm-4 form-label ">Employee Name:
                            </label>
                            <div class="col-xl-10 col-md-10 col-sm-10">
                                <select name="" id="" class="custom-select">
                                    <option value="">Select</option>
                                    <option value="">...</option>
                                    <option value="">...</option>
                                </select>
                            </div>
                        </div>
                    </fieldset>
                </div>
                <div class="col-xl-3 col-lg-6">
                    <form>
                        <div class="row mb-1 mt-1 ">
                            <label for="department" class="col-sm-6 col-md-6 form-label">Month:</label>
                            <div class="col-md-10 col-sm-10 col-xs-10">
                                <input type="date" class="form-control" id="date" data-id="" />
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-xl-3 col-lg-6">
                    <form>
                        <div class="row mb-1 mt-1 ">
                            <label for="department" class="col-sm-4 col-md-4 form-label">Year:</label>
                            <div class="col-md-10 col-sm-10 col-xs-10">
                                <input type="date" class="form-control" id="date" data-id="" />
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-xl-2 col-lg-12 col-sm-12">

                    <div class="input-group rounded   float-right " style="margin-top: 36px;">
                        <button type="button" class="btn btn-primary w-100">Search</button>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <section class="p-2 bg-light rounded">
            <div class="container-fluid overflow-auto">
                <div class="row">
                    <div class="col-md-8">

                        <table class="bg-light display" id="myTable" style="width:100%">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Day</th>
                                    <th scope="col">Date</th>
                                    <th scope="col"> Holidays</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody id="dataTable">

                                <tr href="javascript:void(0)" onclick="change_color(this)">

                                    <th>01</th>
                                    <th><input type="week" class="form-control" id="" value="" data-id="" /></th>
                                    <th><input type="date" class="form-control" id="" value="" data-id="" /></th>
                                    <th>XYZ Holiday</th>

                                    <td>
                                        <button class="btn btn-sm btn-outline-success edit_employee #348C7E" data-id=""
                                            type="button"><i class="fa-solid fa-pen-to-square"></i></button>
                                        <button class="btn btn-sm btn-outline-danger edit_employee #348C7E" data-id=""
                                            type="button"><i class="fa-solid fa-trash-can"></i></button>
                                    </td>
                                </tr>
                                <tr href="javascript:void(0)" onclick="change_color(this)">

                                    <th>01</th>
                                    <th><input type="week" class="form-control" id="" value="" data-id="" /></th>
                                    <th><input type="date" class="form-control" id="" value="" data-id="" /></th>
                                    <th>XYZ Holiday</th>
                                    <td>
                                        <button class="btn btn-sm btn-outline-success edit_employee #348C7E" data-id=""
                                            type="button"><i class="fa-solid fa-pen-to-square"></i></button>
                                        <button class="btn btn-sm btn-outline-danger edit_employee #348C7E" data-id=""
                                            type="button"><i class="fa-solid fa-trash-can"></i></button>
                                    </td>
                                </tr>
                                <tr href="javascript:void(0)" onclick="change_color(this)">

                                    <th>01</th>
                                    <th><input type="week" class="form-control" id="" value="" data-id="" /></th>
                                    <th><input type="date" class="form-control" id="" value="" data-id="" /></th>
                                    <th>XYZ Holiday</th>
                                    <td>
                                        <button class="btn btn-sm btn-outline-success edit_employee #348C7E" data-id=""
                                            type="button"><i class="fa-solid fa-pen-to-square"></i></button>
                                        <button class="btn btn-sm btn-outline-danger edit_employee #348C7E" data-id=""
                                            type="button"><i class="fa-solid fa-trash-can"></i></button>
                                    </td>
                                </tr>
                                <tr href="javascript:void(0)" onclick="change_color(this)">

                                    <th>01</th>
                                    <th><input type="week" class="form-control" id="" value="" data-id="" /></th>
                                    <th><input type="date" class="form-control" id="" value="" data-id="" /></th>
                                    <th>XYZ Holiday</th>

                                    <td>
                                        <button class="btn btn-sm btn-outline-success edit_employee #348C7E" data-id=""
                                            type="button"><i class="fa-solid fa-pen-to-square"></i></button>
                                        <button class="btn btn-sm btn-outline-danger edit_employee #348C7E" data-id=""
                                            type="button"><i class="fa-solid fa-trash-can"></i></button>
                                    </td>
                                </tr>
                                <tr href="javascript:void(0)" onclick="change_color(this)">

                                    <th>01</th>
                                    <th><input type="week" class="form-control" id="" value="" data-id="" /></th>
                                    <th><input type="date" class="form-control" id="" value="" data-id="" /></th>
                                    <th>XYZ Holiday</th>

                                    <td>
                                        <button class="btn btn-sm btn-outline-success edit_employee #348C7E" data-id=""
                                            type="button"><i class="fa-solid fa-pen-to-square"></i></button>
                                        <button class="btn btn-sm btn-outline-danger edit_employee #348C7E" data-id=""
                                            type="button"><i class="fa-solid fa-trash-can"></i></button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-4 ">
                        <!-- Space For Calendar -->
                    </div>
                </div>
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