<?php

use Illuminate\Database\Seeder;

class CountryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // check if table users is empty
        if(DB::table('countries')->get()->count() == 0){

            DB::table('countries')->insert([

                
                [
                   'name' => 'Afghanistan',
                   'dial_code' => '',
                ],
                [
                   'name' => 'Aland Islands',
                   'dial_code' => '',
                ],
                [
                   'name' => 'Albania',
                   'dial_code' => '',
                ],
                [
                   'name' => 'Algeria',
                   'dial_code' => '',
                ],
                [
                   'name' => 'American Samoa',
                   'dial_code' => '',
                ],
                [
                   'name' => 'Andorra',
                   'dial_code' => '',
                ],
                [
                   'name' => 'Angola',
                   'dial_code' => '',
                ],
                [
                   'name' => 'Anguilla',
                   'dial_code' => '',
                ],
                [
                   'name' => 'Antarctica',
                   'dial_code' => '',
                ],
                [
                   'name' => 'Antigua And Barbuda',
                   'dial_code' => '',
                ],
                [
                   'name' => 'Argentina',
                   'dial_code' => '',
                ],
                [
                   'name' => 'Armenia',
                   'dial_code' => '',
                ],
                [
                   'name' => 'Aruba',
                   'dial_code' => '',
                ],
                [
                   'name' => 'Australia',
                   'dial_code' => '',
                ],
                [
                   'name' => 'Austria',
                   'dial_code' => '',
                ],
                [
                   'name' => 'Azerbaijan',
                   'dial_code' => '',
                ],
                [
                   'name' => 'Bahamas',
                   'dial_code' => '',
                ],
                [
                   'name' => 'Bahrain',
                   'dial_code' => '',
                ],
                [
                   'name' => 'Bangladesh',
                   'dial_code' => '',
                ],
                [
                   'name' => 'Barbados',
                   'dial_code' => '',
                ],
                [
                   'name' => 'Belarus',
                   'dial_code' => '',
                ],
                [
                   'name' => 'Belgium',
                   'dial_code' => '',
                ],
                [
                   'name' => 'Belize',
                   'dial_code' => '',
                ],
                [
                   'name' => 'Benin',
                   'dial_code' => '',
                ],
                [
                   'name' => 'Bermuda',
                   'dial_code' => '',
                ],
                [
                   'name' => 'Bhutan',
                   'dial_code' => '',
                ],
                [
                   'name' => 'Bolivia',
                   'dial_code' => '',
                ],
                [
                   'name' => 'Bosnia And Herzegovina',
                   'dial_code' => '',
                ],
                [
                   'name' => 'Botswana',
                   'dial_code' => '',
                ],
                [
                   'name' => 'Bouvet Island',
                   'dial_code' => '',
                ],
                [
                   'name' => 'Brazil',
                   'dial_code' => '',
                ],
                [
                   'name' => 'British Indian Ocean Territory',
                   'dial_code' => '',
                ],
                [
                   'name' => 'Brunei Darussalam',
                   'dial_code' => '',
                ],
                [
                   'name' => 'Bulgaria',
                   'dial_code' => '',
                ],
                [
                   'name' => 'Burkina Faso',
                   'dial_code' => '',
                ], 
                [
                   'name' => 'Burundi',
                   'dial_code' => '',
                ],
                [
                   'name' => 'Cambodia',
                   'dial_code' => '',
                ],
                [
                   'name' => 'Cameroon',
                   'dial_code' => '',
                ],
                [
                   'name' => 'Canada',
                   'dial_code' => '',
                ],
                [
                   'name' => 'Cape Verde',
                   'dial_code' => '',
                ],
                [
                   'name' => 'Cayman Islands',
                   'dial_code' => '',
                ],
                [
                   'name' => 'Central African Republic',
                   'dial_code' => '',
                ],
                [
                   'name' => 'Chad',
                   'dial_code' => '',
                ],
                [
                   'name' => 'Chile',
                   'dial_code' => '',
                ],  
                [
                   'name' => 'China',
                   'dial_code' => '',
                ], 
                [
                   'name' => 'Christmas Island',
                   'dial_code' => '',
                ], 
                [
                   'name' => 'Cocos (Keeling) Islands',
                   'dial_code' => '',
                ], 
                [
                   'name' => 'Colombia',
                   'dial_code' => '',
                ], 
                [
                   'name' => 'Comoros',
                   'dial_code' => '',
                ], 
                [
                   'name' => 'Congo',
                   'dial_code' => '',
                ], 
                [
                   'name' => 'Congo, Democratic Republic',
                   'dial_code' => '',
                ],    
                [
                   'name' => 'Cook Islands',
                   'dial_code' => '',
                ], 
                [
                   'name' => 'Costa Rica',
                   'dial_code' => '',
                ], 
                [
                   'name' => 'Cote D\'Ivoire',
                   'dial_code' => '',
                ], 
                [
                   'name' => 'Croatia',
                   'dial_code' => '',
                ], 
                [
                   'name' => 'Cuba',
                   'dial_code' => '',
                ],
                [
                   'name' => 'Czech Republic',
                   'dial_code' => '',
                ],
                [
                   'name' => 'Denmark',
                   'dial_code' => '',
                ],  
                [
                   'name' => 'Djibouti',
                   'dial_code' => '',
                ],  
                [
                   'name' => 'Dominica',
                   'dial_code' => '',
                ],  
                [
                   'name' => 'Dominican Republic',
                   'dial_code' => '',
                ],  
                [
                   'name' => 'Ecuador',
                   'dial_code' => '',
                ],  
                [
                   'name' => 'Egypt',
                   'dial_code' => '',
                ],  
                [
                   'name' => 'El Salvador',
                   'dial_code' => '',
                ],
                [
                   'name' => 'Equatorial Guinea',
                   'dial_code' => '',
                ], 
                [
                   'name' => 'Eritrea',
                   'dial_code' => '',
                ], 
                [
                   'name' => 'Estonia',
                   'dial_code' => '',
                ], 
                [
                   'name' => 'Ethiopia',
                   'dial_code' => '',
                ], 
                [
                   'name' => 'Falkland Islands (Malvinas)',
                   'dial_code' => '',
                ],
                [
                   'name' => 'Faroe Islands',
                   'dial_code' => '',
                ],
                [
                   'name' => 'Fiji',
                   'dial_code' => '',
                ],
                [
                   'name' => 'Finland',
                   'dial_code' => '',
                ],  
                [
                   'name' => 'France',
                   'dial_code' => '',
                ],
                [
                   'name' => 'French Guiana',
                   'dial_code' => '',
                ],  
                [
                   'name' => 'French Polynesia',
                   'dial_code' => '',
                ],  
                [
                   'name' => 'French Southern Territories',
                   'dial_code' => '',
                ],  
                [
                   'name' => 'Gabon',
                   'dial_code' => '',
                ],  
                [
                   'name' => 'Gambia',
                   'dial_code' => '',
                ], 
                [
                   'name' => 'Georgia',
                   'dial_code' => '',
                ], 
                [
                   'name' => 'Germany',
                   'dial_code' => '',
                ], 
                [
                   'name' => 'Ghana',
                   'dial_code' => '',
                ], 
                [
                   'name' => 'Gibraltar',
                   'dial_code' => '',
                ], 
                [
                   'name' => 'Greece',
                   'dial_code' => '',
                ], 
                [
                   'name' => 'Greenland',
                   'dial_code' => '',
                ],
                [
                   'name' => 'Grenada',
                   'dial_code' => '',
                ], 
                [
                   'name' => 'Guadeloupe',
                   'dial_code' => '',
                ], 
                [
                   'name' => 'Guam',
                   'dial_code' => '',
                ], 
                [
                   'name' => 'Guatemala',
                   'dial_code' => '',
                ], 
                [
                   'name' => 'Guernsey',
                   'dial_code' => '',
                ], 
                [
                   'name' => 'Guinea',
                   'dial_code' => '',
                ], 
                [
                   'name' => 'Guinea-Bissau',
                   'dial_code' => '',
                ], 
                [
                   'name' => 'Guyana',
                   'dial_code' => '',
                ], 
                [
                   'name' => 'Haiti',
                   'dial_code' => '',
                ], 
                [
                   'name' => 'Heard Island & Mcdonald Islands',
                   'dial_code' => '',
                ],   
                [
                   'name' => 'Holy See (Vatican City State)',
                   'dial_code' => '',
                ], 
                [
                   'name' => 'Honduras',
                   'dial_code' => '',
                ],
                [
                   'name' => 'Hong Kong',
                   'dial_code' => '',
                ],
                [
                   'name' => 'Hungary',
                   'dial_code' => '',
                ], 
                [
                   'name' => 'Iceland',
                   'dial_code' => '',
                ], 
                [
                   'name' => 'India',
                   'dial_code' => '',
                ], 
                [
                   'name' => 'Indonesia',
                   'dial_code' => '',
                ],
                [
                   'name' => 'Iran, Islamic Republic Of',
                   'dial_code' => '',
                ],
                [
                   'name' => 'Iraq',
                   'dial_code' => '',
                ],
                [
                   'name' => 'Ireland',
                   'dial_code' => '',
                ],   
                [
                   'name' => 'Isle Of Man',
                   'dial_code' => '',
                ],
                [
                   'name' => 'Israel',
                   'dial_code' => '',
                ],
                [
                   'name' => 'Italy',
                   'dial_code' => '',
                ],
                [
                   'name' => 'Jamaica',
                   'dial_code' => '',
                ],
                [
                   'name' => 'Japan',
                   'dial_code' => '',
                ],
                [
                   'name' => 'Jersey',
                   'dial_code' => '',
                ],
                [
                   'name' => 'Jordan',
                   'dial_code' => '',
                ],
                [
                   'name' => 'Kazakhstan',
                   'dial_code' => '',
                ],
                [
                   'name' => 'Kenya',
                   'dial_code' => '',
                ],
                [
                   'name' => 'Kiribati',
                   'dial_code' => '',
                ],
                [
                   'name' => 'Korea',
                   'dial_code' => '',
                ],
                [
                   'name' => 'Kuwait',
                   'dial_code' => '',
                ],
                [
                   'name' => 'Kyrgyzstan',
                   'dial_code' => '',
                ],
                [
                   'name' => 'Lao People\'s Democratic Republic',
                   'dial_code' => '',
                ],
                [
                   'name' => 'Latvia',
                   'dial_code' => '',
                ],
                [
                   'name' => 'Lesotho',
                   'dial_code' => '',
                ],
                [
                   'name' => 'Liberia',
                   'dial_code' => '',
                ],
                [
                   'name' => 'Libyan Arab Jamahiriya',
                   'dial_code' => '',
                ],
                [
                   'name' => 'Liechtenstein',
                   'dial_code' => '',
                ],
                [
                   'name' => 'Lithuania',
                   'dial_code' => '',
                ],
                [
                   'name' => 'Luxembourg',
                   'dial_code' => '',
                ],
                [
                   'name' => 'Macao',
                   'dial_code' => '',
                ],
                [
                   'name' => 'Macedonia',
                   'dial_code' => '',
                ],
                [
                   'name' => 'Madagascar',
                   'dial_code' => '',
                ],
                [
                   'name' => 'Malawi',
                   'dial_code' => '',
                ],
                [
                   'name' => 'Malaysia',
                   'dial_code' => '',
                ],
                [
                   'name' => 'Maldives',
                   'dial_code' => '',
                ],
                [
                   'name' => 'Mali',
                   'dial_code' => '',
                ],
                [
                   'name' => 'Malta',
                   'dial_code' => '',
                ],
                [
                   'name' => 'Marshall Islands',
                   'dial_code' => '',
                ],
                [
                   'name' => 'Martinique',
                   'dial_code' => '',
                ],
                [
                   'name' => 'Mauritania',
                   'dial_code' => '',
                ],
                [
                   'name' => 'Mauritius',
                   'dial_code' => '',
                ],
                [
                   'name' => 'Mayotte',
                   'dial_code' => '',
                ],
                [
                   'name' => 'Mexico',
                   'dial_code' => '',
                ],
                [
                   'name' => 'Micronesia, Federated States Of',
                   'dial_code' => '',
                ],
                [
                   'name' => 'Moldova',
                   'dial_code' => '',
                ],
                [
                   'name' => 'Monaco',
                   'dial_code' => '',
                ],
                [
                   'name' => 'Mongolia',
                   'dial_code' => '',
                ],
                [
                   'name' => 'Montenegro',
                   'dial_code' => '',
                ],
                [
                   'name' => 'Montserrat',
                   'dial_code' => '',
                ],
                [
                   'name' => 'Morocco',
                   'dial_code' => '',
                ],
                [
                   'name' => 'Mozambique',
                   'dial_code' => '',
                ],
                [
                   'name' => 'Myanmar',
                   'dial_code' => '',
                ],
                [
                   'name' => 'Namibia',
                   'dial_code' => '',
                ],
                [
                   'name' => 'Nauru',
                   'dial_code' => '',
                ],
                [
                   'name' => 'Nepal',
                   'dial_code' => '',
                ],
                [
                   'name' => 'Netherlands',
                   'dial_code' => '',
                ],
                [
                   'name' => 'Netherlands Antilles',
                   'dial_code' => '',
                ],
                [
                   'name' => 'New Caledonia',
                   'dial_code' => '',
                ],
                [
                   'name' => 'New Zealand',
                   'dial_code' => '',
                ],
                [
                   'name' => 'Nicaragua',
                   'dial_code' => '',
                ],
                [
                   'name' => 'Niger',
                   'dial_code' => '',
                ],
                [
                   'name' => 'Nigeria',
                   'dial_code' => '',
                ],
                [
                   'name' => 'Niue',
                   'dial_code' => '',
                ],
                [
                   'name' => 'Norfolk Island',
                   'dial_code' => '',
                ],
                [
                   'name' => 'Northern Mariana Islands',
                   'dial_code' => '',
                ],
                [
                   'name' => 'Norway',
                   'dial_code' => '',
                ],
                [
                   'name' => 'Oman',
                   'dial_code' => '',
                ],
                [
                   'name' => 'Pakistan',
                   'dial_code' => '',
                ],
                [
                   'name' => 'Panama',
                   'dial_code' => '',
                ],
                [
                   'name' => 'Palau',
                   'dial_code' => '',
                ],
                [
                   'name' => 'Palestinian Territory, Occupied',
                   'dial_code' => '',
                ],
                [
                   'name' => 'Papua New Guinea',
                   'dial_code' => '',
                ],
                [
                   'name' => 'Paraguay',
                   'dial_code' => '',
                ],
                [
                   'name' => 'Peru',
                   'dial_code' => '',
                ],
                [
                   'name' => 'Philippines',
                   'dial_code' => '',
                ],
                [
                   'name' => 'Pitcairn',
                   'dial_code' => '',
                ],
                [
                   'name' => 'Poland',
                   'dial_code' => '',
                ],
                [
                   'name' => 'Portugal',
                   'dial_code' => '',
                ],
                [
                   'name' => 'Puerto Rico',
                   'dial_code' => '',
                ],
                [
                   'name' => 'Qatar',
                   'dial_code' => '',
                ],
                [
                   'name' => 'Reunion',
                   'dial_code' => '',
                ],
                [
                   'name' => 'Romania',
                   'dial_code' => '',
                ],
                [
                   'name' => 'Russian Federation',
                   'dial_code' => '',
                ],
                [
                   'name' => 'Rwanda',
                   'dial_code' => '',
                ],
                [
                   'name' => 'Saint Barthelemy',
                   'dial_code' => '',
                ],
                [
                   'name' => 'Saint Helena',
                   'dial_code' => '',
                ],
                [
                   'name' => 'Saint Kitts And Nevis',
                   'dial_code' => '',
                ],
                [
                   'name' => 'Saint Lucia',
                   'dial_code' => '',
                ],
                [
                   'name' => 'Saint Martin',
                   'dial_code' => '',
                ],
                [
                   'name' => 'Saint Pierre And Miquelon',
                   'dial_code' => '',
                ],
                [
                   'name' => 'Saint Vincent And Grenadines',
                   'dial_code' => '',
                ],
                [
                   'name' => 'Samoa',
                   'dial_code' => '',
                ],
                [
                   'name' => 'San Marino',
                   'dial_code' => '',
                ],
                [
                   'name' => 'Sao Tome And Principe',
                   'dial_code' => '',
                ],
                [
                   'name' => 'Saudi Arabia',
                   'dial_code' => '',
                ],
                [
                   'name' => 'Senegal',
                   'dial_code' => '',
                ],
                [
                   'name' => 'Serbia',
                   'dial_code' => '',
                ],
                [
                   'name' => 'Seychelles',
                   'dial_code' => '',
                ],
                [
                   'name' => 'Sierra Leone',
                   'dial_code' => '',
                ],
                [
                   'name' => 'Singapore',
                   'dial_code' => '',
                ],
                [
                   'name' => 'Slovakia',
                   'dial_code' => '',
                ],
                [
                   'name' => 'Slovenia',
                   'dial_code' => '',
                ],
                [
                   'name' => 'Solomon Islands',
                   'dial_code' => '',
                ],
                [
                   'name' => 'Somalia',
                   'dial_code' => '',
                ],
                [
                   'name' => 'South Africa',
                   'dial_code' => '',
                ],
                [
                   'name' => 'South Georgia And Sandwich Isl.',
                   'dial_code' => '',
                ],
                [
                   'name' => 'Spain',
                   'dial_code' => '',
                ],
                [
                   'name' => 'Sri Lanka',
                   'dial_code' => '',
                ],
                [
                   'name' => 'Sudan',
                   'dial_code' => '',
                ],
                [
                   'name' => 'Suriname',
                   'dial_code' => '',
                ],
                [
                   'name' => 'Svalbard And Jan Mayen',
                   'dial_code' => '',
                ],
                [
                   'name' => 'Swaziland',
                   'dial_code' => '',
                ],
                [
                   'name' => 'Sweden',
                   'dial_code' => '',
                ],
                [
                   'name' => 'Switzerland',
                   'dial_code' => '',
                ],
                [
                   'name' => 'Syrian Arab Republic',
                   'dial_code' => '',
                ],
                [
                   'name' => 'Taiwan',
                   'dial_code' => '',
                ],
                [
                   'name' => 'Tajikistan',
                   'dial_code' => '',
                ],
                [
                   'name' => 'Tanzania',
                   'dial_code' => '',
                ],
                [
                   'name' => 'Thailand',
                   'dial_code' => '',
                ],
                [
                   'name' => 'Timor-Leste',
                   'dial_code' => '',
                ],
                [
                   'name' => 'Togo',
                   'dial_code' => '',
                ],
                [
                   'name' => 'Tokelau',
                   'dial_code' => '',
                ],
                [
                   'name' => 'Tonga',
                   'dial_code' => '',
                ],
                [
                   'name' => 'Trinidad And Tobago',
                   'dial_code' => '',
                ],
                [
                   'name' => 'Tunisia',
                   'dial_code' => '',
                ],
                [
                   'name' => 'Turkey',
                   'dial_code' => '',
                ],
                [
                   'name' => 'Turkmenistan',
                   'dial_code' => '',
                ],
                [
                   'name' => 'Turks And Caicos Islands',
                   'dial_code' => '',
                ],
                [
                   'name' => 'Tuvalu',
                   'dial_code' => '',
                ],
                [
                   'name' => 'Uganda',
                   'dial_code' => '',
                ],
                [
                   'name' => 'Ukraine',
                   'dial_code' => '',
                ],
                [
                   'name' => 'United Arab Emirates',
                   'dial_code' => '',
                ],
                [
                   'name' => 'United Kingdom',
                   'dial_code' => '',
                ],
                [
                   'name' => 'United States',
                   'dial_code' => '',
                ],
                [
                   'name' => 'United States Outlying Islands',
                   'dial_code' => '',
                ],
                [
                   'name' => 'Uruguay',
                   'dial_code' => '',
                ],
                [
                   'name' => 'Uzbekistan',
                   'dial_code' => '',
                ],
                [
                   'name' => 'Vanuatu',
                   'dial_code' => '',
                ],
                [
                   'name' => 'Venezuela',
                   'dial_code' => '',
                ],
                [
                   'name' => 'Vietnam',
                   'dial_code' => '',
                ],
                [
                   'name' => 'Virgin Islands, British',
                   'dial_code' => '',
                ],
                [
                   'name' => 'Virgin Islands, U.S.',
                   'dial_code' => '',
                ],
                [
                   'name' => 'Wallis And Futuna',
                   'dial_code' => '',
                ],
                [
                   'name' => 'Western Sahara',
                   'dial_code' => '',
                ],
                [
                   'name' => 'Yemen',
                   'dial_code' => '',
                ],
                [
                   'name' => 'Zambia',
                   'dial_code' => '',
                ],
                [
                   'name' => 'Zimbabwe',
                   'dial_code' => '',
                ]



            ]);

        } else { echo "\e[31mTable is not empty, therefore NOT "; }
    }
}
