<?php
    require ('includes/db_config.php');
    $query = "select * from register";
    $data = mysqli_query($connection,$query); 
?>

<?php include "includes/header.php"; ?>

  
   <?php include "includes/nav.php"; ?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          
        
        <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Registration Table</h4>
                  
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>
                            ID
                          </th>
                          <th>
                            Name
                          </th>
                          <th>
                            College
                          </th>
                          <th>
                            Technology
                          </th>
                          <th>
                            Member
                          </th>
                          <th>
                            Email
                          </th>
                          <th>
                            Phone
                          </th>
                          <th>
                            Address
                          </th>
                          <th>
                            City
                          </th>
                          <th>
                            State
                          </th>
                          <th>
                            Date
                          </th>
                        </tr>
                      </thead>
                      <tbody>

                        <?php
                        while($rowdata = mysqli_fetch_array($data))
                        {
                          echo "<tr>";
                          echo "<td>".$rowdata['id']."</td>";
                          echo "<td>".$rowdata['first_name']." ".$rowdata['last_name']."</td>";
                          echo "<td>".$rowdata['college']."</td>";
                          echo "<td>".$rowdata['technology']."</td>";
                          echo "<td>".$rowdata['member']."</td>";
                          echo "<td>".$rowdata['your_email']."</td>";
                          echo "<td>".$rowdata['phone']."</td>";
                          echo "<td>".$rowdata['address']."</td>";
                          echo "<td>".$rowdata['city']."</td>";
                          echo "<td>".$rowdata['state']."</td>";
                          echo "<td>".$rowdata['date']."</td>";
                          echo "</tr>";


                        }
                        ?>
                       
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>

            
          
        </div>
        <!-- content-wrapper ends -->
        <?php include "includes/footer.php"; ?>

