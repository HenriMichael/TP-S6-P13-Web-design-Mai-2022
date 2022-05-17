<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Rechauffement-Climatique-BO</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="<?php echo base_url('assets/Back-Office/assets/vendors/mdi/css/materialdesignicons.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/Back-Office/assets/vendors/flag-icon-css/css/flag-icon.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/Back-Office/assets/vendors/css/vendor.bundle.base.css'); ?>">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="<?php echo base_url('assets/Back-Office/assets/vendors/font-awesome/css/font-awesome.min.css'); ?>" />
    <link rel="stylesheet" href="<?php echo base_url('assets/Back-Office/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css'); ?>">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="<?php echo base_url('assets/Back-Office/assets/css/style.css'); ?>">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="<?php echo base_url('assets/Back-Office/assets/images/favicon.png'); ?>" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <style>
body {
  color: #566787;
  background: #f5f5f5;
  font-family: 'Varela Round', sans-serif;
  font-size: 13px;
}
.table-responsive {
    margin: 30px 0;
}
.table-wrapper {
  background: #fff;
  padding: 20px 25px;
  border-radius: 3px;
  min-width: 1000px;
  box-shadow: 0 1px 1px rgba(0,0,0,.05);
}
.table-title {        
  padding-bottom: 15px;
  background: #435d7d;
  color: #fff;
  padding: 16px 30px;
  min-width: 100%;
  margin: -20px -25px 10px;
  border-radius: 3px 3px 0 0;
}
.table-title h2 {
  margin: 5px 0 0;
  font-size: 24px;
}
.table-title .btn-group {
  float: right;
}
.table-title .btn {
  color: #fff;
  float: right;
  font-size: 13px;
  border: none;
  min-width: 50px;
  border-radius: 2px;
  border: none;
  outline: none !important;
  margin-left: 10px;
}
.table-title .btn i {
  float: left;
  font-size: 21px;
  margin-right: 5px;
}
.table-title .btn span {
  float: left;
  margin-top: 2px;
}
table.table tr th, table.table tr td {
  border-color: #e9e9e9;
  padding: 12px 15px;
  vertical-align: middle;
}
table.table tr th:first-child {
  width: 60px;
}
table.table tr th:last-child {
  width: 100px;
}
table.table-striped tbody tr:nth-of-type(odd) {
  background-color: #fcfcfc;
}
table.table-striped.table-hover tbody tr:hover {
  background: #f5f5f5;
}
table.table th i {
  font-size: 13px;
  margin: 0 5px;
  cursor: pointer;
} 
table.table td:last-child i {
  opacity: 0.9;
  font-size: 22px;
  margin: 0 5px;
}
table.table td a {
  font-weight: bold;
  color: #566787;
  display: inline-block;
  text-decoration: none;
  outline: none !important;
}
table.table td a:hover {
  color: #2196F3;
}
table.table td a.edit {
  color: #FFC107;
}
table.table td a.delete {
  color: #F44336;
}
table.table td i {
  font-size: 19px;
}
table.table .avatar {
  border-radius: 50%;
  vertical-align: middle;
  margin-right: 10px;
}
.pagination {
  float: right;
  margin: 0 0 5px;
}
.pagination li a {
  border: none;
  font-size: 13px;
  min-width: 30px;
  min-height: 30px;
  color: #999;
  margin: 0 2px;
  line-height: 30px;
  border-radius: 2px !important;
  text-align: center;
  padding: 0 6px;
}
.pagination li a:hover {
  color: #666;
} 
.pagination li.active a, .pagination li.active a.page-link {
  background: #03A9F4;
}
.pagination li.active a:hover {        
  background: #0397d6;
}
.pagination li.disabled i {
  color: #ccc;
}
.pagination li i {
  font-size: 16px;
  padding-top: 6px
}
.hint-text {
  float: left;
  margin-top: 10px;
  font-size: 13px;
}    
/* Custom checkbox */
.custom-checkbox {
  position: relative;
}
.custom-checkbox input[type="checkbox"] {    
  opacity: 0;
  position: absolute;
  margin: 5px 0 0 3px;
  z-index: 9;
}
.custom-checkbox label:before{
  width: 18px;
  height: 18px;
}
.custom-checkbox label:before {
  content: '';
  margin-right: 10px;
  display: inline-block;
  vertical-align: text-top;
  background: white;
  border: 1px solid #bbb;
  border-radius: 2px;
  box-sizing: border-box;
  z-index: 2;
}
.custom-checkbox input[type="checkbox"]:checked + label:after {
  content: '';
  position: absolute;
  left: 6px;
  top: 3px;
  width: 6px;
  height: 11px;
  border: solid #000;
  border-width: 0 3px 3px 0;
  transform: inherit;
  z-index: 3;
  transform: rotateZ(45deg);
}
.custom-checkbox input[type="checkbox"]:checked + label:before {
  border-color: #03A9F4;
  background: #03A9F4;
}
.custom-checkbox input[type="checkbox"]:checked + label:after {
  border-color: #fff;
}
.custom-checkbox input[type="checkbox"]:disabled + label:before {
  color: #b8b8b8;
  cursor: auto;
  box-shadow: none;
  background: #ddd;
}
/* Modal styles */
.modal .modal-dialog {
  max-width: 400px;
}
.modal .modal-header, .modal .modal-body, .modal .modal-footer {
  padding: 20px 30px;
}
.modal .modal-content {
  border-radius: 3px;
  font-size: 14px;
}
.modal .modal-footer {
  background: #ecf0f1;
  border-radius: 0 0 3px 3px;
}
.modal .modal-title {
  display: inline-block;
}
.modal .form-control {
  border-radius: 2px;
  box-shadow: none;
  border-color: #dddddd;
}
.modal textarea.form-control {
  resize: vertical;
}
.modal .btn {
  border-radius: 2px;
  min-width: 100px;
} 
.modal form label {
  font-weight: normal;
} 
</style>
<script>
$(document).ready(function(){
  // Activate tooltip
  $('[data-toggle="tooltip"]').tooltip();
  
  // Select/Deselect checkboxes
  var checkbox = $('table tbody input[type="checkbox"]');
  $("#selectAll").click(function(){
    if(this.checked){
      checkbox.each(function(){
        this.checked = true;                        
      });
    } else{
      checkbox.each(function(){
        this.checked = false;                        
      });
    } 
  });
  checkbox.click(function(){
    if(!this.checked){
      $("#selectAll").prop("checked", false);
    }
  });
});
</script>
</head>
  <body>
    <div class="container-scroller">
      
      <!-- partial:partials/_navbar.html -->
      <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
          <a class="navbar-brand brand-logo" href="index.html"><img src="<?php echo base_url('assets/Back-Office/assets/images/logo.svg'); ?>" alt="logo" /></a>
          <a class="navbar-brand brand-logo-mini" href="index.html"><img src="<?php echo base_url('assets/Back-Office/assets/images/logo-mini.svg'); ?>" alt="logo" /></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-stretch">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button>
          <div class="search-field d-none d-xl-block">
            <form class="d-flex align-items-center h-100" action="#">
              <div class="input-group">
                <div class="input-group-prepend bg-transparent">
                  <i class="input-group-text border-0 mdi mdi-magnify"></i>
                </div>
                <input type="text" class="form-control bg-transparent border-0" placeholder="Search products">
              </div>
            </form>
          </div>
          <ul class="navbar-nav navbar-nav-right">
            
            
            
            <li class="nav-item nav-profile dropdown">
              <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                <div class="nav-profile-img">
                  <img src="<?php echo base_url('assets/Back-Office/assets/images/faces/face28.png'); ?>" alt="image">
                </div>
                <div class="nav-profile-text">
                  <p class="mb-1 text-black">Administrateur</p>
                </div>
              </a>
              <div class="dropdown-menu navbar-dropdown dropdown-menu-right p-0 border-0 font-size-sm" aria-labelledby="profileDropdown" data-x-placement="bottom-end">
                <div class="p-3 text-center bg-primary">
                  <img class="img-avatar img-avatar48 img-avatar-thumb" src="<?php echo base_url('assets/Back-Office/assets/images/faces/face28.png'); ?>" alt="">
                </div>
                <div class="p-2">
                  <h5 class="dropdown-header text-uppercase ps-2 text-dark">User Options</h5>
                  
                  <a class="dropdown-item py-1 d-flex align-items-center justify-content-between" href="#">
                    <span>Log Out</span>
                    <i class="mdi mdi-logout ms-1"></i>
                  </a>
                </div>
              </div>
            </li>
           
            
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-category">Mains</li>
            <li class="nav-item">
              <a class="nav-link" href="index.html">
                <span class="icon-bg"><i class="mdi mdi-cube menu-icon"></i></span>
                <span class="menu-title">Dashboard</span>
              </a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" href="pages/tables/basic-table.html">
                <span class="icon-bg"><i class="mdi mdi-table-large menu-icon"></i></span>
                <span class="menu-title">Tables</span>
              </a>
            </li>
            
            
            <li class="nav-item sidebar-user-actions">
              <div class="user-details">
                <div class="d-flex justify-content-between align-items-center">
                  <div>
                    <div class="d-flex align-items-center">
                      <div class="sidebar-profile-img">
                        <img src="<?php echo base_url('assets/Back-Office/assets/images/faces/face28.png'); ?>" alt="image">
                      </div>
                      <div class="sidebar-profile-text">
                        <p class="mb-1">Administrateur</p>
                      </div>
                    </div>
                  </div>
                  <div class="badge badge-danger">0</div>
                </div>
              </div>
            </li>
            
            <li class="nav-item sidebar-user-actions">
              <div class="sidebar-user-menu">
                <a href="#" class="nav-link"><i class="mdi mdi-logout menu-icon"></i>
                  <span class="menu-title">Log Out</span></a>
              </div>
            </li>
          </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <!-- ici -->
          <div class="container-xl">
  <div class="table-responsive">
   
  <div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit Articles</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="<?php echo base_url('rechauffement-climatqiue/Home');?>"> Back</a>
        </div>
    </div>
</div>


<form method="post" action="<?php echo base_url('rechauffement-climatiques/store');?>">
    <?php


    if ($this->session->flashdata('errors')){
        echo '<div class="alert alert-danger">';
        echo $this->session->flashdata('errors');
        echo "</div>";
    }


    ?>


    <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ID Title:</strong>
                <input type="text" name="IdContent" class="form-control" value="">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Title:</strong>
                <input type="text" name="Title" class="form-control" value="">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Description:</strong>
                <input type="Description" name="Description" class="form-control" value="">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Content:</strong>
                <input type="Content" name="Content" class="form-control" value="">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Auteur:</strong>
                <input type="Auteur" name="Auteur" class="form-control" value="">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Date de sortie:</strong>
                <input type="DatePublication" name="DatePublication" class="form-control" value="">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Create</button>
        </div>
    </div>


</form>


          
</div>
<!-- Edit Modal HTML -->
<div id="addEmployeeModal" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <form>
        <div class="modal-header">            
          <h4 class="modal-title">Add Employee</h4>
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        </div>
        <div class="modal-body">          
          <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" required>
          </div>
          <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" required>
          </div>
          <div class="form-group">
            <label>Address</label>
            <textarea class="form-control" required></textarea>
          </div>
          <div class="form-group">
            <label>Phone</label>
            <input type="text" class="form-control" required>
          </div>          
        </div>
        <div class="modal-footer">
          <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
          <input type="submit" class="btn btn-success" value="Add">
        </div>
      </form>
    </div>
  </div>
</div>
<!-- Edit Modal HTML -->
<div id="editEmployeeModal" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <form>
        <div class="modal-header">            
          <h4 class="modal-title">Edit Employee</h4>
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        </div>
        <div class="modal-body">          
          <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" required>
          </div>
          <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" required>
          </div>
          <div class="form-group">
            <label>Address</label>
            <textarea class="form-control" required></textarea>
          </div>
          <div class="form-group">
            <label>Phone</label>
            <input type="text" class="form-control" required>
          </div>          
        </div>
        <div class="modal-footer">
          <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
          <input type="submit" class="btn btn-info" value="Save">
        </div>
      </form>
    </div>
  </div>
</div>
<!-- Delete Modal HTML -->
<div id="deleteEmployeeModal" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <form>
        <div class="modal-header">            
          <h4 class="modal-title">Delete Employee</h4>
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        </div>
        <div class="modal-body">          
          <p>Are you sure you want to delete these Records?</p>
          <p class="text-warning"><small>This action cannot be undone.</small></p>
        </div>
        <div class="modal-footer">
          <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
          <input type="submit" class="btn btn-danger" value="Delete">
        </div>
      </form>
    </div>
  </div>
</div>
          <!-- ici end -->
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div class="footer-inner-wraper">
              <div class="d-sm-flex justify-content-center justify-content-sm-between py-2">
                <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © RAVELONJARA HENRI MICHAEL - ETU001196 </a>2022</span>
                <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">IT University</span>
              </div>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="<?php echo base_url('assets/Back-Office/assets/vendors/js/vendor.bundle.base.js'); ?>"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="<?php echo base_url('assets/Back-Office/assets/vendors/chart.js/Chart.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/Back-Office/assets/vendors/jquery-circle-progress/js/circle-progress.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/Back-Office/assets/js/jquery.cookie.js'); ?>" type="text/javascript"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="<?php echo base_url('assets/Back-Office/assets/js/off-canvas.js'); ?>"></script>
    <script src="<?php echo base_url('assets/Back-Office/assets/js/hoverable-collapse.js'); ?>"></script>
    <script src="<?php echo base_url('assets/Back-Office/assets/js/misc.js'); ?>"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="<?php echo base_url('assets/Back-Office/assets/js/dashboard.js'); ?>"></script>
    <!-- End custom js for this page -->
  </body>
</html>