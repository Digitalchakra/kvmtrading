<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>KVM Trading</title>
	
	<link rel="stylesheet" type="text/css" href="css/sss.css">
	<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
</head>
<body>
	<div class="container-fluid, fullfill">
		<div class="container">
			<div class="row siteHeader">
				<div class="span4" >
					<a href="index.php" class="siteLogo">KVM Trading</a>
				</div>
				<div class="span8" >
					<ul class="siteHeaderul">
						<li class="siteHeaderlist sh_first"><a href="page1.php" class="siteHeaderanchor a1">who we are</a></li>
						<li class="siteHeaderlist"><a href="page2.php" class="siteHeaderanchor a2">What we do</a></li>
						<li class="siteHeaderlist">
						  <a class="siteHeaderanchor a3" data-toggle="dropdown" href="page3.php">
						    Our Partners
						  </a>
						 <!--  <ul class="dropdown-menu subMenu1">
						    <li><a href="page3_1.php">Sub section 1</a></li>
						    <li><a href="page3_2.php">Sub section 2</a></li>
						    <li><a href="page3_3.php">Sub section 3</a></li>
						  </ul> -->
						</li>
						<li class="siteHeaderlist l4"><span href="page4.php" class="siteHeaderanchor a4 p-a p4-a">Contact us</span></li>
						
					</ul>
					
				</div>
			</div>
		</div>
	</div>
	<div class="container_fluid p1-highlight">
		<div class="container">
			<div class="row contentSection2">
				<div class="span12">
					<h2 class="p4-heading"> Contact us</h2>
				</div>
				<div class="container">
				<div class="row">
					<br/>					
					<form class="well span12" id="contactForm">

						<div class="row">
							<div class="span6">
								<label>First Name</label>
								<input name="fname" type="text" id= "contact_name" class="span5" placeholder="First Name">
								<label>Last Name</label>
								<input name="lname" type="text" class="span5" placeholder="Last Name">
								<label>Email Address</label>
								<div class="input-prepend">
									<span class="add-on"><i class="icon-envelope"></i></span><input name="email" type="text" id= "contact_email" class="span2" style="width:338px" placeholder="Your email address">
								</div>
								<label>Subject</label>
								<select id="subject" name="subject" class="span5">
									<option value="na" selected="">Choose One:</option>
									<option value="service">General Customer Service</option>
									<option value="suggestions">Suggestions</option>
									<option value="product">Product Support</option>
								</select>
								
							</div>	
							<div class="span6">
								<label>Message</label>
								<textarea name="message" id= "contact_mesg" class="input-xlarge span5" rows="10"></textarea>
							</div>
						</div>
						<div id="submit" class="btn btn-primary btn-large pull-right" style="margin-right:80px;">Send</div>
					</form>
					<div id="status" class="" >
						<span id="info"></span>
					</div>
				</div>
			</div>
			</div>
		</div>
	</div>
	
		
	
	
	<div class="container-fluid, fullfill2">
		<div class="container">
			<div class="row siteFooter">
				<div class="span5"> 
      				<p>© Copyright KVM Trading 2013. All Rights reserved.</p>
      			 </div>
      			 <div class="span7">
      			 	<div class="dcGo">
      			 		<a href="http://www.digitalchakra.in" target="_blank"><span class="dcLink"></span></a>
      			 		<p>Powered by</p>
      			 		
      			 	</div>
						
      			 </div>
			</div>
		</div>
	</div>	
	<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>	
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/bootstrap-dropdown.js"></script>
	<script>
	$(document).ready(function() {
				$('#submit').click(function()
					{
						$('#info').html('');
						if($('#contact_name').val().length<=0)
						{
							$('#contact_name').addClass('error_class');
							$('#contact_name').focus();
							$('#info').html('Please fill in the highlighted fields.');
							return false;
						}
						else
						{
							$('#contact_name').removeClass('error_class');
						}
						if($('#contact_email').val().length>0)
						{
							var pattern = new RegExp(/^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i);
    						if(!pattern.test($('#contact_email').val()))
    						{
    							$('#contact_email').addClass('error_class');
								$('#contact_email').focus();
								$('#info').html('Please enter a valid email.');
								return false;
    						}
    						else
							{
								$('#contact_email').removeClass('error_class');
							}
						}
						else
						{
							$('#contact_email').addClass('error_class');
								$('#contact_email').focus();
								$('#info').html('Please enter a valid email.');
								return false;
						}
						if($('#subject').val()==='na')
						{
							$('#subject').addClass('error_class');
							$('#subject').focus();
							$('#info').html('Please chosse a subject.');
							return false;
						}
						else
						{
							$('#subject').removeClass('error_class');
						}
						if($('#contact_mesg').val().length<=0)
						{
							$('#contact_mesg').addClass('error_class');
							$('#contact_mesg').focus();
							$('#info').html('Please enter message.');
							return false;
						}
						else
						{
							$('#contact_mesg').removeClass('error_class');
						}

						var postdata=$("#contactForm").serialize();
						$('#info').html('Submitting...');
						$.ajax(
							{
								url:'contact.php',
								data:postdata,
								dataType:'JSON',
								method:'POST',
								success:function(output)
								{
									if(output.success==1)
									{
										$('#info').html('<span style="color:green;">Thank you. We will contact you shortly.</span>');
									}
									else
									{
										$('#info').html('<span style="color:red;">Server error. Please try again</span>');
									}
								},
								error:function()
								{
									$('#info').html('<span style="color:red;">Server error. Please try again</span>');
								}
							});
					});
				});
	</script>	
</body>
</html>