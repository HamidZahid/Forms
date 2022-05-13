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
    <title>Annual Increment</title>
</head>

<body>
    <div class="container-fluid">
        <blockquote class="blockquote text-center border border-1 border-grey mt-3">
            <div class="row">
                <div class="col-xl-3 col-lg-6">
                    <form>
                        <div class="row mb-3 mt-3 p-1">
                            <label for="date" class="col-xl-2 col-lg-2 form-label">Date:</label>
                            <div class="col-xl-8 col-lg-10 col-sm-12">
                                <input type="date" class="form-control" id="date">
                            </div>
                        </div>



                    </form>


                </div>
                <div class="col-xl-3 col-lg-6">
                    <form>
                        <div class="row mb-3 mt-3 p-1">
                            <label for="department" class="col-xl-5 col-lg-4 form-label">Department:</label>
                            <div class="col-xl-7 col-lg-6 col-sm-12">
                                <select name="" id="" class="form-control  " >
                                    <option value="">Select Department</option>
                                    <option value="">...</option>
                                    <option value="">...</option>
                                </select>
                            </div>
                        </div>



                    </form>
                </div>
                <div class="col-xl-6 col-lg-12">

                    <div class="input-group rounded mt-3 float-right w-auto mr-2 p-2">
                        <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search"
                            aria-describedby="search-addon" id="myInput" />
                       
                    </div>
                </div>
            </div>
        </blockquote>

        <section class="sybmitBn float-right">
            <div class="container-fluid mb-4">
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
                            <th scope="col">Year</th>
                            <th scope="col">Increment Month</th>
                            <th scope="col"> Increment %</th>
                            <th scope="col"> Amount</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody id="dataTable">
                        <tr href="javascript:void(0)" onclick="change_color(this)">
                            <th scope="row">1</th>
                            <td>Mujahid</td>
                            <td>IT</td>
                            <td>Developer</td>
                            <td><input type="date" class="form-control"></td>
                            <td><input type="date" class="form-control"></td>
                            <td><input type="text" class="form-control"></td>
                            <td><input type="text" class="form-control"></td>
                            <td>
                                <select name="" id="" class="form-control">
                                    <option value=""></option>
                                    <option value="">Active</option>
                                    <option value="">Inactive</option>
                                </select>
                            </td>
                            <td>
                                <button class="btn btn-sm btn-outline-success edit_employee #348C7E" data-id=""
                                    type="button"><i class="fa fa-add "></i></button>
                                <button class="btn btn-sm btn-outline-danger remove_employee" data-id=""
                                    type="button"><i class="fa fa-trash"></i></button>
                            </td>
                        </tr>

                        <tr href="javascript:void(0)" onclick="change_color(this)">
                            <th scope="row">2</th>
                            <td>Aliyan</td>
                            <td>IT</td>
                            <td>HR</td>
                            <td><input type="date" class="form-control"></td>
                            <td><input type="date" class="form-control"></td>
                            <td><input type="text" class="form-control"></td>
                            <td><input type="text" class="form-control"></td>
                            <td>
                                <select name="" id="" class="form-control">
                                    <option value=""></option>
                                    <option value="">Active</option>
                                    <option value="">Inactive</option>
                                </select>
                            </td>
                            <td>
                                <button class="btn btn-sm btn-outline-success edit_employee #348C7E" data-id=""
                                    type="button"><i class="fa fa-add "></i></button>
                                <button class="btn btn-sm btn-outline-danger remove_employee" data-id=""
                                    type="button"><i class="fa fa-trash"></i></button>
                            </td>
                        </tr>


                    </tbody>
                </table>
            </div>
        </section>

        <section class="sybmitBn float-right">
            <div class="container-fluid mb-4 mt-3">
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

    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js">

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