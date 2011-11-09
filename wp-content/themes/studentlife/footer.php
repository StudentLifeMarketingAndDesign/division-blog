<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content
 * after.  Calls sidebar-footer.php for bottom widgets.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>
	</div><!-- #main -->

	<div id="footer1" role="contentinfo">

	</div><!-- #footer -->

</div><!-- #wrapper -->


<div id="footer" style="text-align: left; height: 270px;">

	<div class="container">
		<div id="footer-header">

			<p><a href="http://www.uiowa.edu/"><img src="http://studentlife.uiowa.edu/themes/doss/images/logo-footer.png" alt="The University of Iowa - Logo" /></a></p>
			<div id="footer-search">
				<form action="http://studentlife.uiowa.edu/home/SearchForm" method="get" accept-charset="utf-8">
					<input type="text" name="Search" value="" id="search" placeholder="Search..."/>
					<input type="image" name="submit" value="" id="search-submit" src="http://studentlife.uiowa.edu/themes/doss/images/search-icon.png" />
				</form>			
			</div>
			<div class="clearfix"></div>
		</div>

		<div id="footer-nav">
			<div class="row1">
				<ul>
					<li class="footer-nav-header"><a href="/#">Student Success</a></li>
					<li><a href="http://dos.uiowa.edu">Dean of Students</a></li>
					<li><a href="http://thechallenge.uiowa.edu/">The Iowa Challenge</a></li>
					<li><a href="http://imu.uiowa.edu/leadership/">Leadership Development</a></li>

					<li><a href="http://www.uiowa.edu/admissions/undergrad/majors/pick-one.htm">Pick One Program</a></li>
					<li><a href="http://www.uiowa.edu/~sds/">Student Disability Services</a></li>
				</ul>
				<ul>
					<li class="footer-nav-header"><a href="/#">Campus Life</a></li>
					<li><a href="http://imu.uiowa.edu">Iowa Memorial Union</a></li>
					<li><a href="http://imu.uiowa.edu/osl">Center for Student Involvement and Leadership</a></li>

					<li><a href="http://recserv.uiowa.edu/">Recreational Services</a></li>
					<li><a href="http://houising.uiowa.edu">University Housing &amp; Dining</a></li>
				</ul>
				<ul>
					<li class="footer-nav-header"><a href="/#">Health and Safety</a></li>
					<li><a href="http://www.uiowa.edu/ucs/">Counseling Services</a></li>

					<li><a href="http://studenthealth.uiowa.edu/wellness">Health Iowa</a></li>
					<li><a href="http://studenthealth.uiowa.edu/">Student Health Services</a></li>
					<li><a href="http://www.uiowa.edu/~wrac/">Women&#39;s Resource and Action Center</a></li>
				</ul>
			
            		
            </div>
			<div class="row">
				<ul>

					<li class="footer-nav-header"><a href="/#">Parents</a></li>
					<li><a href="http://studentlife.uiowa.edu/parents">Parent&#39;s Association</a></li>
				</ul>
				<!-- staff coming soon <ul>
					<li class="footer-nav-header"><a href="staff">Staff</a></li>
					<li><a href="/#">Staff Profiles</a></li>
					<li><a href="/#">Staff Directory</a></li>
				</ul>-->
                			
	    <ul>
					<li class="footer-nav-header"><a href="about">About</a></li>
					<li><a href="about/contact">Contact</a></li>

				</ul>
			</div>
            
		</div>
		<div id="footer-contact">
			<!-- BEGIN hCard-->
			<div id="footer-address" class="vcard">
				<div class="org">Division of Student Life</div>
				<div class="adr">

					<div class="street-address">249 Iowa Memorial Union</div>
					<span class="locality">Iowa City</span> , 
			  		<span class="region">IA</span>
			  		<span class="postal-code">52242</span>
			 	</div>
			 	<div class="tel">319-335-3557</div>

				<a class="email" href="mailto:vp-student-life@uiowa.edu">vp-student-life@uiowa.edu</a>
			</div>
			<!-- END hCard -->
			<div id="copyright">
				<p>&copy; 2011 <a href="/#">The University of Iowa</a>. All Rights Reserved.<br/>Site designed by <a href="/#">Campus Marketing &amp; Design</a>.</p>

			</div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>



<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

	/* wp_footer(); */
?>
</body>
</html>
