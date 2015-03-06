<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\core:OCITable;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to SystemFileRepositoryDeviceGetListRequest.
 *         Contains a table with column headings : "Name","Protocol", "Root Directory" in a row for each file repository.
 */
class SystemFileRepositoryDeviceGetListResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $fileRepositoryTable
    ) {
        $this->fileRepositoryTable = $fileRepositoryTable;
        $this->args                = func_get_args();
    }

    public function setFileRepositoryTable($fileRepositoryTable)
    {
        $fileRepositoryTable and $this->fileRepositoryTable = new core:OCITable($fileRepositoryTable);
    }

    public function getFileRepositoryTable()
    {
        return (!$this->fileRepositoryTable) ?: $this->fileRepositoryTable->value();
    }
}