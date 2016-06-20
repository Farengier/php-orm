<?php

/**
 * @author Michael Slyshkin <m.slyshkin@gmail.com>
 */

namespace RsORM\Query\Engine\MySQL\Condition;

use RsORM\Query\Engine\MySQL;
use RsORM\Query\Engine\MySQL\Operator;

class In extends Operator\AbstractCustomOperator {
    
    /**
     * @param MySQL\ObjectInterface $operand
     * @param MySQL\ObjectInterface[] $operands
     */
    public function __construct(MySQL\ObjectInterface $operand, array $operands) {
        array_unshift($operands, $operand);
        parent::__construct($operands);
    }
    
    /**
     * @return string
     */
    public function prepare() {
        $preparedOperands = $this->_prepareOperands();
        $operand = array_shift($preparedOperands);
        $operands = implode(", ", $preparedOperands);
        return "{$operand} IN ({$operands})";
    }
    
}
