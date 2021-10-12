<?php

namespace Plugin\Pages;

use Plugin\Base\Plugin;

class Templates
{
    public function adminDashboard()
    {
        return require_once(Plugin::path() . "src/php/templates/admin.php");
    }

    public function alecadddSettingsLink()
    {
        return '<a href="admin.php?page=alecaddd_plugin">Settings</a>';
    }

    public function adminCpt()
    {
        return require_once(Plugin::path() . "src/php/templates/cpt.php");
    }

    public function adminTaxonomy()
    {
        return require_once(Plugin::path() . "src/php/templates/taxonomy.php");
    }

    public function adminWidget()
    {
        return require_once(Plugin::path() . "src/php/templates/widget.php");
    }

    // TODO: possibly doesn't belong in Templates.
    public function alecadddOptionsGroup($input)
    {
        return $input;
    }

    public function alecadddAdminSection()
    {
        echo 'Check this beautiful section!';
    }

    public function alecadddAdminSection2()
    {
        echo 'This is section 2!';
    }

    public function alecadddTextExample()
    {
        $value = esc_attr(get_option('text_example'));
        echo '<input type="text" class="regular-text" name="text_example" value="' . $value . '" placeholder="Write Something Here!">';
    }

    public function alecadddFirstName()
    {
        $value = esc_attr(get_option('first_name'));
        echo '<input type="text" class="regular-text" name="first_name" value="' . $value . '" placeholder="Write your First Name">';
    }
}