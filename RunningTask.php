<!DOCTYPE html>
<html lang="en">

<head>
    <?php
         include('./includes/header/header.php');
    ?>
    <title>Running Task</title>
</head>

<body>
    <div class="container-fluid">
        <blockquote class="blockquote my-4">
            <div class="conatiner-fluid">
                <!-- Navbar -->
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand" href="#">
                        <h4>Running Task</h4>
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a type="button" class="nav-link btn btn-primary mr-2" data-toggle="modal"
                                    data-target="#exampleModal"><i class="fa fa-plus m-1"></i>Create New Task</a>
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
                <hr>
                <!-- Navbar -->
            </div>
        </blockquote>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        ...
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
        <!--  -->
        <div class="container-fluid">
            <div class="projects">
                <div class="row">
                    <div class="col-xl-3 col-lg-6 col-sm-12 ">
                        <div class="card ">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-xl-8 col-lg-8 col-sm-8">
                                        <div class="h6 font-weight-bold" id="" data-id="">All Tasks</div>
                                        <div class="h2 text-danger" id="" data-id="">1254</div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-sm-4" id="" data-id=""><a type="button" id=""
                                            data-id="" class="btn btn-danger btn-lg"><i
                                                class="fa-solid fa-suitcase"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-sm-12 ">
                        <div class="card ">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-xl-8 col-lg-8 col-sm-8">
                                        <div class="h6 font-weight-bold">My Tasks</div>
                                        <div class="h2 text-primary" id="" data-id="">42</div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-sm-4" id="" data-id=""><a type="button" id=""
                                            data-id="" class="btn btn-primary btn-lg"><i
                                                class="fa-solid fa-suitcase"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-sm-12 ">
                        <div class="card ">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-xl-8 col-lg-8 col-sm-8">
                                        <div class="h6 font-weight-bold" id="" data-id="">Pending Tasks</div>
                                        <div class="h2 text-success text-warning" id="" data-id="">11</div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-sm-4" id="" data-id=""><a type="button" id=""
                                            data-id="" class="btn btn-warning btn-lg"><i
                                                class="fa-solid fa-exclamation"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-sm-12 ">
                        <div class="card ">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-xl-8 col-lg-8 col-sm-8">
                                        <div class="h6 font-weight-bold" id="" data-id="">Completed Tasks</div>
                                        <div class="h2 text-info" id="" data-id="">38</div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-sm-4" id="" data-id=""><a type="button" id=""
                                            data-id="" class="btn btn-info btn-lg"><i class="fa-solid fa-check"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="container-fluid mx-2">
            <div class="row">
                <div class="col-md-10 col-sm-10 col-xl-10">
                    <h6 class="" style="border-left: 6px solid rgb(108, 108, 246);">
                        Running Task Summary
                    </h6>
                </div>
                <div class="col-md-2  col-sm-2 col-xl-2">
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">

                    </form>
                </div>
            </div>
            <hr>
            <div class="row ">
                <div class="col-xl-4 col-lg-6">
                    <fieldset class="">
                        <div class="row mb-1 mt-1 ">
                            <label for="overtime" class="col-xl-4 col-md-4 col-sm-4 form-label ">From:
                            </label>
                            <div class="col-xl-9 col-md-9 col-sm-9">
                                <input type="date" class="form-control" id="date" value="" data-id="" />
                            </div>
                        </div>
                    </fieldset>
                </div>
                <div class="col-xl-3 col-lg-6">
                    <form>
                        <div class="row mb-1 mt-1 ">
                            <label for="department" class="col-sm-6 col-md-6 form-label">To:</label>

                            <div class="col-md-10 col-sm-10 col-xl-10">
                                <input type="date" class="form-control" id="date" value="" data-id="" />
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-xl-2 col-lg-6">
                    <form>
                        <div class="row mb-1 mt-1 ">
                            <label for="department" class="col-sm-6 col-md-6 form-label">Assign To:</label>
                            <div class="col-md-10 col-sm-10 col-xs-10">
                                <!-- <input type="date" class="form-control" id="date" id="date" id="" value="" data-id="" /> -->
                                <select name="" id="" class="custom-select">
                                    <option value="">Select</option>
                                    <option value="">...</option>
                                    <option value="">...</option>
                                </select>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-xl-2 col-lg-6">
                    <form>
                        <div class="row mb-1 mt-1 ">
                            <label for="department" class="col-sm-8 col-md-8 form-label">Select Prority:</label>
                            <div class="col-md-10 col-sm-10 col-xs-10">
                                <select name="" id="" class="custom-select">
                                    <option value="">Select</option>
                                    <option value="">...</option>
                                    <option value="">...</option>
                                </select>
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
                            <th scope="col">No</th>
                            <th scope="col">Task</th>
                            <th scope="col">Department</th>
                            <th scope="col">Assign To </th>
                            <th scope="col">Priority</th>
                            <th scope="col">Start Date</th>
                            <th scope="col">Deadline</th>
                            <th scope="col">Progress</th>
                            <th scope="col">Work Status</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody id="dataTablee">
                        <tr href="javascript:void(0)" onclick="change_color(this)">
                            <th>1</th>
                            <td>Marketing Material issue</td>
                            <td>
                                Marketing
                            </td>
                            <td>
                                <img src="./assets/download.jpg" alt="Profile Pic"
                                    style="width: 40px;height: 40px; border-radius: 50px;" /> <b> Peter Hill </b>
                            </td>
                            <td>
                                <button class="btn btn-sm btn-danger remove_employee" data-id=""
                                    type="button">High</button>
                            </td>
                            <td>
                                <input type="date" class="form-control" id="date" id="" value="" data-id="" />
                            </td>
                            <td>
                                <input type="date" class="form-control" id="date" id="" value="" data-id="" />
                            </td>
                            <td>
                                <div class="progress mt-1  " data-height="8" style="height: 8px;">
                                    <div class="progress-bar l-bg-cyan bg-success" role="progressbar" data-width="25%"
                                        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">
                                    </div>
                                </div>
                            </td>
                            <td>
                                <button class="btn btn-sm btn-primary remove_employee" data-id="" type="button">On
                                    Progress</button>
                            </td>
                            <td>
                                <button class="btn btn-sm btn-outline-primary remove_employee" data-id=""
                                    type="button"><i class="fa-solid fa-eye"></i></button>
                            </td>
                        </tr>
                        <tr href="javascript:void(0)" onclick="change_color(this)">
                            <th>2</th>
                            <td>Logo Design</td>
                            <td>
                                Designing
                            </td>
                            <td>
                                <img src="./assets/download.jpg" alt="Profile Pic"
                                    style="width: 40px;height: 40px; border-radius: 50px;" /> <b> Victoria Layman </b>
                            </td>
                            <td>
                                <button class="btn btn-sm btn-danger remove_employee" data-id=""
                                    type="button">High</button>
                            </td>
                            <td>
                                <input type="date" class="form-control" id="date" id="" value="" data-id="" />
                            </td>
                            <td>
                                <input type="date" class="form-control" id="date" id="" value="" data-id="" />
                            </td>
                            <td>
                                <div class="progress mt-1  " data-height="8" style="height: 8px;">
                                    <div class="progress-bar l-bg-cyan bg-success" role="progressbar" data-width="25%"
                                        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
                                    </div>
                                </div>
                            </td>
                            <td>
                                <button class="btn btn-sm btn-primary remove_employee" data-id="" type="button">On
                                    Progress</button>
                            </td>
                            <td>
                                <button class="btn btn-sm btn-outline-primary remove_employee" data-id=""
                                    type="button"><i class="fa-solid fa-eye"></i></button>
                            </td>
                        </tr>
                        <tr href="javascript:void(0)" onclick="change_color(this)">
                            <th>3</th>
                            <td>Theme Update</td>
                            <td>
                                Designing
                            </td>
                            <td>
                                <img src="./assets/download.jpg" alt="Profile Pic"
                                    style="width: 40px;height: 40px; border-radius: 50px;" /> <b> Melanie Colman </b>
                            </td>
                            <td>
                                <button class="btn btn-sm btn-success remove_employee" data-id=""
                                    type="button">Low</button>
                            </td>
                            <td>
                                <input type="date" class="form-control" id="date" id="" value="" data-id="" />
                            </td>
                            <td>
                                <input type="date" class="form-control" id="date" id="" value="" data-id="" />
                            </td>
                            <td>
                                <div class="progress mt-1  " data-height="8" style="height: 8px;">
                                    <div class="progress-bar l-bg-cyan bg-success" role="progressbar" data-width="25%"
                                        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 30%;">
                                    </div>
                                </div>
                            </td>
                            <td>
                                <button class="btn btn-sm btn-primary remove_employee" data-id="" type="button">On
                                    Progress </button>
                            </td>
                            <td>
                                <button class="btn btn-sm btn-outline-primary remove_employee" data-id=""
                                    type="button"><i class="fa-solid fa-eye"></i></button>
                            </td>
                        </tr>
                        <tr href="javascript:void(0)" onclick="change_color(this)">
                            <th>4</th>
                            <td>Design Update</td>
                            <td>
                                Designing
                            </td>
                            <td>
                                <img src="./assets/download.jpg" alt="Profile Pic"
                                    style="width: 40px;height: 40px; border-radius: 50px;" /> <b> Faith Harris </b>
                            </td>
                            <td>
                                <button class="btn btn-sm btn-warning remove_employee" data-id=""
                                    type="button">Medium</button>
                            </td>
                            <td>
                                <input type="date" class="form-control" id="date" id="" value="" data-id="" />
                            </td>
                            <td>
                                <input type="date" class="form-control" id="date" id="" value="" data-id="" />
                            </td>
                            <td>
                                <div class="progress mt-1  " data-height="8" style="height: 8px;">
                                    <div class="progress-bar l-bg-cyan bg-success" role="progressbar" data-width="25%"
                                        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 50%;">
                                    </div>
                                </div>
                            </td>
                            <td>
                                <button class="btn btn-sm btn-primary remove_employee" data-id="" type="button">On
                                    Progress</button>
                            </td>
                            <td>
                                <button class="btn btn-sm btn-outline-primary remove_employee" data-id=""
                                    type="button"><i class="fa-solid fa-eye"></i></button>
                            </td>
                        </tr>
                        <tr href="javascript:void(0)" onclick="change_color(this)">
                            <th>5</th>
                            <td>HTML Code Update</td>
                            <td>
                                Developer
                            </td>
                            <td>
                                <img src="./assets/download.jpg" alt="Profile Pic"
                                    style="width: 40px;height: 40px; border-radius: 50px;" /> <b>Austin Bell</b>
                            </td>
                            <td>
                                <button class="btn btn-sm btn-success remove_employee" data-id=""
                                    type="button">Low</button>
                            </td>
                            <td>
                                <input type="date" class="form-control" id="date" id="" value="" data-id="" />
                            </td>
                            <td>
                                <input type="date" class="form-control" id="date" id="" value="" data-id="" />
                            </td>
                            <td>
                                <div class="progress mt-1  " data-height="8" style="height: 8px;">
                                    <div class="progress-bar l-bg-cyan bg-success" role="progressbar" data-width="25%"
                                        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
                                    </div>
                                </div>
                            </td>
                            <td>
                                <button class="btn btn-sm btn-primary remove_employee" data-id="" type="button">On
                                    Progress</button>
                            </td>
                            <td>
                                <button class="btn btn-sm btn-outline-primary remove_employee" data-id=""
                                    type="button"><i class="fa-solid fa-eye"></i></button>
                            </td>
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