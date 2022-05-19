<?php include "includes/header.php"; ?>

  
   <?php include "includes/nav.php"; ?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="d-flex justify-content-between flex-wrap">
                <div class="d-flex align-items-end flex-wrap">
                  <div class="mr-md-3 mr-xl-5">
                    <h2>Welcome back,</h2>
                    <p class="mb-md-0">Your analytics dashboard template.</p>
                  </div>
                 
                </div>
               
              </div>
            </div>
          </div>
         
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body dashboard-tabs p-0">
                  <ul class="nav nav-tabs px-4" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active" id="overview-tab" data-toggle="tab" href="#overview" role="tab" aria-controls="overview" aria-selected="true">Overview</a>
                    </li>
                  </ul>
                  <div class="tab-content py-0 px-0">
                    <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview-tab">
                      <div class="d-flex flex-wrap justify-content-xl-between">
                     
                        
                        <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                          <i class="mdi mdi-eye mr-3 icon-lg text-success"></i>
                          <div class="d-flex flex-column justify-content-around">
                            <small class="mb-1 text-muted">Total No. Of Registration</small>
                            <?php
                            require ('includes/db_config.php');
                            if (mysqli_connect_errno())
                            {
                            echo "Failed to connect to MySQL: " . mysqli_connect_error();
                            }
                            $sql="SELECT id FROM register ORDER BY id";
                            if ($result=mysqli_query($connection,$sql))
                            {
                              ?>

                            <h5 class="mr-2 mb-0"><?php
                            // Return the number of rows in result set
                            $rowcount=mysqli_num_rows($result);
                            printf($rowcount);
                            /*printf($rowcount);
                            // Free result set
                            mysqli_free_result($result);*/
                            }

                            mysqli_close($connection);
                            ?></h5>
                          </div>
                        </div>
                       
                        <div class="d-flex py-3 border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                          <i class="mdi mdi-flag mr-3 icon-lg text-danger"></i>
                          <div class="d-flex flex-column justify-content-around">
                            <small class="mb-1 text-muted">Total No. Of Messages</small>
                            <?php
                            require ('includes/db_config.php');
                            if (mysqli_connect_errno())
                            {
                            echo "Failed to connect to MySQL: " . mysqli_connect_error();
                            }
                            $sql="SELECT id FROM contact ORDER BY id";
                            if ($result=mysqli_query($connection,$sql))
                            {
                              ?>

                            <h5 class="mr-2 mb-0"><?php
                            // Return the number of rows in result set
                            $rowcount=mysqli_num_rows($result);
                            printf($rowcount);
                            /*printf($rowcount);
                            // Free result set
                            mysqli_free_result($result);*/
                            }

                            mysqli_close($connection);
                            ?></h5>
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
        <!-- content-wrapper ends -->
        <?php include "includes/footer.php"; ?>

