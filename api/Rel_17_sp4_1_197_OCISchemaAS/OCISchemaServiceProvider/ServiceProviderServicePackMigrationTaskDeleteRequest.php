<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServicePackMigrationTaskName;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Deletes a service pack migration task. It is not possible to delete a task while it is
 *         currently executing.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class ServiceProviderServicePackMigrationTaskDeleteRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $serviceProviderId,
             $taskName
    ) {
        $this->serviceProviderId = new ServiceProviderId($serviceProviderId);
        $this->taskName          = $taskName;
        $this->args              = func_get_args();
    }

    public function setServiceProviderId($serviceProviderId)
    {
        $serviceProviderId and $this->serviceProviderId = new ServiceProviderId($serviceProviderId);
    }

    public function getServiceProviderId()
    {
        return (!$this->serviceProviderId) ?: $this->serviceProviderId->value();
    }

    public function setTaskName($taskName)
    {
        $taskName and $this->taskName = new ServicePackMigrationTaskName($taskName);
    }

    public function getTaskName()
    {
        return (!$this->taskName) ?: $this->taskName->value();
    }
}