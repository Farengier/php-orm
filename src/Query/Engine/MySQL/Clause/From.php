<?php

/**
 * @author Michael Slyshkin <m.slyshkin@gmail.com>
 */

namespace RsORM\Query\Engine\MySQL\Clause;

use RsORM\Query\Engine\MySQL\Argument;

class From extends AbstractClause {
    
    /**
     * @param Argument\Table $table
     */
    public function __construct(Argument\Table $table) {
        parent::__construct([$table]);
    }
    
    /**
     * @return string
     */
    public function prepare() {
        return "FROM " . $this->_prepareArguments()[0];
    }
    
}
