<?php

namespace App\Controllers;

use CodeIgniter\CodeIgniter;

/**
 * Home class
 */
class Home extends BaseController
{

    /**
     * index function
     *
     * @return string
     */
    public function index(): string
    {
        // Get global variables
        $data = [
            'CI_VERSION' => CodeIgniter::CI_VERSION,
            'ENVIRONMENT' => ENVIRONMENT,
        ];

        // Render 'app/Views/dashboard.blade.php'.
        return $this->render('dashboard', $data);
    }

    /**
     * example function
     *
     * @return string
     */
    public function example(): string
    {
        $users = [
            [
                "Name" => "Unity Pugh",
                "Ext." => "9958",
                "City" => "Curicó",
                "Start Date" => "2005/02/11",
                "Completion" => "37%"
            ],
            [
                "Name" => "Theodore Duran",
                "Ext." => "8971",
                "City" => "Dhanbad",
                "Start Date" => "1999/04/07",
                "Completion" => "97%"
            ],
            [
                "Name" => "Kylie Bishop",
                "Ext." => "3147",
                "City" => "Norman",
                "Start Date" => "2005/09/08",
                "Completion" => "63%"
            ],
            [
                "Name" => "Willow Gilliam",
                "Ext." => "3497",
                "City" => "Amqui",
                "Start Date" => "2009/29/11",
                "Completion" => "30%"
            ],
            [
                "Name" => "Blossom Dickerson",
                "Ext." => "5018",
                "City" => "Kempten",
                "Start Date" => "2006/11/09",
                "Completion" => "17%"
            ],
            [
                "Name" => "Elliott Snyder",
                "Ext." => "3925",
                "City" => "Enines",
                "Start Date" => "2006/03/08",
                "Completion" => "57%"
            ],
            [
                "Name" => "Castor Pugh",
                "Ext." => "9488",
                "City" => "Neath",
                "Start Date" => "2014/23/12",
                "Completion" => "93%"
            ],
            [
                "Name" => "Pearl Carlson",
                "Ext." => "6231",
                "City" => "Cobourg",
                "Start Date" => "2014/31/08",
                "Completion" => "100%"
            ],
            [
                "Name" => "Deirdre Bridges",
                "Ext." => "1579",
                "City" => "Eberswalde-Finow",
                "Start Date" => "2014/26/08",
                "Completion" => "44%"
            ],
            [
                "Name" => "Daniel Baldwin",
                "Ext." => "6095",
                "City" => "Moircy",
                "Start Date" => "2000/11/01",
                "Completion" => "33%"
            ],
            [
                "Name" => "Phelan Kane",
                "Ext." => "9519",
                "City" => "Germersheim",
                "Start Date" => "1999/16/04",
                "Completion" => "77%"
            ],
            [
                "Name" => "Quentin Salas",
                "Ext." => "1339",
                "City" => "Los Andes",
                "Start Date" => "2011/26/01",
                "Completion" => "49%"
            ],
            [
                "Name" => "Armand Suarez",
                "Ext." => "6583",
                "City" => "Funtua",
                "Start Date" => "1999/06/11",
                "Completion" => "9%"
            ],
            [
                "Name" => "Gretchen Rogers",
                "Ext." => "5393",
                "City" => "Moxhe",
                "Start Date" => "1998/26/10",
                "Completion" => "24%"
            ],
            [
                "Name" => "Harding Thompson",
                "Ext." => "2824",
                "City" => "Abeokuta",
                "Start Date" => "2008/06/08",
                "Completion" => "10%"
            ],
            [
                "Name" => "Mira Rocha",
                "Ext." => "4393",
                "City" => "Port Harcourt",
                "Start Date" => "2002/04/10",
                "Completion" => "14%"
            ],
            [
                "Name" => "Drew Phillips",
                "Ext." => "2931",
                "City" => "Goes",
                "Start Date" => "2011/18/10",
                "Completion" => "58%"
            ],
            [
                "Name" => "Emerald Warner",
                "Ext." => "6205",
                "City" => "Chiavari",
                "Start Date" => "2002/08/04",
                "Completion" => "58%"
            ],
            [
                "Name" => "Colin Burch",
                "Ext." => "7457",
                "City" => "Anamur",
                "Start Date" => "2004/02/01",
                "Completion" => "34%"
            ],
            [
                "Name" => "Russell Haynes",
                "Ext." => "8916",
                "City" => "Frascati",
                "Start Date" => "2015/28/04",
                "Completion" => "18%"
            ],
            [
                "Name" => "Brennan Brooks",
                "Ext." => "9011",
                "City" => "Olmué",
                "Start Date" => "2000/18/04",
                "Completion" => "2%"
            ],
            [
                "Name" => "Kane Anthony",
                "Ext." => "8075",
                "City" => "LaSalle",
                "Start Date" => "2006/21/05",
                "Completion" => "93%"
            ],
            [
                "Name" => "Scarlett Hurst",
                "Ext." => "1019",
                "City" => "Brampton",
                "Start Date" => "2015/07/01",
                "Completion" => "94%"
            ],
            [
                "Name" => "James Scott",
                "Ext." => "3008",
                "City" => "Meux",
                "Start Date" => "2007/30/05",
                "Completion" => "55%"
            ],
            [
                "Name" => "Desiree Ferguson",
                "Ext." => "9054",
                "City" => "Gojra",
                "Start Date" => "2009/15/02",
                "Completion" => "81%"
            ],
            [
                "Name" => "Elaine Bishop",
                "Ext." => "9160",
                "City" => "Petrópolis",
                "Start Date" => "2008/23/12",
                "Completion" => "48%"
            ],
            [
                "Name" => "Hilda Nelson",
                "Ext." => "6307",
                "City" => "Posina",
                "Start Date" => "2004/23/05",
                "Completion" => "76%"
            ],
            [
                "Name" => "Evangeline Beasley",
                "Ext." => "3820",
                "City" => "Caplan",
                "Start Date" => "2009/12/03",
                "Completion" => "62%"
            ],
            [
                "Name" => "Wyatt Riley",
                "Ext." => "5694",
                "City" => "Cavaion Veronese",
                "Start Date" => "2012/19/02",
                "Completion" => "67%"
            ],
            [
                "Name" => "Wyatt Mccarthy",
                "Ext." => "3547",
                "City" => "Patan",
                "Start Date" => "2014/23/06",
                "Completion" => "9%"
            ],
            [
                "Name" => "Cairo Rice",
                "Ext." => "6273",
                "City" => "Ostra Vetere",
                "Start Date" => "2016/27/02",
                "Completion" => "13%"
            ],
            [
                "Name" => "Sylvia Peters",
                "Ext." => "6829",
                "City" => "Arrah",
                "Start Date" => "2015/03/02",
                "Completion" => "13%"
            ],
            [
                "Name" => "Kasper Craig",
                "Ext." => "5515",
                "City" => "Firenze",
                "Start Date" => "2015/26/04",
                "Completion" => "56%"
            ],
            [
                "Name" => "Leigh Ruiz",
                "Ext." => "5112",
                "City" => "Lac Ste. Anne",
                "Start Date" => "2001/09/02",
                "Completion" => "28%"
            ],
            [
                "Name" => "Athena Aguirre",
                "Ext." => "5741",
                "City" => "Romeral",
                "Start Date" => "2010/24/03",
                "Completion" => "15%"
            ],
            [
                "Name" => "Riley Nunez",
                "Ext." => "5533",
                "City" => "Sart-Eustache",
                "Start Date" => "2003/26/02",
                "Completion" => "30%"
            ],
            [
                "Name" => "Lois Talley",
                "Ext." => "9393",
                "City" => "Dorchester",
                "Start Date" => "2014/05/01",
                "Completion" => "51%"
            ],
            [
                "Name" => "Hop Bass",
                "Ext." => "1024",
                "City" => "Westerlo",
                "Start Date" => "2012/25/09",
                "Completion" => "85%"
            ],
            [
                "Name" => "Kalia Diaz",
                "Ext." => "9184",
                "City" => "Ichalkaranji",
                "Start Date" => "2013/26/06",
                "Completion" => "92%"
            ],
            [
                "Name" => "Maia Pate",
                "Ext." => "6682",
                "City" => "Louvain-la-Neuve",
                "Start Date" => "2011/23/04",
                "Completion" => "50%"
            ],
            [
                "Name" => "Macaulay Pruitt",
                "Ext." => "4457",
                "City" => "Fraser-Fort George",
                "Start Date" => "2015/03/08",
                "Completion" => "92%"
            ],
            [
                "Name" => "Danielle Oconnor",
                "Ext." => "9464",
                "City" => "Neuwied",
                "Start Date" => "2001/05/10",
                "Completion" => "17%"
            ],
            [
                "Name" => "Kato Carr",
                "Ext." => "4842",
                "City" => "Faridabad",
                "Start Date" => "2012/11/05",
                "Completion" => "96%"
            ],
            [
                "Name" => "Malachi Mejia",
                "Ext." => "7133",
                "City" => "Vorst",
                "Start Date" => "2007/25/04",
                "Completion" => "26%"
            ],
            [
                "Name" => "Dominic Carver",
                "Ext." => "3476",
                "City" => "Pointe-aux-Trembles",
                "Start Date" => "2014/14/03",
                "Completion" => "71%"
            ],
            [
                "Name" => "Paki Santos",
                "Ext." => "4424",
                "City" => "Cache Creek",
                "Start Date" => "2001/18/11",
                "Completion" => "82%"
            ],
            [
                "Name" => "Ross Hodges",
                "Ext." => "1862",
                "City" => "Trazegnies",
                "Start Date" => "2010/19/09",
                "Completion" => "87%"
            ],
            [
                "Name" => "Hilda Whitley",
                "Ext." => "3514",
                "City" => "New Sarepta",
                "Start Date" => "2011/05/07",
                "Completion" => "94%"
            ],
            [
                "Name" => "Roth Cherry",
                "Ext." => "4006",
                "City" => "Flin Flon",
                "Start Date" => "2008/02/09",
                "Completion" => "8%"
            ],
            [
                "Name" => "Lareina Jones",
                "Ext." => "8642",
                "City" => "East Linton",
                "Start Date" => "2009/07/08",
                "Completion" => "21%"
            ],
            [
                "Name" => "Joshua Weiss",
                "Ext." => "2289",
                "City" => "Saint-L�onard",
                "Start Date" => "2010/15/01",
                "Completion" => "52%"
            ],
            [
                "Name" => "Kiona Lowery",
                "Ext." => "5952",
                "City" => "Inuvik",
                "Start Date" => "2002/17/12",
                "Completion" => "72%"
            ],
            [
                "Name" => "Nina Rush",
                "Ext." => "7567",
                "City" => "Bo‘lhe",
                "Start Date" => "2008/27/01",
                "Completion" => "6%"
            ],
            [
                "Name" => "Palmer Parker",
                "Ext." => "2000",
                "City" => "Stade",
                "Start Date" => "2012/24/07",
                "Completion" => "58%"
            ],
            [
                "Name" => "Vielka Olsen",
                "Ext." => "3745",
                "City" => "Vrasene",
                "Start Date" => "2016/08/01",
                "Completion" => "70%"
            ],
            [
                "Name" => "Meghan Cunningham",
                "Ext." => "8604",
                "City" => "Söke",
                "Start Date" => "2007/16/02",
                "Completion" => "59%"
            ],
            [
                "Name" => "Iola Shaw",
                "Ext." => "6447",
                "City" => "Albany",
                "Start Date" => "2014/05/03",
                "Completion" => "88%"
            ],
            [
                "Name" => "Imelda Cole",
                "Ext." => "4564",
                "City" => "Haasdonk",
                "Start Date" => "2007/16/11",
                "Completion" => "79%"
            ],
            [
                "Name" => "Jerry Beach",
                "Ext." => "6801",
                "City" => "Gattatico",
                "Start Date" => "1999/07/07",
                "Completion" => "36%"
            ],
            [
                "Name" => "Garrett Rocha",
                "Ext." => "3938",
                "City" => "Gavorrano",
                "Start Date" => "2000/06/08",
                "Completion" => "71%"
            ],
            [
                "Name" => "Derek Kerr",
                "Ext." => "1724",
                "City" => "Gualdo Cattaneo",
                "Start Date" => "2014/21/01",
                "Completion" => "89%"
            ],
            [
                "Name" => "Shad Hudson",
                "Ext." => "5944",
                "City" => "Salamanca",
                "Start Date" => "2014/10/12",
                "Completion" => "98%"
            ],
            [
                "Name" => "Daryl Ayers",
                "Ext." => "8276",
                "City" => "Barchi",
                "Start Date" => "2012/12/11",
                "Completion" => "88%"
            ],
            [
                "Name" => "Caleb Livingston",
                "Ext." => "3094",
                "City" => "Fatehpur",
                "Start Date" => "2014/13/02",
                "Completion" => "8%"
            ],
            [
                "Name" => "Sydney Meyer",
                "Ext." => "4576",
                "City" => "Neubrandenburg",
                "Start Date" => "2015/06/02",
                "Completion" => "22%"
            ],
            [
                "Name" => "Lani Lawrence",
                "Ext." => "8501",
                "City" => "Turnhout",
                "Start Date" => "2008/07/05",
                "Completion" => "16%"
            ],
            [
                "Name" => "Allegra Shepherd",
                "Ext." => "2576",
                "City" => "Meeuwen-Gruitrode",
                "Start Date" => "2004/19/04",
                "Completion" => "41%"
            ],
            [
                "Name" => "Fallon Reyes",
                "Ext." => "3178",
                "City" => "Monceau-sur-Sambre",
                "Start Date" => "2005/15/02",
                "Completion" => "16%"
            ],
            [
                "Name" => "Karen Whitley",
                "Ext." => "4357",
                "City" => "Sluis",
                "Start Date" => "2003/02/05",
                "Completion" => "23%"
            ],
            [
                "Name" => "Stewart Stephenson",
                "Ext." => "5350",
                "City" => "Villa Faraldi",
                "Start Date" => "2003/05/07",
                "Completion" => "65%"
            ],
            [
                "Name" => "Ursula Reynolds",
                "Ext." => "7544",
                "City" => "Southampton",
                "Start Date" => "1999/16/12",
                "Completion" => "61%"
            ],
            [
                "Name" => "Adrienne Winters",
                "Ext." => "4425",
                "City" => "Laguna Blanca",
                "Start Date" => "2014/15/09",
                "Completion" => "24%"
            ],
            [
                "Name" => "Francesca Brock",
                "Ext." => "1337",
                "City" => "Oban",
                "Start Date" => "2000/12/06",
                "Completion" => "90%"
            ],
            [
                "Name" => "Ursa Davenport",
                "Ext." => "7629",
                "City" => "New Plymouth",
                "Start Date" => "2013/27/06",
                "Completion" => "37%"
            ],
            [
                "Name" => "Mark Brock",
                "Ext." => "3310",
                "City" => "Veenendaal",
                "Start Date" => "2006/08/09",
                "Completion" => "41%"
            ],
            [
                "Name" => "Dale Rush",
                "Ext." => "5050",
                "City" => "Chicoutimi",
                "Start Date" => "2000/27/03",
                "Completion" => "2%"
            ],
            [
                "Name" => "Shellie Murphy",
                "Ext." => "3845",
                "City" => "Marlborough",
                "Start Date" => "2013/13/11",
                "Completion" => "72%"
            ],
            [
                "Name" => "Porter Nicholson",
                "Ext." => "4539",
                "City" => "Bismil",
                "Start Date" => "2012/22/10",
                "Completion" => "23%"
            ],
            [
                "Name" => "Oliver Huber",
                "Ext." => "1265",
                "City" => "Hannche",
                "Start Date" => "2002/11/01",
                "Completion" => "94%"
            ],
            [
                "Name" => "Calista Maynard",
                "Ext." => "3315",
                "City" => "Pozzuolo del Friuli",
                "Start Date" => "2006/23/03",
                "Completion" => "5%"
            ],
            [
                "Name" => "Lois Vargas",
                "Ext." => "6825",
                "City" => "Cumberland",
                "Start Date" => "1999/25/04",
                "Completion" => "50%"
            ],
            [
                "Name" => "Hermione Dickson",
                "Ext." => "2785",
                "City" => "Woodstock",
                "Start Date" => "2001/22/03",
                "Completion" => "2%"
            ],
            [
                "Name" => "Dalton Jennings",
                "Ext." => "5416",
                "City" => "Dudzele",
                "Start Date" => "2015/09/02",
                "Completion" => "74%"
            ],
            [
                "Name" => "Cathleen Kramer",
                "Ext." => "3380",
                "City" => "Crowsnest Pass",
                "Start Date" => "2012/27/07",
                "Completion" => "53%"
            ],
            [
                "Name" => "Zachery Morgan",
                "Ext." => "6730",
                "City" => "Collines-de-l'Outaouais",
                "Start Date" => "2006/04/09",
                "Completion" => "51%"
            ],
            [
                "Name" => "Yoko Freeman",
                "Ext." => "4077",
                "City" => "Lidköping",
                "Start Date" => "2002/27/12",
                "Completion" => "48%"
            ],
            [
                "Name" => "Chaim Waller",
                "Ext." => "4240",
                "City" => "North Shore",
                "Start Date" => "2010/25/07",
                "Completion" => "25%"
            ],
            [
                "Name" => "Berk Johnston",
                "Ext." => "4532",
                "City" => "Vergnies",
                "Start Date" => "2016/23/02",
                "Completion" => "93%"
            ],
            [
                "Name" => "Tad Munoz",
                "Ext." => "2902",
                "City" => "Saint-Nazaire",
                "Start Date" => "2010/09/05",
                "Completion" => "65%"
            ],
            [
                "Name" => "Vivien Dominguez",
                "Ext." => "5653",
                "City" => "Bargagli",
                "Start Date" => "2001/09/01",
                "Completion" => "86%"
            ],
            [
                "Name" => "Carissa Lara",
                "Ext." => "3241",
                "City" => "Sherborne",
                "Start Date" => "2015/07/12",
                "Completion" => "72%"
            ],
            [
                "Name" => "Hammett Gordon",
                "Ext." => "8101",
                "City" => "Wah",
                "Start Date" => "1998/06/09",
                "Completion" => "20%"
            ],
            [
                "Name" => "Walker Nixon",
                "Ext." => "6901",
                "City" => "Metz",
                "Start Date" => "2011/12/11",
                "Completion" => "41%"
            ],
            [
                "Name" => "Nathan Espinoza",
                "Ext." => "5956",
                "City" => "Strathcona County",
                "Start Date" => "2002/25/01",
                "Completion" => "47%"
            ],
            [
                "Name" => "Kelly Cameron",
                "Ext." => "4836",
                "City" => "Fontaine-Valmont",
                "Start Date" => "1999/02/07",
                "Completion" => "24%"
            ],
            [
                "Name" => "Kyra Moses",
                "Ext." => "3796",
                "City" => "Quenast",
                "Start Date" => "1998/07/07",
                "Completion" => "68%"
            ],
            [
                "Name" => "Grace Bishop",
                "Ext." => "8340",
                "City" => "Rodez",
                "Start Date" => "2012/02/10",
                "Completion" => "4%"
            ],
            [
                "Name" => "Haviva Hernandez",
                "Ext." => "8136",
                "City" => "Suwałki",
                "Start Date" => "2000/30/01",
                "Completion" => "16%"
            ],
            [
                "Name" => "Alisa Horn",
                "Ext." => "9853",
                "City" => "Ucluelet",
                "Start Date" => "2007/01/11",
                "Completion" => "39%"
            ],
            [
                "Name" => "Zelenia Roman",
                "Ext." => "7516",
                "City" => "Redwater",
                "Start Date" => "2012/03/03",
                "Completion" => "31%"
            ]
        ];

        // Escape values to js.
        $data['users'] = addslashes(
            json_encode(
                $users,
                JSON_HEX_AMP | JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT
        ));

        // Render 'app/Views/example.blade.php'.
        return $this->render('example', $data);
    }
}
