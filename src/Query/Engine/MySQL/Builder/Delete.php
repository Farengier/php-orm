<?php

/**
 * @author Michael Slyshkin <m.slyshkin@gmail.com>
 */

namespace RsORM\Query\Engine\MySQL\Builder;

use RsORM\Query;
use RsORM\Query\Engine\MySQL;
use RsORM\Query\Engine\MySQL\Flag;

/**
 * @method Delete table(string $name)
 * @method Delete where(Filter $filter)
 * @method Delete order(string $name, boolean $asc)
 * @method Delete limit(int $offset, int $count)
 * @method Delete flagAll()
 * @method Delete flagDelayed()
 * @method Delete flagDistinct()
 * @method Delete flagDistinctRow()
 * @method Delete flagHighPriority()
 * @method Delete flagIgnore()
 * @method Delete flagLowPriority()
 * @method Delete flagQuick()
 * @method Delete flagSQLBigResult()
 * @method Delete flagSQLBufferResult()
 * @method Delete flagSQLCache()
 * @method Delete flagSQLCalcFoundRows()
 * @method Delete flagSQLNoCache()
 * @method Delete flagSQLSmallResult()
 * @method Delete flagStraightJoin()
 */
class Delete implements BuilderInterface {
    
    use TraitTable, TraitLimit, TraitOrder, TraitFlags,
            TraitWhere;
    
    /**
     * @return MySQL\AbstractExpression
     */
    public function build() {
        return Query\Engine::mysql()->delete(
                $this->_buildTable(),
                $this->_buildWhere(),
                $this->_buildOrder(),
                $this->_buildLimit(),
                $this->_buildFlags());
    }
    
    /**
     * @return string
     */
    protected function _tableClass() {
        return MySQL\Clause\From::getClassName();
    }
    
}
