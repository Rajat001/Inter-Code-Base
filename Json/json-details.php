
<script type="text/javascript">
	
	var Person = {"name": "Bholu" , "lastName" : "Singh"} ;

	var ObjectToString = JSON.stringify(Person); // Convert From Javascript Object to JSON Object
	
	// document.write(Person.lastName);
	// document.write(ObjectToString.lastName);

	var JsonStringToObject = JSON.parse(ObjectToString); // Convert JSON Object / String To Javascript Object
	document.write(JsonStringToObject.name);	

	//document.write(ObjectToString.name);	// Show Undefined bcz of JSON string ,JSON string does'nt give value , JSON object give only JSON parameter details ...

	window.location = "redirect.php?values="+ObjectToString;

</script>
