<?php

namespace App\Http\Resources\V1\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class StudentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'names' => $this->names,
            'lastnames' => $this->lastnames,
            'dateBirth' => $this->dateBirth,
            'nacionality_id' => $this->nacionality_id, // edit
            'departmentBirth_id' => $this->departmentBirth_id, // edit
            'municipalityBirth_id' => $this->municipalityBirth_id, // edit
            'yearStudy' => $this->yearStudy,
            'nie' => $this->nie,
            'departureNumber' => $this->departureNumber,
            'departureFolio' => $this->departureFolio,
            'departureBook' => $this->departureBook,
            'anotherIdentificationDocument' => $this->anotherIdentificationDocument,
            'salvadoreno_por' => $this->salvadoreno_por,
            'incomeSpecialty_id' => $this->incomeSpecialty_id,
            'parvularianStudy' => $this->parvularianStudy,
            'repeatSection' => $this->repeatSection,
            'providencisShoolCenters_id' => $this->providencisShoolCenters_id, // edit
            'previousYear' => $this->previousYear,
            'bloodType' => $this->bloodType,
            'sexo' => $this->sexo,
            'stateFamiliar' => $this->stateFamiliar,
            'disability' => $this->disability,
            'email' => $this->email,
            'telephone' => $this->telephone,
            'zona_id' => $this->zona_id, // edit
            'departmentResidence_id' => $this->departmentResidence_id, // edit
            'municipalityResidence_id' => $this->municipalityResidence_id, // edit
            'cantonResidence_id' => $this->cantonResidence_id, // edit
            'hamletResidence_id' => $this->hamletResidence_id,
            'streetType' => $this->streetType,
            'fullAddress' => $this->fullAddress,
            'middleTransport' => $this->middleTransport,
            'distanceFromHomeSchool' => $this->distanceFromHomeSchool,
            'riskFactor' => $this->riskFactor,
            'numberMembersFamily' => $this->numberMembersFamily,
            'integrated' => $this->integrated,
            'dependsEconomically' => $this->dependsEconomically,
            'hasChildren' => $this->hasChildren,
            'numberChildren' => $this->numberChildren,
            'work' => $this->work,
            'coexistenceWith' => $this->coexistenceWith,
            'mothersName' => $this->mothersName,
            'occupationMother' => $this->occupationMother,
            'workplaceOfTheMother' => $this->workplaceOfTheMother,
            'mothersPhone' => $this->mothersPhone,
            'fathersName' => $this->fathersName,
            'occupationFather' => $this->occupationFather,
            'workplaceOfTheFather' => $this->workplaceOfTheFather,
            'fathersPhone' => $this->fathersPhone,
            'ResponsibleNames' => $this->ResponsibleNames,
            'ResponsibleLastNames' => $this->ResponsibleLastNames,
            'DuiResponsible' => $this->DuiResponsible,
            'familyStateResponsible' => $this->familyStateResponsible,
            'emailResponsible' => $this->emailResponsible,
            'phoneResponsible' => $this->phoneResponsible,
            'zoneReponsible_id' => $this->zoneReponsible_id, // edit
            'departmentReponsible_id' => $this->departmentReponsible_id, // edit
            'municipalityReponsible_id' => $this->municipalityReponsible_id,
            'cantonReponsible_id' => $this->cantonReponsible_id,
            'hamletReponsible_id' => $this->hamletReponsible_id,
            'streetTypeReponsible' => $this->streetTypeReponsible,
            'fullAddressResponsible' => $this->fullAddressResponsible,
            'professionIfficeResponsible' => $this->professionIfficeResponsible,
            'responsibleSchool' => $this->responsibleSchool,
            'riskFactorResponsable' => $this->riskFactorResponsable,
            'dateReviewForm' => $this->dateReviewForm,
            'birthCertificate' => $this->birthCertificate,
            'certificationNotes' => $this->certificationNotes,
            'certificate' => $this->certificate,
            'photos' => $this->photos,
            'RecordNotes' => $this->RecordNotes,
            'residentCard' => $this->residentCard,
            'teacherRevision_id' => $this->teacherRevision_id,
            'created_at' => $this->published_at
        ];
    }

}
