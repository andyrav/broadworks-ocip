<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceBroadWorksMobility; 

use BroadworksOCIP\Builder\Types\TableType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to SystemBroadWorksMobilityServiceAccessCodeGetListRequest.
 *         Contains a table with column headings: "Country Code", "Service Access Code", "Description"
 */
class SystemBroadWorksMobilityServiceAccessCodeGetListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemBroadWorksMobilityServiceAccessCodeGetListResponse';
    protected $serviceAccessCodeTable;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceBroadWorksMobility\SystemBroadWorksMobilityServiceAccessCodeGetListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setServiceAccessCodeTable(TableType $serviceAccessCodeTable = null)
    {
        $this->serviceAccessCodeTable = $serviceAccessCodeTable;
        $this->serviceAccessCodeTable->setElementName('serviceAccessCodeTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getServiceAccessCodeTable()
    {
        return $this->serviceAccessCodeTable;
    }
}
