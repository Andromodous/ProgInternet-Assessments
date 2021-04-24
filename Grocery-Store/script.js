function showMap(id) {
    var maps = document.getElementsByClassName("image-map");
    for (var i = 0; i < maps.length; i++) {
        maps[i].style = "display:none;";
    }
    if (document.getElementById(id).style.display == "none") {
        document.getElementById(id).style.display = "block";
    }
    else {
        document.getElementById(id).style.display = "none";
    }
}

function validateQuantity() {
    if (document.getElementById("quantity").value <= 0) {
        document.getElementById("warning").innerHTML = "<b>Warning!: </b> Quantity must be above 0";
        document.getElementById("warning").style.display = "block";
        return false;
    }
    if (document.getElementById("quantity").value >= 20) {
        document.getElementById("warning").innerHTML = "<b>Warning!: </b> You have exceeded the Quantity of 20, Try again";
        document.getElementById("warning").style.display = "block";
        return false;
    }
    else {
        return true;
    }
}

function checkoutForm() {
    if(document.getElementById("email").value.match(/[a-zA-z0-9]+@[a-zA-Z0-9]+.com/g)==null) {
        document.getElementById("checkoutwarning").innerHTML = "<b>Warning!: </b> Email is not in corect format. e.g. yourname@example.com";
        document.getElementById("checkoutwarning").style.display = "block";
        return false;
    }
    else if (document.getElementById("name").value.length == 0) {
        document.getElementById("checkoutwarning").innerHTML = "<b>Warning!: </b> Full name is missing. Must have more than 0 characters";
        document.getElementById("checkoutwarning").style.display = "block";
        return false;
    }
    else if (document.getElementById("address").value.length == 0) {
        document.getElementById("checkoutwarning").innerHTML = "<b>Warning!: </b>  Home address is missing. Must have more than 0 characters";
        document.getElementById("checkoutwarning").style.display = "block";
        return false;
    }
    else if (document.getElementById("postcode").value.length == 0) {
        document.getElementById("checkoutwarning").innerHTML = "<b>Warning!: </b> Postcode is missing. Must have more than 0 characters";
        document.getElementById("checkoutwarning").style.display = "block";
        return false;
    }
    else if (document.getElementById("state").value.length == 0) {
        document.getElementById("checkoutwarning").innerHTML = "<b>Warning!: </b>  State is missing. Must have more than 0 characters";
        document.getElementById("checkoutwarning").style.display = "block";
        return false;
    }
    else if (document.getElementById("country").value.length == 0) {
        document.getElementById("checkoutwarning").innerHTML = "<b>Warning!: </b>  Country is missing. Must have more than 0 characters";
        document.getElementById("checkoutwarning").style.display = "block";
        return false;
    }
    else {
        return true;
    }
}
