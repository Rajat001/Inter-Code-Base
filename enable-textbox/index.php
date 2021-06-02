<!DOCTYPE html>
<html>
<head>
<title></title>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
</head>

<body>

C = ( 

<input type="text" id="value_of_B"  disabled="disabled" placeholder="B" maxlength="4" size="2"  />

 + 

<input type="text" id="value_of_A"  placeholder="A" maxlength="4" size="2" />

- 

<input type="text" id="value_of_10" value="10" disabled="disabled" readonly size="2" />

)

* 

<input type="text" id="value_of_2" value="2" disabled="disabled" readonly size="2" />

&nbsp; &nbsp; 
=>  &nbsp; &nbsp; 
<input id="btnSubmitC" type="button" value="Submit" onclick="get_c_Result()"  />
<br><br>

C = <input type="text" id="result_C"  placeholder="Result" readonly size="6" />
&nbsp; &nbsp; 
<br><br>

<hr>
<!-- Calculation for B Starts -->

<br>

B = ( 

<input type="text" id="value_of_BA"  placeholder="A" maxlength="4" size="2"  />

 + 

<input type="text" id="value_of_BB" value="10"  placeholder="A" maxlength="4" size="2" />
) - 5

&nbsp; &nbsp; 
=> &nbsp; &nbsp; 
<input id="btnSubmitB" type="button" value="Submit" onclick="get_b_Result()"  />

<br><br>

B = <input type="text" id="result_B"  placeholder="Result" readonly size="6" />

<!-- Calculation for B Ends -->

<!-- Calculation for D Starts -->
<br><br>

<hr>
<br>
D = A + B + C
<br><br>
D = 

<input type="text" id="value_of_DA"  placeholder="A" maxlength="4" size="2"  />

 + 

<input type="text" id="value_of_DB" disabled="disabled"  placeholder="B" maxlength="4" size="2" />

+

<input type="text" id="value_of_DC"  disabled="disabled"  placeholder="C" size="4" />

&nbsp; &nbsp; 
=>  &nbsp; &nbsp; 
<input id="btnSubmitD" type="button" value="Submit" onclick="get_D_Result()"  />



<br><br>

D = <input type="text" id="result_D"  placeholder="Result" readonly size="6" />


<!-- Calculation for D Ends -->

<br><br><br>
( <b>Remark :- </b> <span style="color : red; ">Text Box Take Only Numeric Values !!! )</span> 
</body>
<script type="text/javascript">
        // Result of C is Start
        $("#value_of_A").keyup(function () {
            //Reference the Button.
            var btnSubmitC = $("#btnSubmitC");
            var value_of_B = $("#value_of_B");
            var value_of_A = $("#value_of_A");
            var value_of_10 = $("#value_of_10");
 			var value_of_2 = $("#value_of_2");

            if ($(this).val().trim() != "") {
                
                btnSubmitC.removeAttr("btnSubmitC");
                value_of_B.removeAttr("disabled");
                value_of_A.removeAttr("disabled");
                value_of_10.removeAttr("disabled");
                value_of_2.removeAttr("disabled");
            }
        });


        $('input').bind('keypress', function (event) {
        var regex = new RegExp("^[0-9]+$");
        var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
        if (!regex.test(key)) {
        event.preventDefault();
        return false;
        }
        });


	function get_c_Result()
		{
            var btnSubmitC = $("#btnSubmitC"); 
            if($("#value_of_A").val().trim() == ''){
                alert("Value Of A Is Empty");
            }
            else{
			var result=parseInt($("#value_of_B").val()) + parseInt($("#value_of_A").val())  - parseInt($("#value_of_10").val());
            var result_C = result * parseInt($("#value_of_2").val());
			$("#result_C").val(result_C);
            }
		}
        // Result of C is End



    function get_b_Result()
        {
             
            if($("#value_of_BA").val().trim() == ''){
                alert("Value Of A Is Empty For B Section");
            }
            else{
            
            var result=parseInt($("#value_of_BA").val()) + parseInt($("#value_of_BB").val())  - 5 ;
            
            $("#result_B").val(result);
            
            }
        }


            $("#value_of_DA").keyup(function () {
            //Reference the Button.
            var btnSubmitD = $("#btnSubmitD");
            var value_of_DA = $("#value_of_DA");
            var value_of_DB = $("#value_of_DB");
            var value_of_DC = $("#value_of_DC");
            

            if ($(this).val().trim() != "") {
                
                btnSubmitD.removeAttr("btnSubmitD");
                value_of_DA.removeAttr("disabled");
                value_of_DB.removeAttr("disabled");
                value_of_DC.removeAttr("disabled");
                
            }
        });


            function get_D_Result()
            {

            if($("#value_of_DA").val().trim() == ''){
            alert("Value Of A Is Empty For D Section");
            }
            else{

            var result=parseInt($("#value_of_DA").val()) + parseInt($("#value_of_DB").val()) +  parseInt($("#value_of_DC").val()) ;

            $("#result_D").val(result);

            }
            }

</script>
</html>