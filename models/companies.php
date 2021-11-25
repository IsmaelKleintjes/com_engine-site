<?php defined("_JEXEC") or die("Restricted access");

class EngineModelCompanies extends JModelList
{
    public function getListQuery()
    {
        $query = parent::getListQuery();

        $query->select( "*" );
        $query->from( "#__company" );
        //$query->where( "published = 1" );

        return $query;
    }
}