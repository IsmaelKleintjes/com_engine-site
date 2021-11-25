<?php defined("_JEXEC") or die("Restricted access");

class EngineModelContacts extends JModelList
{
    public function getContactsByCompany($id)
    {
        // Initialize variables.
		$db    = JFactory::getDbo();
		$query = $db->getQuery(true);
                
		// Create the base select statement.
		$query->select('*')
                ->from($db->quoteName('#__contact'))
                ->where($db->quoteName('company_id') . ' = ' . $db->quote($id));

                $db->setQuery($query);
                $results = $db->loadObjectList();
                return $results;
    }
}


        