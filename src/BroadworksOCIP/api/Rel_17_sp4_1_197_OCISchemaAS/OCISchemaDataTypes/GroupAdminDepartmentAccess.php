<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes; 

use BroadworksOCIP\Builder\Types\SimpleType;
use BroadworksOCIP\Builder\Restrictions\Enumeration;


/**
 * Policy for a group administrator's access to departments.
 *         "Full" indicates full access to departments.
 *         "Read-Only" indicates read-only access to the department list
 *         "None" indicates no access to the department list
 */
class GroupAdminDepartmentAccess extends SimpleType
{
    public $elementName = "GroupAdminDepartmentAccess";
    public function __construct($value) {
        $this->setElementValue($value);
        $this->addRestriction(new Enumeration([
            'Full',
            'Read-Only',
            'None'
        ]));
    }
}
