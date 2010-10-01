<?php
/**
 * Main view page.
 *
 * PHP version 5
 * LICENSE: This source file is subject to LGPL license
 * that is available through the world-wide-web at the following URI:
 * http://www.gnu.org/copyleft/lesser.html
 * @author     Ushahidi Team <team@ushahidi.com>
 * @package    Ushahidi - http://source.ushahididev.com
 * @module     Admin Dashboard Controller
 * @copyright  Ushahidi - http://www.ushahidi.com
 * @license    http://www.gnu.org/copyleft/lesser.html GNU Lesser General
 * Public License (LGPL)
 */
?>

				<!-- main body -->
				<div id="main" class="clearingfix">
					<div id="mainmiddle" class="floatbox withright">
				
						<!-- right column -->
						<div id="right" class="clearingfix">
					
							<!-- category filters -->
							<div class="cat-filters clearingfix">
								<strong><?php echo Kohana::lang('ui_main.category_filter');?></strong>
							</div>
						
							<ul class="category-filters">
								<li><a class="active" id="cat_0" href="#"><div class="swatch" style="background-color:#<?php echo $default_map_all;?>"></div><div class="category-title"><?php echo Kohana::lang('ui_main.all_categories');?></div></a></li>
								<?php
									foreach ($categories as $category => $category_info)
									{
										$category_title = $category_info[0];
										$category_color = $category_info[1];
										$category_image = '';
										$color_css = 'class="swatch" style="background-color:#'.$category_color.'"';
										if($category_info[2] != NULL && file_exists('media/uploads/'.$category_info[2])) {
											$category_image = html::image(array(
												'src'=>'media/uploads/'.$category_info[2],
												'style'=>'float:left;padding-right:5px;'
												));
											$color_css = '';
										}
										echo '<li><a href="#" id="cat_'. $category .'"><div '.$color_css.'>'.$category_image.'</div><div class="category-title">'.$category_title.'</div></a>';
										// Get Children
										echo '<div class="hide" id="child_'. $category .'"><ul>';
										foreach ($category_info[3] as $child => $child_info)
										{
											$child_title = $child_info[0];
											$child_color = $child_info[1];
											$child_image = '';
											$color_css = 'class="swatch" style="background-color:#'.$child_color.'"';
											if($child_info[2] != NULL && file_exists('media/uploads/'.$child_info[2])) {
												$child_image = html::image(array(
													'src'=>'media/uploads/'.$child_info[2],
													'style'=>'float:left;padding-right:5px;'
													));
												$color_css = '';
											}
											echo '<li style="padding-left:20px;"><a href="#" id="cat_'. $child .'"><div '.$color_css.'>'.$child_image.'</div><div class="category-title">'.$child_title.'</div></a></li>';
										}
										echo '</ul></div></li>';
									}
								?>
							</ul>
                            <!-- / category filters -->

							<?php
							if ($layers)
							{
								?>
								<!-- Layers (KML/KMZ) -->
								<div class="cat-filters clearingfix" style="margin-top:20px;">
									<strong><?php echo Kohana::lang('ui_main.layers_filter');?></strong>
								</div>
								<ul class="category-filters">
									<?php
									foreach ($layers as $layer => $layer_info)
									{
										$layer_name = $layer_info[0];
										$layer_color = $layer_info[1];
										$layer_url = $layer_info[2];
										$layer_file = $layer_info[3];
										$layer_link = (!$layer_url) ?
											url::base().'media/uploads/'.$layer_file :
											$layer_url;
										echo '<li><a href="#" id="layer_'. $layer .'"
										onclick="switchLayer(\''.$layer.'\',\''.$layer_link.'\',\''.$layer_color.'\'); return false;"><div class="swatch" style="background-color:#'.$layer_color.'"></div>
										<div>'.$layer_name.'</div></a></li>';
									}
									?>
								</ul>
								<!-- /Layers -->
								<?php
							}
							?>
							
							
							<br />
						
                            <!-- additional content
                            /*
                            /* usunięte na wniosek NGO
							<div class="additional-content">
								<h5><?php echo Kohana::lang('ui_main.how_to_report'); ?></h5>
								<ol>
									<?php if (!empty($phone_array)) 
									{ ?><li><?php echo Kohana::lang('ui_main.report_option_1')." "; ?> <?php foreach ($phone_array as $phone) {
										echo "<strong>". $phone ."</strong>";
										if ($phone != end($phone_array)) {
											echo " or ";
										}
									} ?></li><?php } ?>
									<?php if (!empty($report_email)) 
									{ ?><li><?php echo Kohana::lang('ui_main.report_option_2')." "; ?> <a href="mailto:<?php echo $report_email?>"><?php echo $report_email?></a></li><?php } ?>
									<?php if (!empty($twitter_hashtag_array)) 
												{ ?><li><?php echo Kohana::lang('ui_main.report_option_3')." "; ?> <?php foreach ($twitter_hashtag_array as $twitter_hashtag) {
									echo "<strong>". $twitter_hashtag ."</strong>";
									if ($twitter_hashtag != end($twitter_hashtag_array)) {
										echo " or ";
									}
									} ?></li><?php } ?>
									<li><a href="<?php echo url::base() . 'reports/submit/'; ?>"><?php echo Kohana::lang('ui_main.report_option_4'); ?></a></li>
								</ol>					
		
                            </div>
                            */
							/ additional content -->
					
						</div>
						<!-- / right column -->
					
						<!-- content column -->
						<div id="content" class="clearingfix">
							<div class="floatbox">
							
                                <!-- filters
                                /* wyłączone na życzenie NGO
								<div class="filters clearingfix">
								<div style="float:left; width: 65%">
									<strong><?php echo Kohana::lang('ui_main.filters'); ?></strong>
									<ul>
										<li><a id="media_0" class="active" href="#"><span><?php echo Kohana::lang('ui_main.reports'); ?></span></a></li>
										<li><a id="media_4" href="#"><span><?php echo Kohana::lang('ui_main.news'); ?></span></a></li>
										<li><a id="media_1" href="#"><span><?php echo Kohana::lang('ui_main.pictures'); ?></span></a></li>
										<li><a id="media_2" href="#"><span><?php echo Kohana::lang('ui_main.video'); ?></span></a></li>
										<li><a id="media_0" href="#"><span><?php echo Kohana::lang('ui_main.all'); ?></span></a></li>
									</ul>
</div>
								</div>
								 */ filters -->
						
								<!-- map -->
								<div class="map" id="map"></div>
								<div style="clear:both;"></div>
								<div id="mapStatus">
									<div id="mapScale" style="border-right: solid 1px #999"></div>
									<div id="mapMousePosition" style="min-width: 135px;border-right: solid 1px #999;text-align: center"></div>
									<div id="mapProjection" style="border-right: solid 1px #999"></div>
									<div id="mapOutput"></div>
								</div>
								<div style="clear:both;"></div>
								<div class="slider-holder">
									<form action="">
										<input type="hidden" value="0" name="currentCat" id="currentCat">
										<fieldset>
											<div class="play"><a href="#" id="playTimeline">PLAY</a></div>
											<label for="startDate">From:</label>
											<select name="startDate" id="startDate"><?php echo $startDate; ?></select>
											<label for="endDate">To:</label>
											<select name="endDate" id="endDate"><?php echo $endDate; ?></select>
										</fieldset>
									</form>
								</div>
								<!-- / map -->
								<div id="graph" class="graph-holder"></div>
							</div>
						</div>
						<!-- / content column -->
				
					</div>
				</div>
				<!-- / main body -->
			
				<!-- content -->
				<div class="content-container">
			
					<!-- content blocks -->
                    <div class="content-blocks clearingfix">

                    <!-- multimedia blocks {{{
					<div class="multimedia-integration">
                    	<table id="multimedia">
                        	<tr>
                            	<td class="mm-twitter">
                                	<h3>Na Twitter</h3>
                                    
									<script src="http://widgets.twimg.com/j/2/widget.js"></script>
									<script>
                                    new TWTR.Widget({
                                      version: 2,
                                      type: 'search',
                                      search: 'powodz',
                                      interval: 6000,
                                      title: '',
                                      subject: '#powodz',
                                      width: 270,
                                      height: 300,
                                      theme: {
                                        shell: {
                                          background: '#0925c2',
                                          color: '#ffffff'
                                        },
                                        tweets: {
                                          background: '#ffffff',
                                          color: '#444444',
                                          links: '#d21c00'
                                        }
                                      },
                                      features: {
                                        scrollbar: false,
                                        loop: true,
                                        live: true,
                                        hashtags: true,
                                        timestamp: true,
                                        avatars: true,
                                        behavior: 'default'
                                      }
                                    }).render().start();
                                    </script>
                                </td>

                                <td class="mm-flickr">
                                	<h3 style="margin-bottom:10px">Help Tag Photos</h3>
                                    
									<iframe src="http://app.beextra.org/appflickr/embed/collectionid/haiti/missionid/605/count/12/title/1/bg/%23E2E2E2" width="270" height="420" scrolling="no" frameborder="0"></iframe>
                                    
                                </td>
                                
								<td class="mm-youtube">
                                    <h3>Person Finder</h3>
                                    <iframe src="http://haiticrisis.appspot.com/?small=yes" width="300" height="368" frameborder="0" style="border: dashed 2px #77c; background:#fff;"></iframe>
                                </td>
                            </tr>
                        </table>
                    </div>

                    multimedia blocks }}} -->
				
						<!-- left content block -->
						<div class="content-block-left">
							<h5><?php echo Kohana::lang('ui_main.incidents_listed'); ?></h5>
							<table class="table-list">
								<thead>
									<tr>
										<th scope="col" class="title"><?php echo Kohana::lang('ui_main.title'); ?></th>
										<th scope="col" class="location"><?php echo Kohana::lang('ui_main.location'); ?></th>
										<th scope="col" class="date"><?php echo Kohana::lang('ui_main.date'); ?></th>
									</tr>
								</thead>
								<tbody>
									<?php
	 								if ($total_items == 0)
									{
									?>
									<tr><td colspan="3">No Reports In The System</td></tr>

									<?php
									}
									foreach ($incidents as $incident)
									{
										$incident_id = $incident->id;
										$incident_title = text::limit_chars($incident->incident_title, 40, '...', True);
										$incident_date = $incident->incident_date;
										$incident_date = date('M j Y', strtotime($incident->incident_date));
										$incident_location = $incident->location->location_name;
									?>
									<tr>
										<td><a href="<?php echo url::base() . 'reports/view/' . $incident_id; ?>"> <?php echo $incident_title ?></a></td>
										<td><?php echo $incident_location ?></td>
										<td><?php echo $incident_date; ?></td>
									</tr>
									<?php
									}
									?>

								</tbody>
							</table>
							<a class="more" href="<?php echo url::base() . 'reports/' ?>">View More...</a>
						</div>
						<!-- / left content block -->
				
                        <!-- right content block -->
                        <!-- wyłączone na prośbę Zosi
						<div class="content-block-right"> /*
							<h5><?php echo Kohana::lang('ui_main.official_news'); ?></h5>
							<table class="table-list">
								<thead>
									<tr>
										<th scope="col"><?php echo Kohana::lang('ui_main.title'); ?></th>
										<th scope="col"><?php echo Kohana::lang('ui_main.source'); ?></th>
										<th scope="col"><?php echo Kohana::lang('ui_main.date'); ?></th>
									</tr>
								</thead>
								<tbody>
									<?php
									foreach ($feeds as $feed)
									{
										$feed_id = $feed->id;
										$feed_title = text::limit_chars($feed->item_title, 40, '...', True);
										$feed_link = $feed->item_link;
										$feed_date = date('M j Y', strtotime($feed->item_date));
										$feed_source = text::limit_chars($feed->feed->feed_name, 15, "...");
									?>
									<tr>
										<td><a href="<?php echo $feed_link; ?>" target="_blank"><?php echo $feed_title ?></a></td>
										<td><?php echo $feed_source; ?></td>
										<td><?php echo $feed_date; ?></td>
									</tr>
									<?php
									}
									?>
								</tbody>
							</table>
							<a class="more" href="<?php echo url::base() . 'feeds' ?>">View More...</a>
                        </div>
                        /* -->
						<!-- / right content block -->
				
					</div>
					<!-- /content blocks -->
<?php
/*
 *					<!-- site footer -->
 *					<div class="site-footer">
 *
 *						<h5>Site Footer</h5>
 *						Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Mauris porta. Sed eget nisi. Fusce rhoncus lorem ac erat. Maecenas turpis tellus, volutpat quis, sodales et, consectetuer ac, est. Nullam sed est sed augue vestibulum condimentum. In tellus. Integer luctus odio eu arcu. Pellentesque imperdiet felis eu tortor. Morbi ante dui, iaculis id, vulputate sit amet, venenatis in, turpis. Fusce in risus.
 *
 *					</div>
 *					<!-- / site footer -->
*/
?>
			
				</div>
				<!-- content -->
		
			</div>
		</div>
		<!-- / main body -->

	</div>
	<!-- / wrapper -->
