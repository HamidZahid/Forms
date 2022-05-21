<!DOCTYPE html>
<html lang="en">

<head>
    <?php
         include('./includes/header/header.php');
    ?>
    <title>User Profile</title>
</head>

<body>
    <div class="container-fluid">
        <blockquote class="blockquote my-4">
            <div class="conatiner-fluid">
                <!-- Navbar -->
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand" href="#">
                        <h4>User Profile</h4>
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                            <!-- <li class="nav-item">
                                <a class="nav-link text-light btn btn-primary btn-sm rounded mr-2" href="#">+ Create New Task </a>
                            </li> -->
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
        <div class="row">
            <div class="col-md-3">
                <div class="col-md-3">
                    <div class="card" style="width: 22rem; border-radius: 20px; ">
                        <div class="row align-self-center my-4">
                            <div class="col-md-12 col-sm-12 col-xl-12 ">
                                <img class="mx-2" src="./assets/photo.jpg" alt="Profile Img"
                                    style="width: 100px; height: 100px; border-radius: 50px;" />
                                <h5 class="my-2 mx-2">Faith Harris</h5>
                                <h6 class="my-2 ">faith@gmail.com</h6>
                                <button class="btn btn-sm btn-outline-warning remove_employee  my-2" data-id=""
                                    type="button"><i class="fa-solid fa-star"></i></button>
                                <button class="btn btn-sm btn-outline-dark remove_employee mx-1 my-2" data-id=""
                                    type="button"><i class="fa-solid fa-pen-to-square "></i></button>
                                <button class="btn btn-sm btn-outline-dark remove_employee mx-1" data-id="" type="button"><i
                                        class="fa-solid fa-envelope"></i></button>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4 ">
                                <h6 style="text-align: center;">This Year</h6>
                                <h6 class="text-success" style="text-align: center;"> 22 </h6>
                                <h6  style="text-align: center;">Total Projects</h6>
                            </div>
                            <div class="col-md-4">
                                <h6 style="text-align: center;">This Year</h6>
                                <h6 class="text-danger" style="text-align: center;"> 12 </h6>
                                <h6 style="text-align: center;">Total Tasks</h6>
                            </div>
                            <div class="col-md-4" >
                                <h6 style="text-align: center;">This Year</h6>
                                <h6 class="text-primary" style="text-align: center;"> 2 </h6>
                                <h6 style="text-align: center;">Awards</h6>
                            </div>
                        </div>   
                    </div>
                    <div class="card my-4" style="width: 22rem; border-radius: 20px; ">
                        <div class="row my-3">
                            <div class="col-md-12">
                                <h5 class="my-2 mx-3" style="border-left: 6px solid rgb(65, 65, 237);"><b>Basic Info</b></h5>
                            </div>
                        </div>
                        <div class="row ">
                            <div class="col-md-6 col-sm-6 col-xl-6  ">
                                <h6 class="mx-3">Employee ID</h6>
                                <h6 class="mx-3">Designation</h6>
                                <h6 class="mx-3">Department</h6>
                                <h6 class="mt-3 mx-3">Join Date </h6>
                                <h6 class="mt-3 mx-3">Phone Number </h6>
                                <h6 class="mt-3 mx-3">Status</h6>
                            </div>
                            <div class="col-md-1 col-sm-1 col-xl-1">
                                <h6>:</h6>
                                <h6>:</h6>
                                <h6>:</h6>
                                <h6 class="mt-3">:</h6>
                                <h6 class="mt-3">:</h6>
                                <h6 class="mt-3">:</h6>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xl-4 mb-3" s>
                                <h6>#2987</h6>
                                <h6>Web Designer</h6>
                                <h6>Designing</h6>
                                <h6>05-05-2021</h6>
                                <h6>+92xxxxxxxx</h6>
                                <button class="btn-sm w-100 btn-success">Active</button>
                            </div>
                        </div>
                    </div>
                    <div class="card my-4" style="width: 22rem; border-radius: 5px; ">
                        <div class="row my-3">
                            <div class="col-md-12">
                                <h5 class="my-2 mx-3" style="border-left: 6px solid rgb(65, 65, 237);"><b>Statictics</b></h5>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-9">
                                <h6 class="mx-1">Tasks :</h6>
                            </div>
                            <div class="col-md-3">
                                <h6 class="mx-1">45% </h6>
                            </div>
                        </div>
                        <div class="row my-2">
                            <div class="col-md-12">
                                <div class="progress mt-1 bg- " data-height="8" style="height: 8px;">
                                    <div class="progress-bar l-bg-cyan bg-danger" role="progressbar" data-width="25%"
                                        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 10%;"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row my-2">
                            <div class="col-md-9">
                                <h6 class="mx-1">Projects :</h6>
                            </div>
                            <div class="col-md-3">
                                <h6 class="mx-1">56% </h6>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="progress mt-1 bg- " data-height="8" style="height: 8px;">
                                    <div class="progress-bar l-bg-cyan bg-primary" role="progressbar" data-width="25%"
                                        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 56%;"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row my-2">
                            <div class="col-md-9">
                                <h6 class="mx-1">Over All Performance  :</h6>
                            </div>
                            <div class="col-md-3">
                                <h6 class="mx-1">72% </h6>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="progress mt-1 bg- " data-height="8" style="height: 8px;">
                                    <div class="progress-bar l-bg-cyan bg-success" role="progressbar" data-width="25%"
                                        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 72%;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="container-fluid my-3">
                    <div class="row">
                        <div class="col-md-3 text-center">
                            <div class="card my-4" style="width: 15rem; border-radius: 15px;">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h5 class="mx-2 my-2"><b> Total Tasks</b></h5>
                                        <h5 class="text-danger"><b> 1254</b></h5>
                                    </div>
                                    <div class="col-md-6" >
                                        <button class="btn btn-xl btn-outline-danger remove_employee mx-1 my-4 " data-id=""
                                    type="button" ><i class="fa-solid fa-bag-shopping" ></i></button>          
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 text-center">
                            <div class="card my-4" style="width: 15rem; border-radius: 15px; background-color: white;">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h5 class="mx-2 my-2"><b> Total Tasks</b></h5>
                                        <h5 class="text-primary"><b>42</b></h5>
                                    </div>
                                    <div class="col-md-6" >
                                        <button class="btn btn-xl btn-outline-primary remove_employee mx-1 my-4 " data-id=""
                                    type="button" ><i class="fa-solid fa-clipboard"></i></button>          
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 text-center">
                            <div class="card my-4" style="width: 15rem; border-radius: 15px; background-color: white;">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h5 class="mx-2 my-2"><b> Total Tasks</b></h5>
                                        <h5 class="text-warning"><b>11</b></h5>
                                    </div>
                                    <div class="col-md-6" >
                                        <button class="btn btn-xl btn-outline-warning remove_employee mx-1 my-4 " data-id=""
                                    type="button" ><i class="fa-solid fa-circle-info"></i></button>          
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 text-center">
                            <div class="card my-4" style="width: 15rem; border-radius: 15px; background-color: white;">
                                <div class="row">
                                    <div class="col-md-8">
                                        <h5 class="mx-2 my-2"><b>Completed Tasks</b></h5>
                                        <h5 class="text-success"><b>38</b></h5>
                                    </div>
                                    <div class="col-md-4" >
                                        <button class="btn btn-xl btn-outline-success remove_employee mx-1 my-4 mr-4 " data-id=""
                                    type="button" ><i class="fa-solid fa-check"></i></button>          
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="container-fluid mx-2">
                    <div class="row ">
                        <div class="col-xl-4 col-lg-6">
                            <fieldset class="">
                                <div class="row mb-1 mt-1 ">
                                    <label for="overtime" class="col-xl-4 col-md-4 col-sm-4 form-label ">From :
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
                        <div class="col-xl-3 col-lg-6">
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
                        <table class="bg-light display" id="myTablee" style="width:100%">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Task</th>
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
                                            <div class="progress-bar l-bg-cyan bg-success" role="progressbar"
                                                data-width="25%" aria-valuenow="25" aria-valuemin="0"
                                                aria-valuemax="100" style="width: 10%;">
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-warning remove_employee" data-id=""
                                            type="button">On Hold</button>
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
                                            <div class="progress-bar l-bg-cyan bg-success" role="progressbar"
                                                data-width="25%" aria-valuenow="25" aria-valuemin="0"
                                                aria-valuemax="100" style="width: 20%;">
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-danger remove_employee" data-id=""
                                            type="button">Dealy</button>
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
                                            <div class="progress-bar l-bg-cyan bg-success" role="progressbar"
                                                data-width="25%" aria-valuenow="25" aria-valuemin="0"
                                                aria-valuemax="100" style="width: 100%;">
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-success remove_employee" data-id=""
                                            type="button">Completed</button>
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
                                            <div class="progress-bar l-bg-cyan bg-success" role="progressbar"
                                                data-width="25%" aria-valuenow="25" aria-valuemin="0"
                                                aria-valuemax="100" style="width: 90%;">
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-primary remove_employee" data-id=""
                                            type="button">On Progress</button>
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
                                            <div class="progress-bar l-bg-cyan bg-success" role="progressbar"
                                                data-width="25%" aria-valuenow="25" aria-valuemin="0"
                                                aria-valuemax="100" style="width: 80%;">
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-primary remove_employee" data-id=""
                                            type="button">On Progress</button>
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

<!-- <div class="row ">
    <div class="col-md-6 col-sm-6 col-xl-6  ">
        <h6 class="mx-3">Department</h6>
        <h6 class="mx-3">Start Time</h6>
        <h6 class="mx-3">Deadline </h6>
        <h6 class="mt-3 mx-3">Priority </h6>
        <h6 class="mt-3 mx-3">Wrok Status </h6>
    </div>
    <div class="col-md-1 col-sm-1 col-xl-1">
        <h6> :</h6>
        <h6> :</h6>
        <h6> :</h6>
        <h6 class="mt-3"> :</h6>
        <h6 class="mt-3"> :</h6>
    </div>
    <div class="col-md-4 col-sm-4 col-xl-4">
        <h6>Designing</h6>
        <h6>12-2-2021</h6>
        <h6>16-6-2021</h6>
        <p class="text-danger">High</p>
        <p class="text-warning" style="margin-top: 0px;">On Hold</p>
    </div>
</div>
<div class="row">
    <div class="col-md-8">
        <h6 class="mx-1">Project Status :</h6>
    </div>
    <div class="col-md-4">
        <h6 class="mx-1">30% </h6>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="progress mt-1 bg- " data-height="8" style="height: 8px;">
            <div class="progress-bar l-bg-cyan bg-success" role="progressbar" data-width="25%"
                aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 30%;">
            </div>
        </div>
    </div>
</div> -->