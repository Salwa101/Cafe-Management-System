<?php include('partials/menu.php');?>

        <!-- Main content section starts-->
        <div class="main-content">
       
            <div class ="wrapper">
               <h2><i> Manage Admin </i> </h2>

               <br/> <br/> <br/>

               <!-- button for add admin -->
                <a href="add-admin.php" class="btn-primary">Add Admin</a>

                <br/> <br/> <br/>

                 <table class="tbl-full">
                   <tr>
                     <th>S.N. </th>
                     <th> Full Name </th>
                     <th>UserName </th>
                     <th>  Actions </th>
                   </tr>

                   <tr>
                      <td>1.</td>
                      <td> Sara Khan </td>
                      <td> sara</td>
                    <td>
                    <a href="#" class="btn-secondary"> Update Admin</a> 
                    <a href="#" class="btn-danger"> Delete Admin</a> 
                    </td>
                  </tr>

                  <tr>
                      <td>2.</td>
                      <td> Sara Khan </td>
                      <td> sara</td>
                    <td>
                    <a href="#" class="btn-secondary"> Update Admin</a> 
                    <a href="#" class="btn-danger"> Delete Admin</a> 
                    </td>
                  </tr>

                  <tr>
                      <td>3.</td>
                      <td> Sara Khan </td>
                      <td> sara</td>
                    <td>
                    <a href="#" class="btn-secondary"> Update Admin</a> 
                    <a href="#" class="btn-danger"> Delete Admin</a> 
                    </td>
                  </tr>
                 </table>
            </div>
        </div>
        <!-- Main content section finish-->

        <?php include('partials/footer.php');?>
