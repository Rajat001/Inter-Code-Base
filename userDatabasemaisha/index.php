<html>
 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
 <script type="text/javascript">

 $(document).ready(function() {
            $('#save_data').click(function () {            
            var namev = $('#name').val();           
            $.ajax({
            url: "getDataAjax.php",
            type: "POST",
            data: { name: namev },
            success: function (response) {
                $("#responsecontainer").html(response); 
            }
            });

            });
});

</script>

<body>
<h3 align="center" style="color: red;">Get User Details By <i style="color:black;">Mobile No </i>. </h3>
<table border="1" align="center">
   <tr>
       <td> <input type="text" id="name" name="name"  /> </td>
       <td> <input type="button" id="save_data" value="Display All Data" /> </td>
   </tr>
</table>
<div id="responsecontainer" align="center">

</div>
</body>
</html>