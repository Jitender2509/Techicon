<?php
    require ('includes/db_config.php');
    $query = "select * from contact";
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
                  <h4 class="card-title">Contact Table</h4>
                  <div class="table-responsive pt-3">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>
                            ID
                          </th>
                          <th>
                            NAME
                          </th>
                          <th>
                            EMAIL
                          </th>
                          <th>
                            PHONE
                          </th>
                          <th>
                            MESSAGE
                          </th>
                          <th>
                            DATE
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        while($rowdata = mysqli_fetch_array($data))
                        {
                          echo "<tr>";
                          echo "<td>".$rowdata['id']."</td>";
                          echo "<td>".$rowdata['name']." ".$rowdata['last_name']."</td>";
                          echo "<td>".$rowdata['email']."</td>";
                          echo "<td>".$rowdata['phone']."</td>";
                          echo "<td>".$rowdata['message']."</td>";
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

