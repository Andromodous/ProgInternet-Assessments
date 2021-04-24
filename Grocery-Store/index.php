<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="style.css">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Welcome | Grocery-Store</title>
</head>
<body>
     <div class="frame">
        <img src="image/default.png" alt="grocery" usemap="#grocery" id="grocery">
        <map name="grocery">
            <area shape="rect" coords="0,170,100,245" alt="frozen food" onclick="showMap('frozen')">
            <area shape="rect" coords="110,170,210,245" alt="fresh food" onclick="showMap('fresh')">
            <area shape="rect" coords="220,170,320,245" alt="beverages" onclick="showMap('beverages')">
            <area shape="rect" coords="330,170,430,245" alt="home health" onclick="showMap('home')">
            <area shape="rect" coords="440,170,550,245" alt="pet food" onclick="showMap('petFood')">
        </map>
        <img src="image/frozenFood.png" alt="Frozen Food" class="image-map" usemap="#frozenFood" id="frozen">
            <map name="frozenFood">
                <area alt="Hamburger Patties" href="product.php?id=1002" coords="2,140,121,200" shape="rect">
                <area alt="Fish Fingers 1000G" href="product.php?id=1003" coords="294,140,414,198" shape="rect">
                <area alt="Fish Fingers 500G" href="product.php?id=1000" coords="114,321,213,380" shape="rect">
                <area alt="Shelled Prawns" href="product.php?id=1001" coords="223,321,322,382,331,381" shape="rect">
                <area alt="Tub Ice Cream 1 Litre" href="product.php?id=1004" coords="355,322,453,380" shape="rect">
                <area alt="Tub Ice Cream 2 Litre" href="product.php?id=1005" coords="465,322,564,381" shape="rect">
            </map>
        <img src="image/freshFood.png" alt="Fresh Food" class="image-map" usemap="#freshFood" id="fresh">
            <map name="freshFood">
                <area alt="T'bone Steak" href="product.php?id=3002" coords="1,119,84,170" shape="rect">
                <area alt="Cheddar Cheese 500G" href="product.php?id=3000" coords="47,272,131,323" shape="rect">
                <area alt="Cheddar Cheese 1000G" href="product.php?id=3001" coords="141,273,224,322" shape="rect">
                <area alt="Navel Oranges" href="product.php?id=3003" coords="187,119,272,171" shape="rect">
                <area alt="Bananas" href="product.php?id=3004" coords="281,120,365,169" shape="rect">
                <area alt="Grapes" href="product.php?id=3006" coords="375,120,459,169" shape="rect">
                <area alt="Apples" href="product.php?id=3007" coords="468,119,552,170" shape="rect">
                <area alt="Peaches" href="product.php?id=3005" coords="562,119,646,169" shape="rect">
            </map>
        <img src="image/beverage.png" alt="Beverages" class="image-map" usemap="#beverage" id="beverages">
            <map name="beverage">
                <area alt="Chocolate Bar" href="product.php?id=4005" coords="399,141,549,201" shape="rect">
                <area alt="Instant Cofee 200G" href="product.php?id=4003" coords="1,321,101,380" shape="rect">
                <area alt="Instant cofee 500G" href="product.php?id=4004" coords="111,321,209,380" shape="rect">
                <area alt="Earl Grey Tea Bags Pack 25" href="product.php?id=4000" coords="225,320,324,381" shape="rect">
                <area alt="Earl Grey Tea Bags Pack 100" href="product.php?id=4001" coords="335,320,434,379" shape="rect">
                <area alt="Earl Grey Tea Bags Pack 200" href="product.php?id=4002" coords="446,321,544,381" shape="rect">
            </map>
        <img src="image/homeHealth.png" alt="Home Health" class="image-map" usemap="#homeHealth" id="home">
            <map name="homeHealth">
                <area alt="Bath soap" href="product.php?id=2002" coords="2,120,101,179" shape="rect">
                <area alt="Panadol 24 Pack" href="product.php?id=2000" coords="19,301,119,360" shape="rect">
                <area alt="Panadol Bottle 50" href="product.php?id=2001" coords="131,301,228,359" shape="rect">
                <area alt="Washing Powder" href="product.php?id=2005" coords="221,120,320,179" shape="rect">
                <area alt="Garbage Bag small" href="product.php?id=2003" coords="300,301,400,360" shape="rect">
                <area alt="Garbage Bag Large" href="product.php?id=2004" coords="409,300,510,360" shape="rect">
                <area alt="Laundry Bleach" href="product.php?id=2006" coords="449,121,550,180" shape="rect">
            </map>
        <img src="image/petFood.png" alt="Pet Food" class="image-map" usemap="#petFood" id="petFood">
            <map name="petFood">
                <area alt="Bird Food" href="product.php?id=5002" coords="1,120,121,179" shape="rect">
                <area alt="Cat Food" href="product.php?id=5003" coords="151,120,270,180" shape="rect">
                <area alt="Fish Food" href="product.php?id=5004" coords="449,122,568,181" shape="rect">
                <area alt="Dry Dog Food 1KG" href="product.php?id=5001" coords="251,301,351,359" shape="rect">
                <area alt="Dry Dog Food 5KG" href="product.php?id=5000" coords="362,300,460,361" shape="rect">
            </map>
     </div>
    <div class="frame">
            <iframe src="displayProduct.php" title="products"></iframe>
            <iframe src="cart.php" title="cart"></iframe>
    </div>
</body>
<script src="script.js"></script>
</html>