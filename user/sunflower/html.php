<html>
    <head>
        <title>Order portal</title>
        <link rel="stylesheet" href="css.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia&effect=neon|outline|emboss|shadow-multiple">
    </head>
    <body>
        <div class="navigation">
            <!-- <div class="printpage"><button onclick="window.print()">Print</button></div> -->
            <div class="navigation-bar">
                <div class="missedcall-order">Missed Call To Order:<span id="missedcall-order-number">1800-3000-2434</span> </div>
                <div class="order-inquiries">Order Inquiries<!-- <span id="order-inquiries-link"><a href=""> Click here</a></span>--></div>
                <div class="logo">GREEN SCAN SHOPPING </div>
                <div class="login"> Login</div>
                <div class="download-app">Download-App</div>
                <div class="webuser"> user count:
                <?php
                    $con=mysqli_connect("localhost","root","","greenscan");
// Check connection
                    if (mysqli_connect_errno())
                    {
                      echo "Failed to connect to MySQL: " . mysqli_connect_error();
                    }

                    $sql="SELECT * FROM signin ";

                    if ($result=mysqli_query($con,$sql))
                    {
  // Return the number of rows in result set
                      $rowcount=mysqli_num_rows($result);
                      echo( ' <span style="color:red;text-align:center; border:1px solid yellow; border-radius: 50%;padding:0px 20px 0px 0px;background-color:green;font-size:50px">' .$rowcount);
  // Free result set
              mysqli_free_result($result);
  }

mysqli_close($con);
?>
                    
                









                  
                </div>
            </div>
            <!-- navigation secound -->
            <div class="navigation-barmain">
                <div class="home"> <a href="http://localhost/greenscan/user/index/"> HOME</a></div>
                <div class="">BRANDS</div>
                <div class="">MEDICINE</div>
                <div class="">TOOLS</div>
                <div class="">CATEGORIES</div>
                <div class="">SEASONAL</div>
                <div class="">KNOWLEDGE</div>
                <div class="">CONTACT</div>
            </div>
        </div>
        <br>
        <div class="Sunflower">
            <fieldset>
                <legend> Sunflower</legend>
                <div class="img">
                    <div class="sunflower-img"><img src="http://www.flowerspicture.org/enlarge/h/sunflower-garden.jpg" width="150px" height="150px"></div>
                    <div class="sunflower-dis"> <img src="https://static.grainews.ca/wp-content/uploads/2014/05/sunflowers-leaf_RGB.jpg" width="150px" height="150px"></div>
                    <div class="sunflower-medicion"><img src="data:image/jpeg;base64,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" width="150px" height="150px"></div>
                    <div class="sunflower-fertilizer"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRYBfMmkTlXRBAJcpTzEKIZS0ngb_FDcftNAA&usqp=CAU " height="150px" width="150px"> </div> 
                </div>
               <form   action="php.php" method="post" target="_self">
                   <div class="input-type">
                        <div>  <label> TYPE:</label><select name='type'><option>SUNFLOWER</option></select></div>
                        <div> <label> DISEASES:</label><select name="dis"><option>False wireworms</option><option>Cutworms</option><option>Thrips</option></select></div>
                        <div> <label> MEDISION</label><select name="medi"><option>Acephate 95% SG</option><option> Bifenthrin 10% EC</option><ooption> sempra</ooption></select></div>
                        <div> <label> FERTILIZER</label><select name="fer"> <option> Phosphorus fertilizers</option><option> Micronutrient fertilizers</option><option> Inhibitors</option></select></div>
                        <div class="sun-flower-submit"><button  class="button" name="order">order</button></a></div>
                    </div>
                </form>   
            </fieldset>        
         </div>
         <br>
         <div class="chili">
            <fieldset>
                <legend>CHILI PLANT</legend>
                <div class="img">
                    <div class="sunflower-img"><img src="https://5.imimg.com/data5/NE/CF/MY-18759085/green-chilli-plant-500x500.jpg" width="150px" height="150px"></div>
                    <div class="sunflower-dis"> <img src="https://www.gardeningknowhow.com/wp-content/uploads/2010/08/yellow-pepper-leaves.png" width="150px" height="150px"></div>
                    <div class="sunflower-medicion"><img src="https://www.dhanuka.com/storage/category/June2019/QEAscw88FniyESEon5JJ.jpg" width="150px" height="150px"></div>
                    <div class="sunflower-fertilizer"><img src="data:image/jpeg;base64,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" height="150px" width="150px"> </div> 
                </div>
               <form   action="php.php" method="post" target="_self">
                   <div class="input-type">
                        <div>  <label> TYPE:</label><select name='type'><option>chili plant</option></select></div>
                        <div> <label> DISEASES:</label><select name="dis"><option>False wireworms</option><option>Cutworms</option><option>Thrips</option></select></div>
                        <div> <label> MEDISION</label><select name="medi"><option>Acephate 95% SG</option><option> Bifenthrin 10% EC</option><ooption> sempra</ooption></select></div>
                        <div> <label> FERTILIZER</label><select name="fer"> <option> Phosphorus fertilizers</option><option> Micronutrient fertilizers</option><option> Inhibitors</option></select></div>
                        <div class="sun-flower-submit"><button  class="button" name="order">order</button></a></div>
                    </div>
                </form>   
            </fieldset>        
         </div>
         <br>
                   
                    

               
    </body>
</html>