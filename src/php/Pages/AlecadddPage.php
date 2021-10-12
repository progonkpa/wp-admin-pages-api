<?php

namespace Plugin\Pages;

class AlecadddPage extends AbstractPage
{
    protected function page(): array
    {
        return [
            'page_title' => 'Alecaddd Plugin',                          // Browser tab title.
            'menu_title' => 'Alecaddd',                                 // Admin menu item label.
            'capability' => 'manage_options',                           // Required permission to save WP options.
            'menu_slug' => 'alecaddd_plugin',                           // wp-admin/admin.php?page=alecaddd_plugin
            'template' => [$this->templates, 'adminDashboard'],         // callback that returns HTML from templates.
            'icon_url' => 'dashicons-store',
            'position' => 110
        ];
    }

    protected function subpages(): array
    {
        return [
            $this->landingSubpage("Landing page"),
            $this->subpage('Custom Post Types', 'CPT', 'alecaddd_cpt', [$this->templates, 'adminCpt']),
            $this->subpage('Custom Taxonomies', 'Taxonomies', 'alecaddd_taxonomies', [$this->templates, 'adminTaxonomy']),
            $this->subpage('Custom Widgets', 'Widgets', 'alecaddd_widgets', [$this->templates, 'adminWidget']),
        ];
    }

    protected function settings(): array
    {
        return [
            [
                'option_group' => 'alecaddd_options_group',     // WPs method of identifying a form, via a hidden input with name="option_page" value="alecaddd_options_group".
                'option_name' => 'text_example',                // The value of the name attribute of the input.
                'template' => [$this->templates, 'alecadddOptionsGroup']
            ],
            [
                'option_group' => 'alecaddd_options_group',
                'option_name' => 'first_name'
            ]
        ];
    }

    protected function sections(): array
    {
        return [
            [
                'id' => 'alecaddd_admin_index',
                'title' => 'Settings',                  // Prints section title.
                'template' => [$this->templates, 'alecadddAdminSection'],
                'page' => 'alecaddd_plugin'
            ],
            [
                'id' => 'alecaddd_admin_section2',
                'title' => 'Section 2',
                'template' => [$this->templates, 'alecadddAdminSection2'],
                'page' => 'alecaddd_plugin'
            ]
        ];
    }

    protected function fields(): array
    {
        return [
            [
                'id' => 'text_example',                 // Must be the same value as option_name (name attribute of input tag), defined in setSettings L106.
                'title' => 'Text Example',              // Prints field label.
                'template' => [$this->templates, 'alecadddTextExample'],
                'page' => 'alecaddd_plugin',            // Parent page menu slug.
                'section' => 'alecaddd_admin_index',    // The id of the section this field belongs to L123.
                'args' => [                        // HTML attributes.
                    'label_for' => 'text_example',
                    'class' => 'example-class'
                ]
            ],
            [
                'id' => 'first_name',
                'title' => 'First Name',
                'template' => [$this->templates, 'alecadddFirstName'],
                'page' => 'alecaddd_plugin',
                'section' => 'alecaddd_admin_index',
                'args' => [
                    'label_for' => 'first_name',
                    'class' => 'example-class'
                ]
            ]
        ];
    }

    public function settingsLink(array $links): array
    {
        $links['settings'] = $this->templates->alecadddSettingsLink();
        return $links;
    }
}
