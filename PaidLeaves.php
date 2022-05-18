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

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>Paid Leaves</title>
</head>

<body>
    <div class="container-fluid">
        <section class="container-fluid">
            <div class="cards mt-2">
                <div class="col-md-10 ">
                    <div class="row ">
                        <div class="col-xl-3 col-lg-6">
                            <div class="card l-bg-cherry">
                                <div class="card-statistic-3 p-4">
                                    <div class="card-icon card-icon-large"><i class="fas fa-shopping-cart"></i></div>
                                    <div class="mb-4">
                                        <h5 class="card-title mb-0">New Employees</h5>
                                    </div>
                                    <div class="row align-items-center mb-2 d-flex">
                                        <div class="col-8">
                                            <h2 class="d-flex align-items-center mb-0">
                                                1000
                                            </h2>
                                        </div>
                                        <div class="col-4 text-right">
                                            <span>69% <i class="fa fa-arrow-up"></i></span>
                                        </div>
                                    </div>
                                    <div class="progress mt-1 " data-height="8" style="height: 8px;">
                                        <div class="progress-bar l-bg-cyan" role="progressbar" data-width="25%"
                                            aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"
                                            style="width: 69%;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6">
                            <div class="card l-bg-blue-dark">
                                <div class="card-statistic-3 p-4">
                                    <div class="card-icon card-icon-large"><i class="fas fa-users"></i></div>
                                    <div class="mb-4">
                                        <h5 class="card-title mb-0">Active Employees</h5>
                                    </div>
                                    <div class="row align-items-center mb-2 d-flex">
                                        <div class="col-8">
                                            <h2 class="d-flex align-items-center mb-0">
                                                20
                                            </h2>
                                        </div>
                                        <div class="col-4 text-right">
                                            <span>10% <i class="fa fa-arrow-up"></i></span>
                                        </div>
                                    </div>
                                    <div class="progress mt-1 " data-height="8" style="height: 8px;">
                                        <div class="progress-bar l-bg-green" role="progressbar" data-width="25%"
                                            aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"
                                            style="width: 20%;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6">
                            <div class="card l-bg-green-dark">
                                <div class="card-statistic-3 p-4">
                                    <div class="card-icon card-icon-large"><i class="fas fa-ticket-alt"></i></div>
                                    <div class="mb-4">
                                        <h5 class="card-title mb-0">Recruitment</h5>
                                    </div>
                                    <div class="row align-items-center mb-2 d-flex">
                                        <div class="col-8">
                                            <h2 class="d-flex align-items-center mb-0">
                                                3
                                            </h2>
                                        </div>
                                        <div class="col-4 text-right">
                                            <span>4% <i class="fa fa-arrow-up"></i></span>
                                        </div>
                                    </div>
                                    <div class="progress mt-1 " data-height="8" style="height: 8px;">
                                        <div class="progress-bar l-bg-orange" role="progressbar" data-width="25%"
                                            aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"
                                            style="width: 4%;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-3"></div>
                </div>

        </section>
        <blockquote class="blockquote text-center border border-1 border-grey ">
            <div class="row">
                <div class="col-xl-3 col-lg-6">
                    <fieldset class="">
                        <div class="row mb-1 mt-1 p-2">
                            <label for="overtime" class="col-xl-5 col-md-4 col-sm-4 form-label ">Leave
                                Type:</label>
                            <div class="col-xl-7 col-md-8 col-sm-8">
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
                    <fieldset class="">
                        <div class="row mb-1 mt-1 p-2">
                            <label for="overtime" class="col-xl-6 col-md-4 col-sm-4 form-label ">Leave Status:</label>
                            <div class="col-xl-6 col-md-8 col-sm-8">
                                <select name="" id="" class="custom-select">
                                    <option value="">Select</option>
                                    <option value="">...</option>
                                    <option value="">...</option>
                                </select>
                            </div>
                        </div>
                    </fieldset>
                </div>
                <div class="col-xl-2 col-lg-6">
                    <form>
                        <div class="row mb-1 mt-1 p-2">
                            <label for="department" class="col-sm-4 col-md-4 form-label">From:</label>
                            <div class="col-md-8 col-sm-8 col-xs-8">
                                <input type="date" class="form-control" id="date" data-id="" value="" />
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-xl-2 col-lg-6">
                    <form>
                        <div class="row mb-1 mt-1 p-2">
                            <label for="department" class="col-sm-4 col-md-4 form-label">From:</label>
                            <div class="col-md-8 col-sm-8 col-xs-8">
                                <input type="date" class="form-control" id="date" data-id="" value="" />
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-xl-2 col-lg-12 col-sm-12">

                    <div class="input-group rounded mt-1 float-right w-auto mr-2 p-2">
                        <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search"
                            aria-describedby="search-addon" id="myInput" data-id="" value=""  />
                     
                    </div>
                </div>
            </div>
        </blockquote>
        <section class="sybmitBn float-right">
            <div class="container-fluid mb-4 mt-3">
                <button type="button" class="btn btn-success" value="Submit Overtime">
                    <i class="fa fa-add "></i><span class="m-1">Submit Overtime</span>
                    </button>
            </div>
        </section>

        <section class="">
            <div class="container-fluid overflow-auto">
                <table class="bg-success " id="myTable">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Department</th>
                            <th scope="col">Designation</th>
                            <th scope="col">From</th>
                            <th scope="col"> To</th>
                            <th scope="col"> Reason</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody id="dataTable">
                        <tr href="javascript:void(0)" onclick="change_color(this)">
                            <th scope="row">1</th>
                            <td> Mujahid</td>
                            <td>IT</td>
                            <td>Developer</td>
                            <td><input type="date" class="form-control" id="" data-id="" value="" /></td>
                            <td><input type="date" class="form-control" id="" data-id="" value="" /></td>
                            <td><input type="text" class="form-control" id="" data-id="" value="" /></td>
                            <td>
                                <select name="" id="" data-id="" value="" class="form-control">
                                    <option value="">Select</option>
                                    <option value="">...</option>
                                    <option value="">...</option>
                                </select>
                            </td>
                            <td>
                                <a class="btn btn-sm btn-outline-success edit_employee" data-id="" type="button"><i
                                        class="fa fa-add "></i></a>
                                <a class="btn btn-sm btn-outline-danger remove_employee" data-id="" type="button"><i
                                        class="fa fa-trash"></i></a>
                            </td>
                        </tr>

                        <tr href="javascript:void(0)" onclick="change_color(this)">
                            <th scope="row">2</th>
                            <td>Aliyan</td>
                            <td>IT</td>
                            <td>HR</td>
                            <td><input type="date" class="form-control" id="" data-id="" value="" /></td>
                            <td><input type="date" class="form-control" id="" data-id="" value="" /></td>
                            <td><input type="text" class="form-control" id="" data-id="" value="" /></td>
                            <td>
                                <select name="" id="" class="form-control">
                                    <option value="">Select</option>
                                    <option value="">...</option>
                                    <option value="">...</option>
                                </select>
                            </td>
                            <td>
                                <button class="btn btn-sm btn-outline-success edit_employee " data-id=""
                                    type="button"><i class="fa fa-add "></i></button>
                                <button class="btn btn-sm btn-outline-danger remove_employee " data-id=""
                                    type="button"><i class="fa fa-trash"></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>
        <section class="sybmitBn float-right">
            <div class="container-fluid mb-4 mt-2">
                <button type="button" class="btn btn-success" value="Submit Overtime">
                    <i class="fa fa-add "></i><span class="m-1">Submit Overtime</span>
                    </button>
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

    </script>

    <script>
        $(document).ready(function () {
            $('#myTable').DataTable({ searching: false });
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

    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js">

    </script>

</body>

</html>