<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterAnnouncementSelection;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\LabeledFileResource;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Modify a call center's announcement settings.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupCallCenterModifyAnnouncementRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'GroupCallCenterModifyAnnouncementRequest';
    protected $serviceUserId;
    protected $entranceMessageSelection;
    protected $entranceMessageAudioFile;
    protected $entranceMessageVideoFile;
    protected $periodicComfortMessageSelection;
    protected $periodicComfortMessageAudioFile;
    protected $periodicComfortMessageVideoFile;
    protected $onHoldMessageSelection;
    protected $onHoldMessageAudioFile;
    protected $onHoldMessageVideoFile;

    public function __construct(
         $serviceUserId = '',
         $entranceMessageSelection = null,
         $entranceMessageAudioFile = null,
         $entranceMessageVideoFile = null,
         $periodicComfortMessageSelection = null,
         $periodicComfortMessageAudioFile = null,
         $periodicComfortMessageVideoFile = null,
         $onHoldMessageSelection = null,
         $onHoldMessageAudioFile = null,
         $onHoldMessageVideoFile = null
    ) {
        $this->setServiceUserId($serviceUserId);
        $this->setEntranceMessageSelection($entranceMessageSelection);
        $this->setEntranceMessageAudioFile($entranceMessageAudioFile);
        $this->setEntranceMessageVideoFile($entranceMessageVideoFile);
        $this->setPeriodicComfortMessageSelection($periodicComfortMessageSelection);
        $this->setPeriodicComfortMessageAudioFile($periodicComfortMessageAudioFile);
        $this->setPeriodicComfortMessageVideoFile($periodicComfortMessageVideoFile);
        $this->setOnHoldMessageSelection($onHoldMessageSelection);
        $this->setOnHoldMessageAudioFile($onHoldMessageAudioFile);
        $this->setOnHoldMessageVideoFile($onHoldMessageVideoFile);
    }

    /**
     * @return mixed $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setServiceUserId($serviceUserId = null)
    {
        $this->serviceUserId = ($serviceUserId InstanceOf UserId)
             ? $serviceUserId
             : new UserId($serviceUserId);
        $this->serviceUserId->setElementName('serviceUserId');
        return $this;
    }

    /**
     * 
     * @return UserId $serviceUserId
     */
    public function getServiceUserId()
    {
        return ($this->serviceUserId)
            ? $this->serviceUserId->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setEntranceMessageSelection($entranceMessageSelection = null)
    {
        $this->entranceMessageSelection = ($entranceMessageSelection InstanceOf CallCenterAnnouncementSelection)
             ? $entranceMessageSelection
             : new CallCenterAnnouncementSelection($entranceMessageSelection);
        $this->entranceMessageSelection->setElementName('entranceMessageSelection');
        return $this;
    }

    /**
     * 
     * @return CallCenterAnnouncementSelection $entranceMessageSelection
     */
    public function getEntranceMessageSelection()
    {
        return ($this->entranceMessageSelection)
            ? $this->entranceMessageSelection->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setEntranceMessageAudioFile(LabeledFileResource $entranceMessageAudioFile = null)
    {
        $this->entranceMessageAudioFile = ($entranceMessageAudioFile InstanceOf LabeledFileResource)
             ? $entranceMessageAudioFile
             : new LabeledFileResource($entranceMessageAudioFile);
        $this->entranceMessageAudioFile->setElementName('entranceMessageAudioFile');
        return $this;
    }

    /**
     * 
     * @return LabeledFileResource $entranceMessageAudioFile
     */
    public function getEntranceMessageAudioFile()
    {
        return $this->entranceMessageAudioFile;
    }

    /**
     * 
     */
    public function setEntranceMessageVideoFile(LabeledFileResource $entranceMessageVideoFile = null)
    {
        $this->entranceMessageVideoFile = ($entranceMessageVideoFile InstanceOf LabeledFileResource)
             ? $entranceMessageVideoFile
             : new LabeledFileResource($entranceMessageVideoFile);
        $this->entranceMessageVideoFile->setElementName('entranceMessageVideoFile');
        return $this;
    }

    /**
     * 
     * @return LabeledFileResource $entranceMessageVideoFile
     */
    public function getEntranceMessageVideoFile()
    {
        return $this->entranceMessageVideoFile;
    }

    /**
     * 
     */
    public function setPeriodicComfortMessageSelection($periodicComfortMessageSelection = null)
    {
        $this->periodicComfortMessageSelection = ($periodicComfortMessageSelection InstanceOf CallCenterAnnouncementSelection)
             ? $periodicComfortMessageSelection
             : new CallCenterAnnouncementSelection($periodicComfortMessageSelection);
        $this->periodicComfortMessageSelection->setElementName('periodicComfortMessageSelection');
        return $this;
    }

    /**
     * 
     * @return CallCenterAnnouncementSelection $periodicComfortMessageSelection
     */
    public function getPeriodicComfortMessageSelection()
    {
        return ($this->periodicComfortMessageSelection)
            ? $this->periodicComfortMessageSelection->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setPeriodicComfortMessageAudioFile(LabeledFileResource $periodicComfortMessageAudioFile = null)
    {
        $this->periodicComfortMessageAudioFile = ($periodicComfortMessageAudioFile InstanceOf LabeledFileResource)
             ? $periodicComfortMessageAudioFile
             : new LabeledFileResource($periodicComfortMessageAudioFile);
        $this->periodicComfortMessageAudioFile->setElementName('periodicComfortMessageAudioFile');
        return $this;
    }

    /**
     * 
     * @return LabeledFileResource $periodicComfortMessageAudioFile
     */
    public function getPeriodicComfortMessageAudioFile()
    {
        return $this->periodicComfortMessageAudioFile;
    }

    /**
     * 
     */
    public function setPeriodicComfortMessageVideoFile(LabeledFileResource $periodicComfortMessageVideoFile = null)
    {
        $this->periodicComfortMessageVideoFile = ($periodicComfortMessageVideoFile InstanceOf LabeledFileResource)
             ? $periodicComfortMessageVideoFile
             : new LabeledFileResource($periodicComfortMessageVideoFile);
        $this->periodicComfortMessageVideoFile->setElementName('periodicComfortMessageVideoFile');
        return $this;
    }

    /**
     * 
     * @return LabeledFileResource $periodicComfortMessageVideoFile
     */
    public function getPeriodicComfortMessageVideoFile()
    {
        return $this->periodicComfortMessageVideoFile;
    }

    /**
     * 
     */
    public function setOnHoldMessageSelection($onHoldMessageSelection = null)
    {
        $this->onHoldMessageSelection = ($onHoldMessageSelection InstanceOf CallCenterAnnouncementSelection)
             ? $onHoldMessageSelection
             : new CallCenterAnnouncementSelection($onHoldMessageSelection);
        $this->onHoldMessageSelection->setElementName('onHoldMessageSelection');
        return $this;
    }

    /**
     * 
     * @return CallCenterAnnouncementSelection $onHoldMessageSelection
     */
    public function getOnHoldMessageSelection()
    {
        return ($this->onHoldMessageSelection)
            ? $this->onHoldMessageSelection->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setOnHoldMessageAudioFile(LabeledFileResource $onHoldMessageAudioFile = null)
    {
        $this->onHoldMessageAudioFile = ($onHoldMessageAudioFile InstanceOf LabeledFileResource)
             ? $onHoldMessageAudioFile
             : new LabeledFileResource($onHoldMessageAudioFile);
        $this->onHoldMessageAudioFile->setElementName('onHoldMessageAudioFile');
        return $this;
    }

    /**
     * 
     * @return LabeledFileResource $onHoldMessageAudioFile
     */
    public function getOnHoldMessageAudioFile()
    {
        return $this->onHoldMessageAudioFile;
    }

    /**
     * 
     */
    public function setOnHoldMessageVideoFile(LabeledFileResource $onHoldMessageVideoFile = null)
    {
        $this->onHoldMessageVideoFile = ($onHoldMessageVideoFile InstanceOf LabeledFileResource)
             ? $onHoldMessageVideoFile
             : new LabeledFileResource($onHoldMessageVideoFile);
        $this->onHoldMessageVideoFile->setElementName('onHoldMessageVideoFile');
        return $this;
    }

    /**
     * 
     * @return LabeledFileResource $onHoldMessageVideoFile
     */
    public function getOnHoldMessageVideoFile()
    {
        return $this->onHoldMessageVideoFile;
    }
}
