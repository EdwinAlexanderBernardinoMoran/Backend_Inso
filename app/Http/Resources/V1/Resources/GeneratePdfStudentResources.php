<?php

namespace App\Http\Resources\V1\Resources;

use FPDF;
use App\Models\Student;
use Illuminate\Http\Resources\Json\JsonResource;

class GeneratePdfStudentResources extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        ob_end_clean();
        $pdf = new FPDF();
        $pdf->AddPage();
        $pdf->Ln(5);
        $pdf->Image("insoimg.png", 12, 10, 28);
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(25);
        $pdf->Cell(140, 5, "MINISTERIO DE EDUCACION", 0, 1, "C");
        $pdf->Cell(185, 5, "INSTITUTO NACIONAL DE SONZACATE", 0, 1, "C");
        $pdf->Cell(185, 5, "(I. N. S. O)", 0, 1, "C");
        $pdf->SetTitle('Ficha de matricula');
        $pdf->SetFont("Arial", "", 12);
        $pdf->Cell(185, 5, "Ficha de Matricula ".date('Y'), 0, 1, "C");


        // ********** Seccion 1 **********
        // Fila 1
        $pdf->Ln(4);
        $pdf->SetFont("Arial", "B", 12);
        $pdf->Cell(60, 5, utf8_decode("Identificación del estudiante:"), 0, 1, "C");
        $pdf->SetFont("Arial", "", 10);

        $pdf->Ln(5);
        $pdf->SetFont("Arial", "", 9);

        // Nombres del Alumno
        $pdf->SetFont("Arial", "B", 11);
        $pdf->Cell(50, 6, "Nombre del estudiante", 1, 0, "C");
        $pdf->SetFont("Arial", "", 11);
        $pdf->Cell(140, 6, utf8_decode($this->names.' '.$this->lastnames), 1, 1, "C");

        // Fecha de nacimiento
        $pdf->SetFont("Arial", "B", 11);
        $pdf->Cell(50, 6, "Fecha de nacimiento", 1, 0, "C");
        $pdf->SetFont("Arial", "", 11);
        $pdf->Cell(40, 6, $this->dateBirth, 1, 0, "C");

        // nacionalidad
        $pdf->SetFont("Arial", "B", 11);
        $pdf->Cell(50, 6, "Nacionalidad:", 1, 0, "C");
        $pdf->SetFont("Arial", "", 11);
        $pdf->Cell(50, 6, utf8_decode($this->nationality->name), 1, 1, "C");


        // Fila 2
        // departamento de nacimiento
        $pdf->SetFont("Arial", "B", 11);
        $pdf->Cell(50, 6, "Departamento de Nac.", 1, 0, "C");
        $pdf->SetFont("Arial", "", 11);
        $pdf->Cell(47, 6, utf8_decode($this->departmentBirth->name), 1, 0, "C");
        // municipio de nacimiento
        $pdf->SetFont("Arial", "B", 11);
        $pdf->Cell(43, 6, "Municipio de Nac.", 1, 0, "C");
        $pdf->SetFont("Arial", "", 11);
        $pdf->Cell(50, 6, utf8_decode($this->municipalityBirth->name), 1, 1, "C");

        // Fila 3
        // año de bachillerato
        $pdf->SetFont("Arial", "B", 11);
        $pdf->Cell(50, 6, utf8_decode("Año de bachillerato"), 1, 0, "C");
        $pdf->SetFont("Arial", "", 10);
        $pdf->Cell(47, 6, utf8_decode($this->yearStudy), 1, 0, "C");
        // nie
        $pdf->SetFont("Arial", "B", 11);
        $pdf->Cell(43, 6, "Nie:", 1, 0, "C");
        $pdf->SetFont("Arial", "", 10);
        $pdf->Cell(50, 6, $this->nie, 1, 1, "C");

        // Fila 4
        // partida de nacimiento
        $pdf->SetFont("Arial", "B", 11);
        $pdf->Cell(40, 6, "# Partida.", 1, 0, "C");
        $pdf->SetFont("Arial", "", 11);
        $pdf->Cell(23, 6, $this->departureNumber, 1, 0, "C");
        $pdf->SetFont("Arial", "B", 11);
        $pdf->Cell(40, 6, "Folio de partida", 1, 0, "C");
        $pdf->SetFont("Arial", "", 11);
        $pdf->Cell(23, 6, $this->departureFolio, 1, 0, "C");
        $pdf->SetFont("Arial", "B", 11);
        $pdf->Cell(40, 6, "Libro de partida", 1, 0, "C");
        $pdf->SetFont("Arial", "", 11);
        $pdf->Cell(24, 6, $this->departureBook, 1, 1, "C");

        // ********** Seccion 2 **********
        // Fila 5
        $pdf->SetFont("Arial", "B", 11);
        $pdf->Cell(60, 6, "Otro documento identificacion", 1, 0, "C");
        $pdf->SetFont("Arial", "", 11);
        $pdf->Cell(45, 6, utf8_decode($this->anotherIdentificationDocument), 1, 0, "C");
        $pdf->SetFont("Arial", "B", 11);
        $pdf->Cell(45, 6, "Salvadoreno por", 1, 0, "C");
        $pdf->SetFont("Arial", "", 11);
        $pdf->Cell(40, 6, utf8_decode($this->salvadoreno_por), 1, 1, "C");

        // Fila 6
        // Especialidad
        $pdf->SetFont("Arial", "B", 11);
        $pdf->Cell(55, 6, "Especialidad", 1, 0, "C");
        $pdf->SetFont("Arial", "", 11);
        $pdf->Cell(135, 6, utf8_decode($this->specialty->name), 1, 1, "C");

        // Fila 7
        // Centro de procedencia
        $pdf->SetFont("Arial", "B", 11);
        $pdf->Cell(50, 6, "Centro de procedencia", 1, 0, "C");
        $pdf->SetFont("Arial", "", 11);
        $pdf->Cell(140, 6, utf8_decode($this->shoolCenter->name), 1, 1, "C");

        // Estudio estudio_parvularia
        $pdf->SetFont("Arial", "B", 11);
        $pdf->Cell(40, 6, "Estudio parvularia", 1, 0, "C");
        $pdf->SetFont("Arial", "", 11);
        $pdf->Cell(10, 6, utf8_decode($this->parvularianStudy), 1, 0, "C");

        // Repite grado
        $pdf->SetFont("Arial", "B", 11);
        $pdf->Cell(40, 6, "Repite grado", 1, 0, "C");
        $pdf->SetFont("Arial", "", 11);
        $pdf->Cell(10, 6, $this->repeatSection, 1, 0, "C");

        // Año anterior de estudio
        $pdf->SetFont("Arial", "B", 11);
        $pdf->Cell(70, 6, utf8_decode("Año que estudio anteriormente"), 1, 0, "C");
        $pdf->SetFont("Arial", "", 11);
        $pdf->Cell(20, 6, $this->previousYear, 1, 1, "C");

        // ********** Seccion 3 **********
        // INFORMACION DEL ESTUDIANTE
        $pdf->Ln(10);
        $pdf->SetFont("Arial", "B", 13);
        $pdf->Cell(60, 5, utf8_decode("Información del estudiante:"), 0, 1, "C");

        // Fila 1
        // Tipo de sangre
        $pdf->SetFont("Arial", "B", 11);
        $pdf->Ln(5);
        $pdf->Cell(45, 6, "Tipo de sangre", 1, 0, "C");
        $pdf->SetFont("Arial", "", 11);
        $pdf->Cell(55, 6, utf8_decode($this->bloodType), 1, 0, "C");

        // sexo
        $pdf->SetFont("Arial", "B", 11);
        $pdf->Cell(40, 6, "Sexo", 1, 0, "C");
        $pdf->SetFont("Arial", "", 11);
        if ($this->sexo == 'M'){
            echo $pdf->Cell(50, 6, "Masculino", 1, 1, "C");
        }
        if ($this->sexo == 'F'){
            echo $pdf->Cell(50, 6, "Femenino", 1, 1, "C");
        }

        // Fila 2
        // Estado familiar
        $pdf->SetFont("Arial", "B", 11);
        $pdf->Cell(45, 6, "Estado familiar", 1, 0, "C");
        $pdf->SetFont("Arial", "", 11);
        if (utf8_decode($this->stateFamiliar) == 'C'){
            echo $pdf->Cell(45, 6, "Casado/a", 1, 0, "C");
        }
        if (utf8_decode($this->stateFamiliar) == 'V'){
            echo $pdf->Cell(45, 6, "Viudo/a", 1, 0, "C");
        }
        if (utf8_decode($this->stateFamiliar) == 'D'){
            echo $pdf->Cell(45, 6, "Divorciado/a", 1, 0, "C");
        }
        if (utf8_decode($this->stateFamiliar) == 'S'){
            echo $pdf->Cell(45, 6, "Soltero/a", 1, 0, "C");
        }
        if (utf8_decode($this->stateFamiliar) == 'A'){
            echo $pdf->Cell(45, 6, "Acompañado/a", 1, 0, "C");
        }

        // Discapacidad
        $pdf->SetFont("Arial", "B", 11);
        $pdf->Cell(40, 6, "Discapacidad", 1, 0, "C");
        $pdf->SetFont("Arial", "", 11);
        $pdf->Cell(60, 6, utf8_decode($this->disability), 1, 1, "C");


        // ********** Seccion 4 **********
        // DATOS DE CONTACTO
        $pdf->Ln(7);
        $pdf->SetFont("Arial", "B", 13);
        $pdf->Cell(42, 5, "Datos de contacto:", 0, 1, "C");

        // Fila 1
        // Correo electronico
        $pdf->Ln(8);
        $pdf->SetFont("Arial", "B", 11);
        $pdf->Cell(45, 6, "Correo electronico", 1, 0, "C");
        $pdf->SetFont("Arial", "", 11);
        $pdf->Cell(145, 6, utf8_decode($this->email), 1, 1, "C");

        // Fila 2
        // Telefono fijo
        $pdf->SetFont("Arial", "B", 11);
        $pdf->Cell(30, 6, "Tel. fijo", 1, 0, "C");
        $pdf->SetFont("Arial", "", 11);
        $pdf->Cell(35, 6, $this->telephone, 1, 0, "C");

        // Telefono celular
        $pdf->SetFont("Arial", "B", 11);
        $pdf->Cell(30, 6, "Celular", 1, 0, "C");
        $pdf->SetFont("Arial", "", 11);
        $pdf->Cell(35, 6, $this->celular, 1, 0, "C");
        $pdf->SetFont("Arial", "B", 11);
        $pdf->Cell(30, 6, "Zona", 1, 0, "C");
        $pdf->SetFont("Arial", "", 11);
        $pdf->Cell(30, 6, utf8_decode($this->zone->name), 1, 1, "C");

        // Fila 3
        // departamento
        $pdf->SetFont("Arial", "B", 11);
        $pdf->Cell(45, 6, "Departamento", 1, 0, "C");
        $pdf->SetFont("Arial", "", 11);
        $pdf->Cell(45, 6, utf8_decode($this->departmentResidence->name), 1, 0, "C");

        // municipio
        $pdf->SetFont("Arial", "B", 11);
        $pdf->Cell(50, 6, "Municipio", 1, 0, "C");
        $pdf->SetFont("Arial", "", 11);
        $pdf->Cell(50, 6, utf8_decode($this->municipalityResident->name), 1, 1, "C");

        // Fila 4
        // canton
        $pdf->SetFont("Arial", "B", 11);
        $pdf->Cell(40, 6, "Canton", 1, 0, "C");
        $pdf->SetFont("Arial", "", 11);
        $pdf->Cell(150, 6, utf8_decode($this->cantonResidence->name), 1, 1, "C");

        // Fila 5
        // caserio
        $pdf->SetFont("Arial", "B", 11);
        $pdf->Cell(25, 6, "Caserio", 1, 0, "C");
        $pdf->SetFont("Arial", "", 11);
        $pdf->Cell(75, 6, utf8_decode($this-> hamletResidence->name), 1, 0, "C");
        $pdf->SetFont("Arial", "B", 11);
        $pdf->Cell(50, 6, "Tipo de calle", 1, 0, "C");
        $pdf->SetFont("Arial", "", 11);
        $pdf->Cell(40, 6, utf8_decode($this-> streetType), 1, 1, "C");

        // Fila 6
        $pdf->SetFont("Arial", "B", 11);
        $pdf->Cell(41, 6, "Direccion Estudiante:", 1, 0, "C");
        $pdf->SetFont("Arial", "", 11);
        $pdf->Cell(149, 6, utf8_decode($this->fullAddress), 1, 1, "C");

        // ********** Seccion 5 **********
        // OTROS DATOS
        $pdf->Ln(8);
        $pdf->SetFont("Arial", "B", 13);
        $pdf->Cell(28, 5, "Otros datos:", 0, 1, "C");

        // Fila 1
        // Medio de transporte
        $pdf->SetFont("Arial", "B", 11);
        $pdf->Ln(5);
        $pdf->Cell(70, 6, "Medio de transporte que utilizas", 1, 0, "C");
        $pdf->SetFont("Arial", "", 11);
        $pdf->Cell(120, 6, utf8_decode($this->middleTransport), 1, 1, "C");

        // Fila 2
        // Distancia en kilometros de el centro educativo.
        $pdf->SetFont("Arial", "B", 11);
        $pdf->Cell(65, 6, utf8_decode("Distancia al centro educativo"), 1, 0, "C");
        $pdf->SetFont("Arial", "", 11);
        $pdf->Cell(35, 6, "{$this->distanceFromHomeSchool} Kilometros", 1, 0, "C");

        // Fila 3
        // Factor de riesgo
        $pdf->SetFont("Arial", "B", 11);
        $pdf->Cell(40, 6, "Factor de riesgo", 1, 0, "C");
        $pdf->SetFont("Arial", "", 11);
        $pdf->Cell(50, 6, utf8_decode($this->riskFactor), 1, 1, "C");


        // ********** Seccion 6 **********
        // GRUPO FAMILIAR
        $pdf->Ln(8);
        $pdf->SetFont("Arial", "B", 13);
        $pdf->Cell(32, 5, "Grupo familiar:", 0, 1, "C");

        // Fila 1
        // Integrantes de la familia
        $pdf->SetFont("Arial", "B", 11);
        $pdf->Ln(5);
        $pdf->Cell(80, 5, "# De integrantes de la familia", 1, 0, "C");
        $pdf->SetFont("Arial", "", 11);
        $pdf->Cell(25, 5, $this->numberMembersFamily, 1, 0, "C");
        $pdf->SetFont("Arial", "B", 11);
        $pdf->Cell(60, 5, "Integrados", 1, 0, "C");
        $pdf->SetFont("Arial", "", 11);
        $pdf->Cell(25, 5, $this->integrated, 1, 1, "C");

        // Fila 2
        // Depende economicamente de
        $pdf->SetFont("Arial", "B", 11);
        $pdf->Cell(60, 6, "Depende economicamente de", 1, 0, "C");
        $pdf->SetFont("Arial", "", 11);
        $pdf->Cell(40, 6, utf8_decode($this->dependsEconomically), 1, 0, "C");

        // Tiene hijos
        $pdf->SetFont("Arial", "B", 11);
        $pdf->Cell(30, 6, "Tiene hijos", 1, 0, "C");
        $pdf->SetFont("Arial", "", 11);
        $pdf->Cell(15, 6, $this->hasChildren, 1, 0, "C");

        // Trabaja
        $pdf->SetFont("Arial", "B", 11);
        $pdf->Cell(30, 6, "Trabaja", 1, 0, "C");
        $pdf->SetFont("Arial", "", 11);
        $pdf->Cell(15, 6, $this->work, 1, 1, "C");

        // Fila 3
        // Convivencia con
        $pdf->SetFont("Arial", "B", 11);
        $pdf->Cell(35, 6, "Convivencia con", 1, 0, "C");
        $pdf->SetFont("Arial", "", 11);
        $pdf->Cell(35, 6, utf8_decode($this->coexistenceWith), 1, 0, "C");

        // Nombre de la madre
        $pdf->SetFont("Arial", "B", 11);
        $pdf->Cell(40, 6, "Nombre de la madre", 1, 0, "C");
        $pdf->SetFont("Arial", "", 11);
        $pdf->Cell(80, 6, utf8_decode($this->mothersName), 1, 1, "C");

        // Fila 4
        // Lugar de trabajo
        $pdf->SetFont("Arial", "B", 11);
        $pdf->Cell(35, 6, "Lugar de trabajo", 1, 0, "C");
        $pdf->SetFont("Arial", "", 11);
        $pdf->Cell(155, 6, utf8_decode($this->workplaceOfTheMother), 1, 1, "C");

        // Fila 5
        // Ocupacion de la madre
        $pdf->SetFont("Arial", "B", 11);
        $pdf->Cell(35, 6, "Ocupacion", 1, 0, "C");
        $pdf->SetFont("Arial", "", 11);
        $pdf->Cell(65, 6, utf8_decode($this->occupationMother), 1, 0, "C");

        // Telefono de la madre
        $pdf->SetFont("Arial", "B", 11);
        $pdf->Cell(40, 6, "Telefono", 1, 0, "C");
        $pdf->SetFont("Arial", "", 11);
        $pdf->Cell(50, 6, $this->mothersPhone, 1, 1, "C");

        // Fila 6
        // Nombre del padre
        $pdf->SetFont("Arial", "B", 11);
        $pdf->Cell(35, 6, "Nombre del padre", 1, 0, "C");
        $pdf->SetFont("Arial", "", 11);
        $pdf->Cell(80, 6, utf8_decode($this->fathersName), 1, 0, "C");

        // Ocupacion del padre
        $pdf->SetFont("Arial", "B", 11);
        $pdf->Cell(25, 6, "Ocupacion", 1, 0, "C");
        $pdf->SetFont("Arial", "", 11);
        $pdf->Cell(50, 6, utf8_decode($this->occupationFather), 1, 1, "C");
        $pdf->SetFont("Arial", "B", 11);

        // Agregando logo
        $pdf->AddPage();
        $pdf->Image("insoimg.png", 12, 10, 28);
        $pdf->Ln(5);
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(188, 5, "MINISTERIO DE EDUCACION", 0, 1, "C");
        $pdf->Cell(185, 5, "INSTITUTO NACIONAL DE SONZACATE", 0, 1, "C");
        $pdf->Cell(185, 5, "(I. N. S. O)", 0, 1, "C");
        $pdf->SetTitle('Ficha de matricula');
        $pdf->SetFont("Arial", "", 12);
        $pdf->Cell(185, 5, "Ficha de Matricula ".date('Y'), 0, 1, "C");
        $pdf->Ln(10);

        // // Fila 7
        /// Lugar de trabajo del padre
        $pdf->SetFont("Arial", "B", 11);
        $pdf->Cell(35, 6, "Lugar de trabajo", 1, 0, "C");
        $pdf->SetFont("Arial", "", 11);
        $pdf->Cell(80, 6, utf8_decode($this->workplaceOfTheFather), 1, 0, "C");

        // Telefono del padre
        $pdf->SetFont("Arial", "B", 11);
        $pdf->Cell(25, 6, "Telefono", 1, 0, "C");
        $pdf->SetFont("Arial", "", 11);
        $pdf->Cell(50, 6, $this->fathersPhone, 1, 1, "C");
        $pdf->Ln(5);

        // ********** Seccion 7 **********
        // IDENTIFICACION DEL RESPONSABLE
        $pdf->SetFont("Arial", "B", 12);
        $pdf->Cell(65, 5, utf8_decode("Identificacion Del Responsable:"), 0, 1, "C");
        $pdf->Ln(5);

        //  Fila 1
        //  Nombre del responsable
        $pdf->SetFont("Arial", "B", 11);
        $pdf->Cell(50, 6, "Nombre del responsable", 1, 0, "C");
        $pdf->SetFont("Arial", "", 11);
        $pdf->Cell(140, 6, utf8_decode($this->ResponsibleNames.' '.$this->ResponsibleLastNames), 1, 1, "C");

        // Fila 2
        // Numero de dui del responsable
        $pdf->SetFont("Arial", "B", 11);
        $pdf->Cell(50, 6, "Numero de dui", 1, 0, "C");
        $pdf->SetFont("Arial", "", 11);
        $pdf->Cell(45, 6, $this->DuiResponsible, 1, 0, "C");

        // Estado familiar del responsable
        $pdf->SetFont("Arial", "B", 11);
        $pdf->Cell(50, 6, "Estado familiar", 1, 0, "C");
        $pdf->SetFont("Arial", "", 11);
        if ($this->familyStateResponsible == 'C'){
            echo $pdf->Cell(45, 6, utf8_decode("Casado/a"), 1, 1, "C");
        }
        if ($this->familyStateResponsible == 'V'){
            echo $pdf->Cell(45, 6, utf8_decode("Viudo/a"), 1, 1, "C");
        }
        if ($this->familyStateResponsible == 'D'){
            echo $pdf->Cell(45, 6, utf8_decode("Divorciado/a"), 1, 1, "C");
        }
        if ($this->familyStateResponsible == 'S'){
            echo $pdf->Cell(45, 6, utf8_decode("Soltero/a"), 1, 1, "C");
        }
        if ($this->familyStateResponsible == 'A'){
            echo $pdf->Cell(45, 6, utf8_decode("Acompañado/a"), 1, 1, "C");
        }

        // ********** Seccion 8 **********
        // DATOS DEL RESPONSABLE
        $pdf->Ln(5);
        $pdf->SetFont("Arial", "B", 12);
        $pdf->Cell(48, 5, "Datos Del Responsable:", 0, 1, "C");

        // Fila 1
        // Correo electronico
        $pdf->Ln(8);
        $pdf->SetFont("Arial", "B", 11);
        $pdf->Cell(45, 6, "Correo electronico", 1, 0, "C");
        $pdf->SetFont("Arial", "", 11);
        $pdf->Cell(145, 6, $this->emailResponsible, 1, 1, "C");

        // Fila 2
        // Telefono fijo
        $pdf->SetFont("Arial", "B", 11);
        $pdf->Cell(25, 6, "Telefono", 1, 0, "C");
        $pdf->SetFont("Arial", "", 11);
        $pdf->Cell(25, 6, $this->phoneResponsible, 1, 0, "C");

        // Telefono celular
        $pdf->SetFont("Arial", "B", 11);
        $pdf->Cell(20, 6, "Zona", 1, 0, "C");
        $pdf->SetFont("Arial", "", 11);
        $pdf->Cell(30, 6, utf8_decode($this->zoneReponsible->name), 1, 0, "C");

        // Tipo de calle
        $pdf->SetFont("Arial", "B", 11);
        $pdf->Cell(50, 6, "Tipo de calle", 1, 0, "C");
        $pdf->SetFont("Arial", "", 11);
        $pdf->Cell(40, 6, utf8_decode($this->streetTypeReponsible), 1, 1, "C");

        // Fila 3
        // departamento
        $pdf->SetFont("Arial", "B", 11);
        $pdf->Cell(45, 6, "Departamento", 1, 0, "C");
        $pdf->SetFont("Arial", "", 11);
        $pdf->Cell(45, 6, utf8_decode($this->departmentReponsible->name), 1, 0, "C");

        // municipio
        $pdf->SetFont("Arial", "B", 11);
        $pdf->Cell(50, 6, "Municipio", 1, 0, "C");
        $pdf->SetFont("Arial", "", 11);
        $pdf->Cell(50, 6, utf8_decode($this->municipalityReponsible->name), 1, 1, "C");

        // Fila 4
        // canton
        $pdf->SetFont("Arial", "B", 11);
        $pdf->Cell(20, 6, "Canton", 1, 0, "C");
        $pdf->SetFont("Arial", "", 11);
        $pdf->Cell(80, 6, utf8_decode($this->cantonReponsible->name), 1, 0, "C");

        // Fila 5
        // caserio
        $pdf->SetFont("Arial", "B", 11);
        $pdf->Cell(20, 6, "Caserio", 1, 0, "C");
        $pdf->SetFont("Arial", "", 11);
        $pdf->Cell(70, 6, utf8_decode($this->hamletReponsible->name), 1, 1, "C");

        // Fila 6
        // Direccion responsable
        $pdf->SetFont("Arial", "B", 11);
        $pdf->Cell(43, 6, utf8_decode("Dirección responsable"), 1, 0, "C");
        $pdf->SetFont("Arial", "", 11);
        $pdf->Cell(147, 6, utf8_decode($this->fullAddressResponsible), 1, 1, "C");

        // ********** Seccion 9 **********
        // OTROS DATOS DEL RESPONSABLE
        $pdf->Ln(5);
        $pdf->SetFont("Arial", "B", 12);
        $pdf->Cell(61, 5, "Otros Datos Del Responsable:", 0, 1, "C");

        $pdf->Ln(8);

        // Fila 1
        // Profesion o oficio del responsable
        $pdf->SetFont("Arial", "B", 11);
        $pdf->Cell(35, 6, "profesion u oficio", 1, 0, "C");
        $pdf->SetFont("Arial", "", 11);
        $pdf->Cell(35, 6, utf8_decode($this->professionIfficeResponsible), 1, 0, "C");

        // Celular responsable
        $pdf->SetFont("Arial", "B", 11);
        $pdf->Cell(20, 6, "Celular", 1, 0, "C");
        $pdf->SetFont("Arial", "", 11);
        $pdf->Cell(25, 6, $this->phoneResponsible, 1, 0, "C");

        // Escolaridad responsable
        $pdf->SetFont("Arial", "B", 11);
        $pdf->Cell(35, 6, "Escolaridad", 1, 0, "C");
        $pdf->SetFont("Arial", "", 11);
        $pdf->Cell(40, 6, utf8_decode($this->responsibleSchool), 1, 1, "C");

        // Fila 2
        // Factor de riesgo responsable
        $pdf->SetFont("Arial", "B", 11);
        $pdf->Cell(35, 6, "Factor de riesgo", 1, 0, "C");
        $pdf->SetFont("Arial", "", 11);
        $pdf->Cell(87, 6, utf8_decode($this->riskFactorResponsable), 1, 0, "C");

        // Escolaridad responsable
        $pdf->SetFont("Arial", "B", 11);
        $pdf->Cell(38, 6, "Fecha de Revision", 1, 0, "C");
        $pdf->SetFont("Arial", "", 11);
        $pdf->Cell(30, 6, utf8_decode($this->dateReviewForm), 1, 1, "C");

        // ********** Seccion 10 **********
        // OTROS DATOS DEL RESPONSABLE
        $pdf->Ln(7);
        $pdf->SetFont("Arial", "B", 12);
        $pdf->Cell(108, 5, "Reservado Para El Profesor Que Realizo La Matricula:", 0, 1, "C");

        $pdf->Ln(8);
        // Fila 1
        // Partida de nacimiento
        $pdf->SetFont("Arial", "B", 11);
        $pdf->Cell(53, 6, "Partida de nacimiento", 1, 0, "C");
        $pdf->SetFont("Arial", "", 11);
        if ($this->birthCertificate == 0){
            echo $pdf->Cell(11, 6, "NO", 1, 0, "C");
        }
        if ($this->birthCertificate == 1){
            echo $pdf->Cell(11, 6, "SI", 1, 0, "C");
        }

        // Certificado de notas
        $pdf->SetFont("Arial", "B", 11);
        $pdf->Cell(53, 6, "Certificado de notas", 1, 0, "C");
        $pdf->SetFont("Arial", "", 11);
        if ($this->certificationNotes == 0){
            echo $pdf->Cell(11, 6, "NO", 1, 0, "C");
        }
        if ($this->certificationNotes == 1){
            echo $pdf->Cell(11, 6, "SI", 1, 0, "C");
        }

        // Certififcado
        $pdf->SetFont("Arial", "B", 11);
        $pdf->Cell(51, 6, "Certificado", 1, 0, "C");
        $pdf->SetFont("Arial", "", 11);
        if ($this->certificate == 0){
            echo $pdf->Cell(11, 6, "NO", 1, 1, "C");
        }
        if ($this->certificate == 1){
            echo $pdf->Cell(11, 6, "SI", 1, 1, "C");
        }

        // Fila 2
        // Fotos
        $pdf->SetFont("Arial", "B", 11);
        $pdf->Cell(27, 6, "Fotos", 1, 0, "C");
        $pdf->SetFont("Arial", "", 11);
        if ($this->photos == 0){
            echo $pdf->Cell(11, 6, "NO", 1, 0, "C");
        }
        if ($this->photos == 1){
            echo $pdf->Cell(11, 6, "SI", 1, 0, "C");
        }

        // Fotocopia de dui
        $pdf->SetFont("Arial", "B", 11);
        $pdf->Cell(40, 6, "Fotocopia de dui", 1, 0, "C");
        $pdf->SetFont("Arial", "", 11);
        if ($this->RecordNotes == 0){
            echo $pdf->Cell(11, 6, "NO", 1, 0, "C");
        }
        if ($this->RecordNotes == 1){
            echo $pdf->Cell(11, 6, "SI", 1, 0, "C");
        }

        // Constancia de conducta
        $pdf->SetFont("Arial", "B", 11);
        $pdf->Cell(40, 6, "Contancia conducta", 1, 0, "C");
        $pdf->SetFont("Arial", "", 11);
        if ($this->RecordNotes == 0){
            echo $pdf->Cell(11, 6, "NO", 1, 0, "C");
        }
        if ($this->RecordNotes == 1){
            echo $pdf->Cell(11, 6, "SI", 1, 0, "C");
        }

        // Fila 3
        // Carnet de residente
        $pdf->SetFont("Arial", "B", 11);
        $pdf->Cell(40, 6, "Carnet Residente", 1, 0, "C");
        $pdf->SetFont("Arial", "", 11);
        if ($this->residentCard == 0){
            echo $pdf->Cell(10, 6, "NO", 1, 1, "C");
        }
        if ($this->residentCard == 1){
            echo $pdf->Cell(10, 6, "SI", 1, 1, "C");
        }

        // Profesor que realiz la matricula
        $pdf->SetFont("Arial", "B", 11);
        $pdf->Cell(45, 6, "Nombre Del Profesor", 1, 0, "C");
        $pdf->SetFont("Arial", "", 11);
        $pdf->Cell(145, 6, utf8_decode($this->teacher->names. ' '. $this->teacher->lastNames), 1, 1, "C");

        $pdf->Output('', 'ficha.pdf', true);
        ob_end_flush();
    }
}
