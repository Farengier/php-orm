<?php

/**
 * @author Michael Slyshkin <m.slyshkin@gmail.com>
 */

namespace RsORM\Query\Engine\MySQL\Condition;

class Gt extends AbstractBinaryOperator {
    
    /**
     * @return string
     */
    protected function _operator() {
        return ">";
    }
    
}
