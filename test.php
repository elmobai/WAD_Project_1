<!DOCTYPE html>
<html lang="en">
<head>
    <!--HERE IT IS EMLYN-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap Demo</title>
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="test.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <script>
  /*Smooth Scroll Function*/
      $(function() {
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});
  </script>
  <script type='text/javascript'>

alert("Login Before Entering contact");

</script>
<script type="text/javascript" src="main.js"></script>
 
</head>
<body>
    
    
    <div class="container-fluid ">
        
    
		<div class="row">
			<!-- header area start -->
		
			<!-- header area end -->
			
			<!-- menubar area start -->
			<nav class="navbar navbar-default">
		
			<H1 align="center">  Super Fantastic Addressbook Funtime  </H1>
				<div class="col-sm-12 col-sm-push- navbar">
				    

<button class="button"><span>Adding a</span>
<li><a href="#adding">Contact</a></li>
</button>

<button class="button"><span>Login  </span>
<li><a href="#login">Field</a></li>
</button>


<button class="button"><span>Rss Feed </span>
<li><a href="#Rss">Feed</a></li>
</button>

<button class="button"><span> Table of   </span>
<li><a href="#contact">Contacts</a></li>

</button>




		    
		    
		</div>

			  <div class="container-fluid">
				<!-- navbar for mobile display -->
				<div class="navbar-header">
			
  
				</div>
		
 
				
				
				  			 
				
			
		
			

			<div class="col-sm-12 col-sm-push-0 contentAreaStyle" id="adding"><!--Start of Adding a Contact div-->
			    

			    <div id="content">
			       <H3 align="center"> Adding a Contact </H3>

			        <br>
			        <br>
  	<form role="form">
			</div>
				<div class="form-group">
				<label for="First_name">First name:</label>
				<input type="text" class="form-control" id="First" name="First_name" placeholder="e.g. Emlyn "/>
			</div>
				<div class="form-group">
				<label for="Last_name">Last name:</label>
				<input type="text" class="form-control" id="Last" name="Last_name" placeholder="e.g Farrell"/>
			</div>
				<div class="form-group">
				<label for="Phone Number ">Phone number:</label>
				<input type="text" class="form-control" id="Phone" name="Phone_Number" placeholder="087 123456"/>
			</div>
			<div class="form-group">
				<label for="address">Address:</label>
				<textarea class="form-control" name="address" id="address" placeholder="123 Fake Street Cork"></textarea>
			</div>
			<div class="form-group">
				
			</div>
			<button type="submit" class="btn btn-default">Submit</button>
	

              </div><!--End of Adding a Contact Div-->

  
    
					

				<div class="col-sm-12 col-sm-push-0 contentAreaStyle1" id="Login"><!--Start of Login Div-->
				<H1> Login Field</H1> 
			  <h2>Enter Username and Password</h2> 
      <div class="container form-signin">
         
         <?php
            $msg = '';
            
            if (isset($_POST['login']) && !empty($_POST['username']) && !empty($_POST['password'])) {
				
               if ($_POST['username'] == 'addressbook1' && $_POST['password'] == '12345') {
                  $_SESSION['valid'] = true;
                  $_SESSION['timeout'] = time();
                  $_SESSION['username'] = 'Addressbook';
                  
                  echo 'You have entered valid use name and password';
               }
               else 
               {
                  $msg = 'Wrong username or password';
               }
            }
         ?>
      </div> <!-- /container -->
      
      <div class="container">
      
         <form class="form-signin" role="form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
            <h4 class="form-signin-heading"><?php echo $msg; ?></h4>
            <input type="text" class="form-control" name="username" placeholder="username = Addressbook" required autofocus></br>
            <input type="password" class="form-control" name="password" placeholder="password = 12345" required>
            <button class="btn btn-lg btn-primary btn-block" type="submit" name="login">Login</button>
         </form>
			
        <!-- Click here to clean <a href="logout.php" tite="Logout">Session. -->
         
      </div> 
				    
				    
				    
                  </div><!--End of Login Div-->
		
			  <div class="col-sm-12 col-sm-push-0 contentAreaStyle3" id="contact"><!--Start of Table of Contacts Div-->
        <br>
        
            <H3 align="center"> Table of contacts </H3>
            <!--HERE'S THE OTHER PART EMLYN-->
             <button type="button" onclick="loadXMLDoc()">Load Contacts</button>
            <br><br>
            <table id="demo"></table>

            <script>
                function loadXMLDoc() {
                    var xmlhttp = new XMLHttpRequest();
                        xmlhttp.onreadystatechange = function() {
                            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                                myFunction(xmlhttp);
                                
                            }
                            
                        };
                        xmlhttp.open("GET", "address.xml", true);
                        xmlhttp.send();
                    
                }
                function myFunction(xml) {
                    var i;
                    var xmlDoc = xml.responseXML;
                    var table="<tr><th>First Name</th><th>Last Name</th><th>Telephone</th><th>Address</th></tr>";
                    var x = xmlDoc.getElementsByTagName("directory");
                    for (i = 0; i <x.length; i++) { 
                        table += "<tr><td>" +
                        x[i].getElementsByTagName("first_name")[0].childNodes[0].nodeValue +
                        "</td><td>" +
                         x[i].getElementsByTagName("last_name")[0].childNodes[0].nodeValue +
                        "</td><td>" +
                         x[i].getElementsByTagName("telephone")[0].childNodes[0].nodeValue +
                        "</td><td>" +
                        x[i].getElementsByTagName("address")[0].childNodes[0].nodeValue +
                        "</td></tr>";
                        
                    }
                    document.getElementById("demo").innerHTML = table;
                    
                }
                </script>


         <script>
            
            if (window.XMLHttpRequest) { // code for IE7+, Firefox, Chrome, Opera, Safari   
                xmlhttp = new XMLHttpRequest();
            }
            else {// code for IE6, IE5
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.open("GET","/home/ubuntu/workspace/address.xml",false);
            xmlhttp.send();
            xmlDoc = xmlhttp.responseXML; 
            document.write("<table border='1'>");
            var x = xmlDoc.getElementsByTagName("person");
            for (var i=0; i<x.length; i++) { 
                document.write("<tr><td>");
                document.write(x[i].getElementsByTagName("first_name")[0].childNodes[0].nodeValue);
                document.write("</td><td>");
                document.write(x[i].getElementsByTagName("Last_name")[0].childNodes[0].nodeValue);
                document.write("</td></tr>");
                 document.write(x[i].getElementsByTagName("Phone")[0].childNodes[0].nodeValue);
                document.write("</td></tr>");
                 document.write(x[i].getElementsByTagName("Address")[0].childNodes[0].nodeValue);
                document.write("</td></tr>");
            }
            document.write("</table>");
        </script>

    

    </Div>
			<div class="clearfix">
			</div><!--End of Table of Contacts Div-->
						  <div class="col-sm-12 col-sm-push-0 contentAreaStyle4" id="Rss"><!--Start of RSS Feed Div-->
						      <title> Rssfeed</title>
						       <H3 align="center"> Rss Feed </H3>
						  </div> 
					
       
       
  
			<div class="clearfix">
			</div>
		
		
			<div class="clearfix">
			</div>
			<div class="footerCopyRightStyle">
			<div class="container">
			    <footer>&copy; Emlyn, Evan and Curtis <br/><a href="#">Back to top</a></footer>
			
		
			</div>
		</div>
    </div>
    <!-- jQuery -->
    <script src="js/jquery-1.11.2.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>