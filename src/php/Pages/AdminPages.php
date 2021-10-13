<?php

namespace Plugin\Pages;

use Plugin\Base\Plugin;

/**
 * AdminPages is a place where you register all your admin pages.
 * AdminPages holds the logic to register each Page you defined in the register method.
 */
class AdminPages
{
    private array $pages;
    private AbstractPage $page;

    public function __construct()
    {
        $this->pages =
            [
                new AlecadddPage(),
                // Instantiate more of your own pages here (if needed).
                // Extend from AbstractPage, implement the methods, page configuration done.
            ];
    }

    public function register()
    {
        foreach ($this->pages as $page) {
            $this->page = $page;

            if (!empty($this->page->getPage())) {
                add_action('admin_menu', [$this, 'addAdminMenu']);     // register pages and sub pages.
            }
            if (!empty($this->page->getSettings())) {
                add_action('admin_init', [$this, 'registerCustomFields']);     // configure pages and sub pages.
            }
            add_filter("plugin_action_links_" . Plugin::name(), [$this->page, 'settingsLink']);
        }
    }

    public function addAdminMenu()
    {
        $page = $this->page->getPage();

        add_menu_page($page['page_title'], $page['menu_title'], $page['capability'],
            $page['menu_slug'], $page['template'], $page['icon_url'], $page['position']);

        foreach ($this->page->getSubpages() as $subpage) {
            add_submenu_page($subpage['parent_slug'], $subpage['page_title'], $subpage['menu_title'], $subpage['capability'], $subpage['menu_slug'], $subpage['template']);
        }
    }

    public function registerCustomFields()
    {
        foreach ($this->page->getSettings() as $setting) {
            register_setting(
                $setting["option_group"],
                $setting["option_name"],
                ($setting["template"] ?? '')
            );
        }

        foreach ($this->page->getSections() as $section) {
            add_settings_section(
                $section["id"],
                $section["title"],
                ($section["template"] ?? ''),
                $section["page"]
            );
        }

        foreach ($this->page->getFields() as $field) {
            add_settings_field(
                $field["id"],
                $field["title"],
                ($field["template"] ?? ''),
                $field["page"],
                $field["section"],
                ($field["args"] ?? '')
            );
        }
    }
}
