<!DOCTYPE html>
<html lang="en">

<head>
    <?php include(".\includes\header\header.php"); ?>

    <title>Task Assign</title>
    <style>
        body {
            background-color: #EFF2FA;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="blockquote mt-2">
            <div class="container-fluid">
                <!-- Navbar -->
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand" href="#">
                        <h4><span class="text-muted mr-2">Project # 67</span>Mobile App</h4>
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation"><span
                            class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link text-light btn btn-success btn-sm rounded mr-2" href="#"
                                    type="button" class="btn btn-primary" data-toggle="modal"
                                    data-target="#exampleModal1"><span><i class="fa fa-plus"></i></span> Create New
                                    Project</a>
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
                                <a class="nav-link btn btn-success mr-2"><i
                                        class="fa-solid fa-circle-exclamation"></i></a>
                            </li>
                        </ul>
                    </div>
                </nav>
                <!-- Navbar -->
            </div>
        </div>
        <!-- Button trigger modal -->
        <!-- Modal -->
        <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Create Project</h5>
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
        <!-- model 2nd  -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add Member</h5>
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
            <div class="project_assigned">
                <div class="row">
                    <div class="col-xl-3 col-lg-5 col-md-5">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-xl-8 col-lg-7">
                                        <h6 class="card-title font-weight-bold m-2 pb-4" id="" data-id="">Project
                                            Details</h5>
                                    </div>
                                </div>
                                <div class="card-text text-center">
                                    <div class="row mb-3">
                                        <div class="col-5">
                                            <div class="h6 ">Team Lead</div>
                                        </div>
                                        <div class="col-2">
                                            <div class="h6 font-weight-bold">:</div>
                                        </div>
                                        <div class="col-5">
                                            <div class="h6 font-weight-bold" id="" data-id="">Abigeli Kelly</div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-5">
                                            <div class="h6 ">Client </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="h6 font-weight-bold">:</div>
                                        </div>
                                        <div class="col-5">
                                            <div class="h6 font-weight-bold" id="" data-id="">Abigeli Kelly</div>
                                        </div>
                                    </div>
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
                                            <div class="h6 ">Budget</div>
                                        </div>
                                        <div class="col-2">
                                            <div class="h6 font-weight-bold">:</div>
                                        </div>
                                        <div class="col-5">
                                            <div class="h6 font-weight-bold" id="" data-id="">$97,000</div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-5">
                                            <div class="h6 ">Duration</div>
                                        </div>
                                        <div class="col-2">
                                            <div class="h6 font-weight-bold">:</div>
                                        </div>
                                        <div class="col-5">
                                            <div class="h6 font-weight-bold" id="" data-id="">5 Months</div>
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
                                            <div class="h6 font-weight-bold text-light bg-primary rounded " id=""
                                                data-id="">Active</div>
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
                        <div class="card my-3">
                            <div class="row p-3">
                                <div class="col-xl-8">
                                    <div class="heading">
                                        <h5 class="font-weight-bold" id="" data-id="">Assigned Team</h6>
                                    </div>
                                </div>
                                <div class="col-xl-4">
                                    <a type="button" id="" data-id=""
                                        class="btn w-auto float-right btn-sm btn-outline-success" data-toggle="modal"
                                        data-target="#exampleModal">Add</a>
                                </div>
                            </div>
                            <div class=" container-fluid overflow-auto">
                                <table class=" display" id="myTable" data-id="">
                                    <thead>
                                        <tr>
                                            <th scope="col" id="" data-id="">Image</th>
                                            <th scope="col" id="" data-id="">Name</th>
                                            <th scope="col" id="" data-id="">Progress</th>
                                            <th scope="col" id="" data-id="">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody id="dataTable" data-id="">
                                        <tr href="javascript:void(0)" onclick="change_color(this)">
                                            <td>
                                                <img id="" data-id="" src="./assets/download.jpg" alt="" class="w-75"
                                                    style="clip-path:circle() ;" />
                                            </td>
                                            <td style="font-size: 0.8rem;">
                                                <p class="font-weight-bold" id="" data-id="">Maclene Coleman</p>
                                                <p class="text-muted">App Developer</p>
                                            </td>
                                            <td>
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" style="width: 25%;"
                                                        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <a class="btn btn-sm btn-outline-success edit_employee" data-id=""
                                                    type="button" id=""><i class="fa fa-add "></i></a>
                                                <a class="btn btn-sm btn-outline-danger remove_employee" data-id=""
                                                    type="button" id=""><i class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-7 col-md-7">
                        <ul class="nav nav-tabs text-dark" id="myTab">
                            <li class="nav-item">
                                <a class="nav-link  text-dark font-weight-bold border_bottom border_bottom_info"
                                    data-toggle="tab" href="#overview">Overview</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-dark font-weight-bold" data-toggle="tab" href="#task">Task</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-dark font-weight-bold" data-toggle="tab" href="#files">Files</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-dark font-weight-bold" data-toggle="tab"
                                    href="#milestones">Milestones</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-dark font-weight-bold" data-toggle="tab"
                                    href="#comments">Comments</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-dark font-weight-bold" data-toggle="tab" href="#note">Note</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-dark font-weight-bold" data-toggle="tab"
                                    href="#invoices">Invoices</a>
                            </li>
                        </ul>
                        <div class="all_task"
                            style="box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;">
                            <div class="tab-content admin" id="myTabContent">
                                <div class="tab-pane fade show " id="overview">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="h6 font-weight-bold">Description</h5>
                                            <p class="mb-2 text-muted" name="" id="" data-id="">Lorem ipsum dolor sit
                                                amet consectetur,
                                                adipisicing elit. Aut nesciunt reprehenderit tempora amet vero, corrupti
                                                quisquam doloremque fugiat tenetur officia veritatis. Vitae tenetur qui
                                                consequatur maiores aliquam ipsa enim tempora.</p>
                                            <p class="card-text" name="" id="" data-id="">Lorem, ipsum dolor sit amet
                                                consectetur adipisicing
                                                elit. Amet quos impedit iusto laboriosam earum soluta aspernatur commodi
                                                illo velit itaque! Alias, cum aut omnis assumenda ipsa quod iusto
                                                possimus illo aspernatur sed? Perspiciatis cumque voluptatibus officia
                                                ut voluptates dicta commodi? Neque aut suscipit, nesciunt doloremque
                                                iure nobis harum animi pariatur blanditiis facere est eligendi minima
                                                deleniti iusto ratione, iste veniam nemo quaerat. Explicabo voluptates
                                                nulla ut quam nesciunt quisquam architecto ad. Sed autem est id
                                                quibusdam facilis eligendi ullam debitis quisquam accusamus! Laudantium
                                                sequi fugiat aperiam itaque, quis ea ullam neque, dolorem ipsum numquam
                                                laborum laboriosam! Nobis incidunt necessitatibus ducimus ratione error
                                                tempora suscipit iste magni, officiis reprehenderit optio est harum
                                                dolores quaerat, in a similique. Porro necessitatibus vero hic libero
                                                optio saepe deserunt fugit est adipisci ab aperiam soluta sint dicta
                                                quis, ratione maxime eaque ut corrupti illo earum ex? Veniam, eos
                                                tempora consequuntur a dolorem tempore repudiandae quod. Doloribus quia
                                                amet pariatur explicabo, optio dolore nihil at voluptas voluptates est
                                                veritatis aspernatur ipsum atque unde perferendis. Quibusdam sed
                                                accusantium placeat exercitationem saepe illum non deserunt sequi
                                                sapiente praesentium nam magni numquam ab tempora voluptatem quod ut
                                                nostrum libero, ratione repellat suscipit consequatur! Unde facere hic
                                                numquam iusto nesciunt explicabo a atque, repellat ipsum corrupti. Saepe
                                                dolor quos exercitationem, iusto rerum explicabo aspernatur impedit
                                                reprehenderit accusantium fuga hic aliquam. Vel consequatur cum quo,
                                                eius suscipit dignissimos voluptates a officia non, hic molestias
                                                eligendi voluptate asperiores sequi! Mollitia veritatis quaerat delectus
                                                optio culpa repellat quia quod voluptatum, illo placeat, fugiat debitis
                                                nihil illum impedit nostrum enim ab hic, autem vel pariatur. Amet sunt
                                                corrupti quasi fugiat exercitationem similique est, quam quae fuga neque
                                                deleniti suscipit magnam dolores laudantium voluptatibus. Ad vitae quasi
                                                exercitationem. Porro exercitationem adipisci cum quae voluptatem unde
                                                quod pariatur molestias cumque labore! Iusto enim reiciendis similique
                                                quae aut, perferendis sed consectetur hic, cum architecto asperiores. In
                                                itaque deserunt earum? Necessitatibus, sunt asperiores labore,
                                                obcaecati, fuga quaerat eius nostrum similique fugiat ut ab voluptatibus
                                                pariatur qui natus assumenda adipisci dicta ipsam libero? Natus, eaque,
                                                repellendus sequi quae iure temporibus a aperiam illo nulla nemo sunt
                                                non totam soluta ipsam, voluptatem cupiditate officiis adipisci est!
                                                Inventore non cupiditate nam reprehenderit tempore deserunt, iste quia
                                                excepturi vero beatae ipsa laudantium error laboriosam sint dolores
                                                voluptates modi quasi hic cumque eum obcaecati. Ex sed, commodi iusto
                                                animi dignissimos doloremque tenetur, debitis voluptatibus error magnam
                                                quia modi deleniti aspernatur accusantium suscipit facere..</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade show  " id="task">
                                    <div class="card">
                                        <section class="p-2 bg-light rounded">
                                            <div class="container-fluid overflow-auto">
                                                <table class="bg-light display" id="myTablee" style="width:100%">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">No</th>
                                                            <th scope="col">Task</th>
                                                            <th scope="col">Client</th>
                                                            <th scope="col">Assign To </th>
                                                            <th scope="col">Priority</th>
                                                            <th scope="col">Start Date</th>
                                                            <th scope="col">Deadline</th>
                                                            <th scope="col">Project</th>
                                                            <th scope="col">Work Status</th>
                                                            <th scope="col">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="dataTablee">
                                                        <tr href="javascript:void(0)" onclick="change_color(this)">
                                                            <th>1</th>
                                                            <td>Marketing Material issue</td>
                                                            <td>
                                                                Julia Walker
                                                            </td>
                                                            <td>
                                                                <img src="./assets/download.jpg" alt="Profile Pic"
                                                                    style="width: 40px;height: 40px; border-radius: 50px;" />
                                                                <b> Peter Hill </b>
                                                            </td>
                                                            <td>
                                                                <button class="btn btn-sm btn-danger remove_employee"
                                                                    data-id="" type="button">High</button>
                                                            </td>
                                                            <td>
                                                                <input type="date" class="form-control" id="date" id=""
                                                                    value="" data-id="" />
                                                            </td>
                                                            <td>
                                                                <input type="date" class="form-control" id="date" id=""
                                                                    value="" data-id="" />
                                                            </td>
                                                            <td>
                                                                <h6>Status</h6>
                                                                <div class="progress mt-1  " data-height="8"
                                                                    style="height: 8px;">
                                                                    <div class="progress-bar l-bg-cyan bg-success"
                                                                        role="progressbar" data-width="25%"
                                                                        aria-valuenow="25" aria-valuemin="0"
                                                                        aria-valuemax="100" style="width: 100%;">
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <button class="btn btn-sm btn-success remove_employee"
                                                                    data-id="" type="button">Completed</button>
                                                            </td>
                                                            <td>
                                                                <button
                                                                    class="btn btn-sm btn-outline-primary remove_employee"
                                                                    data-id="" type="button"><i
                                                                        class="fa-solid fa-eye"></i></button>
                                                            </td>
                                                        </tr>
                                                        <tr href="javascript:void(0)" onclick="change_color(this)">
                                                            <th>2</th>
                                                            <td>Logo Design</td>
                                                            <td>
                                                                Julia Walker
                                                            </td>
                                                            <td>
                                                                <img src="./assets/download.jpg" alt="Profile Pic"
                                                                    style="width: 40px;height: 40px; border-radius: 50px;" />
                                                                <b> Victoria Layman </b>
                                                            </td>
                                                            <td>
                                                                <button class="btn btn-sm btn-danger remove_employee"
                                                                    data-id="" type="button">High</button>
                                                            </td>
                                                            <td>
                                                                <input type="date" class="form-control" id="date" id=""
                                                                    value="" data-id="" />
                                                            </td>
                                                            <td>
                                                                <input type="date" class="form-control" id="date" id=""
                                                                    value="" data-id="" />
                                                            </td>
                                                            <td>
                                                                <h6>Status</h6>
                                                                <div class="progress mt-1  " data-height="8"
                                                                    style="height: 8px;">
                                                                    <div class="progress-bar l-bg-cyan bg-success"
                                                                        role="progressbar" data-width="25%"
                                                                        aria-valuenow="25" aria-valuemin="0"
                                                                        aria-valuemax="100" style="width: 100%;">
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <button class="btn btn-sm btn-success remove_employee"
                                                                    data-id="" type="button">Completed</button>
                                                            </td>
                                                            <td>
                                                                <button
                                                                    class="btn btn-sm btn-outline-primary remove_employee"
                                                                    data-id="" type="button"><i
                                                                        class="fa-solid fa-eye"></i></button>
                                                            </td>
                                                        </tr>
                                                        <tr href="javascript:void(0)" onclick="change_color(this)">
                                                            <th>3</th>
                                                            <td>Theme Update</td>
                                                            <td>
                                                                Julia Walker
                                                            </td>
                                                            <td>
                                                                <img src="./assets/download.jpg" alt="Profile Pic"
                                                                    style="width: 40px;height: 40px; border-radius: 50px;" />
                                                                <b> Melanie Colman </b>
                                                            </td>
                                                            <td>
                                                                <button class="btn btn-sm btn-success remove_employee"
                                                                    data-id="" type="button">Low</button>
                                                            </td>
                                                            <td>
                                                                <input type="date" class="form-control" id="date" id=""
                                                                    value="" data-id="" />
                                                            </td>
                                                            <td>
                                                                <input type="date" class="form-control" id="date" id=""
                                                                    value="" data-id="" />
                                                            </td>
                                                            <td>
                                                                <h6>Status</h6>
                                                                <div class="progress mt-1  " data-height="8"
                                                                    style="height: 8px;">
                                                                    <div class="progress-bar l-bg-cyan bg-success"
                                                                        role="progressbar" data-width="25%"
                                                                        aria-valuenow="25" aria-valuemin="0"
                                                                        aria-valuemax="100" style="width: 100%;">
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <button class="btn btn-sm btn-success remove_employee"
                                                                    data-id="" type="button">Completed</button>
                                                            </td>
                                                            <td>
                                                                <button
                                                                    class="btn btn-sm btn-outline-primary remove_employee"
                                                                    data-id="" type="button"><i
                                                                        class="fa-solid fa-eye"></i></button>
                                                            </td>
                                                        </tr>
                                                        <tr href="javascript:void(0)" onclick="change_color(this)">
                                                            <th>4</th>
                                                            <td>Design Update</td>
                                                            <td>
                                                                Julia Walker
                                                            </td>
                                                            <td>
                                                                <img src="./assets/download.jpg" alt="Profile Pic"
                                                                    style="width: 40px;height: 40px; border-radius: 50px;" />
                                                                <b> Faith Harris </b>
                                                            </td>
                                                            <td>
                                                                <button class="btn btn-sm btn-warning remove_employee"
                                                                    data-id="" type="button">Medium</button>
                                                            </td>
                                                            <td>
                                                                <input type="date" class="form-control" id="date" id=""
                                                                    value="" data-id="" />
                                                            </td>
                                                            <td>
                                                                <input type="date" class="form-control" id="date" id=""
                                                                    value="" data-id="" />
                                                            </td>
                                                            <td>
                                                                <h6>Status</h6>
                                                                <div class="progress mt-1  " data-height="8"
                                                                    style="height: 8px;">
                                                                    <div class="progress-bar l-bg-cyan bg-success"
                                                                        role="progressbar" data-width="25%"
                                                                        aria-valuenow="25" aria-valuemin="0"
                                                                        aria-valuemax="100" style="width: 100%;">
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <button class="btn btn-sm btn-success remove_employee"
                                                                    data-id="" type="button">Completed</button>
                                                            </td>
                                                            <td>
                                                                <button
                                                                    class="btn btn-sm btn-outline-primary remove_employee"
                                                                    data-id="" type="button"><i
                                                                        class="fa-solid fa-eye"></i></button>
                                                            </td>
                                                        </tr>
                                                        <tr href="javascript:void(0)" onclick="change_color(this)">
                                                            <th>5</th>
                                                            <td>HTML Code Update</td>
                                                            <td>
                                                                Julia Walker
                                                            </td>
                                                            <td>
                                                                <img src="./assets/download.jpg" alt="Profile Pic"
                                                                    style="width: 40px;height: 40px; border-radius: 50px;" />
                                                                <b>Austin Bell</b>
                                                            </td>
                                                            <td>
                                                                <button class="btn btn-sm btn-success remove_employee"
                                                                    data-id="" type="button">Low</button>
                                                            </td>
                                                            <td>
                                                                <input type="date" class="form-control" id="date" id=""
                                                                    value="" data-id="" />
                                                            </td>
                                                            <td>
                                                                <input type="date" class="form-control" id="date" id=""
                                                                    value="" data-id="" />
                                                            </td>
                                                            <td>
                                                                <h6>Status</h6>
                                                                <div class="progress mt-1  " data-height="8"
                                                                    style="height: 8px;">
                                                                    <div class="progress-bar l-bg-cyan bg-success"
                                                                        role="progressbar" data-width="25%"
                                                                        aria-valuenow="25" aria-valuemin="0"
                                                                        aria-valuemax="100" style="width: 100%;">
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <button class="btn btn-sm btn-success remove_employee"
                                                                    data-id="" type="button">Completed</button>
                                                            </td>
                                                            <td>
                                                                <button
                                                                    class="btn btn-sm btn-outline-primary remove_employee"
                                                                    data-id="" type="button"><i
                                                                        class="fa-solid fa-eye"></i></button>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                                <div class="tab-pane fade show " id="files">
                                    <div class="card">
                                        <div class="row p-3">
                                            <div class="col-12">
                                                <a type="file" id="" data-id=""
                                                    class="btn w-auto float-right btn-sm btn-outline-success">Upload
                                                    Files</a>
                                            </div>
                                        </div>
                                        <div class=" container-fluid overflow-auto">
                                            <table class="bg-success display" id="myTable3" data-id=""
                                                style="width:100%">
                                                <thead>
                                                    <tr>
                                                        <th scope="col" id="" data-id="">S.no</th>
                                                        <th scope="col" id="" data-id="">File Name</th>
                                                        <th scope="col" id="" data-id="">Upload By</th>
                                                        <th scope="col" id="" data-id="">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="dataTable" data-id="">
                                                    <tr href="javascript:void(0)" onclick="change_color(this)">
                                                        <th scope="row">1</th>
                                                        <td class="text-warming" id="" data-id="">
                                                            <p>document.pdf <span class="text-muted">(23kb)</span></p>
                                                            <span class="text-muted">2 Hours Ago</span>
                                                        </td>
                                                        <td class="text-warning" id="" data-id="">Cliet</td>
                                                        <td>
                                                            <a class="btn btn-sm btn-outline-success edit_employee"
                                                                data-id="" type="button" id=""><i
                                                                    class="fa fa-add "></i></a>
                                                            <a class="btn btn-sm btn-outline-danger remove_employee"
                                                                data-id="" type="button" id=""><i
                                                                    class="fa fa-trash"></i></a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade show " id="milestones">
                                    <div class="card p-2">
                                        <div class=" container-fluid overflow-auto">
                                            <table class="bg-success display" id="myTable1" data-id=""
                                                style="width:100%">
                                                <thead>
                                                    <tr>
                                                        <th scope="col" id="" data-id="">S.no</th>
                                                        <th scope="col" id="" data-id="">Milestone Title</th>
                                                        <th scope="col" id="" data-id="">Milestone Cost</th>
                                                        <th scope="col" id="" data-id="">Deadline</th>
                                                        <th scope="col" id="" data-id="">Status</th>
                                                        <th scope="col" id="" data-id="">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="dataTable" data-id="">
                                                    <tr href="javascript:void(0)" onclick="change_color(this)">
                                                        <th scope="row">1</th>
                                                        <td id="" data-id="">Responsive Issues</td>
                                                        <td id="" data-id="">$70</td>
                                                        <td>20-Jan-2021</td>
                                                        <td class="text-warning" id="" data-id="">Completed</td>
                                                        <td>
                                                            <a class="btn btn-sm btn-outline-success edit_employee"
                                                                data-id="" type="button" id=""><i
                                                                    class="fa fa-add "></i></a>
                                                            <a class="btn btn-sm btn-outline-danger remove_employee"
                                                                data-id="" type="button" id=""><i
                                                                    class="fa fa-trash"></i></a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade show " id="comments">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row mb-3">
                                                <div class="col-12">
                                                    <form action="" method="">
                                                        <button type="button" class="btn btn-primary float-right"
                                                            data-toggle="modal" data-target="#exampleModal"
                                                            data-whatever="@mdo">Add Comment</button>
                                                        <div class="modal fade" id="exampleModal" tabindex="-1"
                                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">
                                                                            Add Comment</h5>
                                                                        <button type="button" class="close"
                                                                            data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <form>
                                                                            <div class="form-group">
                                                                                <label for="recipient-name"
                                                                                    class="col-form-label">Recipient:</label>
                                                                                <input type="text" class="form-control"
                                                                                    id="recipient-name">
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label for="message-text"
                                                                                    class="col-form-label">Comment:</label>
                                                                                <textarea class="form-control"
                                                                                    id="message-text"></textarea>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary"
                                                                            data-dismiss="modal">Close</button>
                                                                        <button type="button"
                                                                            class="btn btn-primary">Post
                                                                            Comment</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="border border-3 rounded mb-3">
                                                <form action="" method="" id="">
                                                    <div class="row m-2">
                                                        <div class="col-2">
                                                            <img href="" src="./assets/img1.jpg" class="w-50"
                                                                style="clip-path:circle() ;" alt="" srcset="" id=""
                                                                data-id="" />
                                                        </div>
                                                        <div class="col-10 details mt-3">
                                                            <a href="" id="" data-id="">
                                                                <h6 class="font-weight-bold">Have You Using Update
                                                                    Verion</h6>
                                                            </a>
                                                            <p class="text-muted"><i
                                                                    class="far fa-calendar fa-x1 "></i>12-Jan-2022
                                                                <span><i class="far fa-clock fa-x1 "></i>13:00</span>
                                                            </p>
                                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                                Beatae, molestiae voluptates. Odit delectus dicta,
                                                                voluptatem, adipisci possimus odio nam, placeat
                                                                cupiditate architecto animi labore dolore dolorem
                                                                commodi sunt pariatur magni!</p>
                                                            <div class="row container-fluid">
                                                                <a type="button" class="btn btn-primary  ml-1"
                                                                    value="comment" id="" data-id=""><i
                                                                        class="fa-solid fa-comment"></i>Comment</a>
                                                                <a type="button" class="btn btn-primary ml-1"
                                                                    value="reply" id="" data-id=""><i
                                                                        class="fa-solid fa-reply"></i>Reply</a>
                                                                <div class="jumbotron mt-2" id="" style="padding: 2% ;">
                                                                    <div class="row">
                                                                        <div class="col-2">
                                                                            <img href="" src="./assets/img1.jpg"
                                                                                class="w-50"
                                                                                style="clip-path:circle() ;" alt=""
                                                                                srcset="" id="" data-id="" />
                                                                        </div>
                                                                        <div class="col-10 details">
                                                                            <a href="" id="" data-id="">
                                                                                <h6 class="font-weight-bold">Have You
                                                                                    Using Update Verion</h6>
                                                                            </a>
                                                                            <p class="text-muted" id="" data-id=""><i
                                                                                    class="far fa-calendar fa-x1" id=""
                                                                                    data-id=""></i>12-Jan-2022 <span
                                                                                    id="" data-id=""><i
                                                                                        class="far fa-clock fa-x1 "></i>13:00</span>
                                                                            </p>
                                                                            <p id="" data-id="">Lorem ipsum dolor sit
                                                                                amet consectetur adipisicing elit.
                                                                                Beatae, molestiae voluptates. Odit
                                                                                delectus dicta, voluptatem, adipisci
                                                                                possimus odio!</p>
                                                                            <div class="row container-fluid">
                                                                                <a type="button"
                                                                                    class="btn btn-primary  ml-1"
                                                                                    value="comment" id="" data-id=""><i
                                                                                        class="fa-solid fa-comment"></i>Comment</a>
                                                                                <a type="button"
                                                                                    class="btn btn-primary ml-1"
                                                                                    value="replly" id="" data-id=""><i
                                                                                        class="fa-solid fa-reply"></i>Reply</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="border border-3 rounded">
                                                <form action="" method="" id="">
                                                    <div class="row m-2">
                                                        <div class="col-2">
                                                            <img href="" src="./assets/img1.jpg" class="w-50"
                                                                style="clip-path:circle() ;" alt="" srcset="" id=""
                                                                data-id="" />
                                                        </div>
                                                        <div class="col-10 details mt-3 mb-3">
                                                            <a href="" id="" data-id="">
                                                                <h6 class="font-weight-bold">Send The Related Data</h6>
                                                            </a>
                                                            <p class="text-muted"><i
                                                                    class="far fa-calendar fa-x1 "></i>12-Jan-2022
                                                                <span><i class="far fa-clock fa-x1 "></i>13:00</span>
                                                            </p>
                                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                                Beatae, molestiae voluptates. Odit delectus dicta,
                                                                voluptatem, adipisci possimus odio nam, placeat
                                                                cupiditate architecto animi labore dolore dolorem
                                                                commodi sunt pariatur magni!</p>
                                                            <div class="row container-fluid">
                                                                <a type="button" class="btn btn-primary  ml-1"
                                                                    value="comment" id="" data-id=""><i
                                                                        class="fa-solid fa-comment"></i>Comment</a>
                                                                <a type="button" class="btn btn-primary ml-1"
                                                                    value="reply" id="" data-id=""><i
                                                                        class="fa-solid fa-reply"></i>Reply</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade show " id="note">
                                    <div class="card p-4">
                                        <form class="" method="" action="">
                                            <div class="form-group">
                                                <label for="title">Title:</label>
                                                <input type="email" class="form-control" id="title"
                                                    aria-describedby="emailHelp" placeholder="Enter email">
                                            </div>
                                            <div class="form-group">
                                                <label for="note">Note:</label>
                                                <!--  -->

                                                <!--  -->
                                            </div>
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </form>
                                    </div>
                                </div>
                                <div class="tab-pane fade show " id="invoices">
                                    <div class="card p-2">
                                        <div class=" container-fluid overflow-auto">
                                            <table class="bg-success display" id="myTable2" data-id=""
                                                style="width:100%">
                                                <thead>
                                                    <tr>
                                                        <th scope="col" id="" data-id="">Invoice ID</th>
                                                        <th scope="col" id="" data-id="">Amount</th>
                                                        <th scope="col" id="" data-id="">Invoice Date</th>
                                                        <th scope="col" id="" data-id="">Due Date</th>
                                                        <th scope="col" id="" data-id="">Payment</th>
                                                        <th scope="col" id="" data-id="">Status</th>
                                                        <th scope="col" id="" data-id="">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="dataTable" data-id="">
                                                    <tr href="javascript:void(0)" onclick="change_color(this)">
                                                        <th scope="row">INV-0478</th>
                                                        <td id="" data-id="">$370.00</td>
                                                        <td id="" data-id="">20-Jan-2021</td>
                                                        <td id="" data-id="">25-Jan-2021</td>
                                                        <td id="" data-id="" class="text-primary">$370.00</td>
                                                        <td class="text-warning" id="" data-id="">Paid</td>
                                                        <td>
                                                            <a class="btn btn-sm btn-outline-success edit_employee"
                                                                data-id="" type="button" id=""><i
                                                                    class="fa fa-add "></i></a>
                                                            <a class="btn btn-sm btn-outline-danger remove_employee"
                                                                data-id="" type="button" id=""><i
                                                                    class="fa fa-trash"></i></a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
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
</body>
<script>
    $('#summernote').summernote({
        placeholder: 'Hello Bootstrap 4',
        tabsize: 2,
        height: 100
    });
</script>
<script>
    $(document).ready(function () {
        $('#myTable').DataTable();
    });
</script>
<script>
    $(document).ready(function () {
        $('#myTable1').DataTable();
    });
</script>
<script>
    $(document).ready(function () {
        $('#myTable2').DataTable();
    });
</script>
<script>
    $(document).ready(function () {
        $('#myTable3').DataTable();
    });
</script>
<!-- document upload ajax -->
<script type="text/javascript">
    $(document).ready(function () {
        $(document).on("change", "", function () {
            $.ajax({
                type: "",
                url: "",
                dta: new FormData($("#myform")[0]),
                success: function (feedback) {
                    $(".").html(feedback);
                }
            })
        })
    })
</script>
<script type="text/javascript">
    function add_file() {
        $("#div_file").append("<div class='row'><div class='card-body'> <div class='row'><div class='col-2'><a href='' id='' data-id=''><i  class='fa-solid fa-file fa-3x text-primary'></i></a> </div><div class='col-10'><p name='' id='' data-id=''  class='mt-4 mb-2 font-weight-bold'>files.docs <span class='text-muted' name='' id='' data-id=''>(2.3kb)</span></p> </div></div><input type='file' class='card-link text-primary' id='filefirst' data-id='' style='display:none ;' /><label for='filefirst'><i class='fa-solid fa-upload' for='file'></i></label><a href='#' class='text-danger'><i class='fa-solid fa-trash'></i></a></div><input type='button' value='REMOVE' class='form-control' onclick=remove_file(this);></div>");
    }

    function remove_file(ele) {
        $(ele).parent().remove();
    }
</script>
<script type="text/javascript">
    function add_file1() {
        $("#div_file1").append("<div class='card-body'><div class='row'><div class='col-2'><a href='' id='' data-id=''><i  class='fa-solid fa-file fa-3x text-primary'></i></a> </div><div class='col-10'><p name='' id='' data-id=''  class='mt-4 mb-2 font-weight-bold'>files.docs <span class='text-muted' name='' id='' data-id=''>(2.3kb)</span></p> </div></div><input type='file' class='card-link text-primary' id='filefirst' data-id='' style='display:none ;' /><label for='filefirst'><i class='fa-solid fa-upload' for='file'></i></label><a href='#' class='card-link text-danger' id='' data-id=''><i class='fa-solid fa-trash'></i></a></div><input type='button' value='REMOVE' class='form-control' onclick=remove_file1(this);></div>");
    }

    function remove_file1(ele) {
        $(ele).parent().remove();
    }
</script>
<script>
    $('#myModal').on('shown.bs.modal', function () {
        $('#myInput').trigger('focus')
    })
</script>
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

</html>