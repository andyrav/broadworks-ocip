<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DeviceManagementTagName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DeviceManagementTagValue;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Request to add a static configuration tag for an access device type used in a group.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupDeviceTypeCustomTagAddRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $serviceProviderId,
             $groupId,
             $deviceType,
             $tagName,
             $tagValue=null
    ) {
        $this->serviceProviderId = new ServiceProviderId($serviceProviderId);
        $this->groupId           = new GroupId($groupId);
        $this->deviceType        = new AccessDeviceType($deviceType);
        $this->tagName           = new DeviceManagementTagName($tagName);
        $this->tagValue          = new DeviceManagementTagValue($tagValue);
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

    public function setGroupId($groupId)
    {
        $groupId and $this->groupId = new GroupId($groupId);
    }

    public function getGroupId()
    {
        return (!$this->groupId) ?: $this->groupId->value();
    }

    public function setDeviceType($deviceType)
    {
        $deviceType and $this->deviceType = new AccessDeviceType($deviceType);
    }

    public function getDeviceType()
    {
        return (!$this->deviceType) ?: $this->deviceType->value();
    }

    public function setTagName($tagName)
    {
        $tagName and $this->tagName = new DeviceManagementTagName($tagName);
    }

    public function getTagName()
    {
        return (!$this->tagName) ?: $this->tagName->value();
    }

    public function setTagValue($tagValue)
    {
        $tagValue and $this->tagValue = new DeviceManagementTagValue($tagValue);
    }

    public function getTagValue()
    {
        return (!$this->tagValue) ?: $this->tagValue->value();
    }
}