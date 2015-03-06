<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterReportingServerName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ReplacementUserIdList;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Replaces a list of users as supervisors for a call center.
 *         Also allows the modification of the reporting server URL address.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         
 *         Replaced By: GroupCallCenterModifySupervisorListRequest16
 */
class GroupCallCenterSupervisorReportingModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $serviceUserId,
             $reportingServerName=null,
             ReplacementUserIdList $supervisorUserIdList=null
    ) {
        $this->serviceUserId        = new UserId($serviceUserId);
        $this->reportingServerName  = new CallCenterReportingServerName($reportingServerName);
        $this->supervisorUserIdList = $supervisorUserIdList;
        $this->args                 = func_get_args();
    }

    public function setServiceUserId($serviceUserId)
    {
        $serviceUserId and $this->serviceUserId = new UserId($serviceUserId);
    }

    public function getServiceUserId()
    {
        return (!$this->serviceUserId) ?: $this->serviceUserId->value();
    }

    public function setReportingServerName($reportingServerName)
    {
        $reportingServerName and $this->reportingServerName = new CallCenterReportingServerName($reportingServerName);
    }

    public function getReportingServerName()
    {
        return (!$this->reportingServerName) ?: $this->reportingServerName->value();
    }

    public function setSupervisorUserIdList($supervisorUserIdList)
    {
        $supervisorUserIdList and $this->supervisorUserIdList = new ReplacementUserIdList($supervisorUserIdList);
    }

    public function getSupervisorUserIdList()
    {
        return (!$this->supervisorUserIdList) ?: $this->supervisorUserIdList->value();
    }
}