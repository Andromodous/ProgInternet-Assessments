<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="description" content="Hertz-UTS allows you to rent cars, automobiles, vehicles including SUV, Sedan"/>
    <meta name="author" content="Berat Appak"/>
    <title>Hertz-UTS | Welcome</title>
    <!--jQuery 3.5.1 from GoogleAPI'S-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!--Bootstrap 4.0.0-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <header>
        <h3>Hertz-UTS <span style="font-size:14px;"> | Online Car Rental Center</span></h3>
        <div class="header-right">
            <a class="reserve" href="cart.php">Reserve Car</a>
        </div>
    </header>
    <script>
        $(document).ready(()=>{
              $.ajax({url: "retrieve_data.php", success: function(result) {
    //no need to parse the result using JSON.parse(result) since the file is already a json object
            $("#demo").html(result);
            }});
            return false;
        });
    </script>
    </head>
    <body>
        <section>
            <div class="catalogue">
                <div id="demo"></div>
            </div>
        </section>
        <section>
        </section>
        <footer>
            <div class="product-info">
                Berat Appak | 13854157 <br>
                Programming on the Internet Assignment 2
            </div>
        </footer>
        <script src="script.js"></script>
    </body>
    </html>