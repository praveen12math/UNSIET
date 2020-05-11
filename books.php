<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books</title> 
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
            <li><a href="">Syllabus</a></li>
            <li><a href="#">Lab manual</a></li> 
            <li><a href="#">Books</a></li>
            <li><a href="question_paper.php">Que. papers</a></li> 
            <li><a href="#">Logout</a></li>
          </ul>
        </div>
      </nav><br>
    
      <ul class="sidenav" id="mobile-demo">
        <li><a href="">Syllabus</a></li>
        <li><a href="">Lab manual</a></li>
        <li><a href="">Books</a></li> 
        <li><a href="question_paper.php">Que. papers</a></li>
        <li><a href="">Logout</a></li>
      </ul>    
      
 <!--       -->

<?php 
include 'connection.php';
$sql="select * from books"; 
$result= mysqli_query($conn,$sql); 
//$row = mysqli_fetch_array($result); 
while($row=mysqli_fetch_array($result)) 
{
?>

 <div class="row">
 <div class="col l3 s12">
    <a href="books/book1.pdf" download><p id="rcorners"> <?php echo "Subject: " .$row['book_name']; echo "<br>"; echo "Author: " .$row['author']; echo "<br>"; echo "Edition: " .$row['edition']; echo "<br>"; echo "Publication: " .$row['publication']; ?> </p></p>   </a>
 </div>  

<?php 
}
?>
 
 </div>

<style>
#rcorners
{
    border-radius: 0px 50px 0px 0px;
    border: 2px solid #73AD21;
    padding: 20px; 
    width: 230px;
    height: 130px;   
    margin-left: 10px; 
    margin: auto; 
    margin-top: 40px
  } 
  
  </style>

</body> 
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script src="js/loader.js"></script>
</html>