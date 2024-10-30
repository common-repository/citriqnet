<?php
/**
 * Plugin Name: Citriq.net
 * Plugin URI: http://nokto.net/citriq-wordpress-plugin/
 * Description: Citriq.net vous permet d'échanger facilement des liens avec d'autres blogs littéraires qui critiquent les mêmes livres que vous. Cette extension pour Wordpress vous permettra de référencer automatiquement vos critiques littéraires sur Citriq.net et d'afficher à la fin de vos articles les liens vers d'autres critiques du même livre. Plus d'informations : http://nokto.net/citriq-wordpress-plugin/
 * Version: 1.0.3
 * Author: Clément Bourgoin
 * Author URI: http://nokto.net/
 * License: GPL2
 */

 /*  Copyright 2013 Clement Bourgoin (email : cb@nokto.net)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/
 
    define('CITRIQ_VERSION','1.0.3');
 
    class citriq
    {
        function crawl($content)
        {
            $isbn = get_post_meta(get_the_id(), "isbn", true);
            $reviewer = get_post_meta(get_the_id(), "reviewer", true);
            $rating = get_post_meta(get_the_id(), "rating", true);
            $excerpt = get_post_meta(get_the_id(), "excerpt", true);
            if($reviewer == '') $reviewer = get_the_author();
            if ($isbn != '')
            {
                $params['uid'] = get_the_id();
                $params['isbn'] = $isbn;
                $params['plugin'] = 'wordpress-'.CITRIQ_VERSION;
                if (!is_singular()) $params['ignore'] = 1; // Si on est pas sur la page même de la critique, on n'enregistre pas l'url
                else
                {
                    $params['date'] = get_the_date('Y-m-d H:i:s');
                    if ($reviewer != '') $params['reviewer'] = $reviewer; // Auteur de la critique
                    if ($rating != '') $params['rating'] = (int) $rating; // Note de la critique
                    if ($excerpt != '') $params['excerpt'] = $excerpt; // Extrait de la critique
                }
                $widget = '<script type="text/javascript" src="http://citriq.net/w/crawl?'.http_build_query($params).'"></script>';
            }
            return $content.$widget;
        }
    }
    
    $citriq = new citriq();
    
    // Ajout du code du widget à l'article
    add_filter('the_content',array($citriq,'crawl'));





















