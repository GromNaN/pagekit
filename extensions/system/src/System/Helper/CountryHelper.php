<?php

namespace Pagekit\System\Helper;

class CountryHelper
{
    /**
     * string[]
     */
    protected $countries;

    /**
     * Get an array of country code => country name pairs.
     *
     * @return string[]
     */
    public static function getStandardList()
    {
        $countries = [
            'AC' => __('Ascension Island'),
            'AD' => __('Andorra'),
            'AE' => __('United Arab Emirates'),
            'AF' => __('Afghanistan'),
            'AG' => __('Antigua and Barbuda'),
            'AI' => __('Anguilla'),
            'AL' => __('Albania'),
            'AM' => __('Armenia'),
            'AN' => __('Netherlands Antilles'),
            'AO' => __('Angola'),
            'AQ' => __('Antarctica'),
            'AR' => __('Argentina'),
            'AS' => __('American Samoa'),
            'AT' => __('Austria'),
            'AU' => __('Australia'),
            'AW' => __('Aruba'),
            'AX' => __('Åland Islands'),
            'AZ' => __('Azerbaijan'),
            'BA' => __('Bosnia and Herzegovina'),
            'BB' => __('Barbados'),
            'BD' => __('Bangladesh'),
            'BE' => __('Belgium'),
            'BF' => __('Burkina Faso'),
            'BG' => __('Bulgaria'),
            'BH' => __('Bahrain'),
            'BI' => __('Burundi'),
            'BJ' => __('Benin'),
            'BL' => __('Saint Barthélemy'),
            'BM' => __('Bermuda'),
            'BN' => __('Brunei'),
            'BO' => __('Bolivia'),
            'BQ' => __('Caribbean Netherlands'),
            'BR' => __('Brazil'),
            'BS' => __('Bahamas'),
            'BT' => __('Bhutan'),
            'BV' => __('Bouvet Island'),
            'BW' => __('Botswana'),
            'BY' => __('Belarus'),
            'BZ' => __('Belize'),
            'CA' => __('Canada'),
            'CC' => __('Cocos [Keeling] Islands'),
            'CD' => __('Congo - Kinshasa'),
            'CF' => __('Central African Republic'),
            'CG' => __('Congo - Brazzaville'),
            'CH' => __('Switzerland'),
            'CI' => __('Côte d’Ivoire'),
            'CK' => __('Cook Islands'),
            'CL' => __('Chile'),
            'CM' => __('Cameroon'),
            'CN' => __('China'),
            'CO' => __('Colombia'),
            'CP' => __('Clipperton Island'),
            'CR' => __('Costa Rica'),
            'CU' => __('Cuba'),
            'CV' => __('Cape Verde'),
            'CW' => __('Curaçao'),
            'CX' => __('Christmas Island'),
            'CY' => __('Cyprus'),
            'CZ' => __('Czech Republic'),
            'DE' => __('Germany'),
            'DG' => __('Diego Garcia'),
            'DJ' => __('Djibouti'),
            'DK' => __('Denmark'),
            'DM' => __('Dominica'),
            'DO' => __('Dominican Republic'),
            'DZ' => __('Algeria'),
            'EA' => __('Ceuta and Melilla'),
            'EC' => __('Ecuador'),
            'EE' => __('Estonia'),
            'EG' => __('Egypt'),
            'EH' => __('Western Sahara'),
            'ER' => __('Eritrea'),
            'ES' => __('Spain'),
            'ET' => __('Ethiopia'),
            'FI' => __('Finland'),
            'FJ' => __('Fiji'),
            'FK' => __('Falkland Islands'),
            'FM' => __('Micronesia'),
            'FO' => __('Faroe Islands'),
            'FR' => __('France'),
            'GA' => __('Gabon'),
            'GB' => __('United Kingdom'),
            'GD' => __('Grenada'),
            'GE' => __('Georgia'),
            'GF' => __('French Guiana'),
            'GG' => __('Guernsey'),
            'GH' => __('Ghana'),
            'GI' => __('Gibraltar'),
            'GL' => __('Greenland'),
            'GM' => __('Gambia'),
            'GN' => __('Guinea'),
            'GP' => __('Guadeloupe'),
            'GQ' => __('Equatorial Guinea'),
            'GR' => __('Greece'),
            'GS' => __('South Georgia and the South Sandwich Islands'),
            'GT' => __('Guatemala'),
            'GU' => __('Guam'),
            'GW' => __('Guinea-Bissau'),
            'GY' => __('Guyana'),
            'HK' => __('Hong Kong SAR China'),
            'HM' => __('Heard Island and McDonald Islands'),
            'HN' => __('Honduras'),
            'HR' => __('Croatia'),
            'HT' => __('Haiti'),
            'HU' => __('Hungary'),
            'IC' => __('Canary Islands'),
            'ID' => __('Indonesia'),
            'IE' => __('Ireland'),
            'IL' => __('Israel'),
            'IM' => __('Isle of Man'),
            'IN' => __('India'),
            'IO' => __('British Indian Ocean Territory'),
            'IQ' => __('Iraq'),
            'IR' => __('Iran'),
            'IS' => __('Iceland'),
            'IT' => __('Italy'),
            'JE' => __('Jersey'),
            'JM' => __('Jamaica'),
            'JO' => __('Jordan'),
            'JP' => __('Japan'),
            'KE' => __('Kenya'),
            'KG' => __('Kyrgyzstan'),
            'KH' => __('Cambodia'),
            'KI' => __('Kiribati'),
            'KM' => __('Comoros'),
            'KN' => __('Saint Kitts and Nevis'),
            'KP' => __('North Korea'),
            'KR' => __('South Korea'),
            'KW' => __('Kuwait'),
            'KY' => __('Cayman Islands'),
            'KZ' => __('Kazakhstan'),
            'LA' => __('Laos'),
            'LB' => __('Lebanon'),
            'LC' => __('Saint Lucia'),
            'LI' => __('Liechtenstein'),
            'LK' => __('Sri Lanka'),
            'LR' => __('Liberia'),
            'LS' => __('Lesotho'),
            'LT' => __('Lithuania'),
            'LU' => __('Luxembourg'),
            'LV' => __('Latvia'),
            'LY' => __('Libya'),
            'MA' => __('Morocco'),
            'MC' => __('Monaco'),
            'MD' => __('Moldova'),
            'ME' => __('Montenegro'),
            'MF' => __('Saint Martin'),
            'MG' => __('Madagascar'),
            'MH' => __('Marshall Islands'),
            'MK' => __('Macedonia'),
            'ML' => __('Mali'),
            'MM' => __('Myanmar [Burma]'),
            'MN' => __('Mongolia'),
            'MO' => __('Macau SAR China'),
            'MP' => __('Northern Mariana Islands'),
            'MQ' => __('Martinique'),
            'MR' => __('Mauritania'),
            'MS' => __('Montserrat'),
            'MT' => __('Malta'),
            'MU' => __('Mauritius'),
            'MV' => __('Maldives'),
            'MW' => __('Malawi'),
            'MX' => __('Mexico'),
            'MY' => __('Malaysia'),
            'MZ' => __('Mozambique'),
            'NA' => __('Namibia'),
            'NC' => __('New Caledonia'),
            'NE' => __('Niger'),
            'NF' => __('Norfolk Island'),
            'NG' => __('Nigeria'),
            'NI' => __('Nicaragua'),
            'NL' => __('Netherlands'),
            'NO' => __('Norway'),
            'NP' => __('Nepal'),
            'NR' => __('Nauru'),
            'NU' => __('Niue'),
            'NZ' => __('New Zealand'),
            'OM' => __('Oman'),
            'PA' => __('Panama'),
            'PE' => __('Peru'),
            'PF' => __('French Polynesia'),
            'PG' => __('Papua New Guinea'),
            'PH' => __('Philippines'),
            'PK' => __('Pakistan'),
            'PL' => __('Poland'),
            'PM' => __('Saint Pierre and Miquelon'),
            'PN' => __('Pitcairn Islands'),
            'PR' => __('Puerto Rico'),
            'PS' => __('Palestinian Territories'),
            'PT' => __('Portugal'),
            'PW' => __('Palau'),
            'PY' => __('Paraguay'),
            'QA' => __('Qatar'),
            'QO' => __('Outlying Oceania'),
            'RE' => __('Réunion'),
            'RO' => __('Romania'),
            'RS' => __('Serbia'),
            'RU' => __('Russia'),
            'RW' => __('Rwanda'),
            'SA' => __('Saudi Arabia'),
            'SB' => __('Solomon Islands'),
            'SC' => __('Seychelles'),
            'SD' => __('Sudan'),
            'SE' => __('Sweden'),
            'SG' => __('Singapore'),
            'SH' => __('Saint Helena'),
            'SI' => __('Slovenia'),
            'SJ' => __('Svalbard and Jan Mayen'),
            'SK' => __('Slovakia'),
            'SL' => __('Sierra Leone'),
            'SM' => __('San Marino'),
            'SN' => __('Senegal'),
            'SO' => __('Somalia'),
            'SR' => __('Suriname'),
            'SS' => __('South Sudan'),
            'ST' => __('São Tomé and Príncipe'),
            'SV' => __('El Salvador'),
            'SX' => __('Sint Maarten'),
            'SY' => __('Syria'),
            'SZ' => __('Swaziland'),
            'TA' => __('Tristan da Cunha'),
            'TC' => __('Turks and Caicos Islands'),
            'TD' => __('Chad'),
            'TF' => __('French Southern Territories'),
            'TG' => __('Togo'),
            'TH' => __('Thailand'),
            'TJ' => __('Tajikistan'),
            'TK' => __('Tokelau'),
            'TL' => __('Timor-Leste'),
            'TM' => __('Turkmenistan'),
            'TN' => __('Tunisia'),
            'TO' => __('Tonga'),
            'TR' => __('Turkey'),
            'TT' => __('Trinidad and Tobago'),
            'TV' => __('Tuvalu'),
            'TW' => __('Taiwan'),
            'TZ' => __('Tanzania'),
            'UA' => __('Ukraine'),
            'UG' => __('Uganda'),
            'UM' => __('U.S. Outlying Islands'),
            'US' => __('United States'),
            'UY' => __('Uruguay'),
            'UZ' => __('Uzbekistan'),
            'VA' => __('Vatican City'),
            'VC' => __('Saint Vincent and the Grenadines'),
            'VE' => __('Venezuela'),
            'VG' => __('British Virgin Islands'),
            'VI' => __('U.S. Virgin Islands'),
            'VN' => __('Vietnam'),
            'VU' => __('Vanuatu'),
            'WF' => __('Wallis and Futuna'),
            'WS' => __('Samoa'),
            'XK' => __('Kosovo'),
            'YE' => __('Yemen'),
            'YT' => __('Mayotte'),
            'ZA' => __('South Africa'),
            'ZM' => __('Zambia'),
            'ZW' => __('Zimbabwe'),
        ];

        // Sort the list.
        natcasesort($countries);

        return $countries;
    }

    /**
     * Returns a list of country code => country name pairs.
     *
     * @return array
     */
    public function getList()
    {
        if (!isset($this->countries)) {
            $this->countries = static::getStandardList();
        }

        return $this->countries;
    }

    /**
     * Converts isocode2 to country name
     *
     * @param string $isoCode
     * @return string
     */
	public function isoToName($isoCode)
    {
        $this->getList();
		return array_key_exists($isoCode, $this->countries) ? $this->countries[$isoCode] : false;
	}
}