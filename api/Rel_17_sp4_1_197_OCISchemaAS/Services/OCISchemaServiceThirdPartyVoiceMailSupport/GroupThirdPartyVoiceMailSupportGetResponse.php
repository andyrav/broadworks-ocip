<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceThirdPartyVoiceMailSupport; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ThirdPartyVoiceMailSupportMailServer;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to GroupThirdPartyVoiceMailSupportGetRequest.
 */
class GroupThirdPartyVoiceMailSupportGetResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $isActive,
             $groupServer=null
    ) {
        $this->isActive    = $isActive;
        $this->groupServer = $groupServer;
        $this->args        = func_get_args();
    }

    public function setIsActive($isActive)
    {
        $isActive and $this->isActive = new xs:boolean($isActive);
    }

    public function getIsActive()
    {
        return (!$this->isActive) ?: $this->isActive->value();
    }

    public function setGroupServer($groupServer)
    {
        $groupServer and $this->groupServer = new ThirdPartyVoiceMailSupportMailServer($groupServer);
    }

    public function getGroupServer()
    {
        return (!$this->groupServer) ?: $this->groupServer->value();
    }
}