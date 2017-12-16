<?php
//fetch.php
session_start();
$connect = mysqli_connect("localhost", "root", "", "shop");
$output = "";
if(isset($_POST["query"]))
{
    $search = mysqli_real_escape_string($connect, $_POST["query"]);
    $query = "
  SELECT * FROM sales_item 
  WHERE item_id LIKE '%".$search."%'
  OR item_name LIKE '%".$search."%'
  
 ";
}
else
{
    $query = "
  SELECT * FROM sales_item ORDER BY item_id
 ";
}
$result2 = mysqli_query($connect,$query);

if(mysqli_num_rows($result2)>0)
{
    while($rows = mysqli_fetch_assoc($result2))
    {
        $item=($rows['item_id']);

        //Call the admin controller calss to get the more information about the student

        echo "<div class=\"member\" style='float:left;
    width:210px;
    height:350px;
    background:#fff;
    padding:3px;
    margin-right:3px;
    margin-left:3px;
    -moz-box-shadow: 1px 2px 2px #ccc;
    -webkit-box-shadow: 1px 2px 2px #ccc;
    box-shadow: 1px 2px 2px #ccc;'>
    
    <br><br>
    <img style=\"width: 200px;\" src=".$item. " alt=\"Click the link to see more info\"  />
    <div class=\"name\">
        <h4 style=\"font-size: 20px\" class=\"card-title\">
        $item $item
        </h4>
        <p style=\"font-size:15px\"  class=\"card-text\"></p>
        <p style=\"color: #003399; font-size: 15px\"  class=\"card-text\"><a href=".$item.">More Information</a></p>
    </div>
    


</div>";


    }
    echo "<br>";
}
else
{
    echo "No Students found";
}


?>



