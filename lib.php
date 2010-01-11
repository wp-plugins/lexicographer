<?php

/*******************************************************************************

    File: lib.php
    Copyright (C) 2009 Kilian Evang

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

function lexicographer_show_table() {
    static $result;

    if (!isset($result)) {
        $result = array(
                'Š' => 'S',
                'š' => 's',
                'Ž' => 'Z',
                'ž' => 'z',
                'Œ' => 'Oe',
                'œ' => 'oe',
                'Ÿ' => 'Y',
                'À' => 'A',
                'Á' => 'A',
                'Â' => 'A',
                'Ã' => 'A',
                'Ä' => 'Ae',
                'Å' => 'A',
                'Æ' => 'A',
                'Ç' => 'C',
                'È' => 'E',
                'É' => 'E',
                'Ê' => 'E',
                'Ë' => 'E',
                'Ì' => 'I',
                'Í' => 'I',
                'Î' => 'I',
                'Ï' => 'I',
                'Ð' => 'Dh',
                'Ñ' => 'N',
                'Ò' => 'O',
                'Ó' => 'O',
                'Ô' => 'O',
                'Õ' => 'O',
                'Ö' => 'Oe',
                'Ø' => 'O',
                'Ù' => 'U',
                'Ú' => 'U',
                'Û' => 'U',
                'Ü' => 'Ue',
                'Ý' => 'Y',
                'Þ' => 'Th',
                'ß' => 'ss',
                'à' => 'a',
                'á' => 'a',
                'â' => 'a',
                'ã' => 'a',
                'ä' => 'ae',
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
                'ð' => 'th',
                'ñ' => 'n',
                'ò' => 'o',
                'ó' => 'o',
                'ô' => 'o',
                'õ' => 'o',
                'ö' => 'oe',
                'ø' => 'o',
                'ù' => 'u',
                'ú' => 'u',
                'û' => 'u',
                'ü' => 'ue',
                'ý' => 'y',
                'þ' => 'dh',
                'ÿ' => 'y');
    }

    return $result;
}

function lexicographer_sort_table() {
    static $result;

    if (!isset($result)) {
        $result = array(
                'Š' => 'S',
                'š' => 's',
                'Ž' => 'Z',
                'ž' => 'z',
                'Œ' => 'Oe',
                'œ' => 'oe',
                'Ÿ' => 'Y',
                'À' => 'A',
                'Á' => 'A',
                'Â' => 'A',
                'Ã' => 'A',
                'Ä' => 'A',
                'Å' => 'A',
                'Æ' => 'A',
                'Ç' => 'C',
                'È' => 'E',
                'É' => 'E',
                'Ê' => 'E',
                'Ë' => 'E',
                'Ì' => 'I',
                'Í' => 'I',
                'Î' => 'I',
                'Ï' => 'I',
                'Ð' => 'Dh',
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
                'Þ' => 'Th',
                'ß' => 'ss',
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
                'ð' => 'th',
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
                'þ' => 'dh',
                'ÿ' => 'y');
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
                  PRIMARY KEY  (lemma_ID),
                  KEY lemma_post_ID (lemma_post_ID),
                  KEY lemma_section (lemma_section)
                  );");
    $table_name = $wpdb->prefix . 'posts';
    $posts = $wpdb->get_results("SELECT ID FROM $table_name
                                 WHERE post_type = 'page'
                                 OR post_type = 'post'");

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

function lexicographer_the_content($content) {
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
               $index .= "<h3>$section</h3><ul>";
               $home = get_option('home');

               foreach($rows as $row) {
                   $index .= "<li><a href=\"";
                   $index .= get_bloginfo('url');
                   $index .= '/';
                   $index .= get_page_uri($row->lemma_post_ID);
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
    foreach ($array as $from => $to) {
        $string = str_replace($from, $to, $string);
    }

    return $string;
}

function lexicographer_showify($string) {
    return lexicographer_multireplace($string, lexicographer_show_table());
}

function lexicographer_sortify($string) {
    return lexicographer_multireplace(strip_tags($string),
            lexicographer_sort_table());
}

?>
