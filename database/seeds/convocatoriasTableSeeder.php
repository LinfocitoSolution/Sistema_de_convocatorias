<?php

use Illuminate\Database\Seeder;
use App\Convocatoria;

class convocatoriasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $convocatorias = [
            [
                'unit_id' => '1',
                'titulo_convocatoria' => 'Convocatoria Auxiliatura 2020 Laboratorios Sistemas',
                'gestion' => '2020-07-12',                
                'requisitos' => 'a) Ser estudiante regular y con rendimiento académico de las carreras de\r\nLicenciatura en Ingeniería Informática o Licenciatura en Ingeniería de Sistemas,\r\nque cursa regularmente en la Universidad. Para las materias de Introducción a la\r\nProgramación y Elementos de Programación y Estructura de Datos, podrán\r\npresentarse además estudiantes de Ing. Electrónica. Para la materia de\r\nComputación I podrán presentarse además estudiantes de Ing. Industrial, Ing.\r\nMecánica, Ing. Eléctrica, Ing. Electro-Mecánica e Ing. Matemática. Estudiante\r\nregular es aquel que está inscrito en la gestión académica vigente y cumple los\r\nrequisitos exigidos para seguir una carrera universitaria y el rendimiento\r\nacadémico, haber aprobado más de la mitad de las materias curriculares que\r\n\r\ncorresponde al semestre anterior, certificado por el departamento de Registros\r\ne Inscripciones.\r\nb) O haber concluido el pensum con la totalidad de materias, teniendo pendiente\r\ntan solo la aprobación de la Modalidad de Graduación, pudiendo postular a la\r\nAuxiliatura Universitaria dentro del siguiente periodo académico (dos años o\r\ncuatro semestres), a partir de la fecha de conclusión de pensum de materias.\r\nEste periodo de dos años adicionales a los que contempla la conclusión del\r\npensum de materias no podrá ampliarse bajo circunstancia alguna, aún en caso\r\nde encontrarse cursando otra carrera.\r\nc) Queda expresamente prohibido la participación de estudiantes que hubiesen\r\nobtenido ya un título profesional en alguna de las carreras de la Universidad\r\nMayor de San Simon o de cualquier otra del Sistema de la Universidad Boliviana\r\n(RCU No. 63/2018). Aún en caso de encontrarse cursando otra carrera con\r\nadmisión especial. (Certificación emitida por el Departamento de Registros e\r\nInscripciones).\r\nd) Haber Aprobado la totalidad de las materias del semestre a la materia a la que\r\nse postula.\r\ne) No tener deudas de libros en la biblioteca de la FCyT.\r\nf) Participar y aprobar el Concurso de Méritos y proceso de pruebas de selección y\r\nadmisión, conforme a convocatoria.',
                //'pdf_file' => 'NULL',
                'tipo_convocatoria' => 'convocatoria de laboratorios', 
                // 'publicado' => 'no', 
                               
            ],
            [
                'unit_id' => '1',
                'titulo_convocatoria' => 'Convocatoria Auxiliatura 2020 Docencia Sistemas',
                'gestion' => '2020-07-12',                
                'requisitos' => '
                a) Ser estudiante regular y con rendimiento académico de las carreras de
                Licenciatura en Ingeniería Informática o Licenciatura en Ingeniería de Sistemas,
                que cursa regularmente en la Universidad. Para las materias de Introducción a la
                Programación y Elementos de Programación y Estructura de Datos, podrán
                presentarse además estudiantes de Ing. Electrónica. Para la materia de
                Computación I podrán presentarse además estudiantes de Ing. Industrial, Ing.
                Mecánica, Ing. Eléctrica, Ing. Electro-Mecánica e Ing. Matemática. Estudiante
                regular es aquel que está inscrito en la gestión académica vigente y cumple los
                requisitos exigidos para seguir una carrera universitaria y el rendimiento
                académico, haber aprobado más de la mitad de las materias curriculares que 
                corresponde al semestre anterior, certificado por el departamento de Registros
                e Inscripciones.
                
                b) O haber concluido el pensum con la totalidad de materias, teniendo pendiente
                tan solo la aprobación de la Modalidad de Graduación, pudiendo postular a la
                Auxiliatura Universitaria dentro del siguiente periodo académico (dos años o
                cuatro semestres), a partir de la fecha de conclusión de pensum de materias.
                Este periodo de dos años adicionales a los que contempla la conclusión del
                pensum de materias no podrá ampliarse bajo circunstancia alguna, aún en caso
                de encontrarse cursando otra carrera.

                c) Queda expresamente prohibido la participación de estudiantes que hubiesen
                obtenido ya un título profesional en alguna de las carreras de la Universidad
                Mayor de San Simon o de cualquier otra del Sistema de la Universidad Boliviana
                (RCU No. 63/2018). Aún en caso de encontrarse cursando otra carrera con
                admisión especial. (Certificación emitida por el Departamento de Registros e
                Inscripciones).

                d) Haber Aprobado la totalidad de las materias del semestre a la materia a la que
                se postula.

                e) No tener deudas de libros en la biblioteca de la FCyT.

                f) Participar y aprobar el Concurso de Méritos y proceso de pruebas de selección y
                admisión, conforme a convocatoria.
                ',
                //'pdf_file' => 'NULL',
                'tipo_convocatoria' => 'convocatoria de docencia', 
                // 'publicado' => 'no', 
                               
            ],
            // [
            //     'unit_id' => '2',
            //     'titulo_convocatoria' => 'Convocatoria Auxiliatura 2020 Laboratorios Informatica',
            //     'gestion' => '2020-07-12',                
            //     'requisitos' => 'a) Ser estudiante regular y con rendimiento académico de las carreras de\r\nLicenciatura en Ingeniería Informática o Licenciatura en Ingeniería de Sistemas,\r\nque cursa regularmente en la Universidad. Para las materias de Introducción a la\r\nProgramación y Elementos de Programación y Estructura de Datos, podrán\r\npresentarse además estudiantes de Ing. Electrónica. Para la materia de\r\nComputación I podrán presentarse además estudiantes de Ing. Industrial, Ing.\r\nMecánica, Ing. Eléctrica, Ing. Electro-Mecánica e Ing. Matemática. Estudiante\r\nregular es aquel que está inscrito en la gestión académica vigente y cumple los\r\nrequisitos exigidos para seguir una carrera universitaria y el rendimiento\r\nacadémico, haber aprobado más de la mitad de las materias curriculares que\r\n\r\ncorresponde al semestre anterior, certificado por el departamento de Registros\r\ne Inscripciones.\r\nb) O haber concluido el pensum con la totalidad de materias, teniendo pendiente\r\ntan solo la aprobación de la Modalidad de Graduación, pudiendo postular a la\r\nAuxiliatura Universitaria dentro del siguiente periodo académico (dos años o\r\ncuatro semestres), a partir de la fecha de conclusión de pensum de materias.\r\nEste periodo de dos años adicionales a los que contempla la conclusión del\r\npensum de materias no podrá ampliarse bajo circunstancia alguna, aún en caso\r\nde encontrarse cursando otra carrera.\r\nc) Queda expresamente prohibido la participación de estudiantes que hubiesen\r\nobtenido ya un título profesional en alguna de las carreras de la Universidad\r\nMayor de San Simon o de cualquier otra del Sistema de la Universidad Boliviana\r\n(RCU No. 63/2018). Aún en caso de encontrarse cursando otra carrera con\r\nadmisión especial. (Certificación emitida por el Departamento de Registros e\r\nInscripciones).\r\nd) Haber Aprobado la totalidad de las materias del semestre a la materia a la que\r\nse postula.\r\ne) No tener deudas de libros en la biblioteca de la FCyT.\r\nf) Participar y aprobar el Concurso de Méritos y proceso de pruebas de selección y\r\nadmisión, conforme a convocatoria.',
            //     //'pdf_file' => 'NULL',
            //     'tipo_convocatoria' => 'convocatoria de laboratorios', 
            //     'publicado' => 'no', 
                               
            // ],
            // [
            //     'unit_id' => '3',
            //     'titulo_convocatoria' => 'Convocatoria Auxiliatura 2020 Laboratorios Electronica',
            //     'gestion' => '2020-07-12',                
            //     'requisitos' => 'a) Ser estudiante regular y con rendimiento académico de las carreras de\r\nLicenciatura en Ingeniería Informática o Licenciatura en Ingeniería de Sistemas,\r\nque cursa regularmente en la Universidad. Para las materias de Introducción a la\r\nProgramación y Elementos de Programación y Estructura de Datos, podrán\r\npresentarse además estudiantes de Ing. Electrónica. Para la materia de\r\nComputación I podrán presentarse además estudiantes de Ing. Industrial, Ing.\r\nMecánica, Ing. Eléctrica, Ing. Electro-Mecánica e Ing. Matemática. Estudiante\r\nregular es aquel que está inscrito en la gestión académica vigente y cumple los\r\nrequisitos exigidos para seguir una carrera universitaria y el rendimiento\r\nacadémico, haber aprobado más de la mitad de las materias curriculares que\r\n\r\ncorresponde al semestre anterior, certificado por el departamento de Registros\r\ne Inscripciones.\r\nb) O haber concluido el pensum con la totalidad de materias, teniendo pendiente\r\ntan solo la aprobación de la Modalidad de Graduación, pudiendo postular a la\r\nAuxiliatura Universitaria dentro del siguiente periodo académico (dos años o\r\ncuatro semestres), a partir de la fecha de conclusión de pensum de materias.\r\nEste periodo de dos años adicionales a los que contempla la conclusión del\r\npensum de materias no podrá ampliarse bajo circunstancia alguna, aún en caso\r\nde encontrarse cursando otra carrera.\r\nc) Queda expresamente prohibido la participación de estudiantes que hubiesen\r\nobtenido ya un título profesional en alguna de las carreras de la Universidad\r\nMayor de San Simon o de cualquier otra del Sistema de la Universidad Boliviana\r\n(RCU No. 63/2018). Aún en caso de encontrarse cursando otra carrera con\r\nadmisión especial. (Certificación emitida por el Departamento de Registros e\r\nInscripciones).\r\nd) Haber Aprobado la totalidad de las materias del semestre a la materia a la que\r\nse postula.\r\ne) No tener deudas de libros en la biblioteca de la FCyT.\r\nf) Participar y aprobar el Concurso de Méritos y proceso de pruebas de selección y\r\nadmisión, conforme a convocatoria.',
            //     //'pdf_file' => 'NULL',
            //     'tipo_convocatoria' => 'convocatoria de laboratorios', 
            //     'publicado' => 'no', 
                               
            // ],
            // [
            //     'unit_id' => '2',
            //     'titulo_convocatoria' => 'Convocatoria Auxiliatura 2020 Docencia Informatica',
            //     'gestion' => '2020-07-12',                
            //     'requisitos' => 'a) Ser estudiante regular y con rendimiento académico de las carreras de\r\nLicenciatura en Ingeniería Informática o Licenciatura en Ingeniería de Sistemas,\r\nque cursa regularmente en la Universidad. Para las materias de Introducción a la\r\nProgramación y Elementos de Programación y Estructura de Datos, podrán\r\npresentarse además estudiantes de Ing. Electrónica. Para la materia de\r\nComputación I podrán presentarse además estudiantes de Ing. Industrial, Ing.\r\nMecánica, Ing. Eléctrica, Ing. Electro-Mecánica e Ing. Matemática. Estudiante\r\nregular es aquel que está inscrito en la gestión académica vigente y cumple los\r\nrequisitos exigidos para seguir una carrera universitaria y el rendimiento\r\nacadémico, haber aprobado más de la mitad de las materias curriculares que\r\n\r\ncorresponde al semestre anterior, certificado por el departamento de Registros\r\ne Inscripciones.\r\nb) O haber concluido el pensum con la totalidad de materias, teniendo pendiente\r\ntan solo la aprobación de la Modalidad de Graduación, pudiendo postular a la\r\nAuxiliatura Universitaria dentro del siguiente periodo académico (dos años o\r\ncuatro semestres), a partir de la fecha de conclusión de pensum de materias.\r\nEste periodo de dos años adicionales a los que contempla la conclusión del\r\npensum de materias no podrá ampliarse bajo circunstancia alguna, aún en caso\r\nde encontrarse cursando otra carrera.\r\nc) Queda expresamente prohibido la participación de estudiantes que hubiesen\r\nobtenido ya un título profesional en alguna de las carreras de la Universidad\r\nMayor de San Simon o de cualquier otra del Sistema de la Universidad Boliviana\r\n(RCU No. 63/2018). Aún en caso de encontrarse cursando otra carrera con\r\nadmisión especial. (Certificación emitida por el Departamento de Registros e\r\nInscripciones).\r\nd) Haber Aprobado la totalidad de las materias del semestre a la materia a la que\r\nse postula.\r\ne) No tener deudas de libros en la biblioteca de la FCyT.\r\nf) Participar y aprobar el Concurso de Méritos y proceso de pruebas de selección y\r\nadmisión, conforme a convocatoria.',
            //     //'pdf_file' => 'NULL',
            //     'tipo_convocatoria' => 'convocatoria de docencia', 
            //     'publicado' => 'no', 
                               
            // ],
            // [
            //     'unit_id' => '3',
            //     'titulo_convocatoria' => 'Convocatoria Auxiliatura 2020 Docencia Electronica',
            //     'gestion' => '2020-07-12',                
            //     'requisitos' => 'a) Ser estudiante regular y con rendimiento académico de las carreras de\r\nLicenciatura en Ingeniería Informática o Licenciatura en Ingeniería de Sistemas,\r\nque cursa regularmente en la Universidad. Para las materias de Introducción a la\r\nProgramación y Elementos de Programación y Estructura de Datos, podrán\r\npresentarse además estudiantes de Ing. Electrónica. Para la materia de\r\nComputación I podrán presentarse además estudiantes de Ing. Industrial, Ing.\r\nMecánica, Ing. Eléctrica, Ing. Electro-Mecánica e Ing. Matemática. Estudiante\r\nregular es aquel que está inscrito en la gestión académica vigente y cumple los\r\nrequisitos exigidos para seguir una carrera universitaria y el rendimiento\r\nacadémico, haber aprobado más de la mitad de las materias curriculares que\r\n\r\ncorresponde al semestre anterior, certificado por el departamento de Registros\r\ne Inscripciones.\r\nb) O haber concluido el pensum con la totalidad de materias, teniendo pendiente\r\ntan solo la aprobación de la Modalidad de Graduación, pudiendo postular a la\r\nAuxiliatura Universitaria dentro del siguiente periodo académico (dos años o\r\ncuatro semestres), a partir de la fecha de conclusión de pensum de materias.\r\nEste periodo de dos años adicionales a los que contempla la conclusión del\r\npensum de materias no podrá ampliarse bajo circunstancia alguna, aún en caso\r\nde encontrarse cursando otra carrera.\r\nc) Queda expresamente prohibido la participación de estudiantes que hubiesen\r\nobtenido ya un título profesional en alguna de las carreras de la Universidad\r\nMayor de San Simon o de cualquier otra del Sistema de la Universidad Boliviana\r\n(RCU No. 63/2018). Aún en caso de encontrarse cursando otra carrera con\r\nadmisión especial. (Certificación emitida por el Departamento de Registros e\r\nInscripciones).\r\nd) Haber Aprobado la totalidad de las materias del semestre a la materia a la que\r\nse postula.\r\ne) No tener deudas de libros en la biblioteca de la FCyT.\r\nf) Participar y aprobar el Concurso de Méritos y proceso de pruebas de selección y\r\nadmisión, conforme a convocatoria.',
            //     //'pdf_file' => 'NULL',
            //     'tipo_convocatoria' => 'convocatoria de docencia', 
            //     'publicado' => 'no', 
                               
            // ],
        ];
        // DB::table('convocatorias')->insert([
        //     'unit_id' => '1',
        //     'titulo_convocatoria' => 'Convocatoria Auxiliatura 2020 Laboratorios Sistemas',
        //     'gestion' => '2020-07-12',                
        //     'requisitos' => 'a) Ser estudiante regular y con rendimiento académico de las carreras de\r\nLicenciatura en Ingeniería Informática o Licenciatura en Ingeniería de Sistemas,\r\nque cursa regularmente en la Universidad. Para las materias de Introducción a la\r\nProgramación y Elementos de Programación y Estructura de Datos, podrán\r\npresentarse además estudiantes de Ing. Electrónica. Para la materia de\r\nComputación I podrán presentarse además estudiantes de Ing. Industrial, Ing.\r\nMecánica, Ing. Eléctrica, Ing. Electro-Mecánica e Ing. Matemática. Estudiante\r\nregular es aquel que está inscrito en la gestión académica vigente y cumple los\r\nrequisitos exigidos para seguir una carrera universitaria y el rendimiento\r\nacadémico, haber aprobado más de la mitad de las materias curriculares que\r\n\r\ncorresponde al semestre anterior, certificado por el departamento de Registros\r\ne Inscripciones.\r\nb) O haber concluido el pensum con la totalidad de materias, teniendo pendiente\r\ntan solo la aprobación de la Modalidad de Graduación, pudiendo postular a la\r\nAuxiliatura Universitaria dentro del siguiente periodo académico (dos años o\r\ncuatro semestres), a partir de la fecha de conclusión de pensum de materias.\r\nEste periodo de dos años adicionales a los que contempla la conclusión del\r\npensum de materias no podrá ampliarse bajo circunstancia alguna, aún en caso\r\nde encontrarse cursando otra carrera.\r\nc) Queda expresamente prohibido la participación de estudiantes que hubiesen\r\nobtenido ya un título profesional en alguna de las carreras de la Universidad\r\nMayor de San Simon o de cualquier otra del Sistema de la Universidad Boliviana\r\n(RCU No. 63/2018). Aún en caso de encontrarse cursando otra carrera con\r\nadmisión especial. (Certificación emitida por el Departamento de Registros e\r\nInscripciones).\r\nd) Haber Aprobado la totalidad de las materias del semestre a la materia a la que\r\nse postula.\r\ne) No tener deudas de libros en la biblioteca de la FCyT.\r\nf) Participar y aprobar el Concurso de Méritos y proceso de pruebas de selección y\r\nadmisión, conforme a convocatoria.',
        //     //'pdf_file' => 'NULL',
        //     'tipo_convocatoria' => 'convocatoria de laboratorios', 
        //     'publicado' => 'si', 
        // ]);

        foreach ($convocatorias as $convocatoria) {
            Convocatoria::create($convocatoria);
        }
    }
}


