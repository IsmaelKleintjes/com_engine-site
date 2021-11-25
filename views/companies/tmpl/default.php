<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_helloworld
 *
 * @copyright   Copyright (C) 2005 - 2018 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access to this file
defined('_JEXEC') or die('Restricted Access');

?>
<form action="index.php?option=com_engine&view=companies" method="post" id="adminForm" name="adminForm">
	<table class="table table-striped table-hover">
                        <th width="10%">
				<?php echo JText::_('company_name') ;?>
			</th>
                        <th width="10%">
				<?php echo JText::_('phone_number') ;?>
                        </th>
                        <th width="10%">
				<?php echo JText::_('emailadres') ;?>
			</th>
                        <th width="5%">
				<?php echo JText::_('zip_code') ;?>
                        </th>
                        <th width="5%">
				<?php echo JText::_('adress') ;?>
			</th>
		<tfoot>
			<tr>
				<td colspan="5">
					<?php echo $this->pagination->getListFooter(); ?>
				</td>
			</tr>
		</tfoot>
		<tbody>
			<?php if (!empty($this->items)) : ?>
                        
				<?php foreach ($this->items as $i => $row) : 
                                    $link = 'index.php/new-company?id=' . $row->id;
                                    ?>
					<tr>
						<td>
							<a href="<?php echo $link; ?>" title="<?php echo JText::_('Edit Company'); ?>">
								<?php echo $row->company_name; ?>
							</a>
						</td>
                                                <td>
						<?php echo $row->phone_number; ?>
						</td>
                                                <td>
						<?php echo $row->emailadres; ?>
						</td>
                                                <td>
						<?php echo $row->zip_code; ?>
						</td>
                                                <td>
						<?php echo $row->adress; ?>
						</td>
					</tr>
				<?php endforeach; ?>
			<?php endif; ?>
		</tbody>
	</table>
</form>
