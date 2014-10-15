<?php
/*
Copyright (C) 2014, Siemens AG

This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
version 2 as published by the Free Software Foundation.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License along
with this program; if not, write to the Free Software Foundation, Inc.,
51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
*/

namespace Fossology\Lib\Data\LicenseDecision;


use DateTime;
use Fossology\Lib\Data\AgentRef;
use Fossology\Lib\Data\LicenseRef;

class AgentLicenseDecisionEvent implements LicenseDecision {
  /**
   * @var LicenseRef
   */
  private $licenseRef;
  /**
   * @var AgentRef
   */
  private $agentRef;
  /**
   * @var int
   */
  private $matchId;
  /**
   * @var int
   */
  private $percentage;

  /**
   * @param LicenseRef $licenseRef
   * @param AgentRef $agentRef
   * @param int $matchId
   * @param null|int $percentage
   */
  public function __construct(LicenseRef $licenseRef, AgentRef $agentRef, $matchId, $percentage) {
    $this->licenseRef = $licenseRef;
    $this->agentRef = $agentRef;
    $this->matchId = $matchId;
    $this->percentage = $percentage;
  }

  /**
   * @return int
   */
  public function getEventId()
  {
    return $this->matchId;
  }

  /**
   * @return LicenseRef
   */
  public function getLicenseRef()
  {
    return $this->licenseRef;
  }

  /**
   * @return int
   */
  public function getLicenseId()
  {
    return $this->licenseRef->getId();
  }

  /**
   * @return string
   */
  public function getLicenseShortName()
  {
    return $this->licenseRef->getShortName();
  }

  /**
   * @return string
   */
  public function getLicenseFullName()
  {
    return $this->licenseRef->getFullName();
  }


  /**
   * @return string
   */
  public function getEventType()
  {
    return LicenseDecisionResult::AGENT_DECISION_TYPE;
  }

  /**
   * @return string
   */
  public function getComment()
  {
    return "";
  }

  /**
   * @return string
   */
  public function getReportinfo()
  {
    return "";
  }

  /**
   * @return DateTime
   */
  public function getDateTime(){
    return new DateTime();
  }

  /**
   * @return boolean
   */
  public function isGlobal()
  {
    return true;
  }

  /**
   * @return boolean
   */
  public function isRemoved()
  {
    return false;
  }

  /**
   * @return AgentRef
   */
  public function getAgentRef()
  {
    return $this->agentRef;
  }

  /**
   * @return string
   */
  public function getAgentName()
  {
    return $this->agentRef->getAgentName();
  }

  /**
   * @return int
   */
  public function getAgentId()
  {
    return $this->agentRef->getAgentId();
  }

  public function getPercentage()
  {
    return $this->percentage;
  }
}