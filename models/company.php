<?php defined('_JEXEC') or die('Restricted access');

class EngineModelCompany extends JModelAdmin
{
    public function getTable($type = 'Company', $prefix = 'EngineTable', $config = array())
    {
        JTable::addIncludePath(JPATH_ADMINISTRATOR.'/components/com_engine/tables/');
        return JTable::getInstance($type, $prefix, $config);
    }

    public function getForm($data = array(), $loadData = true)
    {
        return $this->loadForm('com_' . COMPONENT . '.company', 'company', array('control' => 'jform', 'load_data' => $loadData));
    }
}