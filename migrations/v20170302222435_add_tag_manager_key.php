<?php

/**
 * Google Tag Manager extension for phpBB v3.
 *
 * @package phpBB extension: danirod/tagmanager
 * @copyright (C) 2017 Dani Rodríguez <danirod@outlook.com>
 * @license GNU General Public License v3.0
 */
namespace danirod\tagmanager\migrations;

class v20170302222435_add_tag_manager_key extends \phpbb\db\migration\migration
{
    public static function depends_on()
    {
        return array();
    }

    public function update_data()
    {
        return array(
            array('config.add', array('tag_manager_key', '')),
        );
    }
}