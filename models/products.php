<?php defined("_JEXEC") or die("Restricted access");

class EngineModelProducts extends JModelList
{
    public function getListQuery()
    {
        $query = parent::getListQuery();

        $query->select( "*" );
        $query->from( "#__product" );
        //$query->where( "published = 1" );

        return $query;
    }
    
     public function getProducts()
    {
        // Get a db connection.
        $db = JFactory::getDbo();

        // Create a new query object.
        $query = $db->getQuery(true);

        // Select all records from the user profile table where key begins with "custom.".
        // Order it by the ordering field.
        $query->select('*');
        $query->from($db->quoteName('#__product'));
       
        // Reset the query using our newly populated query object.
        $db->setQuery($query);

        // Load the results as a list of stdClass objects (see later for more options on retrieving data).
        $results = $db->loadObjectList();
        
        return $results;
    }
}