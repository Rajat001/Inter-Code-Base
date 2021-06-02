<?php 
// Two Namespace is Assigned
namespace TimeManagement;
	class A{
	function __construct(){
	echo "Print the A Namespace For Now" . "<br>";
	}
}

namespace FirstNamespace;
	class FirstNamespaceClass{
		function __construct(){
			echo "We Are Calling The FirstNamespaceClass method";
		}
	}

 ?>