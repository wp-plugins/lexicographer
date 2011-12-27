<?php

/*
Plugin Name: Lexicographer
Plugin URI: http://wordpress.org/extend/plugins/lexicographer/
Description: Lexicographer creates an alphabetical index of your blog, using keywords you specify. The index can be included in any page, post or text widget.
Version: 0.3
Author: Kilian Evang
Author URI: http://texttheater.net
*/

/*******************************************************************************

    File: lexicographer.php
    Copyright (C) 2009-2011 Kilian Evang

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

require('lib.php');
register_activation_hook(__FILE__, 'lexicographer_install');
register_deactivation_hook(__FILE__, 'lexicographer_uninstall');
add_action('transition_post_status', 'lexicographer_transition_post_status',
        10, 3);
add_filter('the_content', 'lexicographer_the_content');
add_filter('widget_text', 'lexicographer_widget_text');
