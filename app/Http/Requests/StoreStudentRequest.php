<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreStudentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'names' => ['required', 'max:120'],
            'lastnames' => ['required', 'max:120'],
            'dateBirth' => ['required', 'date'],
            'nationality_id' => ['required'],
            'departmentBirth_id' => ['required'],
            'municipalityBirth_id' => ['required'],
            'yearStudy' => ['required'],
            'nie' => ['required'],
            'departureNumber' => ['required', 'max:10'],
            'departureFolio' => ['required', 'max:10'],
            'departureBook' => ['required', 'max:10'],
            'anotherIdentificationDocument' => [],
            'salvadoreno_por' => ['required', 'max:30'],
            'incomeSpecialty_id' => ['required'],
            'parvularianStudy' => ['required'],
            'repeatSection' => ['required'],
            'school_center_id' => ['required'],
            'previousYear' => ['required'],
            'bloodType' => [],
            'sexo' => ['required'],
            'stateFamiliar' => ['required', 'max:1'],
            'disability' => ['required', 'max:250'],
            'email' => ['required', 'email'],
            'telephone' => ['required'],
            'zone_id' => ['required'],
            'departmentResidence_id' => ['required'],
            'municipalityResidence_id' => ['required'],
            'cantonResidence_id' => ['required'],
            'hamletResidence_id' => ['required'],
            'streetType' => ['required', 'max:50'],
            'fullAddress' => ['required', 'max:250'],
            'middleTransport' => ['required', 'max:100'],
            'distanceFromHomeSchool' => ['required'],
            'riskFactor' => ['required', 'max:100'],
            'numberMembersFamily' => ['required'],
            'integrated' => ['required'],
            'dependsEconomically' => ['required'],
            'hasChildren' => ['required'],
            'numberChildren' => ['required'],
            'work' => ['required'],
            'coexistenceWith' => ['required'],
            'mothersName' => ['required', 'max:120'],
            'occupationMother' => ['required', 'max:100'],
            'workplaceOfTheMother' => [],
            'mothersPhone' => [],
            'fathersName' => ['required', 'max:120'],
            'occupationFather' => ['required', 'max:100'],
            'workplaceOfTheFather' => [],
            'fathersPhone' => [],
            'ResponsibleNames' => ['required', 'max:120'],
            'ResponsibleLastNames' => ['required', 'max:120'],
            'DuiResponsible' => ['required', 'max:10'],
            'familyStateResponsible' => ['required'],
            'emailResponsible' => ['required', 'email'],
            'phoneResponsible' => ['required'],
            'zoneReponsible_id' => ['required'],
            'departmentReponsible_id' => ['required'],
            'municipalityReponsible_id' => ['required'],
            'cantonReponsible_id' => ['required'],
            'hamletReponsible_id' => ['required'],
            'streetTypeReponsible' => ['required'],
            'fullAddressResponsible' => ['required', 'max:250'],
            'professionIfficeResponsible' => ['required', 'max:100'],
            'responsibleSchool' => ['required'],
            'riskFactorResponsable' => ['required', 'max:100'],
            'dateReviewForm' => ['required', 'date'],
            'birthCertificate' => ['required'],
            'certificationNotes' => ['required'],
            'certificate' => ['required'],
            'photos' => ['required'],
            'RecordNotes' => ['required'],
            'residentCard' => ['required'],
            'teacher_id' => ['required']
        ];
    }
}

/*

{
    "names": "Edwin Alexander",
    "lastnames": "Bernardino Moran",
    "dateBirth": "2023-07-15",
    "nacionality_id": 1,
    "departmentBirth_id": 1,
    "municipalityBirth_id": 2,
    "yearStudy": "1",
    "nie": "814892",
    "departureNumber": "200",
    "departureFolio": "201",
    "departureBook": "202",
    "anotherIdentificationDocument": "Ninguno",
    "salvadoreno_por": "Nacimiento",
    "incomeSpecialty_id": 8,
    "parvularianStudy": "SI",
    "repeatSection": "NO",
    "providencisShoolCenters_id": 1,
    "previousYear": 2022,
    "bloodType": "O+",
    "sexo": "M",
    "stateFamiliar": "S",
    "disability": "Ninguna",
    "email": "edwinalexanderbernardinomoran@gmail.com",
    "telephone": "6065-6575",
    "zone_id": 1,
    "departmentResidence_id": 1,
    "municipalityResidence_id": 2,
    "cantonResidence_id": 1,
    "hamletResidence_id": 1,
    "streetType": "Enpavimentada",
    "fullAddress": "Sonsonate, Nahuizalco, Canton Sabana San Juan Abajo, Caserio Garcia",
    "middleTransport": "Autobus",
    "distanceFromHomeSchool": 15.5,
    "riskFactor": "Ninguno",
    "numberMembersFamily": 5,
    "integrated": 1,
    "dependsEconomically": "Abuela",
    "hasChildren": 0,
    "numberChildren": "Ninguno",
    "work": 0,
    "coexistenceWith": "Mamá",
    "mothersName": "Maria Magdalena Moran Mate",
    "occupationMother": "Ama de Casa",
    "workplaceOfTheMother": "San Salvador",
    "mothersPhone": "6142-5690",
    "fathersName": "Oscar Armando Bernardino Mate",
    "occupationFather": "Empresa",
    "workplaceOfTheFather": "San Salvador",
    "fathersPhone": "2456-7890",
    "ResponsibleNames": "Maria Antonia",
    "ResponsibleLastNames": "Moran Mate",
    "DuiResponsible": "1234567-9",
    "familyStateResponsible": 1,
    "emailResponsible": "mariaantoniamoran@gmail.com",
    "phoneResponsible": "2200-3414",
    "zoneReponsible_id": 1,
    "departmentReponsible_id": 1,
    "municipalityReponsible_id": 2,
    "cantonReponsible_id": 1,
    "hamletReponsible_id": 1,
    "streetTypeReponsible": "Polvosa",
    "fullAddressResponsible": "Sonsonate, Nahuizalco, Canton Sabana San Juan Abajo, Caserio Garcia",
    "professionIfficeResponsible": "En Casa",
    "responsibleSchool": "Ninguno",
    "riskFactorResponsable": "Quebrada (río)",
    "dateReviewForm": "2023-07-15",
    "birthCertificate": 1,
    "certificationNotes": 1,
    "certificate": 1,
    "photos": 1,
    "RecordNotes": 1,
    "residentCard": 1,
    "teacher_id": 1
}

*/
