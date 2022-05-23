<!DOCTYPE html>
<html lang="en">

<head>
    <?php
         include('./includes/header/header.php');
    ?>
    <title>Task 01 Design Updated</title>
</head>

<body>
    <div class="container-fluid">
        <blockquote class="blockquote my-4">
            <div class="conatiner-fluid">
                <!-- Navbar -->
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand" href="#">
                        <h4> Task 01 Design Updated </h4>
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link text-light btn btn-primary btn-sm rounded mr-2" href="#">+ Create New
                                    Task </a>
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
        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-8 col-lg-7">
                                <h5 class="card-title font-weight-bold" id="" data-id="">Assigned To</h5>
                            </div>
                            <div class="col-xl-4 col-lg-5">
                                <input id="" data-id="" type="button" class="btn btn-danger btn-sm"
                                    value="Recurring" />
                            </div>
                        </div>
                        <div class="image text-center">
                            <img id="" data-id="" src="./assets/photo.jpg" alt="100x100" srcset=""
                                style="clip-path: circle();" class="w-25 z-depth-2 ">
                        </div>
                        <div class="card-text text-center">
                            <p class="font-weight-bold" id="" data-id="">Faith Haris</p>
                            <p class="text-muted" id="" data-id="">Web Developer</p>
                            <div class="row mb-3">
                                <div class="col-5">
                                    <div class="h6 ">Department</div>
                                </div>
                                <div class="col-2">
                                    <div class="h6 font-weight-bold">:</div>
                                </div>
                                <div class="col-5">
                                    <div class="h6 font-weight-bold" id="" data-id="">Designing</div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-5">
                                    <div class="h6 ">Start Date</div>
                                </div>
                                <div class="col-2">
                                    <div class="h6 font-weight-bold">:</div>
                                </div>
                                <div class="col-5">
                                    <div class="h6 font-weight-bold" id="" data-id="">12-02-2021</div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-5">
                                    <div class="h6 ">Deadline</div>
                                </div>
                                <div class="col-2">
                                    <div class="h6 font-weight-bold">:</div>
                                </div>
                                <div class="col-5">
                                    <div class="h6 font-weight-bold" id="" data-id="">20-02-2021</div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-5">
                                    <div class="h6 ">Priority</div>
                                </div>
                                <div class="col-2">
                                    <div class="h6 font-weight-bold">:</div>
                                </div>
                                <div class="col-5">
                                    <div class="h6 font-weight-bold text-light bg-danger rounded" id=""
                                        data-id="">High</div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-5">
                                    <div class="h6 ">Work Status</div>
                                </div>
                                <div class="col-2">
                                    <div class="h6 font-weight-bold">:</div>
                                </div>
                                <div class="col-5">
                                    <div class="h6 font-weight-bold text-light bg-warning rounded " id=""
                                        data-id="">On Hold</div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-12">
                                    <h6 class="font-weight-bold">Project Status</h6>
                                    <div class="progress">
                                        <div class="progress-bar" id="" data-id="" name="" role="progressbar"
                                            style="width: 25%;" aria-valuenow="25" aria-valuemin="0"
                                            aria-valuemax="100">25%</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <nav class="navbar navbar-expand-lg navbar-light bg-light my-4">
                    <div class="container-fluid">

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="nav nav-tabs" id="myTab">
                                <li class="nav-item">
                                    <a class="nav-link text-dark mx-4" data-toggle="tab" href="#Details">Details </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link  text-dark" data-toggle="tab" href="#Sub">Sub Task </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link  text-dark" data-toggle="tab" href="#Comment">Comment </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link  text-dark" data-toggle="tab" href="#Note">Note</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link  text-dark" data-toggle="tab" href="#Attachement">Attachement
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link  text-dark" data-toggle="tab" href="#FAQS">FAQS </a>
                                </li>
                            </ul>
                        </div>

                    </div>
                </nav>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show " id="FAQS">
                        <div class="accordion" id="accordionExample">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h2 class="mb-0">
                                        <button class="btn  btn-block text-left" type="button" data-toggle="collapse"
                                            data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Have you insert Form Validatin Page?
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                    data-parent="#accordionExample">
                                    <div class="card-body">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut ipsam dolor aliquid
                                        enim incidunt in facere beatae sint tempora laudantium animi sunt deleniti
                                        recusandae, voluptates non hic ipsa excepturi. Similique sunt accusantium
                                        officiis rem. Recusandae laboriosam temporibus repellendus eum maxime, eaque
                                        voluptatum corporis facilis deserunt dignissimos magnam repudiandae velit soluta
                                        cupiditate rem. Explicabo dolorem eos a ab voluptatum placeat quis omnis sit
                                        quod suscipit doloribus et, aut nemo minima distinctio. Vitae harum fugiat,
                                        perferendis quaerat molestias consectetur hic magnam et voluptatibus, natus,
                                        placeat deleniti obcaecati quam repellendus. Error beatae fuga, illum laborum,
                                        earum, temporibus facilis pariatur labore quaerat sapiente voluptatem!
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingTwo">
                                    <h2 class="mb-0">
                                        <button class="btn  btn-block text-left collapsed" type="button"
                                            data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false"
                                            aria-controls="collapseTwo">
                                            Have You Made Responsiveness?
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                    data-parent="#accordionExample">
                                    <div class="card-body">
                                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Alias fugit esse
                                        repellat cumque nostrum quaerat sed culpa tempore, quo veniam facilis
                                        reprehenderit odit id! Quas iusto id, a hic consequatur veniam, alias magnam
                                        animi minima voluptatibus enim eum eos aliquam natus nemo repellendus illum et
                                        sed optio. Accusamus facere, voluptates rerum debitis, consequatur eum fuga
                                        eaque, cum quis necessitatibus dicta quasi? Consequatur quaerat laudantium
                                        rerum. Molestiae doloribus enim odit, voluptatibus labore ratione minus
                                        voluptatum reiciendis dolorem porro, voluptate sed nemo, unde magni illum eius
                                        perferendis impedit assumenda hic voluptatem dolorum consectetur illo nihil?
                                        Mollitia necessitatibus soluta ut ullam! Ratione, repudiandae?
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingThree">
                                    <h2 class="mb-0">
                                        <button class="btn  btn-block text-left collapsed" type="button"
                                            data-toggle="collapse" data-target="#collapseThree" aria-expanded="false"
                                            aria-controls="collapseThree">
                                            Have you using Bootstrap?
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                    data-parent="#accordionExample">
                                    <div class="card-body">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel cupiditate neque
                                        magnam odit eligendi laudantium nostrum cumque culpa commodi accusamus
                                        reiciendis magni deleniti, consectetur fuga veniam sed quae esse quia ullam,
                                        officia, soluta nesciunt? Optio, impedit! Rem, repudiandae quis quia illo,
                                        consequatur perspiciatis similique vero eaque incidunt voluptas aut esse optio,
                                        fugiat soluta maxime ad labore ab minus eum aliquam recusandae corporis
                                        mollitia! Dolorem error inventore modi eum ipsam reiciendis magnam excepturi
                                        deleniti voluptate tempora ab repellendus repudiandae harum, consectetur
                                        praesentium maiores est aliquid quis numquam doloribus beatae suscipit. Eum fuga
                                        repellat impedit voluptates molestiae necessitatibus inventore distinctio, rem
                                        nemo.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingThree">
                                    <h2 class="mb-0">
                                        <button class="btn  btn-block text-left collapsed" type="button"
                                            data-toggle="collapse" data-target="#collapseThree" aria-expanded="false"
                                            aria-controls="collapseThree">
                                            Have you insert live Chat?
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                    data-parent="#accordionExample">
                                    <div class="card-body">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut molestias nisi hic
                                        magnam deserunt nihil, dignissimos doloremque vero aliquam quisquam consectetur
                                        repellendus tenetur nobis obcaecati ad fugit commodi, sint libero odit nam
                                        dolorum porro modi inventore dolor? Velit molestias nesciunt totam earum,
                                        placeat obcaecati minima! Cupiditate veniam rem expedita quisquam dolores quidem
                                        quasi sed debitis impedit omnis, earum repudiandae voluptatibus neque quibusdam,
                                        fugiat fugit odit libero similique ipsa tenetur? Rem porro aliquam architecto
                                        voluptatibus eligendi impedit nesciunt, totam optio eos, harum, accusamus
                                        necessitatibus quidem cum. Et, ducimus, quibusdam ad ullam veniam velit minus
                                        ratione voluptate asperiores rem eveniet vitae voluptates.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-primary my-3"> + Add Faq</button>
                    </div>
                    <div class="tab-pane fade show  " id="Note">
                        <div class="form-group">
                            <label for="inputAddress"><b>Title :</b></label>
                            <input type="text" class="form-control" id="" value="" data-id="" placeholder="Text" />
                        </div>
                        <label for="inputAddress"><b>Note :</b></label>
                        <input type="text" class="form-control" id="" value="" data-id="" placeholder="Text" />
                        <div class="row">
                            <div class="col-md-12">
                                <button class="btn btn-primary  my-3 float-right">Submit</button>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade show  " id="Sub">
                        <div class="card">
                        <div class="row">
                            <div class="col-md-11">
                                <button class="btn btn-primary  my-3 float-right"> Add Task</button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card" style="width: 18rem;">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <h5 class="card-title text-primary">Today Task</h5>
                                            </div>
                                            <div class="col-md-4">
                                                <button class="btn btn-xl btn-outline-primary remove_employee mx-3 my-0"
                                                    data-id="" id="de"  onclick="myF()" type="button"><i
                                                        class="fa-solid fa-ellipsis"></i></button>
                                            </div>
                                        </div>
                                        <h6>Jquery Issues Fixed</h6>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa saepe sit
                                            consectetur quo.</p>
                                        <i class="fa-solid fa-clock"></i> Dead Line 6:00Pm
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card" style="width: 18rem;">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <h5 class="card-title text-danger">Pending Task</h5>
                                            </div>
                                            <div class="col-md-4">
                                                <button class="btn btn-xl btn-outline-danger remove_employee mx-3 my-0"
                                                    data-id="" id="dem"  onclick="myFu()" type="button"><i
                                                        class="fa-solid fa-ellipsis"></i></button>

                                            </div>
                                        </div>
                                        <h6>HTML Updated</h6>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa saepe sit
                                            consectetur quo.</p>
                                        <i class="fa-solid fa-clock"></i> Dead Line 2:30Pm
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card" style="width: 18rem;">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <h5 class="card-title text-success">Completed Task</h5>
                                            </div>
                                            <div class="col-md-4">
                                                <button class="btn btn-xl btn-outline-success remove_employee mx-3 my-0"
                                                    data-id="" id="demo"  onclick="myFun()" type="button"><i
                                                        class="fa-solid fa-ellipsis "></i></button>
                                            </div>
                                        </div>
                                        <h6>HTML Updated</h6>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa saepe sit
                                            consectetur quo.</p>
                                        <i class="fa-solid fa-clock"></i> Dec 02 2019
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
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
        function myF() {
            document.getElementById('de').innerHTML = "<i class='fa-solid fa-pen'></i><hr><i class='fa-solid fa-trash'></i>" ;
        }
        function myFu() {
            document.getElementById('dem').innerHTML = "<i class='fa-solid fa-pen'></i><hr><i class='fa-solid fa-trash'></i>" ;
        }
        function myFun() {
            document.getElementById('demo').innerHTML = "<i class='fa-solid fa-pen'></i><hr><i class='fa-solid fa-trash'></i>" ;
        }
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