<?php
include 'php_actions/dbconnect.php';


  $q = $_GET["q"];

  $sql=" SELECT * FROM blog WHERE title like '%".$q."%'  ";

  $result = mysqli_query($db, $sql);

  $count=mysqli_num_rows($result);
  if($count>=1){


 
  while ($row = mysqli_fetch_assoc($result))
  {
     
  
    echo "<li>".$row["title"]."<a href='blogdetails.php?blogid=".$row["blog_id"]."'>Read This</a></li>";

 
  }

}
  
  else {

echo "No result found!";
  }

 
  ?>