<?php namespace OpenEMR\FHIR\R4\FHIRResource\FHIRImmunization;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 *
 * Class creation date: June 14th, 2019
 *
 * PHPFHIR Copyright:
 *
 * Copyright 2016-2017 Daniel Carbone (daniel.p.carbone@gmail.com)
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *        http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 *
 * FHIR Copyright Notice:
 *
 *   Copyright (c) 2011+, HL7, Inc.
 *   All rights reserved.
 *
 *   Redistribution and use in source and binary forms, with or without modification,
 *   are permitted provided that the following conditions are met:
 *
 *    * Redistributions of source code must retain the above copyright notice, this
 *      list of conditions and the following disclaimer.
 *    * Redistributions in binary form must reproduce the above copyright notice,
 *      this list of conditions and the following disclaimer in the documentation
 *      and/or other materials provided with the distribution.
 *    * Neither the name of HL7 nor the names of its contributors may be used to
 *      endorse or promote products derived from this software without specific
 *      prior written permission.
 *
 *   THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND
 *   ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED
 *   WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED.
 *   IN NO EVENT SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT,
 *   INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT
 *   NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR
 *   PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY,
 *   WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE)
 *   ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE
 *   POSSIBILITY OF SUCH DAMAGE.
 *
 *
 *   Generated on Thu, Dec 27, 2018 22:37+1100 for FHIR v4.0.0
 *
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 *
 */

use OpenEMR\FHIR\R4\FHIRElement\FHIRBackboneElement;

/**
 * Describes the event of a patient being administered a vaccine or a record of an immunization as reported by a patient, a clinician or another party.
 */
class FHIRImmunizationEducation extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * Identifier of the material presented to the patient.
     * @var \OpenEMR\FHIR\R4\FHIRElement\FHIRString
     */
    public $documentType = null;

    /**
     * Reference pointer to the educational material given to the patient if the information was on line.
     * @var \OpenEMR\FHIR\R4\FHIRElement\FHIRUri
     */
    public $reference = null;

    /**
     * Date the educational material was published.
     * @var \OpenEMR\FHIR\R4\FHIRElement\FHIRDateTime
     */
    public $publicationDate = null;

    /**
     * Date the educational material was given to the patient.
     * @var \OpenEMR\FHIR\R4\FHIRElement\FHIRDateTime
     */
    public $presentationDate = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'Immunization.Education';

    /**
     * Identifier of the material presented to the patient.
     * @return \OpenEMR\FHIR\R4\FHIRElement\FHIRString
     */
    public function getDocumentType()
    {
        return $this->documentType;
    }

    /**
     * Identifier of the material presented to the patient.
     * @param \OpenEMR\FHIR\R4\FHIRElement\FHIRString $documentType
     * @return $this
     */
    public function setDocumentType($documentType)
    {
        $this->documentType = $documentType;
        return $this;
    }

    /**
     * Reference pointer to the educational material given to the patient if the information was on line.
     * @return \OpenEMR\FHIR\R4\FHIRElement\FHIRUri
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Reference pointer to the educational material given to the patient if the information was on line.
     * @param \OpenEMR\FHIR\R4\FHIRElement\FHIRUri $reference
     * @return $this
     */
    public function setReference($reference)
    {
        $this->reference = $reference;
        return $this;
    }

    /**
     * Date the educational material was published.
     * @return \OpenEMR\FHIR\R4\FHIRElement\FHIRDateTime
     */
    public function getPublicationDate()
    {
        return $this->publicationDate;
    }

    /**
     * Date the educational material was published.
     * @param \OpenEMR\FHIR\R4\FHIRElement\FHIRDateTime $publicationDate
     * @return $this
     */
    public function setPublicationDate($publicationDate)
    {
        $this->publicationDate = $publicationDate;
        return $this;
    }

    /**
     * Date the educational material was given to the patient.
     * @return \OpenEMR\FHIR\R4\FHIRElement\FHIRDateTime
     */
    public function getPresentationDate()
    {
        return $this->presentationDate;
    }

    /**
     * Date the educational material was given to the patient.
     * @param \OpenEMR\FHIR\R4\FHIRElement\FHIRDateTime $presentationDate
     * @return $this
     */
    public function setPresentationDate($presentationDate)
    {
        $this->presentationDate = $presentationDate;
        return $this;
    }

    /**
     * @return string
     */
    public function get_fhirElementName()
    {
        return $this->_fhirElementName;
    }

    /**
     * @param mixed $data
     */
    public function __construct($data = [])
    {
        if (is_array($data)) {
            if (isset($data['documentType'])) {
                $this->setDocumentType($data['documentType']);
            }
            if (isset($data['reference'])) {
                $this->setReference($data['reference']);
            }
            if (isset($data['publicationDate'])) {
                $this->setPublicationDate($data['publicationDate']);
            }
            if (isset($data['presentationDate'])) {
                $this->setPresentationDate($data['presentationDate']);
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException('$data expected to be array of values, saw "'.gettype($data).'"');
        }
        parent::__construct($data);
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->get_fhirElementName();
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $json = parent::jsonSerialize();
        if (isset($this->documentType)) {
            $json['documentType'] = $this->documentType;
        }
        if (isset($this->reference)) {
            $json['reference'] = $this->reference;
        }
        if (isset($this->publicationDate)) {
            $json['publicationDate'] = $this->publicationDate;
        }
        if (isset($this->presentationDate)) {
            $json['presentationDate'] = $this->presentationDate;
        }
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) {
            $sxe = new \SimpleXMLElement('<ImmunizationEducation xmlns="http://hl7.org/fhir"></ImmunizationEducation>');
        }
        parent::xmlSerialize(true, $sxe);
        if (isset($this->documentType)) {
            $this->documentType->xmlSerialize(true, $sxe->addChild('documentType'));
        }
        if (isset($this->reference)) {
            $this->reference->xmlSerialize(true, $sxe->addChild('reference'));
        }
        if (isset($this->publicationDate)) {
            $this->publicationDate->xmlSerialize(true, $sxe->addChild('publicationDate'));
        }
        if (isset($this->presentationDate)) {
            $this->presentationDate->xmlSerialize(true, $sxe->addChild('presentationDate'));
        }
        if ($returnSXE) {
            return $sxe;
        }
        return $sxe->saveXML();
    }
}
