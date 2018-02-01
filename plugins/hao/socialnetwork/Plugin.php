<?php namespace Hao\SocialNetwork;

use Backend;
use System\Classes\PluginBase;

/**
 * SocialNetwork Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'SocialNetwork',
            'description' => 'No description provided yet...',
            'author'      => 'Hao',
            'icon'        => 'icon-leaf'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {

    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return [
            'Hao\SocialNetwork\Components\MyComponent' => 'myComponent',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return [
            'hao.socialnetwork.some_permission' => [
                'tab' => 'SocialNetwork',
                'label' => 'Some permission'
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        return [
            'socialnetwork' => [
                'label'       => 'SocialNetwork',
                'url'         => Backend::url('hao/socialnetwork/index/index'),
                'icon'        => 'icon-leaf',
                'permissions' => ['hao.socialnetwork.*'],
                'order'       => 500,
            ],

            /*sideMenu' => [
                'posts' => [
                    'label'       => 'Posts',
                    'icon'        => 'icon-copy',
                    'url'         => Backend::url('acme/blog/posts'),
                    'permissions' => ['acme.blog.access_posts']
                ],
                'categories' => [
                    'label'       => 'Categories',
                    'icon'        => 'icon-copy',
                    'url'         => Backend::url('acme/blog/categories'),
                    'permissions' => ['acme.blog.access_categories']
                ]
            ],*/
        ];
    }
}
