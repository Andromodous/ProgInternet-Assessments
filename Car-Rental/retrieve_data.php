<link rel="stylesheet" href="style.css">
    <!--jQuery 3.5.1-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!--Bootstrap 4.0.0-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script>
    function addCart(id){
        
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        alert(this.responseText);
    }
  };
  xhttp.open("GET", "check_availability.php?id="+ id, true);
  xhttp.send();
    }
</script>
<?php 
$data= json_decode(file_get_contents("cars.json"));
    for($i=0; $i<sizeof($data->cars); $i++ ) { ?>
    <div class="product">
        <div class="product-info">
        <img src="<?php echo $data->cars[$i]->description ?>" alt="<?php echo $data->cars[$i]->brand ?>" style="width:100%;"/>
        <h5>
          <?php echo $data->cars[$i]->brand." ".$data->cars[$i]->model." | ".$data->cars[$i]->category;?>  
        </h5>  
        <b>Mileage: </b><?php echo $data->cars[$i]->mileage." km"; ?> <br/> 
        <b>Fuel Type: </b><?php echo $data->cars[$i]->fuelType;?>  <br/>
        <b>Seats: </b><?php echo $data->cars[$i]->seats;?>  <br/>
        <b>Price/Day: AUD$</b><?php echo $data->cars[$i]->price;?>  <br/>
        <?php echo ($data->cars[$i]->availability) ? "Available" : "Not Available";?>  <br/>
        <a class='purchase' style='width:100%;' onclick="addCart('<?php echo $i?>')" href="#">Add to Cart</a>
        </div>
    </div>
<?php 
    }
//$data->cars[0]->model
?>