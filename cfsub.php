<?php
$connection=mysqli_connect("localhost","id10067721_theculinarydestination","adityabarve2802","id10067721_theculinarydestination");
if(isset($_GET['id'])){
    $idval = $_GET['id'];
    $del1 = "DELETE FROM contact_us WHERE ID = '$idval'";
    $del2 = mysqli_query($connection,$del1);
    if(del2){
        echo "<script>alert('FEEDBACK DELETED')</script>";
        echo "<script>window.open('cfsub.php','_self')</script>";
    }
        else{
            echo "<script>alert('ERROR OCCOURED')</script>";
        }
}
?>
<html>
    <head>
    <title>Feedback Responses</title>
     <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--LINKING BS & JS-->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <script src="jquery/jqery.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
    
    <!--LINKING EXTERNAL STYLE SHEET-->
    <link rel="stylesheet" type="text/css" href="bootstrap/css/style.css">
        </head>
    <body>
      <div class="container">
<h1>
    FEEDBACKS
    </h1>
    <table border="2px" class="table table-dark table-hover">
    <tr>
        <th>
        SR. NO
        </th>
        <th>
        NAME
        </th>
        <th>
        EMAIL
        </th>
        <th>
        MESSAGE
        </th>
        
        </tr>
<?php

        
        $querry1 = "SELECT * FROM contact_us";
        $querry2 = mysqli_query($connection,$querry1);
        $i = 0;
        while($querry3 = mysqli_fetch_assoc($querry2)){
            $i++;
            $id = $querry3['ID'];
            $name = $querry3['NAME'];
            $email = $querry3['EMAIL'];
            $message = $querry3['MESSAGE'];
        
?>
        <tr>
            <td><?php echo $i; ?></td>
            <td><?php echo $name; ?></td>
            <td><?php echo $email; ?></td>
            <td><?php echo $message; ?></td>
           
        </tr>
        <?php } ?>
      </table>
    </div>
    <!--FOOTER-->
    <footer class="page-footer font-small blue pt-4 bg-dark navbar-dark" style="font-family: 'Cormorant Garamond', serif;">

  <!-- Footer Links -->
  <div class="container-fluid text-center text-md-left">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-6 mt-md-0 mt-3">

        <!-- Content -->
        <h5 class="text-uppercase" style="color:#f1f1f1">CONTACT : 9137818209</h5>
        <p  style="color:#f1f1f1">OR MAIL US AT : universecode24@gmail.com</p>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none pb-3">

      <!-- Grid column -->
      <div class="col-md-3 mb-md-0 mb-3">

        <!-- Links -->
           

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-3 mb-md-0 mb-3">

      
        <ul class="list-unstyled">
         
          <li>
            <a href="#home" style="color:white">Back to top of page</a>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3"  style="color:#f1f1f1">© 2020 Copyright:
    <a href="http://universecode.ml" style="color:red"> UNIVERSE CODE</a><br>Created by : Aditya Barve
  </div>
  <!-- Copyright -->

</footer>
    </body>
</html>