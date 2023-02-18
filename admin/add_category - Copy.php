<?php
 include('include/header.php');
 include('include/sidebar.php');
?>

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
        <nav aria-label="breadcrumb">
        <ol>
         <li class="breadcrumb-item"><a href="admin_dashboard.php">Dashboard</a></li>
         <li class="breadcrumb-item"><a href="category.php">Category</a></li>
         <li class="breadcrumb-item"><a href="#">Add Category</a></li>

        </ol>
        </nav>
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
          <h1 class="h2">Add Category</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
              </div>
              <!--<a class="btn btn-primary" href="add_job_seeker.php"> Add Job Seeker </a>-->
            </div>
          </div>
           <div style="width: 60%; margin-left:25%; background-color: #643B32; ">
           <div id="msg"> </div>
           <form action="category_add.php" method="post" style="margin:3%; padding:3%;" name="Company_form" id="Company_form">
             <div class="form-group">
             <label for="Job Seeker Email"> Category Name </label>
             <input type="text" name="category" id="category" class="form-control" placeholder="Enter Category Name">
           </div>

             <div class="form-group">
             <label for="Job Seeker Username"> Description </label>
             <textarea name="Description" id="Description" class="form-control" cols="30" rows="10" placeholder="Enter Description"> </textarea>
           </div>
            
            <div class="form-group">

            <input type="submit" class="btn btn-success" placeholder="save" name="submit" id="submit">

            </div>
           
            </form>
          <canvas class="my-4" id="myChart" width="900" height="380"></canvas>

          
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

    <!--DataTables Plug in-->
    <script src="https://code.jquery.com/jquery-3.5.1.js"> </script>
    <script src ="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"> </script>
    <script>
      $(document).ready(function() {
    $('#example').DataTable();
       });
     </script>

     <script>
     $(document).ready(function(){
      $("#submit").click(function()
      {
          var Description=$("#Description").val();
          var category=$("#category").val();
          if(Description==''){
            alert("Please Enter Description !!");
            return false;
          }

          if(category==''){
            alert("Please Enter Category  !!");
            return false;
          }
          var data= $("#Company_form").serialize();


           $.ajax({
             type:"POST",
             url:"category_add.php",
             data:data,
             success:function(data){
               alert(data);
             };
          });
          //alert(email);

      });   
     });

     </script>
   
  </body>
</html>