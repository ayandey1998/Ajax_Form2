<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ajax Form</title>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>
	<h1>Registration Form</h1>
	<div class="container">
       <form method="post" action="" name="myform" id="myform">
       		<div class="form-group">
            	<label for="name">Name</label>
				<input type="text" name="name" id="name" required>
				<span id="nameerror" style="color: red;"></span>
			</div>
			<div class="form-group">
				<label for="email">Email</label>
				<input type="email" name="email" id="email" required>
				<span id="emailerror" style="color: red;"></span>
			</div>
			<div class="form-group">
				<label for="date_of_birth">D.O.B</label>
				<input type="date" name="date_of_birth" id="date_of_birth" required>
				<span id="DOBerror" style="color: red;"></span>

			</div>
			<div class="form-group">
				<label for="username">User_Name</label>
				<input type="username" name="username" id="username" required>
				<span id="wronguser" style="color: red;"></span>

			</div>
			<div class="form-group">
				<label for="password">Password</label>
				<input type="password" name="password" id="password" required>
				<span id="wrongpassword" style="color: red;"></span>

			</div>
			<div class="form-group">
				<!-- <input type="submit" name="" value="abcd"> -->
                <input type="button" class="button" value="Ajax test" name="showResult" id="showResult">
                <input type="button" class="button" value="Show Data" onclick="getAllData();">
            </div>
		</form>
		<span id="formResult"></span>

		<div class= "alert alert-info" id="table_content">
			<h2> Manage User</h2>
			<table border='5' style="width: 1000px;">
				<thead>
					<th>ID</th>
					<th>NAME</th>
					<th>EMAIL</th>
					<th>DATE_OF_BIRTH</th>
					<th>USERNAME</th>
					
				</thead>
				<tbody id="table_show">
				 
				</tbody>
			</table>
		</div>
	<script>
    		/* Display data*/

    		function getAllData()
    		{
    			$.ajax({
    				type: "GET",
        			url: "getAllData2.php",             
        			dataType: "html",                  
        			success: function(data){                    
            			$("#table_show").html(data); 
    				}
    					})
    		}

    		/*Insert Data*/
    		$("#showResult").click(function(){
    			// document.getElementById('nameerror').innerHTML='';
    			$.ajax({
    				url: "response.php",
    				method: "POST",
    				data: $("#myform").serialize(),
    				success: function(res){
            			$("#formResult").html(res); 
            			// document.getElementById('nameerror').innerHTML="Required";
            			// document.getElementById('emailerror').innerHTML="Required";
    					// alert(res);
    					// $("#name").val("");
    					// $("#email").val("");
    					// $("#date_of_birth").val("");
    					// $("#username").val("");
						// $("#password").val("");
    					
    					// getAllData();

    				}
    			})
    		})
    	// })

    </script>
	
</html>




