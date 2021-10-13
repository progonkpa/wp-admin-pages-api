<?php

namespace Plugin\Pages;

/**
 * An instance of Page is a configuration data container object with a few helper methods for the job.
 * As all abstract classes, it pulls up, in, all common variables and methods, while a child class implements
 * the page specific information.
 *
 * A page implementation provides all configuration data specific to one admin page, admin menu item otherwise.
 * A page holds information about the main page (parent, admin menu item), subpages (children, sub items)
 * and WP Settings API parameters, more precisely settings, sections and fields.
 */
abstract class AbstractPage
{
    protected array $page;
    protected array $subpages;
    protected array $settings;
    protected array $sections;
    protected array $fields;
    protected Templates $templates;

    public function __construct()
    {
        $this->templates = $this->templates();  // Executed first as the following code requires its result.
        $this->page = $this->page();
        $this->subpages = $this->subpages();
        $this->settings = $this->settings();
        $this->sections = $this->sections();
        $this->fields = $this->fields();
    }

    /**
     * Override these methods so they return your custom configuration.
     */
    protected abstract function page(): array;
    protected abstract function subpages(): array;
    protected abstract function settings(): array;
    protected abstract function sections(): array;
    protected abstract function fields(): array;

    /** Generate the landing subpage with method landingSubpage($title).
     *
     * @param string $title
     * @return array
     */
    protected function landingSubpage(string $title): array
    {
        return
            [
                'parent_slug' => $this->page['menu_slug'],
                'page_title' => $this->page['page_title'],
                'menu_title' => ($title) ? $title : $this->page['menu_title'],
                'capability' => $this->page['capability'],
                'menu_slug' => $this->page['menu_slug'],
                'template' => $this->page['template']
            ];
    }

    /** First level subpage, auto-linked to parent.
     *
     * @param string $page_title
     * @param string $menu_title
     * @param string $menu_slug
     * @param callable $template
     * @return array
     */
    protected function subpage(string $page_title, string $menu_title, string $menu_slug, callable $template): array
    {
        return [
            'page_title' => $page_title,
            'menu_title' => $menu_title,
            'menu_slug' => $menu_slug,
            'template' => $template,
            'parent_slug' => $this->page['menu_slug'],
            'capability' => $this->page['capability'],
        ];
    }

    /**
     * @param string $page_title
     * @param string $menu_title
     * @param string $menu_slug
     * @param string $parent_slug
     * @param callable $template
     * @return array
     */
    protected function subpageWithParent(string $page_title, string $menu_title, string $menu_slug, string $parent_slug, callable $template): array
    {
        return [
            'page_title' => $page_title,
            'menu_title' => $menu_title,
            'menu_slug' => $menu_slug,
            'template' => $template,
            'parent_slug' => $parent_slug,
            'capability' => $this->page['capability'],
        ];
    }

    protected function templates(): Templates
    {
        return new Templates();
    }

    /** Override for a settings link.
     *
     * @param array $links
     * @return array Returns $links back because this is a callback for a WP filter.
     */
    public function settingsLink(array $links): array
    {
        return $links;
    }


    /** Only GETTERS from this line to the end.
     *
     * @return array
     */
    public function getPage(): array
    {
        return $this->page;
    }

    /**
     * @return array
     */
    public function getSubpages(): array
    {
        return $this->subpages;
    }

    /**
     * @return array
     */
    public function getSettings(): array
    {
        return $this->settings;
    }

    /**
     * @return array
     */
    public function getSections(): array
    {
        return $this->sections;
    }

    /**
     * @return array
     */
    public function getFields(): array
    {
        return $this->fields;
    }

    /**
     * @return Templates
     */
    public function getTemplates(): Templates
    {
        return $this->templates;
    }
}
