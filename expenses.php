<!DOCTYPE html>
<html lang="en">
<head>
    <?php
         include('./includes/header/header.php');
    ?>
    <title>Expenses</title>
</head>
<body>
    <div class="container-fluid">
        <blockquote class="blockquote mt-2">
            <div class="conatiner-fluid">
                <!-- Navbar -->
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand" href="#">
                        <h4>Expenses</h4>
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link text-light btn btn-primary btn-sm rounded mr-2" href="#">Add New
                                    Expenses Item</a>
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
        <section class="p-2 bg-light rounded"
            style=" box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;">
            <div class="container-fluid">
                <div class="mb-5 mt-3">
                    <h5 style="border-left: 6px solid #3ba2f2;">Expense Summary</h5>
                </div>
            </div>
            <div class="container-fluid overflow-auto">
                <table class="bg-light display" id="myTable" style="width:100%">
                    <thead>
                        <tr>
                            <th scope="col">#ID</th>
                            <th scope="col">Employee</th>
                            <th scope="col">Title</th>
                            <th scope="col">Purchase Form</th>
                            <th scope="col">Date</th>
                            <th scope="col"> Amount($)</th>
                            <th scope="col">Paid By</th>
                            <th scope="col"> Approval Status</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody id="dataTable">

                        <tr href="javascript:void(0)" onclick="change_color(this)">
                            <th scope="row">1</th>
                            <td><img src="./assets/photo.jpg" alt="Profile Pic"
                                    style="width: 40px; border-radius: 50%; height: 40px;" /> Mujahid</td>
                            <td>Bike Services</td>
                            <td>Abc Service Centre</td>
                            <td><input type="date" class="form-control" id="" value="" data-id="" /></td>
                            <td>$678</td>
                            <td>Card</td>
                            <td><button type="button" class="btn btn-success">Approved</button></td>
                            <td>
                                <button class="btn btn-sm btn-outline-success edit_employee #348C7E" data-id=""
                                    type="button"><i class="fa-solid fa-check"></i></button>
                                <button class="btn btn-sm btn-outline-danger remove_employee" data-id=""
                                    type="button"><i class="fa-solid fa-xmark"></i></button>
                                <button class="btn btn-sm btn-outline-primary remove_employee" data-id=""
                                    type="button"><i class="fa-solid fa-eye"></i></button>
                                <button class="btn btn-sm btn-outline-danger remove_employee" data-id=""
                                    type="button"><i class="fa fa-trash"></i></button>
                            </td>
                        </tr>
                        <tr href="javascript:void(0)" onclick="change_color(this)">
                            <th scope="row">2</th>
                            <td><img src="./assets/photo.jpg" alt="Profile Pic"
                                    style="width: 40px; border-radius: 50%; height: 40px;" /> Mujahid</td>
                            <td>Bike Services</td>
                            <td>Abc Service Centre</td>
                            <td><input type="date" class="form-control" id="" value="" data-id="" /></td>
                            <td>$678</td>
                            <td>Card</td>
                            <td><button type="button" class="btn btn-danger">Rejected</button></td>
                            <td>
                                <button class="btn btn-sm btn-outline-success edit_employee #348C7E" data-id=""
                                    type="button"><i class="fa-solid fa-check"></i></button>
                                <button class="btn btn-sm btn-outline-danger remove_employee" data-id=""
                                    type="button"><i class="fa-solid fa-xmark"></i></button>
                                <button class="btn btn-sm btn-outline-primary remove_employee" data-id=""
                                    type="button"><i class="fa-solid fa-eye"></i></button>
                                <button class="btn btn-sm btn-outline-danger remove_employee" data-id=""
                                    type="button"><i class="fa fa-trash"></i></button>
                            </td>
                        </tr>
                        <tr href="javascript:void(0)" onclick="change_color(this)">
                            <th scope="row">3</th>
                            <td><img src="./assets/photo.jpg" alt="Profile Pic"
                                    style="width: 40px; border-radius: 50%; height: 40px;" /> Mujahid</td>
                            <td>Pens </td>
                            <td>Abc Service Centre</td>
                            <td><input type="date" class="form-control" id="" value="" data-id="" /></td>
                            <td>$12</td>
                            <td>Card</td>
                            <td><button type="button" class="btn btn-success">Approved</button></td>
                            <td>
                                <button class="btn btn-sm btn-outline-success edit_employee #348C7E" data-id=""
                                    type="button"><i class="fa-solid fa-check"></i></button>
                                <button class="btn btn-sm btn-outline-danger remove_employee" data-id=""
                                    type="button"><i class="fa-solid fa-xmark"></i></button>
                                <button class="btn btn-sm btn-outline-primary remove_employee" data-id=""
                                    type="button"><i class="fa-solid fa-eye"></i></button>
                                <button class="btn btn-sm btn-outline-danger remove_employee" data-id=""
                                    type="button"><i class="fa fa-trash"></i></button>
                            </td>
                        </tr>
                        <tr href="javascript:void(0)" onclick="change_color(this)">
                            <th scope="row">4</th>
                            <td><img src="./assets/photo.jpg" alt="Profile Pic"
                                    style="width: 40px; border-radius: 50%; height: 40px;" /> Mujahid</td>
                            <td>Ipad</td>
                            <td>Book </td>
                            <td><input type="date" class="form-control" id="" value="" data-id="" /></td>
                            <td>$45</td>
                            <td>Online Payment</td>
                            <td><button type="button" class="btn btn-warning">Pending</button></td>
                            <td>
                                <button class="btn btn-sm btn-outline-success edit_employee #348C7E" data-id=""
                                    type="button"><i class="fa-solid fa-check"></i></button>
                                <button class="btn btn-sm btn-outline-danger remove_employee" data-id=""
                                    type="button"><i class="fa-solid fa-xmark"></i></button>
                                <button class="btn btn-sm btn-outline-primary remove_employee" data-id=""
                                    type="button"><i class="fa-solid fa-eye"></i></button>
                                <button class="btn btn-sm btn-outline-danger remove_employee" data-id=""
                                    type="button"><i class="fa fa-trash"></i></button>
                            </td>
                        </tr>
                        <tr href="javascript:void(0)" onclick="change_color(this)">
                            <th scope="row">5</th>
                            <td><img src="./assets/photo.jpg" alt="Profile Pic"
                                    style="width: 40px; border-radius: 50%; height: 40px;" /> Mujahid</td>
                            <td>Bike Services</td>
                            <td>Amazon </td>
                            <td><input type="date" class="form-control" id="" value="" data-id="" /></td>
                            <td>$600</td>
                            <td>Online Payment</td>
                            <td><button type="button" class="btn btn-success">Approved</button></td>
                            <td>
                                <button class="btn btn-sm btn-outline-success edit_employee #348C7E" data-id=""
                                    type="button"><i class="fa-solid fa-check"></i></button>
                                <button class="btn btn-sm btn-outline-danger remove_employee" data-id=""
                                    type="button"><i class="fa-solid fa-xmark"></i></button>
                                <button class="btn btn-sm btn-outline-primary remove_employee" data-id=""
                                    type="button"><i class="fa-solid fa-eye"></i></button>
                                <button class="btn btn-sm btn-outline-danger remove_employee" data-id=""
                                    type="button"><i class="fa fa-trash"></i></button>
                            </td>
                        </tr>
                        <tr href="javascript:void(0)" onclick="change_color(this)">
                            <th scope="row">6</th>
                            <td><img src="./assets/photo.jpg" alt="Profile Pic"
                                    style="width: 40px; border-radius: 50%; height: 40px;" /> Mujahid</td>
                            <td>Bike Services</td>
                            <td>Data Connection </td>
                            <td><input type="date" class="form-control" id="" value="" data-id="" /></td>
                            <td>$100</td>
                            <td>Online Payment</td>
                            <td><button type="button" class="btn btn-success">Approved</button></td>
                            <td>
                                <button class="btn btn-sm btn-outline-success edit_employee #348C7E" data-id=""
                                    type="button"><i class="fa-solid fa-check"></i></button>
                                <button class="btn btn-sm btn-outline-danger remove_employee" data-id=""
                                    type="button"><i class="fa-solid fa-xmark"></i></button>
                                <button class="btn btn-sm btn-outline-primary remove_employee" data-id=""
                                    type="button"><i class="fa-solid fa-eye"></i></button>
                                <button class="btn btn-sm btn-outline-danger remove_employee" data-id=""
                                    type="button"><i class="fa fa-trash"></i></button>
                            </td>
                        </tr>
                        <tr href="javascript:void(0)" onclick="change_color(this)">
                            <th scope="row">7</th>
                            <td><img src="./assets/photo.jpg" alt="Profile Pic"
                                    style="width: 40px; border-radius: 50%; height: 40px;" /> Mujahid</td>
                            <td>Bike Services</td>
                            <td>Mobile Recharge </td>
                            <td><input type="date" class="form-control" id="" value="" data-id="" /></td>
                            <td>$220</td>
                            <td>Card</td>
                            <td><button type="button" class="btn btn-warning">Pending</button></td>
                            <td>
                                <button class="btn btn-sm btn-outline-success edit_employee #348C7E" data-id=""
                                    type="button"><i class="fa-solid fa-check"></i></button>
                                <button class="btn btn-sm btn-outline-danger remove_employee" data-id=""
                                    type="button"><i class="fa-solid fa-xmark"></i></button>
                                <button class="btn btn-sm btn-outline-primary remove_employee" data-id=""
                                    type="button"><i class="fa-solid fa-eye"></i></button>
                                <button class="btn btn-sm btn-outline-danger remove_employee" data-id=""
                                    type="button"><i class="fa fa-trash"></i></button>
                            </td>
                        </tr>

                        <tr href="javascript:void(0)" onclick="change_color(this)">
                            <th scope="row">8</th>
                            <td><img src="./assets/photo.jpg" alt="Profile Pic"
                                    style="width: 40px; border-radius: 50%; height: 40px;" /> Aliyan</td>
                            <td>IT</td>
                            <td>Bike Fuel</td>
                            <td><input type="date" class="form-control" id="" value="" data-id="" /></td>
                            <td>$220</td>
                            <td>Card</td>
                            <td><button type="button" class="btn btn-danger">Rejected</button></td>
                            <td>
                                <button class="btn btn-sm btn-outline-success edit_employee #348C7E" data-id=""
                                    type="button"><i class="fa-solid fa-check"></i></button>
                                <button class="btn btn-sm btn-outline-danger remove_employee" data-id=""
                                    type="button"><i class="fa-solid fa-xmark"></i></button>
                                <button class="btn btn-sm btn-outline-primary remove_employee" data-id=""
                                    type="button"><i class="fa-solid fa-eye"></i></button>
                                <button class="btn btn-sm btn-outline-danger remove_employee" data-id=""
                                    type="button"><i class="fa fa-trash"></i></button>
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

    </script>

    <script>
        $(document).ready(function () {
            $('#myTable').DataTable();
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