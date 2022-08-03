<?php
include('include/header.php');
include('include/sidebar.php');
?>
   
        

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
        <nav aria-label="breadcrumb">
         <ol class="breadcrumb">
         <li class="breadcrumb-item"><a href="admin_dashboard.php">Dashboard</a></li>
         <li class="breadcrumb-item"><a href="customers.php">Customers</a></li>
         <li class="breadcrumb-item"><a href="#"> Add Customer</a></li>

    
         </ol>
         </nav>
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
          <h1 class="h2">Add Customer</h1>

            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
               
              </div>
             <!-- <a class="btn btn-primary" href="add_customer.php">Add +</a> -->
            </div>
          </div>

          <div style="width: 50%; margin-left:25%; background-color: #F2F4F4;">
          <form action="" style="margin:3% ; padding:3%;">
          <div class="form-group">
            <label for="Customer Email">Enter Email</label>
            <input type="email" class="form-control" placeholder="Enter Customer Email">

          </div>

          <div class="form-group">
            <label for="Customer Username">Enter username</label>
            <input type="text" class="form-control" placeholder="Enter Customer Username">

          </div>

          <div class="form-group">
            <label for="First name">Enter Password</label>
            <input type="pass" class="form-control" placeholder="Enter Password">

          </div>

          
          <div class="form-group">
            <label for="First name">Enter Firstname</label>
            <input type="text" class="form-control" placeholder="Enter Customer Firstname">

          </div>

          <div class="form-group">
            <label for="Last name">Enter Lastname</label>
            <input type="text" class="form-control" placeholder="Enter Customer Lastname">

          </div>

          <div class="form-group">
            <label for="Admin Type"> Admin Type</label>
            <select name="admin_type" class="form-control" id="admin_type">
            <option value="1">Super Admin</option>
            <option value="2">Customer Admin</option>
            </select>

             </div>
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
   
   
  </body>
</html>
