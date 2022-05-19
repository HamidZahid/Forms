<!DOCTYPE html>
<html lang="en">

<head>
    <?php
         include('./includes/header/header.php');
    ?>
    <title>Attendance View</title>
</head>

<body>
    <div class="container-fluid">
        <blockquote class="blockquote mt-2">
            <div class="conatiner-fluid">
                <!-- Navbar -->
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand" href="#">
                        <h4>Attendance View</h4>
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

        <div class="container-fluid my-3">
            <h5 style="border-left: 6px solid rgb(59, 147, 236);">Days OverView This Month</h5>
            <div class="row my-4">
                <div class="col-md-2 text-center">
                    <button type="button" class="btn btn-primary ">31</button>
                    <h6>Total Working Days</h6>
                </div>
                <div class="col-md-2 text-center">
                    <button type="button" class="btn btn-success ">24</button>
                    <h6>Present Days</h6>
                </div>
                <div class="col-md-2 text-center">
                    <button type="button" class="btn btn-danger ">2</button>
                    <h6>Absent Days</h6>
                </div>
                <div class="col-md-2 text-center">
                    <button type="button" class="btn btn-warning ">0</button>
                    <h6>Half Days</h6>
                </div>
                <div class="col-md-2 text-center">
                    <button type="button" class="btn btn-danger ">2</button>
                    <h6>Late Days</h6>
                </div>
                <div class="col-md-2 text-center">
                    <button type="button" class="btn btn-danger ">5</button>
                    <h6>Holiday Days</h6>
                </div>
            </div>
        </div>
        <hr>
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
                            <label for="department" class="col-sm-6 col-md-6 form-label">Select Date:</label>
                            <div class="col-md-10 col-sm-10 col-xs-10">
                                <input type="date" class="form-control" id="date" data-id="" />
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-xl-2 col-lg-6">
                    <form>
                        <div class="row mb-1 mt-1 ">
                            <label for="department" class="col-sm-4 col-md-4 form-label">Month:</label>
                            <div class="col-md-10 col-sm-10 col-xs-10">
                                <input type="date" class="form-control" id="date" data-id="" />
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-xl-2 col-lg-6">
                    <form>
                        <div class="row mb-1 mt-1 ">
                            <label for="department" class="col-sm-4 col-md-4 form-label">Year:</label>
                            <div class="col-md-10 col-sm-10 col-xs-10">
                                <input type="date" class="form-control" id="date" data-id="" />
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-xl-1 col-lg-12 col-sm-12">

                    <div class="input-group rounded   float-right " style="margin-top: 36px;">
                        <button type="button" class="btn btn-primary w-100">Search</button>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <section class="p-2 bg-light rounded">
            <div class="container-fluid overflow-auto">
                <table class="bg-light display" id="myTablee" style="width:100%">
                    <thead>
                        <tr>
                            <th scope="col">Emp ID</th>
                            <th scope="col">Emp Name</th>
                            <th scope="col">Last Absent</th>
                            <th scope="col"> Half Day </th>
                            <th scope="col"> Sick</th>
                            <th scope="col"> Casual</th>
                            <th scope="col"> Maternity</th>
                            <th scope="col"> Paternity</th>
                            <th scope="col"> Annual</th>
                            <th scope="col"> Unpaid</th>
                        </tr>
                    </thead>
                    <tbody id="dataTablee">

                        <tr href="javascript:void(0)" onclick="change_color(this)">

                            <th>#6729</th>

                            <td><img src="./assets/photo.jpg" alt="Profile Pic"
                                    style="width: 40px; border-radius: 50%; height: 40px;"/> Maria Bower</td>
                            <td><Button type="button" class="btn btn-danger">8 Days</Button></td>
                            <td>1</td>
                            <td>4</td>
                            <td>4</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>

                        </tr>
                        <tr href="javascript:void(0)" onclick="change_color(this)">

                            <th>#6729</th>

                            <td><img src="./assets/photo.jpg" alt="Profile Pic"
                                    style="width: 40px; border-radius: 50%; height: 40px;"/> Maria Bower</td>
                            <td><Button type="button" class="btn btn-danger">1 Days</Button></td>
                            <td>1</td>
                            <td>4</td>
                            <td>4</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>

                        </tr>
                        <tr href="javascript:void(0)" onclick="change_color(this)">

                            <th>#6629</th>

                            <td><img src="./assets/photo.jpg" alt="Profile Pic"
                                    style="width: 40px; border-radius: 50%; height: 40px;"/> Harry Bower</td>
                            <td><Button type="button" class="btn btn-success">Never</Button></td>
                            <td>1</td>
                            <td>4</td>
                            <td>4</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>

                        </tr>
                        <tr href="javascript:void(0)" onclick="change_color(this)">

                            <th>#6749</th>

                            <td><img src="./assets/photo.jpg" alt="Profile Pic"
                                    style="width: 40px; border-radius: 50%; height: 40px;"/> Maria Bower</td>
                            <td><Button type="button" class="btn btn-danger">4 Days</Button></td>
                            <td>1</td>
                            <td>4</td>
                            <td>4</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>

                        </tr>
                        <tr href="javascript:void(0)" onclick="change_color(this)">

                            <th>#6730</th>

                            <td><img src="./assets/photo.jpg" alt="Profile Pic"
                                    style="width: 40px; border-radius: 50%; height: 40px;"/> Bower</td>
                            <td><Button type="button" class="btn btn-dark">2 Days</Button></td>
                            <td>1</td>
                            <td>4</td>
                            <td>4</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>

                        </tr>
                        <tr href="javascript:void(0)" onclick="change_color(this)">

                            <th>#6729</th>

                            <td><img src="./assets/photo.jpg" alt="Profile Pic"
                                    style="width: 40px; border-radius: 50%; height: 40px;"/> Maria </td>
                            <td><Button type="button" class="btn btn-danger">2 Days</Button></td>
                            <td>1</td>
                            <td>4</td>
                            <td>4</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>

                        </tr>
                        <tr href="javascript:void(0)" onclick="change_color(this)">

                            <th>#6729</th>

                            <td><img src="./assets/photo.jpg" alt="Profile Pic"
                                    style="width: 40px; border-radius: 50%; height: 40px;"/> Abc </td>
                            <td><Button type="button" class="btn btn-warning">8 Days</Button></td>
                            <td>1</td>
                            <td>4</td>
                            <td>4</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>

                        </tr>
                    </tbody>
                </table>
            </div>
        </section>
    </div>
    </div>
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