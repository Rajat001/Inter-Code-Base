<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript">
function add_two_number()
{
   $("#display_message").show();
   if($("#txt1").val()=="" || $("#txt2").val()=="")
   {
      $("#display_message").html("<font color='red'>Enter the the Value First</font>");
   }
   else
  {
    var answer=parseInt($("#txt1").val()) + parseInt($("#txt2").val());
       
    $("#display_message").html("<font color='green'><b>"+answer+"</b></font>");
    $("#txt3").val(answer);
 
   }
}
</script>
<div id="display_message" style="display:none;">55</div>
<input type="text" id="txt1" placeholder="Enter First Number">
<input type="text" id="txt2" placeholder="Enter Second Number">
<input type="text" id="txt3" disabled placeholder="Answer">
<input type="button" value="Answer" onclick="add_two_number();">



