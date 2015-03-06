<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MediaSetName;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Request to get a Media Set.
 *         The response is either a SystemMediaSetGetResponse or an ErrorResponse.
 */
class SystemMediaSetGetRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $setName
    ) {
        $this->setName = new MediaSetName($setName);
        $this->args    = func_get_args();
    }

    public function setSetName($setName)
    {
        $setName and $this->setName = new MediaSetName($setName);
    }

    public function getSetName()
    {
        return (!$this->setName) ?: $this->setName->value();
    }
}