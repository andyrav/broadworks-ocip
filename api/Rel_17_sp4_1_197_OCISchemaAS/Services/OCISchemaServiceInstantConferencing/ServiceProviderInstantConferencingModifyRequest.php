<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceInstantConferencing; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UnboundedNonNegativeInt;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modify the number of conference ports configured for a service provider.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class ServiceProviderInstantConferencingModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $serviceProviderId,
             UnboundedNonNegativeInt $portsAllocatedToServiceProvider=null
    ) {
        $this->serviceProviderId               = new ServiceProviderId($serviceProviderId);
        $this->portsAllocatedToServiceProvider = $portsAllocatedToServiceProvider;
        $this->args                            = func_get_args();
    }

    public function setServiceProviderId($serviceProviderId)
    {
        $serviceProviderId and $this->serviceProviderId = new ServiceProviderId($serviceProviderId);
    }

    public function getServiceProviderId()
    {
        return (!$this->serviceProviderId) ?: $this->serviceProviderId->value();
    }

    public function setPortsAllocatedToServiceProvider($portsAllocatedToServiceProvider)
    {
        $portsAllocatedToServiceProvider and $this->portsAllocatedToServiceProvider = new UnboundedNonNegativeInt($portsAllocatedToServiceProvider);
    }

    public function getPortsAllocatedToServiceProvider()
    {
        return (!$this->portsAllocatedToServiceProvider) ?: $this->portsAllocatedToServiceProvider->value();
    }
}