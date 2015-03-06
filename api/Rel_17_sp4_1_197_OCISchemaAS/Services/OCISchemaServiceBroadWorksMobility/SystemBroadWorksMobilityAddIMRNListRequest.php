<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceBroadWorksMobility; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DN;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DNRange;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Adds BroadWorks Mobility IMRN numbers to the system. It is possible to add either: 
 *         a single number, a list of numbers, or a range of numbers, or any combination thereof.
 *         The response is either a SuccessResponse or ErrorResponse.
 */
class SystemBroadWorksMobilityAddIMRNListRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $imrnNumber=null,
             DNRange $numberRange=null
    ) {
        $this->imrnNumber  = new DN($imrnNumber);
        $this->numberRange = $numberRange;
        $this->args        = func_get_args();
    }

    public function setImrnNumber($imrnNumber)
    {
        $imrnNumber and $this->imrnNumber = new DN($imrnNumber);
    }

    public function getImrnNumber()
    {
        return (!$this->imrnNumber) ?: $this->imrnNumber->value();
    }

    public function setNumberRange($numberRange)
    {
        $numberRange and $this->numberRange = new DNRange($numberRange);
    }

    public function getNumberRange()
    {
        return (!$this->numberRange) ?: $this->numberRange->value();
    }
}