<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\core:OCITable;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to GroupAccessDeviceGetListRequest.
 *         Contains a table of devices configured in the group.
 *         The column headings are: "Device Name", "Device Type", "Available Ports", "Net Address", "MAC Address" and "Status".
 */
class GroupAccessDeviceGetListResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $accessDeviceTable
    ) {
        $this->accessDeviceTable = $accessDeviceTable;
        $this->args              = func_get_args();
    }

    public function setAccessDeviceTable($accessDeviceTable)
    {
        $accessDeviceTable and $this->accessDeviceTable = new core:OCITable($accessDeviceTable);
    }

    public function getAccessDeviceTable()
    {
        return (!$this->accessDeviceTable) ?: $this->accessDeviceTable->value();
    }
}