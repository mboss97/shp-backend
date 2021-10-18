<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class Post extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'partials.page-header',
        'partials.content',
        'partials.content-*',
    ];

    /**
     * Data to be passed to view before rendering, but after merging.
     *
     * @return array
     */
    public function override()
    {
        return [
            'title' => $this->title(),
            'slug' => $this->slug(),
            'related' => $this->related(),
        ];
    }

    public function slug()
    {
      global $post;
      return $post->post_name;
    }

    /**
     * Returns the post title.
     *
     * @return string
     */
    public function title()
    {
        if ($this->view->name() !== 'partials.page-header') {
            return get_the_title();
        }

        if (is_home()) {
            if ($home = get_option('page_for_posts', true)) {
                return get_the_title($home);
            }

            return __('Latest Posts', 'sage');
        }

        if (is_archive()) {
            return get_the_archive_title();
        }

        if (is_search()) {
            /* translators: %s is replaced with the search query */
            return sprintf(
                __('Search Results for %s', 'sage'),
                get_search_query()
            );
        }

        if (is_404()) {
            return __('Not Found', 'sage');
        }

        return get_the_title();
    }

    public function related() {
      global $post;

      $args = array(
        'posts_per_page' => 3,
        'post__not_in' => [$post->ID],
      );

      $brands = get_the_terms($post, 'brand');
      if ($brands && count($brands) > 0) {
        $args['tax_query'][] = array(
          'taxonomy' => 'brand',
          'field'    => 'term_id',
          'terms'    => $brands[0]->term_id,
        );
      } else {
        $args['category__in'] = wp_get_post_categories($post->ID, array('fields' => 'ids'));
      }

      $query = new \WP_Query($args);

      return $query;
    }
}
