<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <link rel="stylesheet" href="style.css">
</head>

<body>
<div class="page-wrapper chiller-theme toggled">
  <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
    <i class="fas fa-bars"></i>
  </a>
  <nav id="sidebar" class="sidebar-wrapper">
    <div class="sidebar-content">
      <div class="sidebar-brand">
        <a href="#">ASTRA HRMS</a>
        <div id="close-sidebar">
          <i class="fas fa-times"></i>
        </div>
      </div>
      <div class="sidebar-header">
        <div class="user-pic">
          <img class="img-responsive img-rounded" src="" alt="User picture">
        </div>
        <div class="user-info">
          <span class="user-name">Nabil <strong>Enver</strong></span>
          <span class="user-role">Administrator</span>
          <span class="user-status"><i class="fa fa-circle"></i><span>Online</span></span>
        </div>
      </div>
      <!-- sidebar-header  -->
      <div class="sidebar-search">
        <div>
          <!-- <div class="input-group">
            <input type="text" class="form-control search-menu" placeholder="Search...">
            <div class="input-group-append">
              <span class="input-group-text">
                <i class="fa fa-search" aria-hidden="true"></i>
              </span>
            </div>
          </div> -->
        </div>
      </div>
      <!-- sidebar-search  -->
      <div class="sidebar-menu">
        <ul>
        <li class="sidebar">
        <a href="/astrahrms/index.php"><i class="fas fa-border-all"></i><strong><span>DASHBOARD</span></strong></a></li><!--<span class="badge badge-pill badge-warning">New</span>-->
					<li class="header-menu"><span>Employees Center</span></li>
          <li class="sidebar-dropdown">
            <a href="#"><i class="fa fa-user"></i><span>Employees</span></a><!--<span class="badge badge-pill badge-danger">3</span>-->
            <div class="sidebar-submenu">
              <ul>
                <li><a href="/astrahrms/admin/employees/insertEmployee.php" class="active">Insert Employee</a></li>
                <li><a href="/astrahrms/admin/employees/edit_employee.php">Edit Employees</a></li>
              </ul>
            </div>
          </li>
					<li class="sidebar-dropdown">
						<a href="#"><i class="fa fa-file-alt"></i><span>Reports</span></a><!--<span class="badge badge-pill badge-danger">3</span>-->
						<div class="sidebar-submenu">
							<ul>
								<li><a href="/astrahrms/admin/employees/insertEmployee.php" class="active">Insert Employee</a></li>
								<li><a href="/astrahrms/admin/employees/edit_employee.php">Edit Employees</a></li>
							</ul>
						</div>
					</li>
					<li class="header-menu"><span>Attendance Center</span></li>
          <li class="sidebar-dropdown">
            <a href="#"><i class="fa fa-list-alt"></i><span>Attendance</span>
            </a><div class="sidebar-submenu">
              <ul>
								<li><a href="/astrahrms/admin/attendance/mark_attendance.php">Mark Attendance</a></li>
                <li><a href="/astrahrms/admin/attendance/view_attendance.php">Attendance Record</a></li>
                <li><a href="/astrahrms/admin/attendance/submit_leaves.php">Submit Leaves</a></li>
                <li><a href="/astrahrms/admin/attendance/approve_leaves.php">Approve Leaves</a></li>
              </ul>
            </div>
          </li>
					<li class="sidebar-dropdown">
						<a href="#"><i class="fa fa-file-alt"></i><span>Reports</span>
						</a><div class="sidebar-submenu">
							<ul>
								<li><a href="/astrahrms/admin/attendance/mark_attendance.php">Mark Attendance</a></li>
								<li><a href="/astrahrms/admin/attendance/view_attendance.php">Attendance Record</a></li>
							</ul>
						</div>
					</li>
					<li class="header-menu"><span>Payroll Center</span></li>
          <li class="sidebar-dropdown"> <a href="#"><i class="fa fa-money-bill"></i><span>Salary</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
								<li><a href="/astrahrms/admin/payroll/salary/generate_salary.php">Generate Salary</a></li>
								<li><a href="/astrahrms/admin/payroll/salary/salary_slip.php">Salary Slips</a></li>
              </ul>
            </div>
          </li>
					<li class="sidebar-dropdown"> <a href="#"><i class="fa fa-clock"></i><span>Overtime</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
								<li><a href="/astrahrms/admin/payroll/overtime/submit_overtime.php">Submit Overtime</a></li>
								<li><a href="/astrahrms/admin/payroll/overtime/pay_overtime.php">Pay Overtime</a></li>
              </ul>
            </div>
          </li>
					<li class="sidebar-dropdown"> <a href="#"><i class="fa fa-wallet"></i><span>Expenses</span>
						</a>
						<div class="sidebar-submenu">
							<ul>
								<li><a href="/astrahrms/admin/payroll/expenses/submit_expenses.php">Submit Expense</a></li>
								<li><a href="#">Approve Expense</a></li>
							</ul>
						</div>
					</li>
					<li class="sidebar-dropdown"> <a href="#"><i class="fa fa-coins"></i><span>Increments</span>
						</a>
						<div class="sidebar-submenu">
							<ul>
								<li><a href="#">Annual Increment</a></li>
								<li><a href="#">Bonus</a></li>
							</ul>
						</div>
					</li>
					<li class="sidebar-dropdown">
						<a href="#"><i class="fa fa-file-alt"></i><span>Reports</span>
						</a><div class="sidebar-submenu">
							<ul>
								<li><a href="/astrahrms/admin/attendance/mark_attendance.php">Mark Attendance</a></li>
								<li><a href="/astrahrms/admin/attendance/view_attendance.php">Attendance Record</a></li>
							</ul>
						</div>
					</li>
					<li class="header-menu"><span>Incentives / Benefits</span></li>
					<li class="sidebar-dropdown"> <a href="#"><i class="fas fa-hand-holding-usd"></i><span>Benefits</span>
						</a>
						<div class="sidebar-submenu">
							<ul>
								<li><a href="#">Paid Leaves</a></li>
								<li><a href="#">EOBI</a></li>
								<li><a href="#">PESSI</a></li>
								<li><a href="#">Group Life Insurance</a></li>
							</ul>
						</div>
					</li>
					<li class="sidebar-dropdown"> <a href="#"><i class="fas fa-money-bill-alt"></i><span>Incentives</span>
						</a>
						<div class="sidebar-submenu">
							<ul>
								<li><a href="#">Allowances</a></li>
								<li><a href="#">Commission</a></li>
							</ul>
						</div>
					</li>
					<li class="sidebar-dropdown">
						<a href="#"><i class="fa fa-file-alt"></i><span>Reports</span>
						</a><div class="sidebar-submenu">
							<ul>
								<li><a href="/astrahrms/admin/attendance/mark_attendance.php">Mark Attendance</a></li>
								<li><a href="/astrahrms/admin/attendance/view_attendance.php">Attendance Record</a></li>
							</ul>
						</div>
					</li>
					<li class="header-menu"><span>Taxes</span></li>
					<li class="sidebar"> <a href="#"><i class="fas fa-calculator"></i><span>Income Tax</span></a>
					</li>
        </ul>
      </div>
      <!-- sidebar-menu  -->
    </div>
    <!-- sidebar-content  -->
    <div class="sidebar-footer">
      <a href="#">
        <i class="fa fa-bell"></i>
        <span class="badge badge-pill badge-warning notification">3</span>
      </a>
      <a href="#">
        <i class="fa fa-envelope"></i>
        <span class="badge badge-pill badge-success notification">7</span>
      </a>
      <a href="#">
        <i class="fa fa-cog"></i>
        <span class="badge-sonar"></span>
      </a>
      <a href="/astrahrms/login/logout.php">
        <i class="fa fa-power-off"></i>
      </a>
    </div>
  </nav>
  <!-- sidebar-wrapper  -->
  <main class="page-content">

  </main>
  <!-- page-content" -->
</div>
<script>
jQuery(function ($) {
    $(".sidebar-dropdown > a").click(function() {
  $(".sidebar-submenu").slideUp(200);
  if (
    $(this)
      .parent()
      .hasClass("active")
  ) {
    $(".sidebar-dropdown").removeClass("active");
    $(this)
      .parent()
      .removeClass("active");
  } else {
    $(".sidebar-dropdown").removeClass("active");
    $(this)
      .next(".sidebar-submenu")
      .slideDown(200);
    $(this)
      .parent()
      .addClass("active");
  }
});

$("#close-sidebar").click(function() {
  $(".page-wrapper").removeClass("toggled");
});
$("#show-sidebar").click(function() {
  $(".page-wrapper").addClass("toggled");
});
});
</script>
</body>

</html>
