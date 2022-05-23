<!DOCTYPE html>
<html lang="en">

<head>
    <?php
         include('./includes/header/header.php');
    ?>
    <title>New Project</title>
</head>

<body>
    <div class="container-fluid">
        <blockquote class="blockquote my-4">
            <div class="conatiner-fluid">
                <!-- Navbar -->
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand" href="#">
                        <h4>New Project</h4>
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
        <form>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputEmail4">Project ID</label>
                <input type="text" class="form-control" id="" value="" data-id="" placeholder="Number"/>
              </div>
              <div class="form-group col-md-6">
                <label for="inputPassword4">Project Title</label>
                <input type="text" class="form-control" id="" value="" data-id="" placeholder="Text"/>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputEmail4">Department:</label>
                <select class="form-control" id="" data-id="" value="">
                    <option>Select Departmnet</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                  </select>
              </div>
              <div class="form-group col-md-6">
                <label for="inputPassword4"> Project Priority:</label>
                <select class="form-control" id="" data-id="" value="">
                    <option>Select Employee </option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                  </select>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputEmail4">Client:</label>
                <input type="text" class="form-control" id="" value="" data-id="" placeholder="Enter Client"/>
              </div>
              <div class="form-group col-md-6">
                <label for="inputPassword4"> ($)Price :</label>
                <input type="text" class="form-control" id="" value="" data-id="" placeholder="Enter Price eg:$69.00"/>
              </div>
            </div>
            <div class="form-group">
              <label for="inputAddress">Assigned Team:</label>
              <input type="text" class="form-control" id="" value="" data-id="" placeholder="Select Employee"/>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputEmail4">Form:</label>
                  <input type="date" class="form-control" id="" value="" data-id="" placeholder=""/>
                </div>
                <div class="form-group col-md-6">
                  <label for="inputPassword4">To:</label>
                  <input type="date" class="form-control" id="" value="" data-id="" placeholder=""/>
                </div>
              </div>
              <div class="form-group">
                <label for="inputAddress">Upload Files:</label>
                <input type="file" class="form-control" id="" value="" data-id="" placeholder="" style="border: none;"/>
              </div>
              <label for="inputAddress">Work Status:</label>
              <div class="custom-control custom-radio custom-control-inline mx-3">
                <input type="radio" id="customRadioInline1" name="customRadioInline" class="custom-control-input">
                <label class="custom-control-label" for="customRadioInline1">Active</label>
              </div>
              <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="customRadioInline2" name="customRadioInline" class="custom-control-input">
                <label class="custom-control-label" for="customRadioInline2">Completed</label>
              </div>
              <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="customRadioInline3" name="customRadioInline" class="custom-control-input">
                <label class="custom-control-label" for="customRadioInline3">On Going</label>
              </div>
              <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="customRadioInline4" name="customRadioInline" class="custom-control-input">
                <label class="custom-control-label" for="customRadioInline4">Pending </label>
              </div>
              <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="customRadioInline5" name="customRadioInline" class="custom-control-input">
                <label class="custom-control-label" for="customRadioInline5">Not Start </label>
              </div>
              <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="customRadioInline6" name="customRadioInline" class="custom-control-input">
                <label class="custom-control-label" for="customRadioInline6">Canceled </label>
              </div>
              <br>
              <button class="btn btn-success mr-3 float-right">Submit</button>
              <button class="btn btn-danger mr-2 float-right">Close</button>
          </form>
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
