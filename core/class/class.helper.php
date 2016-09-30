<?php

/**
*
*/
class helper
{

    public static function getImageByFolder($slug, $size = 'thumbnail')
    {
        $output = array();
        $args = array(
            'post_type' => 'attachment',
            'post_status' => 'inherit',
            'tax_query' => array(
                array(
                    'taxonomy' => 'media_category',
                    'field' => 'slug',
                    'include_children'=> false,
                    'terms' => $slug
                )
            )
        );
        $the_query = new WP_Query($args);

        $attachment = $the_query->get_posts();
        if ($attachment) {
            foreach ($attachment as $item) {
                $fullImage = $item->guid;
                $fullImage = explode('/', $fullImage);
                unset($fullImage[count($fullImage) - 1]);
                $fullPath = implode('/', $fullImage) . '/';

                $output[] = array(
                    'path' => $fullPath,
                    'full_image' => $item->guid,
                    'meta' => wp_get_attachment_metadata($item->ID)
                );
            }
        }

        wp_reset_query();

        return $output;
    }
}
