
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>busbookng</title>
    <link rel="stylesheet" href="cssfile/nav.css">
    <link rel="stylesheet" href="cssfile/footer_l.css">
    <!--  <link rel="stylesheet" type="text/css" href="cssfile/container.css">-->
    <link rel="stylesheet" href="cssfile/login.css">
    <link rel="stylesheet" a href="css\font-awesome.min.css">
   
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
   <!-- <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">-->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    


    <style type="text/css">


       body{
                margin: 0;
                padding: 0;
                width: 100%;
                height: 100%;
                background-image: url(image/at.jpg);
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-size: cover;

            }
            .sign_up{

                font-size: 20px;

            }
            .sign_up:hover{

                background-color: #fff;
                

            }
            @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap');
*{
    font-family: 'Poppins', sans-serif;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

.about-sec{
    display: flex;
    padding: 3rem 0;
    width: 100%;
    
  /*  background: #2c3e50;*/
  background: rgba(1, 2, 2, 0.5);
    margin-top: 106px;
}

.about-intro{
    color: purple;
    width: 400px;
    height: 250px;
    border-left: 3px solid #00b894;
    padding-left: 2rem;
    margin: 0 3rem;
}
.about-intro p{
    margin-top: 1.5rem;
    font-size: 14px;
    opacity: .7;
}
@media only screen and (max-width: 900px) {
    .about-sec{
        flex-direction: column;
        align-items: center;
    }
   
    .about-intro{
        width: 100%;
        height: 100%;
        border-top: 3px solid #00b894;
        border-left: none;
        padding: 1rem;
        margin-top: 2rem;
    }
    .about-intro h3,p{
        width: 80%;
    }
    .about-intro p{
        font-size: 20px;
    }




}

table
{
    width:99%;
    border-collapse: separate !important;
    margin:auto;
    /*/table-layout:fixed;/*/
    text-align:center;
    margin-top:50px;
    background-color: rgba(255,255,255,0.5);
    border-radius: 10px 10px 0px 0px;

}
table th
{
    border-bottom:2px solid rgb(187, 187, 187);
    padding:10px 0px 10px 0px;
    font-family: "balsamiq_sansitalic" !important;
    color: black;
}
table tr td
{
    border-right: 2px solid rgb(187, 187, 187);
    height: 58px;
    padding: 22px 0px 0px 0px;
    font-family: "monospace;" !important;
    border-bottom: 2px solid rgb(187, 187, 187);
    font-size: 22px;
    color: black;
}
table tr td a
{
    background-color: rgb(255, 196, 0);
    color: black;
    border-radius: 5px;
    padding: 6px;
    text-decoration: none;
    margin: 10px;
    font-weight: 700;
}

table tr td button:hover
{

    /*
    background: rgb(255, 255, 255);
    text-decoration:underline;
    color:tomato;
    padding: 4px;
    border:2px solid tomato;
    transition:background-color 0.2s;*/

    padding: 5px 5px 5px 5px;
    border: 2px solid yellow;
    border-radius: 7px;
    background-color: blue;
    color: white;
    cursor: pointer;
}
.topic_bus{
    text-align: center;
    color: #fff;
}


     

      
    </style>

  </head>
  <body>




              
            <?php include("nav.php");
             ?>

             <div class="about-sec">
        
        <div class="about-intro">
            <h3>About Us<span style="color: #00b894;"> !</h3>
            <p>Welcome to our Bus Booking System! We provide a convenient and reliable platform for booking bus tickets online, offering a hassle-free experience for travelers. Our user-friendly interface allows you to easily search for bus routes, compare fares, and reserve seats with just a few clicks.<br></p>
        </div>
    </div>




<?php include("connection.php");?>

<h1 class="topic_bus"> Our Buses<br></h1>

<?php

    
    $sqlget="SELECT * FROM bus";
    $sqldata=mysqli_query($conn,$sqlget) or die('error getting');
    

    echo "<table>";
    echo "<tr>
      <th>ID</th>
    <th>bus_name</th>
    <th>Tel Number</th>
    
   
       </tr>";

       while ($row=mysqli_fetch_array($sqldata,MYSQLI_ASSOC))
       {
        echo "<tr><td>";
        echo $row['id'];
        echo "</td><td>";
        echo $row['Bus_Name'];
        echo "</td><td>";
        echo $row['Tel'];
        echo "</td>";
        
       
          
        ?>

       

        </tr>

<?php
       }

       echo "</table>";


?>
<h1 class="topic_bus"> Our Route Services<br></h1>

<?php

    
    $sqlget="SELECT * FROM route";
    $sqldata=mysqli_query($conn,$sqlget) or die('error getting');
    

    echo "<table>";
    echo "<tr>
      <th>ID</th>
    <th>Via City</th>
    <th>Destination</th>
    <th>Bus Name</th>
    <th>Departure Date</th>
    <th>Departure Time</th>
    <th>Cost</th>
  
   
       </tr>";

       while ($row=mysqli_fetch_array($sqldata,MYSQLI_ASSOC))
       {
        echo "<tr><td>";
        echo $row['id'];
        echo "</td><td>";
        echo $row['via_city'];
        echo "</td><td>";
        echo $row['destination'];
        echo "</td><td>";
        echo $row['bus_name'];
        echo "</td><td>";
         echo $row['departure_date'];
        echo "</td><td>";
         echo $row['departure_time'];
        echo "</td><td>";
         echo $row['cost'];
        echo "</td>";
       
          
        ?>

        </tr>

<?php
       }

       echo "</table>";


?>
 </body>
</html>