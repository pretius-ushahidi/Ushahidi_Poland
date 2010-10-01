<?php 
/**
 * Footer view page.
 *
 * PHP version 5
 * LICENSE: This source file is subject to LGPL license 
 * that is available through the world-wide-web at the following URI:
 * http://www.gnu.org/copyleft/lesser.html
 * @author     Ushahidi Team <team@ushahidi.com> 
 * @package    Ushahidi - http://source.ushahididev.com
 * @module     API Controller
 * @copyright  Ushahidi - http://www.ushahidi.com
 * @license    http://www.gnu.org/copyleft/lesser.html GNU Lesser General Public License (LGPL) 
 */
?>
     
 
	<!-- footer -->
    <div id="footer" class="clearingfix">

        <hr>
 
		<div id="underfooter"></div>
 
		<!-- footer content -->
		<div class="rapidxwpr floatholder">
 
			<!-- footer credits stocznia {{{ -->
			<div class="footer-credits">
				<a href="http://www.stocznia.org.pl/"><img src="<?php echo url::base(); ?>/media/img/stocznia-logo.png" alt="Pracownia Badań i Innowacji Społecznych Stocznia" align="absmiddle" /></a>
			</div>
			<!-- / footer credits }}} -->

			<!-- footer credits pretius {{{ -->
			<div class="footer-credits">
				<a href="http://www.pretius.com/"><img src="<?php echo url::base(); ?>/media/img/pretius-logo.png" alt="Pretius Website" align="absmiddle" /></a>
			</div>
			<!-- / footer credits }}} -->
            
			<!-- footer credits wola {{{ -->
            <div class="footer-credits">

                <img src="<?php echo url::base(); ?>/media/img/wola-logo.jpg" alt="Logo Wola"/>
			<!-- footer credits wola }}} -->

			<!-- footer menu -->
			<div class="footermenu">
				<ul class="clearingfix">
					<li><a class="item1" href="<?php echo url::base() ?>"><?php echo Kohana::lang('ui_main.home'); ?></a></li>
					<li><a href="<?php echo url::base() . "reports/submit" ?>"><?php echo Kohana::lang('ui_main.report_an_incident'); ?></a></li>
					<li><a href="<?php echo url::base() . "alerts" ?>"><?php echo Kohana::lang('ui_main.alerts'); ?></a></li>
					<li><a href="<?php echo url::base() . "help" ?>"><?php echo Kohana::lang('ui_main.help'); ?></a></li>
					<li><a href="<?php echo url::base() . "contact" ?>"><?php echo Kohana::lang('ui_main.contact'); ?></a></li>
				</ul>
				<p><?php echo Kohana::lang('ui_main.copyright'); ?></p>
			</div>
			<!-- / footer menu -->

            <!-- usunięte na prośbę NGO      
			<h2 class="feedback_title" style="clear:both">
				<a href="http://feedback.ushahidi.com/fillsurvey.php?sid=5"><?php echo Kohana::lang('ui_main.feedback'); ?></a>
			</h2>
            -->

			<!-- footer credits {{{ -->
			<div class="footer-credits">
				Powered by <a href="http://www.ushahidi.com/"><img src="<?php echo url::base(); ?>/media/img/footer-logo.png" alt="Ushahidi" align="absmiddle" /></a> - Pretius modified version 1.0
			</div>
			<!-- / footer credits }}} -->
		
 
		</div>
		<!-- / footer content -->
 
	</div>
	<!-- / footer -->
 
	<img src="<?php echo $tracker_url; ?>" />
	<?php echo $ushahidi_stats; ?>
	<?php echo $google_analytics; ?>
	
	<!-- Task Scheduler -->
	<img src="<?php echo url::base() . 'scheduler'; ?>" height="1" width="1" border="0" />
 
        <!-- script for share button -->
        <script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pub=ushahidi"></script>
</body>
</html>
