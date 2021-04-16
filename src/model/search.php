<?php
class SearchModel
{

    public function __construct($db)
    {
        $this->db=$db;
        
        if (isset($_GET['search']) && !empty($_GET['search'])) {
           $this->search = trim(strip_tags($_GET['search']));
        }
    }
}