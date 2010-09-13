<?php 
/**
 * Reports view page.
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
			<div class="bg">
				<h2><?php echo $title; ?><a href="<?php print url::site() ?>admin/reports/edit"><?php echo Kohana::lang('ui_main.create_report');?></a><a href="<?php print url::site() ?>admin/reports/download"><?php echo Kohana::lang('ui_main.download_reports');?></a><a href="<?php print url::site() ?>admin/reports/upload"><?php echo Kohana::lang('ui_main.upload_reports');?></a><a href="<?php print url::site() ?>admin/reports/notify"><?php echo Kohana::lang('ui_main.notify_reports');?></a></h2>
				<!-- report-table -->
					<div class="table-holder">
						<table class="table">
							<thead>
								<tr>
									<th class="col-1"></th>
									<th class="col-2">Email osoby powiadamianej</th>
									<th class="col-3">Promień</th>
									<th class="col-4">Szerokość i Długiść</th>
								</tr>
							</thead>
							<tbody>
								<?php	
								foreach ($notifies as $notify)
								{
									$email  = $notify->alert_recipient;
									$lat    = $notify->alert_lat;
									$lon    = $notify->alert_lon;
									$radius = $notify->alert_radius;
									
									?>
									<tr>
										<td class="col-1"></td>
										<td class="col-2"><?php echo "<a href='mailto:$email?subject=Powiadomienia o alertach'>$email</a>"; ?></td>
                                        <td class="col-3"><?php echo "$radius km"; ?></td>
                                        <td class="col-4"><?php echo "<a href='http://maps.google.pl/maps?f=q&geocode=&q=$lat,+$lon&ie=UTF8' target='_blank'>$lat $lon</a>"; ?></td>
									</tr>
								<?php
								}
								?>
							</tbody>
						</table>
					</div>
			</div>
