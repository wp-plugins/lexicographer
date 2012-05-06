<?php

/*******************************************************************************

    File: lib.php
    Copyright (C) 2009-2012 Kilian Evang

    This file is part of Lexicographer.

    Lexicographer is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    Lexicographer is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with Lexicographer; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA

*******************************************************************************/

/*==============================================================================
    Data
==============================================================================*/

function lexicographer_presentation_table() {
    static $result;

    if (!isset($result)) {
        $result = array(
                'Ä' => 'Ae',
                'ä' => 'ae',
                'Ö' => 'Oe',
                'ö' => 'oe',
                'Ü' => 'Ue',
                'ü' => 'ue');
    }

    return $result;
}

function lexicographer_sort_table() {
    static $result;

    if (!isset($result)) {
        $result = array(
                // Latin-1 Supplement
                'À' => 'A',
                'Á' => 'A',
                'Â' => 'A',
                'Ã' => 'A',
                'Ä' => 'A',
                'Å' => 'A',
                'Æ' => 'AE',
                'Ç' => 'C',
                'È' => 'E',
                'É' => 'E',
                'Ê' => 'E',
                'Ë' => 'E',
                'Ì' => 'I',
                'Í' => 'I',
                'Î' => 'I',
                'Ï' => 'I',
                'Ð' => 'Dh', // usage-oriented transliteration
                'Ñ' => 'N',
                'Ò' => 'O',
                'Ó' => 'O',
                'Ô' => 'O',
                'Õ' => 'O',
                'Ö' => 'O',
                'Ø' => 'O',
                'Ù' => 'U',
                'Ú' => 'U',
                'Û' => 'U',
                'Ü' => 'U',
                'Ý' => 'Y',
                'Þ' => 'Th', // usage-oriented transliteration
                'ß' => 'ss', // usage-oriented transliteration
                'à' => 'a',
                'á' => 'a',
                'â' => 'a',
                'ã' => 'a',
                'ä' => 'a',
                'å' => 'a',
                'æ' => 'ae',
                'ç' => 'c',
                'è' => 'e',
                'é' => 'e',
                'ê' => 'e',
                'ë' => 'e',
                'ì' => 'i',
                'í' => 'i',
                'î' => 'i',
                'ï' => 'i',
                'ð' => 'dh', // usage-oriented transliteration
                'ñ' => 'n',
                'ò' => 'o',
                'ó' => 'o',
                'ô' => 'o',
                'õ' => 'o',
                'ö' => 'o',
                'ø' => 'o',
                'ù' => 'u',
                'ú' => 'u',
                'û' => 'u',
                'ü' => 'u',
                'ý' => 'y',
                'þ' => 'th', // usage-oriented transliteration
                'ÿ' => 'y',
                // Latin Extended-A
                'Ā' => 'A',
                'ā' => 'a',
                'Ă' => 'A',
                'ă' => 'a',
                'Ą' => 'A',
                'ą' => 'a',
                'Ć' => 'C',
                'ć' => 'c',
                'Ĉ' => 'C',
                'ĉ' => 'c',
                'Ċ' => 'C',
                'ċ' => 'c',
                'Č' => 'C',
                'č' => 'c',
                'Ď' => 'D',
                'ď' => 'd',
                'Đ' => 'D',
                'đ' => 'd',
                'Ē' => 'E',
                'ē' => 'e',
                'Ĕ' => 'E',
                'ĕ' => 'e',
                'Ė' => 'E',
                'ė' => 'e',
                'Ę' => 'E',
                'ę' => 'e',
                'Ě' => 'E',
                'ě' => 'e',
                'Ĝ' => 'G',
                'ĝ' => 'g',
                'Ğ' => 'G',
                'ğ' => 'g',
                'Ġ' => 'G',
                'ġ' => 'g',
                'Ģ' => 'G',
                'ģ' => 'g',
                'Ĥ' => 'H',
                'ĥ' => 'h',
                'Ħ' => 'H',
                'ħ' => 'h',
                'Ĩ' => 'I',
                'ĩ' => 'i',
                'Ī' => 'I',
                'ī' => 'i',
                'Ĭ' => 'I',
                'ĭ' => 'i',
                'Į' => 'I',
                'į' => 'i',
                'İ' => 'I',
                'ı' => 'i',
                'Ĳ' => 'IJ',
                'ĳ' => 'ij',
                'Ĵ' => 'j',
                'ĵ' => 'j',
                'Ķ' => 'K',
                'ķ' => 'k',
                'ĸ' => 'k',
                'Ĺ' => 'L',
                'ĺ' => 'l',
                'Ļ' => 'L',
                'ļ' => 'l',
                'Ľ' => 'L',
                'ľ' => 'l',
                'Ŀ' => 'L',
                'ŀ' => 'l',
                'Ł' => 'L',
                'ł' => 'l',
                'Ń' => 'N',
                'ń' => 'n',
                'Ņ' => 'N',
                'ņ' => 'n',
                'Ň' => 'N',
                'ň' => 'n',
                'ŉ' => 'n',
                'Ŋ' => 'NG',
                'ŋ' => 'ng',
                'Ō' => 'O',
                'ō' => 'o',
                'Ŏ' => 'O',
                'ŏ' => 'o',
                'Ő' => 'O',
                'ő' => 'o',
                'Œ' => 'OE',
                'œ' => 'oe',
                'Ŕ' => 'R',
                'ŕ' => 'r',
                'Ŗ' => 'R',
                'ŗ' => 'r',
                'Ř' => 'R',
                'ř' => 'r',
                'Ś' => 'S',
                'ś' => 's',
                'Ŝ' => 'S',
                'ŝ' => 's',
                'Ş' => 'S',
                'ş' => 's',
                'Š' => 'S',
                'š' => 's',
                'Ţ' => 'T',
                'ţ' => 't',
                'Ť' => 'T',
                'ť' => 't',
                'Ŧ' => 'T',
                'ŧ' => 't',
                'Ũ' => 'U',
                'ũ' => 'u',
                'Ū' => 'U',
                'ū' => 'u',
                'Ŭ' => 'U',
                'ŭ' => 'u',
                'Ů' => 'U',
                'ů' => 'u',
                'Ű' => 'U',
                'ű' => 'u',
                'Ų' => 'U',
                'ų' => 'u',
                'Ŵ' => 'W',
                'ŵ' => 'w',
                'Ŷ' => 'Y',
                'ŷ' => 'y',
                'Ÿ' => 'Y',
                'Ź' => 'Z',
                'ź' => 'z',
                'Ż' => 'Z',
                'ż' => 'z',
                'Ž' => 'Z',
                'ž' => 'z',
                'ſ' => 's',
                // Latin Extended-B
                'ƀ' => 'b',
                'Ɓ' => 'B',
                'Ƃ' => 'B',
                'ƃ' => 'b',
                'Ƅ' => '6',
                'ƅ' => '6',
                'Ɔ' => 'O',
                'Ƈ' => 'C',
                'ƈ' => 'c',
                'Ɖ' => 'D',
                'Ɗ' => 'D',
                'Ƌ' => 'D',
                'ƌ' => 'd',
                'ƍ' => 'd', // usage-oriented transliteration
                'Ǝ' => 'E',
                'Ə' => 'E',
                'Ɛ' => 'E',
                'Ƒ' => 'F',
                'ƒ' => 'f',
                'Ɠ' => 'G',
                'Ɣ' => 'G', // usage-oriented transliteration
                'ƕ' => 'hv',
                'Ɩ' => 'I',
                'Ɨ' => 'I',
                'Ƙ' => 'K',
                'ƙ' => 'k',
                'ƚ' => 'l',
                'ƛ' => 'l', // usage-oriented transliteration
                'Ɯ' => 'M',
                'Ɲ' => 'N',
                'ƞ' => 'n',
                'Ɵ' => 'O',
                'Ơ' => 'O',
                'ơ' => 'o',
                'Ƣ' => 'OI',
                'ƣ' => 'oi',
                'Ƥ' => 'P',
                'ƥ' => 'p',
                'Ʀ' => 'R',
                'Ƨ' => '2', // usage-oriented transliteration
                'ƨ' => '2', // usage-oriented transliteration
                'Ʃ' => 'S', // usage-oriented transliteration
                'ƪ' => 's', // usage-oriented transliteration
                'ƫ' => 't',
                'Ƭ' => 'T',
                'ƭ' => 't',
                'Ʈ' => 'T',
                'Ư' => 'U',
                'ư' => 'u',
                'Ʊ' => 'U',
                'Ʋ' => 'V',
                'Ƴ' => 'Y',
                'ƴ' => 'y',
                'Ƶ' => 'Z',
                'ƶ' => 'z',
                'Ʒ' => 'Z',
                'Ƹ' => 'Z',
                'ƹ' => 'z',
                'ƺ' => 'z',
                'ƻ' => '2',
                'Ƽ' => '5',
                'ƽ' => '5',
                //'ƾ' => '',
                //'ƿ' => '',
                //'ǀ' => '',
                //'ǁ' => '',
                //'ǂ' => '',
                //'ǃ' => '',
                'Ǆ' => 'DZ',
                'ǅ' => 'Dz',
                'ǆ' => 'dz',
                'Ǉ' => 'LJ',
                'ǈ' => 'Lj',
                'ǉ' => 'lj',
                'Ǌ' => 'NJ',
                'ǋ' => 'Nj',
                'ǌ' => 'nj',
                'Ǎ' => 'A',
                'ǎ' => 'a',
                'Ǐ' => 'I',
                'ǐ' => 'i',
                'Ǒ' => 'O',
                'ǒ' => 'o',
                'Ǔ' => 'U',
                'ǔ' => 'u',
                'Ǖ' => 'U',
                'ǖ' => 'u',
                'Ǘ' => 'U',
                'ǘ' => 'u',
                'Ǚ' => 'U',
                'ǚ' => 'u',
                'Ǜ' => 'U',
                'ǜ' => 'u',
                'ǝ' => 'e', // usage-oriented transliteration
                'Ǟ' => 'A',
                'ǟ' => 'a',
                'Ǡ' => 'A',
                'ǡ' => 'a',
                'Ǣ' => 'AE',
                'ǣ' => 'ae',
                'Ǥ' => 'G',
                'ǥ' => 'g',
                'Ǧ' => 'G',
                'ǧ' => 'G',
                'Ǩ' => 'K',
                'ǩ' => 'k',
                'Ǫ' => 'O',
                'ǫ' => 'o',
                'Ǭ' => 'O',
                'ǭ' => 'o',
                'Ǯ' => 'Z',
                'ǯ' => 'z',
                'ǰ' => 'j',
                'Ǳ' => 'DZ',
                'ǲ' => 'Dz',
                'ǳ' => 'dz',
                'Ǵ' => 'G',
                'ǵ' => 'g',
                'Ƕ' => 'Hv',
                //'Ƿ' => '',
                'Ǹ' => 'N',
                'ǹ' => 'n',
                'Ǻ' => 'A',
                'ǻ' => 'a',
                'Ǽ' => 'AE',
                'ǽ' => 'ae',
                'Ǿ' => 'O',
                'ǿ' => 'o',
                'Ȁ' => 'A',
                'ȁ' => 'a',
                'Ȃ' => 'A',
                'ȃ' => 'a',
                'Ȅ' => 'E',
                'ȅ' => 'e',
                'Ȇ' => 'E',
                'ȇ' => 'e',
                'Ȉ' => 'I',
                'ȉ' => 'i',
                'Ȋ' => 'I',
                'ȋ' => 'i',
                'Ȍ' => 'O',
                'ȍ' => 'o',
                'Ȏ' => 'O',
                'ȏ' => 'o',
                'Ȑ' => 'R',
                'ȑ' => 'r',
                'Ȓ' => 'R',
                'ȓ' => 'r',
                'Ȕ' => 'U',
                'ȕ' => 'u',
                'Ȗ' => 'U',
                'ȗ' => 'u',
                'Ș' => 'S',
                'ș' => 's',
                'Ț' => 'T',
                'ț' => 't',
                'Ȝ' => 'G',
                'ȝ' => 'g',
                'Ȟ' => 'H',
                'ȟ' => 'h',
                'Ƞ' => 'N',
                'ȡ' => 'd',
                'Ȣ' => 'Ou', // usage-oriented transliteration
                'ȣ' => 'ou', // usage-oriented transliteration
                'Ȥ' => 'Z',
                'ȥ' => 'z',
                'Ȧ' => 'A',
                'ȧ' => 'a',
                'Ȩ' => 'E',
                'ȩ' => 'e',
                'Ȫ' => 'O',
                'ȫ' => 'o',
                'Ȭ' => 'O',
                'ȭ' => 'o',
                'Ȯ' => 'O',
                'ȯ' => 'o',
                'Ȱ' => 'O',
                'ȱ' => 'o',
                'Ȳ' => 'Y',
                'ȳ' => 'y',
                'ȴ' => 'l',
                'ȵ' => 'n',
                'ȶ' => 't',
                'ȷ' => 'j',
                'ȸ' => 'db',
                'ȹ' => 'qp',
                'Ⱥ' => 'A',
                'Ȼ' => 'C',
                'ȼ' => 'c',
                'Ƚ' => 'L',
                'Ⱦ' => 'T',
                'ȿ' => 's',
                'ɀ' => 'z',
                //'Ɂ' => '',
                //'ɂ' => '',
                'Ƀ' => 'B',
                'Ʉ' => 'U',
                'Ʌ' => 'V',
                'Ɇ' => 'E',
                'ɇ' => 'e',
                'Ɉ' => 'J',
                'ɉ' => 'j',
                'Ɋ' => 'Q',
                'ɋ' => 'q',
                'Ɍ' => 'R',
                'ɍ' => 'r',
                'Ɏ' => 'Y',
                'ɏ' => 'y',
                // Latin Extended Additional
                'Ḁ' => 'A',
                'ḁ' => 'a',
                'Ḃ' => 'B',
                'ḃ' => 'b',
                'Ḅ' => 'B',
                'ḅ' => 'b',
                'Ḇ' => 'B',
                'ḇ' => 'b',
                'Ḉ' => 'C',
                'ḉ' => 'c',
                'Ḋ' => 'D',
                'ḋ' => 'd',
                'Ḍ' => 'D',
                'ḍ' => 'd',
                'Ḏ' => 'D',
                'ḏ' => 'd',
                'Ḑ' => 'D',
                'ḑ' => 'd',
                'Ḓ' => 'D',
                'ḓ' => 'd',
                'Ḕ' => 'E',
                'ḕ' => 'e',
                'Ḗ' => 'E',
                'ḗ' => 'e',
                'Ḙ' => 'E',
                'ḙ' => 'e',
                'Ḛ' => 'E',
                'ḛ' => 'e',
                'Ḝ' => 'E',
                'ḝ' => 'e',
                'Ḟ' => 'F',
                'ḟ' => 'f',
                'Ḡ' => 'G',
                'ḡ' => 'g',
                'Ḣ' => 'H',
                'ḣ' => 'h',
                'Ḥ' => 'H',
                'ḥ' => 'h',
                'Ḧ' => 'H',
                'ḧ' => 'h',
                'Ḩ' => 'H',
                'ḩ' => 'h',
                'Ḫ' => 'H',
                'ḫ' => 'h',
                'Ḭ' => 'I',
                'ḭ' => 'i',
                'Ḯ' => 'i',
                'ḯ' => 'i',
                'Ḱ' => 'K',
                'ḱ' => 'k',
                'Ḳ' => 'K',
                'ḳ' => 'k',
                'Ḵ' => 'K',
                'ḵ' => 'k',
                'Ḷ' => 'L',
                'ḷ' => 'l',
                'Ḹ' => 'L',
                'ḹ' => 'l',
                'Ḻ' => 'L',
                'ḻ' => 'l',
                'Ḽ' => 'L',
                'ḽ' => 'l',
                'Ḿ' => 'M',
                'ḿ' => 'm',
                'Ṁ' => 'M',
                'ṁ' => 'm',
                'Ṃ' => 'M',
                'ṃ' => 'm',
                'Ṅ' => 'N',
                'ṅ' => 'n',
                'Ṇ' => 'N',
                'ṇ' => 'n',
                'Ṉ' => 'N',
                'ṉ' => 'n',
                'Ṋ' => 'N',
                'ṋ' => 'n',
                'Ṍ' => 'O',
                'ṍ' => 'o',
                'Ṏ' => 'O',
                'ṏ' => 'o',
                'Ṑ' => 'O',
                'ṑ' => 'o',
                'Ṓ' => 'O',
                'ṓ' => 'o',
                'Ṕ' => 'P',
                'ṕ' => 'p',
                'Ṗ' => 'P',
                'ṗ' => 'p',
                'Ṙ' => 'R',
                'ṙ' => 'r',
                'Ṛ' => 'R',
                'ṛ' => 'r',
                'Ṝ' => 'R',
                'ṝ' => 'r',
                'Ṟ' => 'R',
                'ṟ' => 'r',
                'Ṡ' => 'S',
                'ṡ' => 's',
                'Ṣ' => 'S',
                'ṣ' => 's',
                'Ṥ' => 'S',
                'ṥ' => 's',
                'Ṧ' => 'S',
                'ṧ' => 's',
                'Ṩ' => 'S',
                'ṩ' => 's',
                'Ṫ' => 'T',
                'ṫ' => 't',
                'Ṭ' => 'T',
                'ṭ' => 't',
                'Ṯ' => 'T',
                'ṯ' => 't',
                'Ṱ' => 'T',
                'ṱ' => 't',
                'Ṳ' => 'U',
                'ṳ' => 'u',
                'Ṵ' => 'U',
                'ṵ' => 'u',
                'Ṷ' => 'U',
                'ṷ' => 'u',
                'Ṹ' => 'U',
                'ṹ' => 'u',
                'Ṻ' => 'U',
                'ṻ' => 'u',
                'Ṽ' => 'V',
                'ṽ' => 'v',
                'Ṿ' => 'V',
                'ṿ' => 'v',
                'Ẁ' => 'W',
                'ẁ' => 'w',
                'Ẃ' => 'W',
                'ẃ' => 'w',
                'Ẅ' => 'W',
                'ẅ' => 'w',
                'Ẇ' => 'W',
                'ẇ' => 'w',
                'Ẉ' => 'W',
                'ẉ' => 'w',
                'Ẋ' => 'X',
                'ẋ' => 'x',
                'Ẍ' => 'X',
                'ẍ' => 'x',
                'Ẏ' => 'Y',
                'ẏ' => 'y',
                'Ẑ' => 'Z',
                'ẑ' => 'z',
                'Ẓ' => 'Z',
                'ẓ' => 'z',
                'Ẕ' => 'Z',
                'ẕ' => 'z',
                'ẖ' => 'h',
                'ẗ' => 't',
                'ẘ' => 'w',
                'ẙ' => 'y',
                'ẚ' => 'a',
                'ẛ' => 's',
                'ẜ' => 's',
                'ẝ' => 's',
                'ẞ' => 'SS', // usage-oriented transliteration
                'ẟ' => 'd', // usage-oriented transliteration
                'Ạ' => 'A',
                'ạ' => 'a',
                'Ả' => 'A',
                'ả' => 'a',
                'Ấ' => 'A',
                'ấ' => 'a',
                'Ầ' => 'A',
                'ầ' => 'a',
                'Ẩ' => 'A',
                'ẩ' => 'a',
                'Ẫ' => 'A',
                'ẫ' => 'a',
                'Ậ' => 'A',
                'ậ' => 'a',
                'Ắ' => 'A',
                'ắ' => 'a',
                'Ằ' => 'A',
                'ằ' => 'a',
                'Ẳ' => 'A',
                'ẳ' => 'a',
                'Ẵ' => 'A',
                'ẵ' => 'a',
                'Ặ' => 'A',
                'ặ' => 'a',
                'Ẹ' => 'E',
                'ẹ' => 'e',
                'Ẻ' => 'E',
                'ẻ' => 'E',
                'Ẽ' => 'E',
                'ẽ' => 'e',
                'Ế' => 'E',
                'ế' => 'e',
                'Ề' => 'E',
                'ề' => 'e',
                'Ể' => 'E',
                'ể' => 'e',
                'Ễ' => 'E',
                'ễ' => 'e',
                'Ệ' => 'E',
                'ệ' => 'e',
                'Ỉ' => 'I',
                'ỉ' => 'i',
                'Ị' => 'I',
                'ị' => 'i',
                'Ọ' => 'O',
                'ọ' => 'o',
                'Ỏ' => 'O',
                'ỏ' => 'o',
                'Ố' => 'O',
                'ố' => 'o',
                'Ồ' => 'O',
                'ồ' => 'o',
                'Ổ' => 'O',
                'ổ' => 'o',
                'Ỗ' => 'O',
                'ỗ' => 'o',
                'Ộ' => 'O',
                'ộ' => 'o',
                'Ớ' => 'O',
                'ớ' => 'o',
                'Ờ' => 'O',
                'ờ' => 'o',
                'Ở' => 'O',
                'ở' => 'o',
                'Ỡ' => 'O',
                'ỡ' => 'o',
                'Ợ' => 'O',
                'ợ' => 'o',
                'Ụ' => 'U',
                'ụ' => 'u',
                'Ủ' => 'U',
                'ủ' => 'u',
                'Ứ' => 'U',
                'ứ' => 'u',
                'Ừ' => 'U',
                'ừ' => 'u',
                'Ử' => 'U',
                'ử' => 'u',
                'Ữ' => 'U',
                'ữ' => 'u',
                'Ự' => 'U',
                'ự' => 'u',
                'Ỳ' => 'Y',
                'ỳ' => 'y',
                'Ỵ' => 'Y',
                'ỵ' => 'y',
                'Ỷ' => 'Y',
                'ỷ' => 'y',
                'Ỹ' => 'Y',
                'ỹ' => 'y',
                'Ỻ' => 'LL',
                'ỻ' => 'll',
                'Ỽ' => 'V',
                'ỽ' => 'v',
                'Ỿ' => 'Y',
                'ỿ' => 'y',
                );
    }

    return $result;
}

function lexicographer_span_pattern() {
    static $result;

    if (!isset($result)) {
        $result = '/(< *span [^>]*class="(?:[^"]* )?lemma(?: [^"]*)?"[^>]*>)(.*?'
                . ')(< *\/ *span *>)/';
    }

    return $result;
}

/*==============================================================================
    Hooks
==============================================================================*/

function lexicographer_install() {
    global $wpdb;
    $table_name = $wpdb->prefix . 'lexicographer';

    if($wpdb->get_var("SHOW TABLES LIKE '$table_name'") == $table_name) {
        $wpdb->query("DROP TABLE $table_name");
    }

    $wpdb->query("CREATE TABLE " . $table_name . " (
                  lemma_ID bigint(20) unsigned NOT NULL AUTO_INCREMENT,
                  lemma_post_ID bigint(20) unsigned NOT NULL default '0',
                  lemma_content tinytext NOT NULL,
                  lemma_content_sorted tinytext NOT NULL,
                  lemma_section char(1) NOT NULL,
                  PRIMARY KEY (lemma_ID),
                  KEY lemma_post_ID (lemma_post_ID),
                  KEY lemma_section (lemma_section)
                  ) CHARSET " . DB_CHARSET . ";");
    $table_name = $wpdb->prefix . 'posts';
    $posts = $wpdb->get_results("SELECT ID FROM $table_name
                                 WHERE (post_type = 'page'
                                 OR post_type = 'post')
                                 AND post_status = 'publish'");

    foreach($posts as $post) {
        lexicographer_publish($post->ID);
    }
}

function lexicographer_uninstall() {
    global $wpdb;
    $table_name = $wpdb->prefix . 'lexicographer';

    if($wpdb->get_var("SHOW TABLES LIKE '$table_name'") == $table_name) {
        $wpdb->query("DROP TABLE IF EXISTS $table_name");
    }
}

function lexicographer_transition_post_status($new_status, $old_status, $post) {
    if ($new_status == 'publish') {
        lexicographer_publish($post->ID);
    } else {
        lexicographer_unpublish($post->ID);
    }
}

function lexicographer_publish($post_ID) {
    global $wpdb;
    $post = get_post($post_ID);
    $content = $post->post_content;
    preg_match_all(lexicographer_span_pattern(), $content, $matches);
    $hits = sizeof($matches[0]);
    $table_name = $wpdb->prefix . 'lexicographer';
    $wpdb->query("DELETE FROM $table_name
                  WHERE lemma_post_ID = $post_ID");

    for ($i = 0; $i < $hits; $i++) {
        $content = lexicographer_extract_term($matches[2][$i]);
        $content_sorted = lexicographer_sortify($content);

        if (preg_match('/^[A-Za-z]/', $content_sorted)) {
            $section = strtoupper(substr($content_sorted, 0, 1));
        } else if (preg_match('/^[0-9]/', $content_sorted)) {
            $section = '#';
        } else {
            $section = '*';
        } 

        $content = $wpdb->escape($content);
        $content_sorted = $wpdb->escape($content_sorted);

        $wpdb->query("INSERT INTO $table_name
                      (lemma_post_ID, lemma_content, lemma_content_sorted,
                      lemma_section)
                      VALUES
                      ($post_ID, '$content', '$content_sorted', '$section')");
    }
}

function lexicographer_unpublish($post_ID) {
    global $wpdb;
    $table_name = $wpdb->prefix . 'lexicographer';
    $wpdb->query("DELETE FROM $table_name WHERE lemma_post_ID = $post_ID");
}

function lexicographer_the_content($content) {
	return lexicographer_insert_index($content, 3);
}

function lexicographer_widget_text($content) {
	return lexicographer_insert_index($content, 4);
}

function lexicographer_insert_index($content, $heading_level) {
   global $wpdb;
   $table_name = $wpdb->prefix . 'lexicographer';

   if (strpos($content, '<p>{{Lexicographer index}}</p>') >= 0) {
       foreach (array('*', '#', 'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I',
                      'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T',
                      'U', 'V', 'W', 'X', 'Y', 'Z') as $section) {
           $rows = $wpdb->get_results("SELECT lemma_post_ID, lemma_content
                                       FROM $table_name
                                       WHERE lemma_section = '$section'
                                       ORDER BY lemma_content_sorted ASC");

           if (!empty($rows)) {
               $index .= sprintf("<h%d>$section</h%d><ul>", $heading_level,
                       $heading_level);
               $home = get_option('home');

               foreach($rows as $row) {
                   $index .= "<li><a href=\"";
                   $index .= get_page_link($row->lemma_post_ID);
                   $index .= '#';
                   $index .= lexicographer_anchornamify($row->lemma_content);
                   $index .= "\">";
                   $index .= $row->lemma_content;
                   $index .= "</a></li>";
               }

               $index .= "</ul>";
           }
       }
   
       $content = str_replace('<p>{{Lexicographer index}}</p>', $index,
               $content);
   }

   return preg_replace_callback(lexicographer_span_pattern(),
           'lexicographer_insert_anchor', $content);
}

/*==============================================================================
    Helpers
==============================================================================*/

function lexicographer_anchornamify($span_content) {
    // TODO anchor names should be unique
    return str_replace(' ', '_', preg_replace('/[^A-Za-z0-9_\- ]/', '',
            lexicographer_showify(lexicographer_dic_strip(html_entity_decode(
            strip_tags($span_content), ENT_COMPAT, 'UTF-8')))));
}

function lexicographer_dic_strip($string) {
    return str_replace('ˌ', '', str_replace('·', '', str_replace('ˈ', '',
            str_replace('|', '', $string))));
}

function lexicographer_extract_term($span_content) {
    return trim(lexicographer_dic_strip(html_entity_decode(
            strip_tags($span_content, '<sub><sup>'), ENT_COMPAT, 'UTF-8')));
}

function lexicographer_insert_anchor($groups) {
    return $groups[1] . '<a name="' . lexicographer_anchornamify($groups[2]) .
            '"></a> ' . $groups[2] . $groups[3];
}

function lexicographer_multireplace($string, $array) {
    foreach ($array as $from => $to) { // TODO this is inefficient!
        $string = str_replace($from, $to, $string);
    }

    return $string;
}

function lexicographer_showify($string) {
    return lexicographer_multireplace(lexicographer_multireplace($string,
            lexicographer_presentation_table()), lexicographer_sort_table());
}

function lexicographer_sortify($string) {
    return lexicographer_multireplace(strip_tags($string),
            lexicographer_sort_table());
}

?>
