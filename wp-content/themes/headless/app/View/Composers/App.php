<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class App extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        '*',
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [
            'siteName' => $this->siteName(),
            'siteOptions' => $this->siteOptions(),
            'current_user' => $this->currentUser(),
        ];
    }

    /**
     * Returns the site name.
     *
     * @return string
     */
    public function siteName()
    {
        return get_bloginfo('name', 'display');
    }

    /**
     * Returns the site name.
     *
     * @return string
     */
    public function siteOptions()
    {
        return get_fields('options');
    }

    public function currentUser()
    {
        return wp_get_current_user();
    }
}
