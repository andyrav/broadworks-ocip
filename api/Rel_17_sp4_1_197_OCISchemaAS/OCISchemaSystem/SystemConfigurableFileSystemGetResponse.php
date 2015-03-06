<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ConfigurableFileSystemDirectory;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to SystemConfigurableFileSystemGetRequest.
 *         Contains the File System parameters.
 */
class SystemConfigurableFileSystemGetResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $mediaDirectory
    ) {
        $this->mediaDirectory = $mediaDirectory;
        $this->args           = func_get_args();
    }

    public function setMediaDirectory($mediaDirectory)
    {
        $mediaDirectory and $this->mediaDirectory = new ConfigurableFileSystemDirectory($mediaDirectory);
    }

    public function getMediaDirectory()
    {
        return (!$this->mediaDirectory) ?: $this->mediaDirectory->value();
    }
}