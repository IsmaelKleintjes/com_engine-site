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
<br><h1><?php echo $this->item->company_name ?></h1>
	<table class="table table-striped table-hover">
                        <th width="10%"><?php echo JText::_('phone_number') ;?></th>
                        <th width="10%"><?php echo JText::_('emailadres') ;?></th>
                        <th width="5%"><?php echo JText::_('zip_code') ;?></th>
                        <th width="5%"><?php echo JText::_('adress') ;?></th>
		<tbody>
                        <tr>
                            <td><?php echo $this->item->phone_number; ?></td>
                            <td><?php echo $this->item->emailadres; ?></td>
                            <td><?php echo $this->item->zip_code; ?></td>
                            <td><?php echo $this->item->adress; ?></td>
                        </tr>
		</tbody>
	</table>
<br><h2>Contacts</h2>
	<table class="table table-striped table-hover">
		<thead>
			<th width="20%"><?php echo JText::_('Name') ;?></th>
                        <th width="10%"><?php echo JText::_('company_name') ;?></th>
                        <th width="10%"><?php echo JText::_('phone_number') ;?></th>
                        <th width="10%"><?php echo JText::_('emailadres') ;?></th>
                        <th width="5%"><?php echo JText::_('zip_code') ;?></th>
                        <th width="5%"><?php echo JText::_('adress') ;?></th>
		<tbody>
			<?php if (!empty($this->contacts)) : ?>
				<?php foreach ($this->contacts as $i => $row) : ?>
					<tr>
                                            <td><?php echo $row->name; ?></td>
                                            <td><?php echo $row->company_id; ?></td>
                                            <td><?php echo $row->phone_number; ?></td>
                                            <td><?php echo $row->emailadres; ?></td>
                                            <td><?php echo $row->zip_code; ?></td>
                                            <td><?php echo $row->adress; ?></td>
					</tr>
				<?php endforeach; ?>
			<?php endif; ?>
		</tbody>
	</table>
