<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Aelum Consulting Pvt.Ltd. Assignment</title>
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
		<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
		<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    
	 <script type="text/javascript">
	
    function timeout()
    {
        var minute=Math.floor(timeLeft/60);
        var second=timeLeft%60;
        if (timeLeft<=0)
        {
            clearTimeout(tm);
            document.getElementById("form1").style.visibility="hidden";
			
        }
        else
        {
            document.getElementById("time").innerHTML=minute+":"+second;
        }
        timeLeft--;
        var tm=setTimeout(function(){timeout()},1000);
    }
    </script>
        
    </head>
    <body onload="timeout()" >
        <div class="container">
		

            <div class="row-2">
                <div class="col">
                    <div class="card">
                        <div class="card-header text-center">
                            simple form 
                            
                        <script type="text/javascript">
							var timeLeft=3*60;
						</script>
                        <div id="time" style="float:right" >Timeout</div>
                        </div>
						<div id="vsat" style="visibility:hidden">Time is over</div>
                      
                        <div class="card-body">
                            <form action="insert_data.php" id="form1" method="post" style="visibility:visible;">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Name</label>
                                    <input type="text" name="name" class="form-control" required="">
                                </div>                                
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" required="">
                                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                </div>
								<div class="form-group">
        							<label class="control-label" for="date">Date of Birth</label>
        							<input class="form-control" id="date" name="date" placeholder="MM/DD/YYY" type="text"/>
      							</div>          
								<div class="form-group">
  									<label for="exampleFormControlTextarea3">About yourself</label>
  									<textarea class="form-control" id="exampleFormControlTextarea3" rows="7"></textarea>
								</div>  
                                <div class="g-recaptcha" data-sitekey="6Leo82McAAAAAPrFhLpp5uXrw8b-qiRVRpcUG0mR"></div>
                                <br>
                                <input type="submit" id="submit" name="submit" class="btn btn-primary">
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col"></div>
            </div>

        </div>
		<script>
   			$(document).ready(function(){
      			var date_input=$('input[name="date"]'); 
      			var container=$('.bootstrap-iso form1').length>0 ? $('.bootstrap-iso form').parent() : "body";
      			var options={
        			format: 'mm/dd/yyyy',
        			container: container,
        			todayHighlight: true,
        			autoclose: true,

      			};
      			date_input.datepicker(options);
    		})
		</script>
      
      

    </body>
</html>