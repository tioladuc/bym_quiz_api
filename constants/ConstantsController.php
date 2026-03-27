<?php


class ConstantsController
{
    private $service;

    public function __construct()
    {
        
    }

    public function difficulties($body) {
        //echo "duclair"; exit;
        $data = array(
            "FR" => [
                'EASY' => 'Facile',
                'MEDIUM' => 'Moyen',
                'HARD' => 'Difficile'
            ],

            "EN" => [
                'EASY' => 'Easy',
                'MEDIUM' => 'Medium',
                'HARD' => 'Hard'
            ],

            "ES" => [
                'EASY' => 'Fácil',
                'MEDIUM' => 'Medio',
                'HARD' => 'Difícil'
            ]
        );
        $language = strtoupper( $body['language'] ?? 'EN' );
        return [
            'success' => true,
            'data' => $data[$language]
        ];
    }

    public function biblesections($body)
    {
        $language = strtoupper( $body['language'] ?? 'EN' );
        $data = array(
            "Torah" => "Torah (Law)",
            "Nevi'im" => "Nevi'im (Prophets)",
            "Ketuvim" => "Ketuvim (Writings)",
            "Evangile" => "Evangile",
            "Testament de Yehoshoua" => "Testament de Yehoshoua",
        );
        return [
            'success' => true,
            'data' => $data
        ];
    }

    public function biblebooks($body) {
        $language = strtoupper( $body['language'] ?? 'EN' );
        $books = [
            'GN' => 'Bereshit (Genèse) - 50',
            'EX' => 'Shemot (Exode) - 40',
            'LV' => 'Vayiqra (Lévitique) - 27',
            'NU' => 'Bamidbar (Nombres) - 36',
            'DT' => 'Devarim (Deutéronome) - 34',
            'JS' => 'Yéhoshoua (Josué) - 24',
            'JG' => 'Shoftim (Juges) - 21',
            'S1' => '1 Shemouél (1 Samuel) - 31',
            'S2' => '2 Shemouél (2 Samuel) - 24',
            'K1' => '1 Melakhim (1 Rois) - 22',
            'K2' => '2 Melakhim (2 Rois) - 25',
            'IS' => 'Yesha\'yah (Ésaïe) - 66',
            'JR' => 'Yirmeyah (Jérémie) - 52',
            'EK' => 'Yehezkel (Ézéchiel) - 48',
            'HS' => 'Hoshea (Osée) - 14',
            'JL' => 'Yoel (Joël) - 4',
            'AM' => 'Amowc (Amos) - 9',
            'OB' => 'Obadyah (Abdias) - 1',
            'JH' => 'Yonah (Jonas) - 4',
            'MC' => 'Miykayah (Michée) - 7',
            'NM' => 'Nahoum (Nahum) - 3',
            'HK' => 'Chabaqquwq (Habaquq) - 3',
            'ZP' => 'Tsephanyah (Sophonie) - 3',
            'HG' => 'Chaggay (Aggée) - 2',
            'ZC' => 'Zekaryah (Zacharie) - 14',
            'ML' => 'Malakhi (Malachie) - 3',
            'PS' => 'Tehilim (Psaumes) - 150',
            'PR' => 'Mishlei (Proverbes) - 31',
            'JB' => 'Iyov (Job) - 42',
            'SS' => 'Shir Hashirim (Cantique) - 8',
            'RT' => 'Routh (Ruth) - 4',
            'LM' => 'Eikha (Lamentations) - 5',
            'EC' => 'Qohelet (Ecclésiaste) - 12',
            'ET' => 'Meguila Esther (Esther) - 10',
            'DN' => 'Daniye\'l (Daniel) - 12',
            'ER' => 'Ezra (Esdras) - 10',
            'NH' => 'Nehemyah (Néhémie) - 13',
            'R1' => '1 Hayyamim dibre (1 Chroniques) - 29',
            'R2' => '2 Hayyamim dibre (2 Chroniques) - 36',
            'MT' => 'Mattithyah (Matthieu) - 28',
            'MK' => 'Markos (Marc) - 16',
            'LK' => 'Loukas (Luc) - 24',
            'JN' => 'Yohanan (Jean) - 21',
            'AC' => 'Actes - 28',
            'JM' => 'Yaacov (Jacques) - 5',
            'GL' => 'Galates - 6',
            'H1' => '1 Thessaloniciens - 5',
            'H2' => '2 Thessaloniciens - 3',
            'C1' => '1 Corinthiens - 16',
            'C2' => '2 Corinthiens - 13',
            'RM' => 'Romains - 16',
            'EP' => 'Ephésiens - 6',
            'PP' => 'Philippiens - 4',
            'CL' => 'Colossiens - 4',
            'PM' => 'Philemon - 1',
            'T1' => '1 Timotheos (1 Timothée) - 6',
            'TT' => 'Titos (Tite) - 3',
            'P1' => '1 Petros (1 Pierre) - 5',
            'P2' => '2 Petros (2 Pierre) - 3',
            'T2' => '2 Timotheos (2 Timothée) - 4',
            'JD' => 'Yéhouda (Jude) - 1',
            'HB' => 'Hébreux - 13',
            'J1' => '1 Yohanan (1 Jean) - 5',
            'J2' => '2 Yohanan (2 Jean) - 1',
            'J3' => '3 Yohanan (3 Jean) - 1',
            'RV' => 'Apokalupsis (Apocalypse) - 22'
        ];

        return [
            'success' => true,
            'data' => $books
        ];
    }

    public function typeknowledge($body)  {
        $language = strtoupper( $body['language'] ?? 'EN' );
        $data = array(
            "PEB" => "Personnages de la bible",
            "DOC" => "Doctrine",
        );
        return [
            'success' => true,
            'data' => $data
        ];
    }

    

    
}