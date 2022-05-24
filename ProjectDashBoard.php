<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once("./includes/header/header.php"); ?>
    <title>Project Dashboard</title>
    <style>
        body {
            background-color: #EFF2FA;
        }
        /* html {
            font: 500 14px "Helvetica Neue", Helvetica, Arial, sans-serif;
            color: #333;
            height: 100%;
        }

        body {
            height: 100%;
            margin: 0;
        }

        a {
            text-decoration: none;
        }

        ul,
        ol,
        li {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        #demo {
            width: 400px;
            margin: 30px auto;
        }

        p {
            margin: 0;
        }

        input {
            margin: 10px 0;
            height: 28px;
            width: 200px;
            padding: 0 6px;
            border: 1px solid #ccc;
            outline: none;
        } */

        .circle {
            width: 100px;
            /* margin: 6px 6px 20px; */
            display: inline-block;
            position: absolute;
            text-align: center;
            line-height: 1.2;
        }

        .circle canvas {
            vertical-align: top;
            width: 50px !important;
        }

        .circle strong {
            position: absolute;
            top: 30px;
            left: 0;
            width: 100%;
            text-align: center;
            line-height: 10px;
            font-size: 10px;
            color: black;
        }

        .circle strong i {
            font-style: normal;
            font-size: 0.6em;
            font-weight: normal;
        }

        .circle span {
            display: block;
            color: #aaa;
            margin-top: 12px;
        }

        .badge {
            font-size: large;
        }

        .dot {
            height: 20px;
            width: 20px;
            /* background-color: #bbb; */
            border-radius: 50%;
            display: inline-block;

        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="blockquote">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="#">
                    <h4 class="font-weight-bold">Project<span class="text-muted ml-2">Dashboard</span></h4>
                </a>
                <button class="navbar-toggler" id="" data-id="" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link text-light btn btn-success btn-sm rounded mr-2" id="" data-id="" href="#"
                                type="button" class="btn btn-primary" data-toggle="modal"
                                data-target="#exampleModal1"><span><i class="fa fa-plus"></i></span> Create New
                                Project</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link btn mr-2" id="" data-id="" href="#" style="background-color: #DEE5F7;"><i
                                    class="fa-solid fa-envelope-circle-check"></i><span class="sr-only"></span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn mr-2" id="" data-id="" href="#" style="background-color: #DEE5F7;"><i
                                    class="fa-solid fa-phone"></i> </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn btn-success mr-2" id="" data-id=""><i
                                    class="fa-solid fa-circle-exclamation"></i></a>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- Navbar -->
            <!-- Button trigger modal -->
            <!-- Modal -->
            <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Create New Task</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            ...
                        </div>
                        <div class="modal-footer">
                            <button type="button" id="" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" id="" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- task cards  -->
        <div class="task-cards" id="">
            <div class="container-fluid">
                <div class="projects">
                    <div class="row">
                        <div class="col-xl-3 col-lg-6 col-sm-12 ">
                            <div class="card ">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-xl-8 col-lg-8 col-sm-8">
                                            <div class="h6 font-weight-bold" id="" data-id="">Projects </div>
                                            <div class="h2 text-primary" id="" data-id="">164</div>
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
                                            <div class="h6 font-weight-bold">Pending Projects</div>
                                            <div class="h2 text-danger" id="" data-id="">14</div>
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
                                            <div class="h6 font-weight-bold" id="" data-id="">Completed Projects</div>
                                            <div class="h2 text-success text-success" id="" data-id="">35</div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-sm-4" id="" data-id=""><a type="button" id=""
                                                data-id="" class="btn btn-success btn-lg"><i
                                                    class="fa-solid fa-check"></i></a>
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
                                            <div class="h6 font-weight-bold" id="" data-id="">On going Projects </div>
                                            <div class="h2 text-warning" id="" data-id="">15</div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-sm-4" id="" data-id=""><a type="button" id=""
                                                data-id="" class="btn btn-warning btn-lg"><i
                                                    class="fa-solid fa-exclamation"></i></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- task updates -->
        <div class="task_updates" id="">
            <div class="blockquote">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand" href="#">
                        <h5 class="font-weight-bold">Recent Project Update </h5>
                    </a>
                    <button class="navbar-toggler" id="" data-id="" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation"><span
                            class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent1">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link text-light btn btn-success btn-sm rounded mr-2" id="" data-id=""
                                    href="#" type="button" class="btn btn-primary" data-toggle="modal"
                                    data-target="#exampleModal1"><span><i class="fa fa-plus"></i></span> Add
                                    Projects</a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link btn mr-2" href="#" id="" data-id=""
                                    style="background-color: #DEE5F7;">View All</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link btn mr-2" href="#" id="" data-id=""
                                    style="background-color: #DEE5F7;">Latest</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-8">
                                        <h6 class="font-weight-bold" id="" data-id="">Adobe XD</h6>
                                        <p class="text-muted" id="" data-id="">Lorem ipsum dolor sit, amet consectetur
                                            adipisicing elit. Nam rem explicabo libero nisi ad eaque?</p>
                                    </div>
                                    <div class="col-4">
                                        <img src="./assets/Adobe-XD-Logo-1024x998.png" alt="" class="w-75" id=""
                                            data-id="" />
                                    </div>
                                </div>
                                <div class="border-top" id="progress_bar">
                                    <div class="row">
                                        <div class="col-3 mt-2 mb-3">
                                            <img src="./assets/img1.jpg" alt="" id="" data-id=""
                                                class="w-50 position-absolute ml-5" style="clip-path: circle();" />
                                            <img src="./assets/img1.jpg" alt="" id="" data-id=""
                                                class="w-50  position-absolute ml-4" style="clip-path: circle();" />
                                            <img src="./assets/img1.jpg" alt="" id="" data-id=""
                                                class="w-50 position-absolute " style="clip-path: circle();" />
                                        </div>
                                        <div class="col-3 mt-2 p-1">
                                            <div class="progressbar">
                                                <div class="second circle" data-percent="77">
                                                    <strong></strong>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-3 mt-3">
                                            <input type="button" id="" data-id="" class="btn btn-outline-danger"
                                                value="High" />
                                        </div>
                                        <div class="col-3 mt-3">
                                            <a href="" type="button" id="" data-id="" class="btn btn-outline-dark"><i
                                                    class="fa-solid fa-ellipsis-vertical"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-8">
                                        <h6 class="font-weight-bold" id="" data-id="">HTML</h6>
                                        <p class="text-muted" id="" data-id="">Lorem ipsum dolor sit, amet consectetur
                                            adipisicing elit. Nam rem explicabo libero nisi ad eaque?</p>
                                    </div>
                                    <div class="col-4">
                                        <img src="./assets/html.png" alt="" class="w-100" id="" data-id="" />
                                    </div>
                                </div>
                                <div class="border-top" id="progress_bar">
                                    <div class="row">
                                        <div class="col-3 mt-2 mb-3">
                                            <img src="./assets/img1.jpg" id="" data-id="" alt=""
                                                class="w-50  position-absolute ml-5" style="clip-path: circle();" />
                                            <img src="./assets/img1.jpg" id="" data-id="" alt=""
                                                class="w-50   position-absolute ml-4" style="clip-path: circle();" />
                                            <img src="./assets/img1.jpg" id="" data-id="" alt=""
                                                class="w-50  position-absolute " style="clip-path: circle();" />
                                        </div>
                                        <div class="col-3 mt-2 p-1">
                                            <div class="progressbar">
                                                <div class="second circle" id="" data-id="" data-percent="38">
                                                    <strong></strong>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-3 mt-3">
                                            <input type="button" id="" data-id="" class="btn btn-outline-success"
                                                value="Low" />
                                        </div>
                                        <div class="col-3 mt-3">
                                            <a href="" type="button" id="" data-id="" class="btn btn-outline-dark"><i
                                                    class="fa-solid fa-ellipsis-vertical"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-8">
                                        <h6 class="font-weight-bold" id="" data-id="">Angular</h6>
                                        <p class="text-muted" id="" data-id="">Lorem ipsum dolor sit, amet consectetur
                                            adipisicing elit. Nam rem explicabo libero nisi ad eaque?</p>
                                    </div>
                                    <div class="col-4">
                                        <img src="./assets/angular.png" alt="" class="w-100" id="" data-id="" />
                                    </div>
                                </div>
                                <div class="border-top" id="progress_bar">
                                    <div class="row">
                                        <div class="col-3 mt-2 mb-3">
                                            <img src="./assets/img1.jpg" id="" data-id="" alt=""
                                                class="w-50  position-absolute ml-5" style="clip-path: circle();" />
                                            <img src="./assets/img1.jpg" id="" data-id="" alt=""
                                                class="w-50   position-absolute ml-4" style="clip-path: circle();" />
                                            <img src="./assets/img1.jpg" id="" data-id="" alt=""
                                                class="w-50  position-absolute " style="clip-path: circle();" />
                                        </div>
                                        <div class="col-3 mt-2 p-1">
                                            <div class="progressbar">
                                                <div class="second circle" id="" data-id="" data-percent="67">
                                                    <strong></strong>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-3 mt-3">
                                            <input type="button" id="" data-id=""
                                                class="btn btn-outline-warning btn-sm h-100" value="Medium" />
                                        </div>
                                        <div class="col-3 mt-3">
                                            <a href="" type="button" id="" data-id="" class="btn btn-outline-dark"><i
                                                    class="fa-solid fa-ellipsis-vertical"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-8">
                                        <h6 class="font-weight-bold" id="" data-id="">Responsive Team</h6>
                                        <p class="text-muted" id="" data-id="">Lorem ipsum dolor sit, amet consectetur
                                            adipisicing elit. Nam rem explicabo libero nisi ad eaque?</p>
                                    </div>
                                    <div class="col-4">
                                        <img src="./assets/bootstrap.png" alt="" class="w-75" id="" data-id="" />
                                    </div>
                                </div>
                                <div class="border-top" id="progress_bar">
                                    <div class="row">
                                        <div class="col-3 mt-2 mb-3">
                                            <img src="./assets/img1.jpg" id="" data-id="" alt=""
                                                class="w-50  position-absolute ml-5" style="clip-path: circle();" />
                                            <img src="./assets/img1.jpg" id="" data-id="" alt=""
                                                class="w-50   position-absolute ml-4" style="clip-path: circle();" />
                                            <img src="./assets/img1.jpg" id="" data-id="" alt=""
                                                class="w-50  position-absolute " style="clip-path: circle();" />
                                        </div>
                                        <div class="col-3 mt-2 p-1">
                                            <div class="progressbar">
                                                <div class="second circle" id="" data-id="" data-percent="44">
                                                    <strong></strong>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-3 mt-3">
                                            <input type="button" id="" data-id=""
                                                class="btn btn-outline-warning btn-sm h-100" value="Medium" />
                                        </div>
                                        <div class="col-3 mt-3">
                                            <a href="" type="button" id="" data-id="" class="btn btn-outline-dark"><i
                                                    class="fa-solid fa-ellipsis-vertical"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- task reports  -->
        <div class="task_reports my-4">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12">
                        <div class="card">
                            <div class="row  p-3">
                                <div class="col-xl-6">
                                    <div class="heading">
                                        <h5 class="font-weight-bold" id="" data-id="">Statics </h6>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <input type="month" id="" data-id="" class="form-control w-50 float-right" />
                                </div>
                            </div>
                            <div>
                                <canvas id="myChart"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12">
                        <div class="card">
                            <div class="row  p-3">
                                <div class="col-xl-6">
                                    <div class="heading">
                                        <h5 class="font-weight-bold" id="" data-id="">Milestone</h6>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <a type="button" id="" data-id="" class="btn btn-success float-right">See All<i
                                            class="fa-solid fa-angle-down pl-2"></i></a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="col-xl-4 col-lg-4 col-sm-4" id="" data-id=""><a type="button" id=""
                                            data-id="" class="btn btn-primary btn-lg"><i
                                                class="fa-solid fa-suitcase"></i></a></div>
                                </div>
                                <div class="col-md-8">
                                    <h5>Grocery App Development</h5>
                                    <h6>Deadline: To Day 11:00 Am</h6>
                                </div>
                            </div>
                            <div class="row my-3">
                                <div class="col-md-3">
                                    <div class="col-xl-4 col-lg-4 col-sm-4" id="" data-id=""><a type="button" id=""
                                            data-id="" class="btn btn-success btn-lg"><i
                                                class="fa-solid fa-display"></i></a></div>
                                </div>
                                <div class="col-md-8">
                                    <h5>Ui Update</h5>
                                    <h6>Deadline: To Day 2:30 Pm</h6>
                                </div>
                            </div>
                            <div class="row my-3">
                                <div class="col-md-3">
                                    <div class="col-xl-4 col-lg-4 col-sm-4" id="" data-id=""><a type="button" id=""
                                            data-id="" class="btn btn-danger btn-lg"><i
                                                class="fa-solid fa-file"></i></a></div>
                                </div>
                                <div class="col-md-8">
                                    <h5>Psd Template</h5>
                                    <h6>Deadline: Tomorrow 11:00 Am</h6>
                                </div>
                            </div>
                            <div class="row my-3">
                                <div class="col-md-3">
                                    <div class="col-xl-4 col-lg-4 col-sm-4" id="" data-id=""><a type="button" id=""
                                            data-id="" class="btn btn-primary btn-lg"><i
                                                class="fa-solid fa-arrow-up-right-dots"></i></a></div>
                                </div>
                                <div class="col-md-8">
                                    <h5>Version Update</h5>
                                    <h6>Deadline: 1 Week To Left</h6>
                                </div>
                            </div>
                            <div class="row my-3">
                                <div class="col-md-3">
                                    <div class="col-xl-4 col-lg-4 col-sm-4" id="" data-id=""><a type="button" id=""
                                            data-id="" class="btn btn-warning btn-lg"><i
                                                class="fa-solid fa-mobile-button"></i></a></div>
                                </div>
                                <div class="col-md-8">
                                    <h5>Mobile App </h5>
                                    <h6>Deadline: 3 Days To left</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- activity & reminder task status  -->
        <div class="activity">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12">
                        <div class="card"
                            style="box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;">
                            <div class="card-body overflow-auto">
                                <h5 class="card-title font-weight-bold " data-id="" id="">In Progress Projects</h5>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="col-xl-4 col-lg-4 col-sm-4" id="" data-id=""><a type="button" id=""
                                                data-id="" class="btn btn-primary btn-lg"><i
                                                    class="fa-brands fa-html5"></i></a></div>
                                    </div>
                                    <div class="com-md-6">
                                        <h5>Mobile App</h5>
                                        <h6>html upload file to server</h6>
                                        <h6>Deadline : Tomorrow 11:00 Am</h6>
                                    </div>
                                    <div class="col-md-3">
                                        <h6>Just Now</h6>
                                        <img src="./assets/download.jpg" alt="" id="" data-id=""
                                            class="w-25  position-absolute ml-5 " style="clip-path: circle(); " />
                                        <img src="./assets/download.jpg" alt="" id="" data-id=""
                                            class="w-25   position-absolute ml-4" style="clip-path: circle();" />
                                        <img src="./assets/download.jpg" alt="" id="" data-id=""
                                            class="w-25  position-absolute " style="clip-path: circle(); " />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="col-xl-4 col-lg-4 col-sm-4" id="" data-id=""><a type="button" id=""
                                                data-id="" class="btn btn-primary btn-lg"><i
                                                    class="fa-brands fa-html5"></i></a></div>
                                    </div>
                                    <div class="com-md-6">
                                        <h5>Web Development </h5>
                                        <h6>Theme Design </h6>
                                        <h6>Deadline : Tomorrow 11:00 Am</h6>
                                    </div>
                                    <div class="col-md-3">
                                        <h6>Just Now</h6>
                                        <img src="./assets/download.jpg" alt="" id="" data-id=""
                                            class="w-25  position-absolute ml-5 " style="clip-path: circle(); " />
                                        <img src="./assets/download.jpg" alt="" id="" data-id=""
                                            class="w-25   position-absolute ml-4" style="clip-path: circle();" />
                                        <img src="./assets/download.jpg" alt="" id="" data-id=""
                                            class="w-25  position-absolute " style="clip-path: circle(); " />
                                    </div>
                                </div>
                                <div class="row my-2">
                                    <div class="col-md-3">
                                        <div class="col-xl-4 col-lg-4 col-sm-4" id="" data-id=""><a type="button" id=""
                                                data-id="" class="btn btn-danger btn-lg"><i
                                                    class="fa-brands fa-laravel"></i></a></div>
                                    </div>
                                    <div class="com-md-6">
                                        <h5>Development Laravel </h5>
                                        <h6>Updated Version Laravel</h6>
                                        <h6>Deadline : 3 Days To Left</h6>
                                    </div>
                                    <div class="col-md-3">
                                        <h6>Just Now</h6>
                                        <img src="./assets/download.jpg" alt="" id="" data-id=""
                                            class="w-25  position-absolute ml-5 " style="clip-path: circle(); " />
                                        <img src="./assets/download.jpg" alt="" id="" data-id=""
                                            class="w-25   position-absolute ml-4" style="clip-path: circle();" />
                                        <img src="./assets/download.jpg" alt="" id="" data-id=""
                                            class="w-25  position-absolute " style="clip-path: circle(); " />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title font-weight-bold " data-id="" id="">Activity</h5>
                                <div class="card-body overflow-auto">
                                    <div class="row">
                                        <div class="col-3 ">
                                            <img src="./assets/photo.jpg" alt=""
                                                style="width: 60px; height: 60px; border-radius: 20px;">
                                        </div>
                                        <div class="col-9 ">
                                            <h6 class="mb-2 font-weight-bold" data-id="" id="">Faith Harris Completed
                                                Project Ui Development</h6>
                                            <p class="text-dark" data-id="" id="">Just Know</p>
                                            </hr>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-3 ">
                                            <img src="./assets/download.jpg" alt=""
                                                style="width: 60px; height: 60px; border-radius: 20px;">
                                        </div>
                                        <div class="col-9 ">
                                            <h6 class="mb-2 font-weight-bold" data-id="" id="">James Paige Update New
                                                Version Angular</h6>
                                            <p class="text-dark" data-id="" id="">10 mints to go </p>
                                            </hr>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-3 ">
                                            <img src="./assets/download.jpg" alt=""
                                                style="width: 60px; height: 60px; border-radius: 20px;">
                                        </div>
                                        <div class="col-9 ">
                                            <h6 class="mb-2 font-weight-bold" data-id="" id="">Liam Miller attach design
                                                file new added</h6>
                                            <p class="text-dark" data-id="" id="">1 hour to go </p>
                                            </hr>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-3 ">
                                            <img src="./assets/photo.jpg" alt=""
                                                style="width: 60px; height: 60px; border-radius: 20px;">
                                        </div>
                                        <div class="col-9 ">
                                            <h6 class="mb-2 font-weight-bold" data-id="" id="">Liam Miller attach design
                                                file new added</h6>
                                            <p class="text-dark" data-id="" id="">1 hour to go </p>
                                            </hr>
                                        </div>
                                    </div>
                                    <!-- </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-12 col-sm-12">
                        <div class="card">
                            <h5 class="font-weight-bold p-3">Employee Gender</h5>
                            <div class="p-4">
                                <canvas id="myChart1"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- task tables  -->
        <div class="task_table">
            <div class="container-fluid">
                <div class="row my-4">
                    
                    <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">
                        <div class="card">
                            <div class="row p-3">
                                <div class="col-xl-8">
                                    <div class="heading">
                                        <h5 class="font-weight-bold" id="" data-id="">Project Summary</h6>
                                    </div>
                                </div>
                                <div class="col-xl-4">
                                    <a type="button" id="" data-id=""
                                        class="btn w-auto float-right btn-sm btn-outline-secondary">View All <i
                                            class="fa-solid fa-angle-down m-2"></i></a>
                                </div>
                            </div>
                            <div class=" container-fluid overflow-auto">
                                <table class="bg-success display" id="myTable" data-id="" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th scope="col" id="" data-id="">Project</th>
                                            <th scope="col" id="" data-id="">Team</th>
                                            <th scope="col" id="" data-id="">Start Date</th>
                                            <th scope="col" id="" data-id="">Due Date</th>
                                            <th scope="col" id="" data-id="">Work Status</th>
                                            <th scope="col" id="" data-id="">Status</th>
                                            <th scope="col" id="" data-id="">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody id="dataTable" data-id="">
                                        <tr href="javascript:void(0)" onclick="change_color(this)">
                                            <th scope="row">Development</th>
                                            <td class="col-sm-2">
                                                <img src="./assets/download.jpg" alt="" id="" data-id=""
                                                    class="w-25  position-absolute ml-5"
                                                    style="clip-path: circle(); margin-top: -1.3rem;" />
                                                <img src="./assets/download.jpg" alt="" id="" data-id=""
                                                    class="w-25   position-absolute ml-4"
                                                    style="clip-path: circle(); margin-top: -1.3rem;" />
                                                <img src="./assets/download.jpg" alt="" id="" data-id=""
                                                    class="w-25  position-absolute "
                                                    style="clip-path: circle(); margin-top: -1.3rem;" />
                                            </td>
                                            <td>20-Nov-2020</td>
                                            <td>20-Jan-2021</td>
                                            <td>
                                                <div class="progress">
                                                    <div id="" data-id="" class="progress-bar bg-success"
                                                        role="progressbar" style="width: 34%" aria-valuenow="25"
                                                        aria-valuemin="0" aria-valuemax="100">34%</div>
                                                </div>
                                            </td>
                                            <td class="text-dark">Active</td>
                                            <td>
                                                <a class="btn btn-sm btn-outline-success edit_employee" data-id=""
                                                    type="button" id=""><i class="fa-solid fa-envelope"></i></a>
                                                <a class="btn btn-sm btn-outline-danger remove_employee" data-id=""
                                                    type="button" id=""><i class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                        <div class="card">
                            <!-- <div id="demo">
                                <div id="one"></div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://rawgit.com/kottenator/jquery-circle-progress/1.2.2/dist/circle-progress.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <!-- <script src="https://cdn.bootcss.com/jquery/1.9.0/jquery.min.js"></script> -->
    <!-- <script src="src/calendar.js"></script> -->
    
    <script>
        $(document).ready(function () {
            $('#myTable').DataTable();
        });
    </script>
    <script>
        $(document).ready(function ($) {
            function animateElements() {
                $('.progressbar').each(function () {
                    var elementPos = $(this).offset().top;
                    var topOfWindow = $(window).scrollTop();
                    var percent = $(this).find('.circle').attr('data-percent');
                    var animate = $(this).data('animate');
                    if (elementPos < topOfWindow + $(window).height() - 30 && !animate) {
                        $(this).data('animate', true);
                        $(this).find('.circle').circleProgress({
                            // startAngle: -Math.PI / 2,
                            value: percent / 100,
                            size: 400,
                            thickness: 15,
                            fill: {
                                color: '#663399'
                            }
                        }).on('circle-animation-progress', function (event, progress, stepValue) {
                            $(this).find('strong').text((stepValue * 100).toFixed(0) + "%");
                        }).stop();
                    }
                });
            }

            animateElements();
            $(window).scroll(animateElements);
        });
    </script>
    <script>
        // line chart 
        // setup 
        const labels = [
            'January',
            'February',
            'March',
            'April',
            'May',
            'June',
        ];
        const data = {
            labels: labels,
            datasets: [{
                label: 'Ongoing',
                backgroundColor: 'rgb(0,0,205)',
                borderColor: 'rgb(0,0,205)',
                data: [0, 10, 5, 2, 20, 30, 45],
            },
            {
                label: 'completed',
                backgroundColor: 'rgb(210,105,30)',
                borderColor: 'rgb(210,105,30)',
                data: [10, 15, 25, 22, 23, 32, 15],
            }
            ]
        };
        // config 
        const config = {
            type: 'line',
            data: data,
            options: {}
        };
        const myChart = new Chart(
            document.getElementById('myChart'),
            config
        );
        // doughnut chart 
        const doughnut = {
            labels: [
                'Female',
                'Male'
            ],
            datasets: [{
                label: 'My First Dataset',
                data: [30, 50],
                backgroundColor: [
                    'rgb(241, 137, 45)',
                    'rgb(0, 78, 206)'
                ],
                hoverOffset: 4
            }]
        };
        // config 
        const config2 = {
            type: 'doughnut',
            data: doughnut,
        };
        const myChart1 = new Chart(
            document.getElementById('myChart1'),
            config2
        );
        // bar chart 
        // setup 
        const labels2 = [
            'Sunday',
            'Monday',
            'Tuesday',
            'Wednesday',
            'Thursday',
            'Friday',
            'Saturday'
        ];
        const bar = {
            labels: labels2,
            datasets: [{
                label: 'Working Hours',
                backgroundColor: 'rgb(182, 189, 235)',
                borderColor: 'rgb(182, 189, 235)',
                data: [10, 10, 10, 10, 10, 10, 10],
            },
            {
                label: 'Work',
                backgroundColor: 'rgb(34, 109, 217)',
                borderColor: 'rgb(34, 109, 217)',
                data: [8, 6, 6.5, 7, 4, 9, 8],
            }
            ]
        };
        // config 
        const config3 = {
            type: 'bar',
            data: bar,
        };
        const myChart2 = new Chart(
            document.getElementById('myChart2'),
            config3
        );
    </script>
    <script>
        var now = new Date();
        var year = now.getFullYear();
        var month = now.getMonth() + 1;
        var date = now.getDate();


        var dataa = [{
            date: year + '-' + month + '-' + (date - 1),
            value: 'hello'
        }, {
            date: year + '-' + month + '-' + date,
            value: '上班'
        }, {
            date: new Date(year, month - 1, date + 1),
            value: '吃饭睡觉打豆豆'
        }, {
            date: '2016-10-31',
            value: '2016-10-31'
        }];

        // inline
        var $ca = $('#one').calendar({
            // view: 'month',
            width: 320,
            height: 320,
            // startWeek: 0,
            // selectedRang: [new Date(), null],
            data: data,
            monthArray: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
            date: new Date(2016, 9, 31),
            onSelected: function (view, date, data) {
                console.log('view:' + view)
                console.log('date:' + date)
                console.log('data:' + (data || '无'));
            },
            viewChange: function (view, y, m) {
                console.log(view, y, m)

            }
        });

        // picker
        $('#two').calendar({
            trigger: '#dt',
            // offset: [0, 1],
            zIndex: 999,
            data: data,
            onSelected: function (view, date, data) {
                console.log('event: onSelected')
            },
            onClose: function (view, date, data) {
                console.log('event: onClose')
                console.log('view:' + view)
                console.log('date:' + date)
                console.log('data:' + (data || '无'));
            }
        });

        // Dynamic elements
        var $demo = $('#demo');
        var UID = 1;
        $('#add').click(function () {
            $demo.append('<input id="input-' + UID + '"><div id="ca-' + UID + '"></div>');
            $('#ca-' + UID).calendar({
                trigger: '#input-' + UID++
            })
        })
    </script>
</body>

</html>