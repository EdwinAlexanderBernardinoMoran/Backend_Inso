<?php

namespace App\Http\Resources\V1\Resources\Relationships;

use Illuminate\Http\Resources\Json\JsonResource;

class StudentRelationshipsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        if ($this->sexo == 'M') {
            $sexo = "Masculino";
        }

        if ($this->sexo == 'F') {
            $sexo = "Femenina";
        }

        if ($this->integrated == 1){
            $integrated = "SI";
        }

        if ($this->integrated == 0){
            $integrated = "NO";
        }

        if ($this->hasChildren == 1){
            $hasChildren = "SI";
        }

        if ($this->hasChildren == 0){
            $hasChildren = "NO";
        }

        if ($this->work == 1){
            $work = "SI";
        }

        if ($this->work == 0){
            $work = "NO";
        }

        if ($this->birthCertificate == 1){
            $birthCertificate = "SI";
        }

        if ($this->birthCertificate == 0){
            $birthCertificate = "NO";
        }

        if ($this->certificationNotes == 1) {
            $certificationNotes = "SI";
        }

        if ($this->certificationNotes == 0) {
            $certificationNotes = "NO";
        }

        if ($this->certificate == 1) {
            $certificate = "SI";
        }

        if ($this->certificate == 0) {
            $certificate = "NO";
        }

        if ($this->photos == 1) {
            $photos = "SI";
        }

        if ($this->photos == 0) {
            $photos = "NO";
        }

        if ($this->RecordNotes == 1) {
            $RecordNotes = "SI";
        }

        if ($this->RecordNotes == 0) {
            $RecordNotes = "NO";
        }

        if ($this->residentCard == 1) {
            $residentCard = "SI";
        }

        if ($this->residentCard == 0) {
            $residentCard = "NO";
        }


        return [
            'id' => $this->id,
            'names' => $this->names,
            'lastnames' => $this->lastnames,
            'dateBirth' => $this->dateBirth,
            'nationality' => $this->nationality->name, // edit
            'departmentBirth' => $this->departmentBirth->name, // edit
            'municipalityBirth' => $this->municipalityBirth->name, // edit
            'yearStudy' => $this->yearStudy,
            'nie' => $this->nie,
            'departureNumber' => $this->departureNumber,
            'departureFolio' => $this->departureFolio,
            'departureBook' => $this->departureBook,
            'anotherIdentificationDocument' => $this->anotherIdentificationDocument,
            'salvadoreno_por' => $this->salvadoreno_por,
            'incomeSpecialty' => $this->specialty->name, //edit
            'parvularianStudy' => $this->parvularianStudy,
            'repeatSection' => $this->repeatSection,
            'providencisShoolCenters' => $this->shoolCenter->name, // edit
            'previousYear' => $this->previousYear,
            'bloodType' => $this->bloodType,
            'sexo' => $sexo, // edit
            'stateFamiliar' => $this->stateFamiliar,
            'disability' => $this->disability,
            'email' => $this->email,
            'telephone' => $this->telephone,
            'zone' => $this->zone->name, // edit
            'departmentResidence' => $this->departmentResidence->name, // edit
            'municipalityResidence' => $this->municipalityResident->name, // edit
            'cantonResidence' => $this->cantonResidence->name, // edit
            'hamletResidence' => $this->hamletResidence->name,
            'streetType' => $this->streetType,
            'fullAddress' => $this->fullAddress,
            'middleTransport' => $this->middleTransport,
            'distanceFromHomeSchool' => $this->distanceFromHomeSchool,
            'riskFactor' => $this->riskFactor,
            'numberMembersFamily' => $this->numberMembersFamily,
            'integrated' => $integrated,
            'dependsEconomically' => $this->dependsEconomically,
            'hasChildren' => $hasChildren,
            'numberChildren' => $this->numberChildren,
            'work' => $work,
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
            'zoneReponsible' => $this->zoneReponsible->name, // edit
            'departmentReponsible' => $this->departmentReponsible->name, // edit
            'municipalityReponsible' => $this->municipalityReponsible->name, // edit
            'cantonReponsible' => $this->cantonReponsible->name, // edit
            'hamletReponsible' => $this->hamletReponsible->name, // edit
            'streetTypeReponsible' => $this->streetTypeReponsible,
            'fullAddressResponsible' => $this->fullAddressResponsible,
            'professionIfficeResponsible' => $this->professionIfficeResponsible,
            'responsibleSchool' => $this->responsibleSchool,
            'riskFactorResponsable' => $this->riskFactorResponsable,
            'dateReviewForm' => $this->dateReviewForm,
            'birthCertificate' => $birthCertificate,
            'certificationNotes' => $certificationNotes,
            'certificate' => $certificate,
            'photos' => $photos,
            'RecordNotes' => $RecordNotes,
            'residentCard' => $residentCard,
            'teacher' => $this->teacher->names.' '.$this->teacher->lastNames,
            'created_at' => $this->published_at
        ];
    }
}
