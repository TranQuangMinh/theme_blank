<?php

/**
*
*/
class helper
{
	public static function removeJunkSpace($string)
	{
		$words = array_filter(explode(' ', trim($string)));
		return trim(implode(' ', $words));
	}

	public static function niceWordsByChars($text, $max_char = 100, $end = '...')
	{
		$text = trim(strip_tags($text));
		$max_char = (int) $max_char;
		$end = trim($end);

		if ($text != '') {
			$text = self::removeJunkSpace($text);
		}

		$output = '';

		if (mb_strlen($text, 'UTF-8') > $max_char) {
			$words = explode(' ', $text);
			$i = 0;

			while (1) {
				$length = mb_strlen($output, 'UTF-8') + mb_strlen($words[$i], 'UTF-8');

				if ($length > $max_char) {
					break;
				} else {
					$output .= ' ' . $words[$i];
					++$i;
				}
			}

			$output .= $end;
		} else {
			$output = $text;
		}

		return trim($output);
	}

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
