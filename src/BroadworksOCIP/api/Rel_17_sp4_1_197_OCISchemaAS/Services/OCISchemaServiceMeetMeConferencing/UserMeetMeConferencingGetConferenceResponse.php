<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceMeetMeConferencing; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceMeetMeConferencing\MeetMeConferencingConferenceAttendeeNotification;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceMeetMeConferencing\MeetMeConferencingConferenceAccountCode;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceMeetMeConferencing\MeetMeConferencingNumberOfParticipants;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceMeetMeConferencing\MeetMeConferencingConferenceSchedule;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceMeetMeConferencing\MeetMeConferencingConferencePassCode;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceMeetMeConferencing\MeetMeConferencingConferenceTitle;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to UserMeetMeConferencingGetConferenceRequest.
 *         Contains the information of a conference.
 */
class UserMeetMeConferencingGetConferenceResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserMeetMeConferencingGetConferenceResponse';
    protected $title;
    protected $estimatedParticipants;
    protected $accountCode;
    protected $muteAllAttendeesOnEntry;
    protected $endConferenceOnModeratorExit;
    protected $moderatorRequired;
    protected $attendeeNotification;
    protected $conferenceSchedule;
    protected $moderatorPin;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceMeetMeConferencing\UserMeetMeConferencingGetConferenceResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setTitle($title = null)
    {
        $this->title = ($title InstanceOf MeetMeConferencingConferenceTitle)
             ? $title
             : new MeetMeConferencingConferenceTitle($title);
        $this->title->setElementName('title');
        return $this;
    }

    /**
     * 
     * @return MeetMeConferencingConferenceTitle $title
     */
    public function getTitle()
    {
        return ($this->title)
            ? $this->title->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setEstimatedParticipants($estimatedParticipants = null)
    {
        $this->estimatedParticipants = ($estimatedParticipants InstanceOf MeetMeConferencingNumberOfParticipants)
             ? $estimatedParticipants
             : new MeetMeConferencingNumberOfParticipants($estimatedParticipants);
        $this->estimatedParticipants->setElementName('estimatedParticipants');
        return $this;
    }

    /**
     * 
     * @return MeetMeConferencingNumberOfParticipants $estimatedParticipants
     */
    public function getEstimatedParticipants()
    {
        return ($this->estimatedParticipants)
            ? $this->estimatedParticipants->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAccountCode($accountCode = null)
    {
        $this->accountCode = ($accountCode InstanceOf MeetMeConferencingConferenceAccountCode)
             ? $accountCode
             : new MeetMeConferencingConferenceAccountCode($accountCode);
        $this->accountCode->setElementName('accountCode');
        return $this;
    }

    /**
     * 
     * @return MeetMeConferencingConferenceAccountCode $accountCode
     */
    public function getAccountCode()
    {
        return ($this->accountCode)
            ? $this->accountCode->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setMuteAllAttendeesOnEntry($muteAllAttendeesOnEntry = null)
    {
        $this->muteAllAttendeesOnEntry = new PrimitiveType($muteAllAttendeesOnEntry);
        $this->muteAllAttendeesOnEntry->setElementName('muteAllAttendeesOnEntry');
        return $this;
    }

    /**
     * 
     * @return boolean $muteAllAttendeesOnEntry
     */
    public function getMuteAllAttendeesOnEntry()
    {
        return ($this->muteAllAttendeesOnEntry)
            ? $this->muteAllAttendeesOnEntry->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setEndConferenceOnModeratorExit($endConferenceOnModeratorExit = null)
    {
        $this->endConferenceOnModeratorExit = new PrimitiveType($endConferenceOnModeratorExit);
        $this->endConferenceOnModeratorExit->setElementName('endConferenceOnModeratorExit');
        return $this;
    }

    /**
     * 
     * @return boolean $endConferenceOnModeratorExit
     */
    public function getEndConferenceOnModeratorExit()
    {
        return ($this->endConferenceOnModeratorExit)
            ? $this->endConferenceOnModeratorExit->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setModeratorRequired($moderatorRequired = null)
    {
        $this->moderatorRequired = new PrimitiveType($moderatorRequired);
        $this->moderatorRequired->setElementName('moderatorRequired');
        return $this;
    }

    /**
     * 
     * @return boolean $moderatorRequired
     */
    public function getModeratorRequired()
    {
        return ($this->moderatorRequired)
            ? $this->moderatorRequired->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAttendeeNotification($attendeeNotification = null)
    {
        $this->attendeeNotification = ($attendeeNotification InstanceOf MeetMeConferencingConferenceAttendeeNotification)
             ? $attendeeNotification
             : new MeetMeConferencingConferenceAttendeeNotification($attendeeNotification);
        $this->attendeeNotification->setElementName('attendeeNotification');
        return $this;
    }

    /**
     * 
     * @return MeetMeConferencingConferenceAttendeeNotification $attendeeNotification
     */
    public function getAttendeeNotification()
    {
        return ($this->attendeeNotification)
            ? $this->attendeeNotification->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setConferenceSchedule(MeetMeConferencingConferenceSchedule $conferenceSchedule = null)
    {
        $this->conferenceSchedule = ($conferenceSchedule InstanceOf MeetMeConferencingConferenceSchedule)
             ? $conferenceSchedule
             : new MeetMeConferencingConferenceSchedule($conferenceSchedule);
        $this->conferenceSchedule->setElementName('conferenceSchedule');
        return $this;
    }

    /**
     * 
     * @return MeetMeConferencingConferenceSchedule $conferenceSchedule
     */
    public function getConferenceSchedule()
    {
        return $this->conferenceSchedule;
    }

    /**
     * 
     */
    public function setModeratorPin($moderatorPin = null)
    {
        $this->moderatorPin = ($moderatorPin InstanceOf MeetMeConferencingConferencePassCode)
             ? $moderatorPin
             : new MeetMeConferencingConferencePassCode($moderatorPin);
        $this->moderatorPin->setElementName('moderatorPin');
        return $this;
    }

    /**
     * 
     * @return MeetMeConferencingConferencePassCode $moderatorPin
     */
    public function getModeratorPin()
    {
        return ($this->moderatorPin)
            ? $this->moderatorPin->getElementValue()
            : null;
    }
}
