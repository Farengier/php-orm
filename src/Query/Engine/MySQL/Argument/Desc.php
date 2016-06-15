<?php

/**
 * @author Michael Slyshkin <m.slyshkin@gmail.com>
 */

namespace RsORM\Query\Engine\MySQL\Argument;

use RsORM\Query\Engine\MySQL;

class Desc extends MySQL\AbstractIdentifier {
    
    /**
     * @return string
     */
    public function prepare() {
        return parent::prepare() . " DESC";
    }
    
}
