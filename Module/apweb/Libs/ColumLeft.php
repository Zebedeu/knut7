<?php

namespace Module\knut7\Libs;

use FWAP\Library\Session;
use FWAP\Core\Controller;

class ColumLeft {

    private $conn;

    public function load($conn) {
        include $conn . '.phtml';
    }

}
