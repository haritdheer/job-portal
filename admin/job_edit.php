<?php
include('include/header.php');
include('include/sidebar.php');
?>
<?php
include('connection/db.php');

$id=$_GET['edit'];
$query=mysqli_query($conn,"select * from all_jobs where job_id ='$id' ");
while($row=mysqli_fetch_array($query)){
    $job_title=$row['job_title'];
    $des=$row['des'];
    $country=$row['country'];
    $state=$row['state'];
    $city=$row['city'];
    
}
?>
   





<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
        <nav aria-label="breadcrumb">
         <ol class="breadcrumb">
         <li class="breadcrumb-item"><a href="admin_dashboard.php">Dashboard</a></li>
         <li class="breadcrumb-item"><a href="job_create.php"> All Job List</a></li>
         <li class="breadcrumb-item"><a href="#"> Edit Job</a></li>

    
         </ol>
         </nav>
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
          <h1 class="h2">Edit Job</h1>

            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
               
              </div>
             <!-- <a class="btn btn-primary" href="add_customer.php">Add +</a> -->
            </div>
          </div>

          <div style="width: 50%; margin-left:25%; background-color: #F2F4F4;">
          <div id="msg"></div>
          <form action="" method ="POST" style="margin:3% ; padding:3%;" name="job_form" id="job_form">
          <div class="form-group">
            <label for="Customer Email">Job Title</label>
            <input type="text"  value="<?php echo $job_title;?>"name ="job_title" id="job_title" class="form-control" placeholder="Enter Job Title">

          </div>

          <div class="form-group">
            <label for="Customer Username">Description</label>
            <textarea name="des" id="des"  class= "form-control ml-2px" cols="30" rows="10">
        <?php echo $des; ?></textarea>

          </div>

          <div class="form-group">
        <label for="Country">Country</label>
        <input type="text" value="<?php echo $country;?>" name="country" class=" form-control" id="country"  placeholder="Choose from India,UK,Canada only">
        <!-- <option value="">Select Country</option> -->
        <!-- </select> -->
          </div>

          <div class="form-group">
        <label for="State">State</label>
        <input type="text" value="<?php echo $state;?>" name="state" class=" form-control" id="state" placeholder="ex-Maharashtra,Birmingham..">
        <!-- <option value="">Select State</option>
        </select> -->
          </div>

          <div class="form-group">
        <label for="City">City</label>
        <input type="text" value="<?php echo $city;?>" name="city" class=" form-control" id="city" placeholder="Only in Metropolitan cities">
         <!-- <option value="">Select City</option>
        </select> -->
          </div>

         

          <input type="hidden" name="job_id" id="job_id" value=" <?php echo $_GET['edit'];?>">

         
            <div class="form-group">

            <input type="submit" class="btn  btn-block btn-success" placeholder="Saved" name="submit" id="submit">
            </div>
            </form>
            </div>

         
          

            <canvas class="my-4" id="my-Chart" width="900" height="300"></canvas>

            <div class="table-responsive">
          
          </div>
        </main>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>

    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>

    <!-- database plugins -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>

   <script> $(document).ready(function () {
    $('#example').DataTable();
});
</script>

<script>

  $(document).ready(function(){
    $("#submit").click(function(){
      var job_title=$("#job_title").val();
      var country=$("#country").val();
      var state=$("#state").val();
      var city=$("#city").val();
      
      var description=$("#description").val();
      
      if(job_title==''){
        alert("Enter Job Title!!");
        return false;
      }
      if(description==''){
        alert("Enter Description!!");
        return false;
      }
      if(country==''){
        alert("Enter Country Name!!");
        return false;
      }
      if(state==''){
        alert("Enter State Name!!");
        return false;
      }

      if(city==''){
        alert("Enter City Name!!");
        return false;
      }


      var data=$("#job_form").serialize();

     
    });
  });
</script>
   
   
  </body>
</html>

<?php
include('connection/db.php');
if(isset($_POST['submit'])){
    $id=$_POST['job_id'];
    $job_title=$_POST['job_title'];
    $des=$_POST['des'];
    $country=$_POST['country'];
    $state=$_POST['state'];
    $city=$_POST['city'];

    $query1=mysqli_query($conn,"update all_jobs set job_title='$job_title',des='$des',country='$country',state='$state',city='$city' where job_id='$id' ");

    if($query1){
        echo "<script>alert('Updated Successfully!!!')</script>";
    }
    else{
        echo "<script>alert('error occured')</script>";
    }
}

?>


