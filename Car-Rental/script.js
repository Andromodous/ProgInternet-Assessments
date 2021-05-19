  $(document).ready(()=> {
  $("input, select").click(()=> {
    $("input, select").css({"border":"1px solid darkgrey"});
  });
  $("#checkout").submit(()=> {
  if($("#fname").val().length==0) {
    $("#checkoutwarning").html("<b>Warning: </b> First name is missing").slideDown(200);
    $("#fname").css({"border":"1px solid red"});
    return false;
  }
  else if($("#lname").val().length==0) {
    $("#checkoutwarning").html("<b>Warning: </b> Last name is missing").slideDown(200);
    $("#lname").css({"border":"1px solid red"});
    return false;
  }
  else if($("#email").val().match(/[a-zA-z0-9]+@[a-zA-Z0-9]+.com/g)==null) {
    $("#checkoutwarning").html("<b>Warning: </b> Email must be in correct format or is missing e.g. yourname@example.com").slideDown(200);
    $("#email").css({"border":"1px solid red"});
    return false;
  }
  else if($("#address1").val().length==0) {
    $("#checkoutwarning").html("<b>Warning: </b> Address Line 1 is missing").slideDown(200);
    $("#address1").css({"border":"1px solid red"});
    return false;
  }
  else if($("#city").val().length==0) {
    $("#checkoutwarning").html("<b>Warning: </b> City is missing").slideDown(200);
    $("#city").css({"border":"1px solid red"});
    return false;
  }
  else if($("#state").val()=="State") {
    $("#checkoutwarning").html("<b>Warning: </b> Please enter a State").slideDown(200);
    $("#state").css({"border":"1px solid red"});
    return false;
  }
  else if($("#postcode").val().length==0) {
    $("#checkoutwarning").html("<b>Warning: </b> PostCode/ZIP is missing").slideDown(200);
    $("#postcode").css({"border":"1px solid red"});
    return false;
  }
  else if($("#payment").val()=="Payment Option") {
    $("#checkoutwarning").html("<b>Warning: </b> Please enter a Payment Option").slideDown(200);
    $("#payment").css({"border":"1px solid red"});
    return false;
  }
  else {
    return true;
  }
  })
});