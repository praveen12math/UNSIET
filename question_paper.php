<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question Papers</title> 
          <!-- Compiled and minified CSS -->
          <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
          <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      
          <!-- Compiled and minified JavaScript -->
       
          <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      
    
</head>
<body>

    <nav class="nav-fixed" style="background-color: #607d8b;">
        <div class="nav-wrapper">
          <a href="index.html" class="brand-logo ">&nbsp; &nbsp; E-UNSIET</a>
          <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
          <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="syllabus.php">Syllabus</a></li>
            <li><a href="#">Lab manual</a></li> 
            <li><a href="books.php">Books</a></li>
            <li><a href="#">Que. papers</a></li> 
            <li><a href="#">Logout</a></li>
          </ul>
        </div>
      </nav><br>
    
      <ul class="sidenav" id="mobile-demo">
        <li><a href="">Syllabus</a></li>
        <li><a href="">Lab manual</a></li>
        <li><a href="books.php">Books</a></li> 
        <li><a href="">Que. papers</a></li>
        <li><a href="">Logout</a></li>
      </ul>    
      
 <!--       -->

<?php 
include 'connection.php';
$sql="select * from question_paper"; 
$result= mysqli_query($conn,$sql); 
//$row = mysqli_fetch_array($result); 
while($row=mysqli_fetch_array($result)) 
{
?>

 <div class="row">
 <div class="col l3 s12">
    <a href="question_paper/DAA.pdf" download><p id="rcorners"> <?php echo "Subject: " .$row['subject']; echo "<br>"; echo "Year: " .$row['year'];  ?> </p></p>   </a>
 </div>  

<?php 
}
?>
 
 </div>

<style>
#rcorners
{
    border-radius: 50px 50px 50px 0px;
    border: 2px solid tomato;
    padding: 20px; 
    width: 230px;
    height: 90px;   
    margin-left: 10px; 
    margin: auto; 
    margin-top: 40px; 
    text-align: center;
  } 
  
  </style>

</body> 
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script src="js/loader.js"></script>
</html>