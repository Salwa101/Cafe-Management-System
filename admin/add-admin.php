<?php include('partials/menu.php');?>
<div class="main-content">
       
            <div class ="wrapper">
               <h2><i> Add Admin </i> </h2>
               <br/> <br/> 
                 <form action="" method="POST">

                   <table class="tbl-30">

                    <tr>
                        <td>Full Name:  </td>
                        <td>
                            <input type="text"  name="full_name" placeholder="Enter Your Name">
                        </td>
                        <td>  </td>
                    </tr>

                    <tr>
                        <td>Username:  </td>
                        <td>
                            <input type="text"  name="username" placeholder="Enter Your UserName">
                        </td>
                        <td>  </td>
                    </tr>

                    <tr>
                        <td>Password:  </td>
                        <td>
                            <input type="password"  name="password" placeholder="Enter Your Password">
                        </td>
                        <td>  </td>
                    </tr>
                        
                    <tr>
                        <td colspan="2">
                           <input type="submit"  name="submit" class="btn-secondary">
                        </td>
                    </tr>
                   </table>
                 </form>
            </div>
        </div>
<?php include('partials/footer.php');?>

<?php
   //process the value from form and save it to database

   //cheak whether the submit botton is clicked or not
   if(isset($_POST['submit']))
   {
    //button clicked
     //echo "Button Clicked";
     $full_name = $_POST['full_name'];
     $username = $_POST['username'];
     $password = md5($_POST['password']); //Password Encryption with MDS

       // sql query to save data into database

       $sql = "INSERT INTO tbl_admin SET
       full_name='$full_name',
       username='$username',
       password=' $password',
       ";
     
     //Excecute query and save Data into database
      $conn = mysqli_connect('localhost' , 'root' , '') or die(mysqli_error());
      $db_select =  mysqli_select_db($conn, 'coffee-order') or die(mysqli_error());
      //$res = mysqli_querry($conn , $sql) or die(mysqli_error());

   }
  
   

?>