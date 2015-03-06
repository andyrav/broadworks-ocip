<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CommunicationBarringAuthorizationCode;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Delete a list of Communication Barring Authorization codes from a user.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserCommunicationBarringAuthorizationCodeDeleteListRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $userId,
             $code=null
    ) {
        $this->userId = new UserId($userId);
        $this->code   = new CommunicationBarringAuthorizationCode($code);
        $this->args   = func_get_args();
    }

    public function setUserId($userId)
    {
        $userId and $this->userId = new UserId($userId);
    }

    public function getUserId()
    {
        return (!$this->userId) ?: $this->userId->value();
    }

    public function setCode($code)
    {
        $code and $this->code = new CommunicationBarringAuthorizationCode($code);
    }

    public function getCode()
    {
        return (!$this->code) ?: $this->code->value();
    }
}