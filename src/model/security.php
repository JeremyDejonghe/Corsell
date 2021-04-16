<?php
class SecurityModel
{

    public function __construct($db)
    {
        $this->db = $db;

        if (isset($_SESSION["user_id"])) {
            $this->id = trim(strip_tags($_SESSION["user_id"]));
        }
    }
}
