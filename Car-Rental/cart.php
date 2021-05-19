<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
    session_start();
    $cart;
    if(isset($_SESSION['cart'])) {
       $cart=$_SESSION['cart']; 
    }
    ?>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="description" content="Hertz-UTS allows you to rent cars, automobiles, vehicles including SUV, Sedan"/>
    <meta name="author" content="Berat Appak"/>
    <title>Hertz-UTS | Cart</title>
    <!--jQuery 3.5.1 from GoogleAPI'S-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!--Bootstrap 4.0.0-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script>
        $(document).ready(()=> {
            removeItem = (id) => {
                $.ajax({url: "remove_item.php?id=" + id, success: function(result) {
                alert(result);
            }})};
            validateRent= () => {
                var validate= true;
                $("input").each(function() { 
                    if($(this).val()<=0) {
                        $("#carttwarning").html("<b>Warning: </b> Rental Days must be greater than 0").slideDown(200);
                        $(this).css({"border": "1px solid red"});
                        validate=false;
                    }
                });
                return validate;
            }
            
            
        });
    </script>
    <header>
        <h3>Hertz-UTS <span style="font-size:14px;"> | Online Car Rental Center</span></h3>
        <div class="header-right">
            <a class="reserve" href="cart.php">Reserve Car</a>
        </div>
    </header>
    </head>
    <body>
        <section>
            <div class="catalogue">
                <?php
                if(isset($_SESSION['cart']) && count($cart)>0) { ?>
                <center><h4>Your Cart </h4></center>
                <div class="alert alert-warning" id="carttwarning"></div>
                <table>
                  <tr>
                    <th>Vehicle</th>
                    <th>Price/Day</th>
                    <th>Rental Days</th>
                    <th>Action</th>
                </tr>
                <form action="process_cart.php" method="POST" id="cart" onsubmit="return validateRent();">
              <?php foreach($cart as $row) { ?>
                      <tr>
                        <td><p><?php echo $row[1]?></p></td>
                        <td><p><?php echo $row[2]?></p></td>
                        <td><input type="number" value="<?php echo $row[3]?>" name="<?php echo $row[0]?>"/></td>
                        <td><a class="cancel" style="float:right;" onclick="removeItem(<?php echo $row[0]?>)" href="#">Remove</a></td>
                      </tr>
              <?php } 
              ?>
                </table>
                <button type="submit" class="reserve" style="float:right;margin-left:2%;" value="submit">Proceed ></button>
                <a class="purchase" href="index.php"  style="float:right;margin-left:2%;">< Go Back</a>
                </form>
               <?php  }
                else { ?>
                <center><h4>No car has been reserved</h4></center>
                <a class="purchase" href="index.php"  style="float:right;">< Go Back</a>
         <?php  } ?>
            </div>
        </section>
        <script src="script.js"></script>
    </body>
    </html>