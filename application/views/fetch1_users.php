<?php
session_start();
$connect = mysqli_connect("localhost", "root", "", "shop");
$output = '';

if(isset($_POST["query"]))
{
    $search = mysqli_real_escape_string($connect, $_POST["query"]);
    $query = "
  SELECT * FROM users 
  WHERE username LIKE '%".$search."%'
  OR first_name LIKE '%".$search."%' 
  OR last_name LIKE '%".$search."%' 
  OR type LIKE '%".$search."%' 
   

 ";
}
else
{
    $query = "
  SELECT * FROM users ORDER BY username
 ";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
    $output .= '


   <table class="table" >
    <tr>
     <th>User Name</th>
     <th>First Name</th>
     <th>Last Name</th>
     <th>NIC</th>
     <th>Type</th>
     <th>New</th>
     <th>Delete</th>
     
     
    </tr>
 ';
    while($row = mysqli_fetch_array($result))
    {
        $username=$row["username"];
        $nic=$row["nic"];
        $output .= '
   
    
   <tr>
    <td>'.$row["username"].'</td>
    <td>'.$row["first_name"].'</td>
    <td>'.$row["last_name"].'</td>
    <td>'.$row["nic"].'</td>
    <td>'.$row["type"].'</td>

    
   </tr>


  ';
    }
    echo $output;
}
else
{
    echo 'Data Not Found';
}
