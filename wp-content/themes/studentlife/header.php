<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title>
 <?php wp_title(' '); ?>
 <?php if(wp_title(' ', false)) { echo '-'; } ?> 
 <?php bloginfo('name'); { echo '-'; }  ?> The University of Iowa
 </title>
    
    
      <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script> 
  <script>!window.jQuery && document.write('<script src="themes/doss/js/jquery-1.4.2.min.js"><\/script>')</script> 
  
  <!--[if lt IE 7 ]><script src="js/dd_belatedpng.js?v=1"></script><![endif]--> 
  <script src="http://studentlife.uiowa.edu/themes/doss/js/custom.js"></script> 
  <script src="http://studentlife.uiowa.edu/themes/doss/js/jquery.hoverIntent.minified.js"></script> 
  <script type="text/javascript"> 
  	$(document).ready(function() {
	
			//On Hover Over
		function megaHoverOver(){
		    $(this).find(".sub").stop().fadeTo('fast', 1).show(); //Find sub and fade it in
		    (function($) {
		        //Function to calculate total width of all ul's
		        jQuery.fn.calcSubWidth = function() {
		            rowWidth = 0;
		            //Calculate row
		            $(this).find("ul").each(function() { //for each ul...
		                rowWidth += $(this).width(); //Add each ul's width together
		            });
		        };
		    })(jQuery); 
		
		    if ( $(this).find(".row").length > 0 ) { //If row exists...
		
		        var biggestRow = 0;	
		
		        $(this).find(".row").each(function() {	//for each row...
		            $(this).calcSubWidth(); //Call function to calculate width of all ul's
		            //Find biggest row
		            if(rowWidth > biggestRow) {
		                biggestRow = rowWidth;
		            }
		        });
		
		        $(this).find(".sub").css({'width' :biggestRow}); //Set width
		        $(this).find(".row:last").css({'margin':'0'});  //Kill last row's margin
		
		    } else { //If row does not exist...
		
		        $(this).calcSubWidth();  //Call function to calculate width of all ul's
		        $(this).find(".sub").css({'width' : rowWidth}); //Set Width
		
		    }
		}
		//On Hover Out
		function megaHoverOut(){
		  $(this).find(".sub").stop().fadeTo('fast', 0, function() { //Fade to 0 opactiy
		      $(this).hide();  //after fading, hide it
		  });
		}
 
		var config = {    
			 sensitivity: 2, // number = sensitivity threshold (must be 1 or higher)    
			 interval: 100, // number = milliseconds for onMouseOver polling interval    
			 over: megaHoverOver, // function = onMouseOver callback (REQUIRED)    
			 timeout: 500, // number = milliseconds delay before onMouseOut    
			 out: megaHoverOut // function = onMouseOut callback (REQUIRED)    
		};
	 
		$("ul#univ-nav li .sub").css({'opacity':'0'});
		$("ul#univ-nav li").hoverIntent(config);
			
			
			
	});
  
  
  </script> 
  
  <link rel="stylesheet" type="text/css" href="http://studentlife.uiowa.edu/themes/doss/css/styles.css?m=1303157520" /> 
<link rel="stylesheet" type="text/css" href="http://studentlife.uiowa.edu/themes/doss/css/topbar.css?m=1302806271" /> 
    
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>
</head>

<body <?php body_class(); ?>>

<div id="header"> 
	<div class="container"> 
		<h1><a href="http://www.uiowa.edu/">The University of Iowa</a> <span><a href="/">Division of Student Life</a></span></h1> 
		<ul id="univ-nav"> 
			<li id="univ-nav-imu"><a href="http://imu.uiowa.edu">Iowa Memorial Union</a></li> 
			<li id="univ-nav-recserv"><a href="http://recserv.uiowa.edu/">Recreational Services</a></li> 
			<li id="univ-nav-osl"><a href="http://imu.uiowa.edu/students/">Student Involvement/Leadership</a></li> 
			<li id="univ-nav-all"><a href="/#">All Departments</a> 
				<div class="sub"> 
				<h2>Division of Student Life Web Directory</h2> 
				<div class="subnav-separator">&nbsp;</div> 
           		<ul> 
             
                	<li><a href="http://www.uiowa.edu/ucs/">Counseling Services</a></li> 
                	<li><a href="http://dos.uiowa.edu">Dean of Students</a></li> 
                	<li><a href="http://studenthealth.uiowa.edu">Health Iowa</a></li> 
                	<li><a href="http://imu.uiowa.edu">Iowa Memorial Union</a></li> 
                	<li><a href="http://imu.uiowa.edu/leadership">Leadership Development</a></li> 
                	<li><a href="http://imu.uiowa.edu/osl">Center for Student Involvement & Leadershuip</a></li> 
                	<li><a href="parents/">Parent's Association</a></li> 
            	</ul> 
            	
            	<ul> 
					<li><a href="http://www.uiowa.edu/admissions/undergrad/majors/pick-one.htm">Pick One Program</a></li> 
					<li><a href="http://housing.uiowa.edu">University Housing &amp; Dining</a></li> 
					<li><a href="http://recserv.uiowa.edu">Recreational Services</a></li> 
					<li><a href="http://studenthealth.uiowa.edu">Student Health Services</a></li> 
					<li><a href="http://thechallenge.uiowa.edu/">The Iowa Challenge</a></li> 
                    <li><a hrf="http://www.uiowa.edu/~sds/">Student Disability Services</a></li> 
            	</ul> 
			
			</li> 
		</ul> 
		<div class="clearfix"></div> <!-- TODO: remove --> 
	</div>     
</div> 


   
   <div id="navigation"> 
  
		<a href="http://studentlife.uiowa.edu/"><img src="http://studentlife.uiowa.edu/themes/doss/images/logo.png" class="logo" /></a> 
		<ul> 
			
				<li id="nav-home"><a href="http://studentlife.uiowa.edu">Home</a></li> 
			
				<li id="nav-campus-life"><a href="http://studentlife.uiowa.edu/campus-life/">Campus Life</a></li> 
			
				<li id="nav-student-success"><a href="http://studentlife.uiowa.edu/student-success/">Student Success</a></li> 
			
				<li id="nav-health-and-safety"><a href="http://studentlife.uiowa.edu/health-and-safety/">Health and Safety</a></li> 
			
				<li id="nav-parents"><a href="http://studentlife.uiowa.edu/parents/">Parents</a></li> 
			
				<li id="nav-about"><a href="http://studentlife.uiowa.edu/about/">About</a></li> 
			
		</ul> 
	</div>

<div id="wrapper" class="hfeed">

	

	<div id="main">
