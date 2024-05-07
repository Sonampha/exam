<!DOCTYPE html>
<html>
<head>
<title>Sopha Exam</title>
</head>
<body>

  
  Type Number: <input type="number" onkeypress="return event.charCode >= 48 && event.charCode <= 57" name="yournum" id="yournum" value="">
  <input type="button" value="Submit" id="convertnum">

  <br><br>
  <div>Your output is: <span id="message"></span></div>




<script src="jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("#convertnum").click(function(){

    var abc = $("#yournum").val();

    $.ajax(
        {
        url: "/funconvert.php",
        type: "POST",
        data: { abc: abc},
        success: function (result) {
                
            $("#message").html(result);

        }
    });     


    //$("#message").html(abc);
  });
});
</script>

</body>
</html>