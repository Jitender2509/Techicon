<?php include "includes/header.php"; ?>
<?php include "includes/nav.php"; ?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
        <div class="row">
         
         <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Search By Name</h4>
                  
                  <form action="" method="post">
                  <div class="form-group">
                    <div class="input-group">
                      <input type="text" class="form-control" name="user_name" placeholder="Username" aria-label="Username" required>
                      <div class="input-group-append">
                        <button class="btn btn-sm btn-primary" name="user" type="submit">Search</button>
                      </div>
                    </div>
                  </div>
                  </form>
                </div>
              </div>
            </div>
            
            
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Search By Event</h4>
                  
                  <form action="" method="post">
                  <div class="form-group">
                    <div class="input-group">
                      <input type="text" class="form-control" name="event_name" placeholder="Event Name" aria-label="Event Name" required>
                      <div class="input-group-append">
                        <button class="btn btn-sm btn-primary" name="event" type="submit">Search</button>
                      </div>
                    </div>
                  </div>
                  </form>
                  
                </div>
              </div>
            </div>
            
        </div>
            
            
       
                    
        <?php
        
        if(isset($_POST['user']))
        {
        $search = $_POST['user_name'];

        require ('includes/db_config.php');
    
        $qry_search = "select * from register where first_name like '%$search%' ";
    
        $qry_run = mysqli_query($connection,$qry_search);
    
        if(!$qry_run)
                    {
                        die("QUERY FAILED" . mysqli_error($connection));
                    }
                    else 
                    {
                  while($row = mysqli_fetch_assoc($qry_run))
                     {
                    ?>
            
        <div class="row">
            
           <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                    
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>
                            Name
                          </th>
                          <th>
                            College
                          </th>
                          <th>
                            Member
                          </th>
                          <th>
                            Technology
                          </th>
                          <th>
                            Date
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td class="py-1">
                          <?php echo  $row['first_name']." ".$row['last_name']; ?>
                          </td>
                          <td>
                            <?php echo $row['college']; ?>
                          </td>
                          <td>
                            <?php echo $row['member']; ?>
                          </td>
                          <td>
                            <?php echo $row['technology']; ?>
                          </td>
                          <td>
                            <?php echo $row['date']; ?>
                          </td>
                        </tr>
                       
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            
        </div>
        
        <?php
                    
                }
                    }
                        }
        
        ?>
         
        <?php
        
        if(isset($_POST['event']))
        {
        $search = $_POST['event_name'];

        require ('includes/db_config.php');
    
        $qry_search = "select * from register where technology like '%$search%' ";
    
        $qry_run = mysqli_query($connection,$qry_search);
    
        if(!$qry_run)
                    {
                        die("QUERY FAILED" . mysqli_error($connection));
                    }
                    else 
                    {
                  while($row = mysqli_fetch_assoc($qry_run))
                     {
                    ?>
            
        <div class="row">
            
           <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                    
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>
                            Name
                          </th>
                          <th>
                            College
                          </th>
                          <th>
                            Member
                          </th>
                          <th>
                            Date
                          </th>
                          <th>
                            Technology
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                          
                        <tr>
                          <td class="py-1">
                          <?php echo  $row['first_name']." ".$row['last_name']; ?>
                          </td>
                          <td>
                            <?php echo $row['college']; ?>
                          </td>
                          <td>
                            <?php echo $row['member']; ?>
                          </td>
                          <td>
                            <?php echo $row['date']; ?>
                          </td>
                          <td>
                            <?php echo $row['technology']; ?>
                          </td>
                        </tr>
                       
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            
        </div>
        
        <?php
                    
                }
                    }
                        }
        
        ?> 
             
        

          
        </div>
        <!-- content-wrapper ends -->
        <?php include "includes/footer.php"; ?>

