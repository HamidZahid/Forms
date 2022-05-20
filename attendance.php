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
        <nav class="navbar navbar-expand-lg navbar-light bg-light my-4">
            <div class="container-fluid">

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="nav nav-tabs" id="myTab">
                        <li class="nav-item">
                            <a class="nav-link text-dark mx-4" data-toggle="tab" id="Workers" onclick="myf()"
                                href="#ActiveEmployees">Attendance Overview </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  text-dark" data-toggle="tab" id="Cardss" onclick="myfn()"
                                href="#PresentEmployees">Attendance By Users </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Tabs -->
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active " id="ActiveEmployees">
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
                                        <input type="date" class="form-control" id="date" id="" value="" data-id="" />
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-xl-3 col-lg-6">
                            <form>
                                <div class="row mb-1 mt-1 ">
                                    <label for="department" class="col-sm-4 col-md-4 form-label">Year:</label>
                                    <div class="col-md-10 col-sm-10 col-xs-10">
                                        <input type="date" class="form-control" id="date" id="date" id="" value="" data-id="" />
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
                    <div class="container-fluid my-3">
                        <div class="row">
                            <div class="col-md-2">
                                <h5>Note:</h5>
                            </div>
                            <div class="col-md-2">

                                <button class="btn btn-sm btn-outline-success edit_employee #348C7E" data-id=""
                                    type="button"><i class="fa-solid fa-circle-check "> &rarr; Present</i></button>
                            </div>
                            <div class="col-md-3">

                                <button class="btn btn-sm btn-outline-danger remove_employee" data-id=""
                                    type="button"><i class="fa-solid fa-circle-xmark  "> &rarr; Absent</i></button>
                            </div>
                            <div class="col-md-2">

                                <button class="btn btn-sm btn-outline-warning remove_employee" data-id=""
                                    type="button"><i class="fa-solid fa-circle-check  "> &rarr; Holiday</i></button>
                            </div>
                            <div class="col-md-3">

                                <button class="btn btn-sm btn-outline-primary remove_employee" data-id=""
                                    type="button"><i class="fa-solid fa-circle-half-stroke  "> &rarr; Half Day</i></button>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="container-fluid overflow-auto">
                        <table class="bg-light display" id="myTable" style="width:100%">
                            <thead>
                                <tr>
                                    <th scope="col">EmployeeName</th>
                                    <th scope="col">1</th>
                                    <th scope="col">2</th>
                                    <th scope="col"> 3</th>
                                    <th scope="col">4</th>
                                    <th scope="col"> 5</th>
                                    <th scope="col"> 6</th>
                                    <th scope="col"> 7 </th>
                                    <th scope="col">8</th>
                                    <th scope="col">9</th>
                                    <th scope="col">10</th>
                                    <th scope="col">11</th>
                                    <th scope="col">12</th>
                                    <th scope="col">13</th>
                                    <th scope="col">14</th>
                                    <th scope="col">15</th>
                                    <th scope="col">16</th>
                                </tr>
                            </thead>
                            <tbody id="dataTable">

                                <tr href="javascript:void(0)" onclick="change_color(this)">

                                    <th> <img src="./assets/download.jpg" alt="Profile Pic"
                                            style="width: 40px; border-radius: 50%; height: 40px;"/> Mujahid Hussain</th>

                                    <td>
                                        <button class="btn btn-sm btn-outline-success edit_employee #348C7E" data-id=""
                                            type="button"><i class="fa-solid fa-circle-check  "></i></button>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-danger remove_employee" data-id=""
                                            type="button"><i class="fa-solid fa-circle-xmark"></i></button>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-primary remove_employee" data-id=""
                                            type="button"><i class="fa-solid fa-circle-half-stroke "></i></button>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-danger remove_employee" data-id=""
                                            type="button"><i class="fa-solid fa-circle-check  "></i></button>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-success edit_employee #348C7E" data-id=""
                                            type="button"><i class="fa-solid fa-circle-check  "></i></button>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-danger remove_employee" data-id=""
                                            type="button"><i class="fa-solid fa-circle-xmark"></i></button>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-primary remove_employee" data-id=""
                                            type="button"><i class="fa-solid fa-circle-half-stroke "></i></button>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-danger remove_employee" data-id=""
                                            type="button"><i class="fa-solid fa-circle-check  "></i></button>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-success edit_employee #348C7E" data-id=""
                                            type="button"><i class="fa-solid fa-circle-check  "></i></button>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-danger remove_employee" data-id=""
                                            type="button"><i class="fa-solid fa-circle-xmark"></i></button>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-primary remove_employee" data-id=""
                                            type="button"><i class="fa-solid fa-circle-half-stroke "></i></button>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-danger remove_employee" data-id=""
                                            type="button"><i class="fa-solid fa-circle-check  "></i></button>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-success edit_employee #348C7E" data-id=""
                                            type="button"><i class="fa-solid fa-circle-check  "></i></button>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-danger remove_employee" data-id=""
                                            type="button"><i class="fa-solid fa-circle-xmark"></i></button>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-primary remove_employee" data-id=""
                                            type="button"><i class="fa-solid fa-circle-half-stroke "></i></button>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-danger remove_employee" data-id=""
                                            type="button"><i class="fa-solid fa-circle-check  "></i></button>
                                    </td>
                                </tr>
                                <tr href="javascript:void(0)" onclick="change_color(this)">

                                    <th> <img src="./assets/download.jpg" alt="Profile Pic"
                                            style="width: 40px; border-radius: 50%; height: 40px;"/> Mujahid</th>

                                    <td>
                                        <button class="btn btn-sm btn-outline-success edit_employee #348C7E" data-id=""
                                            type="button"><i class="fa-solid fa-circle-check  "></i></button>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-danger remove_employee" data-id=""
                                            type="button"><i class="fa-solid fa-circle-xmark"></i></button>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-primary remove_employee" data-id=""
                                            type="button"><i class="fa-solid fa-circle-half-stroke "></i></button>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-danger remove_employee" data-id=""
                                            type="button"><i class="fa-solid fa-circle-check  "></i></button>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-success edit_employee #348C7E" data-id=""
                                            type="button"><i class="fa-solid fa-circle-check  "></i></button>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-danger remove_employee" data-id=""
                                            type="button"><i class="fa-solid fa-circle-xmark"></i></button>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-primary remove_employee" data-id=""
                                            type="button"><i class="fa-solid fa-circle-half-stroke "></i></button>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-danger remove_employee" data-id=""
                                            type="button"><i class="fa-solid fa-circle-check  "></i></button>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-success edit_employee #348C7E" data-id=""
                                            type="button"><i class="fa-solid fa-circle-check  "></i></button>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-danger remove_employee" data-id=""
                                            type="button"><i class="fa-solid fa-circle-xmark"></i></button>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-primary remove_employee" data-id=""
                                            type="button"><i class="fa-solid fa-circle-half-stroke "></i></button>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-danger remove_employee" data-id=""
                                            type="button"><i class="fa-solid fa-circle-check  "></i></button>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-success edit_employee #348C7E" data-id=""
                                            type="button"><i class="fa-solid fa-circle-check  "></i></button>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-danger remove_employee" data-id=""
                                            type="button"><i class="fa-solid fa-circle-xmark"></i></button>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-primary remove_employee" data-id=""
                                            type="button"><i class="fa-solid fa-circle-half-stroke "></i></button>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-danger remove_employee" data-id=""
                                            type="button"><i class="fa-solid fa-circle-check  "></i></button>
                                    </td>
                                </tr>
                                <tr href="javascript:void(0)" onclick="change_color(this)">

                                    <th><img src="./assets/download.jpg" alt="Profile Pic"
                                            style="width: 40px; border-radius: 50%; height: 40px;"/> Mujahid</th>

                                    <td>
                                        <button class="btn btn-sm btn-outline-success edit_employee #348C7E" data-id=""
                                            type="button"><i class="fa-solid fa-circle-check  "></i></button>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-danger remove_employee" data-id=""
                                            type="button"><i class="fa-solid fa-circle-xmark"></i></button>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-primary remove_employee" data-id=""
                                            type="button"><i class="fa-solid fa-circle-half-stroke "></i></button>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-danger remove_employee" data-id=""
                                            type="button"><i class="fa-solid fa-circle-check  "></i></button>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-success edit_employee #348C7E" data-id=""
                                            type="button"><i class="fa-solid fa-circle-check  "></i></button>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-danger remove_employee" data-id=""
                                            type="button"><i class="fa-solid fa-circle-xmark"></i></button>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-primary remove_employee" data-id=""
                                            type="button"><i class="fa-solid fa-circle-half-stroke "></i></button>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-danger remove_employee" data-id=""
                                            type="button"><i class="fa-solid fa-circle-check  "></i></button>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-success edit_employee #348C7E" data-id=""
                                            type="button"><i class="fa-solid fa-circle-check  "></i></button>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-danger remove_employee" data-id=""
                                            type="button"><i class="fa-solid fa-circle-xmark"></i></button>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-primary remove_employee" data-id=""
                                            type="button"><i class="fa-solid fa-circle-half-stroke "></i></button>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-danger remove_employee" data-id=""
                                            type="button"><i class="fa-solid fa-circle-check  "></i></button>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-success edit_employee #348C7E" data-id=""
                                            type="button"><i class="fa-solid fa-circle-check  "></i></button>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-danger remove_employee" data-id=""
                                            type="button"><i class="fa-solid fa-circle-xmark"></i></button>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-primary remove_employee" data-id=""
                                            type="button"><i class="fa-solid fa-circle-half-stroke "></i></button>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-danger remove_employee" data-id=""
                                            type="button"><i class="fa-solid fa-circle-check  "></i></button>
                                    </td>
                                </tr>
                                <tr href="javascript:void(0)" onclick="change_color(this)">

                                    <th><img src="./assets/download.jpg" alt="Profile Pic"
                                            style="width: 40px; border-radius: 50%; height: 40px;"/> Mujahid</th>

                                    <td>
                                        <button class="btn btn-sm btn-outline-success edit_employee #348C7E" data-id=""
                                            type="button"><i class="fa-solid fa-circle-check  "></i></button>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-danger remove_employee" data-id=""
                                            type="button"><i class="fa-solid fa-circle-xmark"></i></button>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-primary remove_employee" data-id=""
                                            type="button"><i class="fa-solid fa-circle-half-stroke "></i></button>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-danger remove_employee" data-id=""
                                            type="button"><i class="fa-solid fa-circle-check  "></i></button>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-success edit_employee #348C7E" data-id=""
                                            type="button"><i class="fa-solid fa-circle-check  "></i></button>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-danger remove_employee" data-id=""
                                            type="button"><i class="fa-solid fa-circle-xmark"></i></button>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-primary remove_employee" data-id=""
                                            type="button"><i class="fa-solid fa-circle-half-stroke "></i></button>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-danger remove_employee" data-id=""
                                            type="button"><i class="fa-solid fa-circle-check  "></i></button>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-success edit_employee #348C7E" data-id=""
                                            type="button"><i class="fa-solid fa-circle-check  "></i></button>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-danger remove_employee" data-id=""
                                            type="button"><i class="fa-solid fa-circle-xmark"></i></button>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-primary remove_employee" data-id=""
                                            type="button"><i class="fa-solid fa-circle-half-stroke "></i></button>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-danger remove_employee" data-id=""
                                            type="button"><i class="fa-solid fa-circle-check  "></i></button>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-success edit_employee #348C7E" data-id=""
                                            type="button"><i class="fa-solid fa-circle-check  "></i></button>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-danger remove_employee" data-id=""
                                            type="button"><i class="fa-solid fa-circle-xmark"></i></button>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-primary remove_employee" data-id=""
                                            type="button"><i class="fa-solid fa-circle-half-stroke "></i></button>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-danger remove_employee" data-id=""
                                            type="button"><i class="fa-solid fa-circle-check  "></i></button>
                                    </td>
                                </tr>
                                <tr href="javascript:void(0)" onclick="change_color(this)">

                                    <th><img src="./assets/download.jpg" alt="Profile Pic"
                                            style="width: 40px; border-radius: 50%; height: 40px;"/> Mujahid</th>

                                    <td>
                                        <button class="btn btn-sm btn-outline-success edit_employee #348C7E" data-id=""
                                            type="button"><i class="fa-solid fa-circle-check  "></i></button>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-danger remove_employee" data-id=""
                                            type="button"><i class="fa-solid fa-circle-xmark"></i></button>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-primary remove_employee" data-id=""
                                            type="button"><i class="fa-solid fa-circle-half-stroke "></i></button>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-danger remove_employee" data-id=""
                                            type="button"><i class="fa-solid fa-circle-check  "></i></button>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-success edit_employee #348C7E" data-id=""
                                            type="button"><i class="fa-solid fa-circle-check  "></i></button>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-danger remove_employee" data-id=""
                                            type="button"><i class="fa-solid fa-circle-xmark"></i></button>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-primary remove_employee" data-id=""
                                            type="button"><i class="fa-solid fa-circle-half-stroke "></i></button>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-danger remove_employee" data-id=""
                                            type="button"><i class="fa-solid fa-circle-check  "></i></button>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-success edit_employee #348C7E" data-id=""
                                            type="button"><i class="fa-solid fa-circle-check  "></i></button>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-danger remove_employee" data-id=""
                                            type="button"><i class="fa-solid fa-circle-xmark"></i></button>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-primary remove_employee" data-id=""
                                            type="button"><i class="fa-solid fa-circle-half-stroke "></i></button>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-danger remove_employee" data-id=""
                                            type="button"><i class="fa-solid fa-circle-check  "></i></button>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-success edit_employee #348C7E" data-id=""
                                            type="button"><i class="fa-solid fa-circle-check  "></i></button>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-danger remove_employee" data-id=""
                                            type="button"><i class="fa-solid fa-circle-xmark"></i></button>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-primary remove_employee" data-id=""
                                            type="button"><i class="fa-solid fa-circle-half-stroke "></i></button>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-danger remove_employee" data-id=""
                                            type="button"><i class="fa-solid fa-circle-check  "></i></button>
                                    </td>
                                </tr>
                                <tr href="javascript:void(0)" onclick="change_color(this)">

                                    <th><img src="./assets/download.jpg" alt="Profile Pic"
                                            style="width: 40px; border-radius: 50%; height: 40px;"/> Mujahid</th>

                                    <td>
                                        <button class="btn btn-sm btn-outline-success edit_employee #348C7E" data-id=""
                                            type="button"><i class="fa-solid fa-circle-check  "></i></button>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-danger remove_employee" data-id=""
                                            type="button"><i class="fa-solid fa-circle-xmark"></i></button>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-primary remove_employee" data-id=""
                                            type="button"><i class="fa-solid fa-circle-half-stroke "></i></button>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-danger remove_employee" data-id=""
                                            type="button"><i class="fa-solid fa-circle-check  "></i></button>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-success edit_employee #348C7E" data-id=""
                                            type="button"><i class="fa-solid fa-circle-check  "></i></button>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-danger remove_employee" data-id=""
                                            type="button"><i class="fa-solid fa-circle-xmark"></i></button>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-primary remove_employee" data-id=""
                                            type="button"><i class="fa-solid fa-circle-half-stroke "></i></button>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-danger remove_employee" data-id=""
                                            type="button"><i class="fa-solid fa-circle-check  "></i></button>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-success edit_employee #348C7E" data-id=""
                                            type="button"><i class="fa-solid fa-circle-check  "></i></button>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-danger remove_employee" data-id=""
                                            type="button"><i class="fa-solid fa-circle-xmark"></i></button>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-primary remove_employee" data-id=""
                                            type="button"><i class="fa-solid fa-circle-half-stroke "></i></button>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-danger remove_employee" data-id=""
                                            type="button"><i class="fa-solid fa-circle-check  "></i></button>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-success edit_employee #348C7E" data-id=""
                                            type="button"><i class="fa-solid fa-circle-check  "></i></button>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-danger remove_employee" data-id=""
                                            type="button"><i class="fa-solid fa-circle-xmark"></i></button>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-primary remove_employee" data-id=""
                                            type="button"><i class="fa-solid fa-circle-half-stroke "></i></button>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-danger remove_employee" data-id=""
                                            type="button"><i class="fa-solid fa-circle-check  "></i></button>
                                    </td>
                                </tr>
                                <tr href="javascript:void(0)" onclick="change_color(this)">

                                    <th><img src="./assets/download.jpg" alt="Profile Pic"
                                            style="width: 40px; border-radius: 50%; height: 40px;"/> Mujahid</th>

                                    <td>
                                        <button class="btn btn-sm btn-outline-success edit_employee #348C7E" data-id=""
                                            type="button"><i class="fa-solid fa-circle-check  "></i></button>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-danger remove_employee" data-id=""
                                            type="button"><i class="fa-solid fa-circle-xmark"></i></button>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-primary remove_employee" data-id=""
                                            type="button"><i class="fa-solid fa-circle-half-stroke "></i></button>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-danger remove_employee" data-id=""
                                            type="button"><i class="fa-solid fa-circle-check  "></i></button>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-success edit_employee #348C7E" data-id=""
                                            type="button"><i class="fa-solid fa-circle-check  "></i></button>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-danger remove_employee" data-id=""
                                            type="button"><i class="fa-solid fa-circle-xmark"></i></button>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-primary remove_employee" data-id=""
                                            type="button"><i class="fa-solid fa-circle-half-stroke "></i></button>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-danger remove_employee" data-id=""
                                            type="button"><i class="fa-solid fa-circle-check  "></i></button>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-success edit_employee #348C7E" data-id=""
                                            type="button"><i class="fa-solid fa-circle-check  "></i></button>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-danger remove_employee" data-id=""
                                            type="button"><i class="fa-solid fa-circle-xmark"></i></button>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-primary remove_employee" data-id=""
                                            type="button"><i class="fa-solid fa-circle-half-stroke "></i></button>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-danger remove_employee" data-id=""
                                            type="button"><i class="fa-solid fa-circle-check  "></i></button>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-success edit_employee #348C7E" data-id=""
                                            type="button"><i class="fa-solid fa-circle-check  "></i></button>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-danger remove_employee" data-id=""
                                            type="button"><i class="fa-solid fa-circle-xmark"></i></button>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-primary remove_employee" data-id=""
                                            type="button"><i class="fa-solid fa-circle-half-stroke "></i></button>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-danger remove_employee" data-id=""
                                            type="button"><i class="fa-solid fa-circle-check  "></i></button>
                                    </td>
                                </tr>
                                <tr href="javascript:void(0)" onclick="change_color(this)">

                                    <th><img src="./assets/download.jpg" alt="Profile Pic"
                                            style="width: 40px; border-radius: 50%; height: 40px;"/> Mujahid</th>

                                    <td>
                                        <button class="btn btn-sm btn-outline-success edit_employee #348C7E" data-id=""
                                            type="button"><i class="fa-solid fa-circle-check  "></i></button>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-danger remove_employee" data-id=""
                                            type="button"><i class="fa-solid fa-circle-xmark"></i></button>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-primary remove_employee" data-id=""
                                            type="button"><i class="fa-solid fa-circle-half-stroke "></i></button>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-danger remove_employee" data-id=""
                                            type="button"><i class="fa-solid fa-circle-check  "></i></button>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-success edit_employee #348C7E" data-id=""
                                            type="button"><i class="fa-solid fa-circle-check  "></i></button>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-danger remove_employee" data-id=""
                                            type="button"><i class="fa-solid fa-circle-xmark"></i></button>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-primary remove_employee" data-id=""
                                            type="button"><i class="fa-solid fa-circle-half-stroke "></i></button>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-danger remove_employee" data-id=""
                                            type="button"><i class="fa-solid fa-circle-check  "></i></button>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-success edit_employee #348C7E" data-id=""
                                            type="button"><i class="fa-solid fa-circle-check  "></i></button>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-danger remove_employee" data-id=""
                                            type="button"><i class="fa-solid fa-circle-xmark"></i></button>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-primary remove_employee" data-id=""
                                            type="button"><i class="fa-solid fa-circle-half-stroke "></i></button>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-danger remove_employee" data-id=""
                                            type="button"><i class="fa-solid fa-circle-check  "></i></button>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-success edit_employee #348C7E" data-id=""
                                            type="button"><i class="fa-solid fa-circle-check  "></i></button>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-danger remove_employee" data-id=""
                                            type="button"><i class="fa-solid fa-circle-xmark"></i></button>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-primary remove_employee" data-id=""
                                            type="button"><i class="fa-solid fa-circle-half-stroke "></i></button>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-danger remove_employee" data-id=""
                                            type="button"><i class="fa-solid fa-circle-check  "></i></button>
                                    </td>
                                </tr>
                                <tr href="javascript:void(0)" onclick="change_color(this)">

                                    <th><img src="./assets/download.jpg" alt="Profile Pic"
                                            style="width: 40px; border-radius: 50%; height: 40px;"/> Mujahid</th>

                                    <td>
                                        <button class="btn btn-sm btn-outline-success edit_employee #348C7E" data-id=""
                                            type="button"><i class="fa-solid fa-circle-check  "></i></button>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-danger remove_employee" data-id=""
                                            type="button"><i class="fa-solid fa-circle-xmark"></i></button>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-primary remove_employee" data-id=""
                                            type="button"><i class="fa-solid fa-circle-half-stroke "></i></button>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-danger remove_employee" data-id=""
                                            type="button"><i class="fa-solid fa-circle-check  "></i></button>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-success edit_employee #348C7E" data-id=""
                                            type="button"><i class="fa-solid fa-circle-check  "></i></button>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-danger remove_employee" data-id=""
                                            type="button"><i class="fa-solid fa-circle-xmark"></i></button>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-primary remove_employee" data-id=""
                                            type="button"><i class="fa-solid fa-circle-half-stroke "></i></button>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-danger remove_employee" data-id=""
                                            type="button"><i class="fa-solid fa-circle-check  "></i></button>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-success edit_employee #348C7E" data-id=""
                                            type="button"><i class="fa-solid fa-circle-check  "></i></button>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-danger remove_employee" data-id=""
                                            type="button"><i class="fa-solid fa-circle-xmark"></i></button>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-primary remove_employee" data-id=""
                                            type="button"><i class="fa-solid fa-circle-half-stroke "></i></button>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-danger remove_employee" data-id=""
                                            type="button"><i class="fa-solid fa-circle-check  "></i></button>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-success edit_employee #348C7E" data-id=""
                                            type="button"><i class="fa-solid fa-circle-check  "></i></button>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-danger remove_employee" data-id=""
                                            type="button"><i class="fa-solid fa-circle-xmark"></i></button>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-primary remove_employee" data-id=""
                                            type="button"><i class="fa-solid fa-circle-half-stroke "></i></button>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-danger remove_employee" data-id=""
                                            type="button"><i class="fa-solid fa-circle-check  "></i></button>
                                    </td>
                                </tr>
                                <tr href="javascript:void(0)" onclick="change_color(this)">

                                    <th><img src="./assets/download.jpg" alt="Profile Pic"
                                            style="width: 40px; border-radius: 50%; height: 40px;" /> Mujahid</th>

                                    <td>
                                        <button class="btn btn-sm btn-outline-success edit_employee #348C7E" data-id=""
                                            type="button"><i class="fa-solid fa-circle-check  "></i></button>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-danger remove_employee" data-id=""
                                            type="button"><i class="fa-solid fa-circle-xmark"></i></button>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-primary remove_employee" data-id=""
                                            type="button"><i class="fa-solid fa-circle-half-stroke "></i></button>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-danger remove_employee" data-id=""
                                            type="button"><i class="fa-solid fa-circle-check  "></i></button>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-success edit_employee #348C7E" data-id=""
                                            type="button"><i class="fa-solid fa-circle-check  "></i></button>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-danger remove_employee" data-id=""
                                            type="button"><i class="fa-solid fa-circle-xmark"></i></button>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-primary remove_employee" data-id=""
                                            type="button"><i class="fa-solid fa-circle-half-stroke "></i></button>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-danger remove_employee" data-id=""
                                            type="button"><i class="fa-solid fa-circle-check  "></i></button>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-success edit_employee #348C7E" data-id=""
                                            type="button"><i class="fa-solid fa-circle-check  "></i></button>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-danger remove_employee" data-id=""
                                            type="button"><i class="fa-solid fa-circle-xmark"></i></button>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-primary remove_employee" data-id=""
                                            type="button"><i class="fa-solid fa-circle-half-stroke "></i></button>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-danger remove_employee" data-id=""
                                            type="button"><i class="fa-solid fa-circle-check  "></i></button>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-success edit_employee #348C7E" data-id=""
                                            type="button"><i class="fa-solid fa-circle-check  "></i></button>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-danger remove_employee" data-id=""
                                            type="button"><i class="fa-solid fa-circle-xmark"></i></button>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-primary remove_employee" data-id=""
                                            type="button"><i class="fa-solid fa-circle-half-stroke "></i></button>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-danger remove_employee" data-id=""
                                            type="button"><i class="fa-solid fa-circle-check  "></i></button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </section>
            </div>
            <div class="tab-pane fade show  " id="PresentEmployees">
                <div class="container-fluid my-3">
                    <div class="row">
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
                                        <input type="date" class="form-control" id="date">
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-xl-2 col-lg-6">
                            <form>
                                <div class="row mb-1 mt-1 ">
                                    <label for="department" class="col-sm-4 col-md-4 form-label">Month:</label>
                                    <div class="col-md-10 col-sm-10 col-xs-10">
                                        <input type="date" class="form-control" id="date" id="date" id="" value="" data-id="" />
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-xl-2 col-lg-6">
                            <form>
                                <div class="row mb-1 mt-1 ">
                                    <label for="department" class="col-sm-4 col-md-4 form-label">Year:</label>
                                    <div class="col-md-10 col-sm-10 col-xs-10">
                                        <input type="date" class="form-control" id="date" id="date" id="" value="" data-id="" />
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
                                    <th scope="col">Date</th>
                                    <th scope="col">Day</th>
                                    <th scope="col">Status</th>
                                    <th scope="col"> Clock In </th>
                                    <th scope="col">Clock Out</th>
                                    <th scope="col"> Progress</th>
                                    <th scope="col"> Action</th>
                                </tr>
                            </thead>
                            <tbody id="dataTablee">

                                <tr href="javascript:void(0)" onclick="change_color(this)">

                                    <th><input type="date" class="form-control" id="date" id="" value="" data-id="" /></th>

                                    <td><input type="week" class="form-control" id="date" id="" value="" data-id="" /></td>
                                    <td>
                                        Present
                                    </td>
                                    <td>
                                        8:00Am
                                    </td>
                                    <td>
                                        6:00Pm
                                    </td>
                                    <td>
                                        <div class="progress mt-1  " data-height="8" style="height: 8px;">
                                            <div class="progress-bar l-bg-cyan bg-success" role="progressbar"
                                                data-width="25%" aria-valuenow="25" aria-valuemin="0"
                                                aria-valuemax="100" style="width: 69%;"></div>
                                        </div>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-primary remove_employee" data-id=""
                                            type="button"><i class="fa-solid fa-eye"></i></button>
                                    </td>
                                </tr>
                                <tr href="javascript:void(0)" onclick="change_color(this)">

                                    <th><input type="date" class="form-control" id="date" id="" value="" data-id="" /></th>

                                    <td><input type="week" class="form-control" id="date" id="" value="" data-id="" /></td>
                                    <td>
                                        Present
                                    </td>
                                    <td>
                                        8:00Am
                                    </td>
                                    <td>
                                        6:00Pm
                                    </td>
                                    <td>
                                        <div class="progress mt-1 bg-danger " data-height="8" style="height: 8px;">
                                            <div class="progress-bar l-bg-cyan bg-success" role="progressbar"
                                                data-width="25%" aria-valuenow="25" aria-valuemin="0"
                                                aria-valuemax="100" style="width: 69%;"></div>
                                        </div>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-primary remove_employee" data-id=""
                                            type="button"><i class="fa-solid fa-eye"></i></button>
                                    </td>
                                </tr>
                                <tr href="javascript:void(0)" onclick="change_color(this)">

                                    <th><input type="date" class="form-control" id="date" id="" value="" data-id="" /></th>

                                    <td><input type="week" class="form-control" id="date" id="" value="" data-id="" /></td>
                                    <td>
                                        Present
                                    </td>
                                    <td>
                                        8:00Am
                                    </td>
                                    <td>
                                        6:00Pm
                                    </td>
                                    <td>
                                        <div class="progress mt-1 bg-success  " data-height="8" style="height: 8px;">
                                            <div class="progress-bar l-bg-cyan bg-success" role="progressbar"
                                                data-width="25%" aria-valuenow="25" aria-valuemin="0"
                                                aria-valuemax="100" style="width: 49%;"></div>
                                        </div>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-primary remove_employee" data-id=""
                                            type="button"><i class="fa-solid fa-eye"></i></button>
                                    </td>
                                </tr>
                                <tr href="javascript:void(0)" onclick="change_color(this)">

                                    <th><input type="date" class="form-control" id="date" id="" value="" data-id="" /></th>

                                    <td><input type="week" class="form-control" id="date" id="" value="" data-id="" /></td>
                                    <td>
                                        Present
                                    </td>
                                    <td>
                                        8:00Am
                                    </td>
                                    <td>
                                        6:00Pm
                                    </td>
                                    <td>
                                        <div class="progress mt-1  " data-height="8" style="height: 8px;">
                                            <div class="progress-bar l-bg-cyan bg-success" role="progressbar"
                                                data-width="25%" aria-valuenow="25" aria-valuemin="0"
                                                aria-valuemax="100" style="width: 69%;"></div>
                                        </div>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-primary remove_employee" data-id=""
                                            type="button"><i class="fa-solid fa-eye"></i></button>
                                    </td>
                                </tr>
                                <tr href="javascript:void(0)" onclick="change_color(this)">

                                    <th><input type="date" class="form-control" id="date" id="" value="" data-id="" /></th>

                                    <td><input type="week" class="form-control" id="date" id="" value="" data-id="" /></td>
                                    <td>
                                        Present
                                    </td>
                                    <td>
                                        8:00Am
                                    </td>
                                    <td>
                                        6:00Pm
                                    </td>
                                    <td>
                                        <div class="progress mt-1 bg-success " data-height="8" style="height: 8px;">
                                            <div class="progress-bar l-bg-cyan bg-success" role="progressbar"
                                                data-width="25%" aria-valuenow="25" aria-valuemin="0"
                                                aria-valuemax="100" style="width: 9%;"></div>
                                        </div>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-primary remove_employee" data-id=""
                                            type="button"><i class="fa-solid fa-eye"></i></button>
                                    </td>
                                </tr>
                                <tr href="javascript:void(0)" onclick="change_color(this)">

                                    <th><input type="date" class="form-control" id="date" id="" value="" data-id="" /></th>

                                    <td><input type="week" class="form-control" id="date" id="" value="" data-id="" /></td>
                                    <td>
                                        Present
                                    </td>
                                    <td>
                                        8:00Am
                                    </td>
                                    <td>
                                        6:00Pm
                                    </td>
                                    <td>
                                        <div class="progress mt-1 bg-success  " data-height="8" style="height: 8px;">
                                            <div class="progress-bar l-bg-cyan bg-success" role="progressbar"
                                                data-width="25%" aria-valuenow="25" aria-valuemin="0"
                                                aria-valuemax="100" style="width: 80%;"></div>
                                        </div>
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