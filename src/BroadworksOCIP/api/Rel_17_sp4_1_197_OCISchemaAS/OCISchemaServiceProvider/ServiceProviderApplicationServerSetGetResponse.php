<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ApplicationServerSetName;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to the ServiceProviderApplicationServerSetGetRequest.
 *         The response contains the service provider or enterprise's Application Server set information.
 */
class ServiceProviderApplicationServerSetGetResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'ServiceProviderApplicationServerSetGetResponse';
    protected $applicationServerSetName;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider\ServiceProviderApplicationServerSetGetResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setApplicationServerSetName($applicationServerSetName = null)
    {
        $this->applicationServerSetName = ($applicationServerSetName InstanceOf ApplicationServerSetName)
             ? $applicationServerSetName
             : new ApplicationServerSetName($applicationServerSetName);
        $this->applicationServerSetName->setElementName('applicationServerSetName');
        return $this;
    }

    /**
     * 
     * @return ApplicationServerSetName $applicationServerSetName
     */
    public function getApplicationServerSetName()
    {
        return ($this->applicationServerSetName)
            ? $this->applicationServerSetName->getElementValue()
            : null;
    }
}
