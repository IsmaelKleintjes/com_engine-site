<?php defined('_JEXEC') or die('Restricted access');

class EngineModelProduct extends JModelAdmin
{
    public function getTable($type = 'Product', $prefix = 'EngineTable', $config = array())
    {
        JTable::addIncludePath(JPATH_ADMINISTRATOR.'/components/com_engine/tables/');
        return JTable::getInstance($type, $prefix, $config);
    }

    public function getForm($data = array(), $loadData = true)
    {
        return $this->loadForm('com_' . COMPONENT . '.product', 'product', array('control' => 'jform', 'load_data' => $loadData));
    }
}