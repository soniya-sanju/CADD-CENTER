 
 <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input type="text" class="form-control form-control-navbar" id="live_search" name="live_search" placeholder="Search..." aria-label="Search" autocomplete="off">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>
       
<script type="text/javascript">
        $(document).ready(function () {
            $("#live_search").keyup(function () {
                var query = $(this).val();
                if (query != "") {
                    $.ajax({
                        url: 'searchajax.php',
                        method: 'POST',
                        data: {
                            query: query
                        },
                        success: function (data) {
                            $('#example1').html(data);
                            $('#example1').css('display', 'block');
                            $("#live_search").focusout(function () {
                                $('#example1').css('display', 'none');
                            });
                            $("#live_search").focusin(function () {
                                $('#example1').css('display', 'block');
                            });
                        }
                    });
                } else {
                    $('#example1').css('display', 'none');
                }
            });
        });
    </script>

      
      <li class="nav-item">
        <?php
              if(!isset($_SESSION["id"])){
            ?>
                <a href="login.php" class="nav-link text-body font-weight-bold px-0 ">
                  <i class="fa fa-user me-sm-1"></i>
                  <span class="d-sm-inline d-none">Login</span>
                </a>
              </li>
               <?php
                }else{  
                ?> 
               <li class="nav-item">
              <a href="logout.php" class="nav-link text-body font-weight-bold px-0">
                <i class="fa fa-user me-sm-1"></i>
                <span class="d-sm-inline d-none">Log Out</span>
              </a>
            </li>

            <?php
              }
            ?> 
        <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      
    </ul>
  </nav>

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="dashboard.php" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">CADD Dashboard</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="dashboard.php" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item menu-open">
            <a href="#" class="nav-link ">
              <p> Student 
              <i class="fas fa-angle-left right"></i></p>
            </a>
            <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="studentregister.php" class="nav-link ">
              <i class="far fa-circle nav-icon"></i>
              <p> Student Register</p>
            </a>
          </li>
        </ul>
          <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="studentregisterview.php" class="nav-link ">
              <i class="far fa-circle nav-icon"></i>
              <p> Student Register View</p>
            </a>
          </li>
        </ul>
          </li>
          <li class="nav-item menu-open">
            <a href="#" class="nav-link ">
              <p> Course Details 
              <i class="fas fa-angle-left right"></i></p>
            </a>
            <ul class="nav nav-treeview">
          <li class="nav-item ">
            <a href="course.php" class="nav-link ">
              <i class="far fa-circle nav-icon"></i>
              <p> Course </p>
            </a>
          </li>
        </ul>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="courseview.php" class="nav-link ">
              <i class="far fa-circle nav-icon"></i>
              <p> Course View</p>
            </a>
          </li>
        </ul>
      </li>
      <li class="nav-item menu-open">
            <a href="#" class="nav-link ">
              <p>Sub Course Details 
              <i class="fas fa-angle-left right"></i></p>
            </a>
            <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="subcourse.php" class="nav-link ">
              <i class="far fa-circle nav-icon"></i>
              <p>Sub Course </p>
            </a>
          </li>
        </ul>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="subcourseview.php" class="nav-link ">
              <i class="far fa-circle nav-icon"></i>
              <p>Sub Course View </p>
            </a>
          </li>
        </ul>
      </li>
          <li class="nav-item menu-open">
            <a href="#" class="nav-link ">
              <p>Enquiry Details 
              <i class="fas fa-angle-left right"></i></p>
            </a>
            <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="enquiry.php" class="nav-link ">
              <i class="far fa-circle nav-icon"></i>
              <p>Enquiry</p>
            </a>
          </li>
        </ul>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="enquiryview.php" class="nav-link ">
              <i class="far fa-circle nav-icon"></i>
              <p>Enquiry View</p>
            </a>
          </li>
          <li class="nav-item">
                <a href="followupview.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p> Follow up View</p>
                </a>
              </li>
        </ul>
      </li>
      <li class="nav-item menu-open">
            <a href="#" class="nav-link ">
              <p>Payment List 
              <i class="fas fa-angle-left right"></i></p>
            </a>
            <ul class="nav nav-treeview">
      <li class="nav-item">
                <a href="fees.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Payment</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
      <li class="nav-item">
                <a href="feesview.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Payment View</p>
                </a>
              </li>
            </ul>
          </li>
           <!--<li class="nav-item menu-open">
            <a href="#" class="nav-link ">
              <p>Follow Updations 
              <i class="fas fa-angle-left right"></i></p>
            </a>
            <ul class="nav nav-treeview">
          <li class="nav-item">
                <a href="followup.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Follow up</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
       <li class="nav-item">
                <a href="followupview.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p> Follow up View</p>
                </a>
              </li>
            </ul>
          </li>-->
         
              <li class="nav-item menu-open">
                <a href="#" class="nav-link ">
              <p>Reminder 
              <i class="fas fa-angle-left right"></i></p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="reminder.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create Reminder</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="reminderview.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Reminder View</p>
                </a>
              </li>
            </ul>
          </li>
             
            <li class="nav-item menu-open">
            <a href="#" class="nav-link ">
              <p>Certification
              <i class="fas fa-angle-left right"></i></p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="certificat.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Certificat Form</p>
                </a>
              </li>
            </ul>
             <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="certificatview.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Certification View</p>
                </a>
              </li>
            </ul>
          </li>
              <li class="nav-item menu-open">
            <a href="#" class="nav-link ">
              <!--<i class="nav-icon fas fa-edit"></i>-->
              <p>
                Reports
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="paymentreport.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Fees report</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="enquiryreport.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Enquiry report</p>
                </a>
              </li>
             <!-- <li class="nav-item">
                <a href="forms/editors.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Institute ways report</p>
                </a>
              </li>-->
              <li class="nav-item">
                <a href="addmissionreport.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Admission report</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="totalcollection.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Total collection</p>
                </a>
              </li>
              
            </ul>
          </li>
          
          <li class="nav-item menu-open">
            <a href="#" class="nav-link ">
              <!--<i class="nav-icon fas fa-edit"></i>-->
              <p>
                Today collection
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="dailyincome.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Today Income</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="dailyexpense.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Today Expense</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item menu-open">
            <a href="#" class="nav-link ">
              <!--<i class="nav-icon fas fa-edit"></i>-->
              <p>
               Monthly collection
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="monthlyincome.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Monthly Income</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="monthlyexpense.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Monthly Expense</p>
                </a>
              </li>
            </ul>
          </li>
             
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>