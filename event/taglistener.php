<?php

/**
 * Google Tag Manager extension for phpBB v3.
 *
 * @package phpBB extension: danirod/tagmanager
 * @copyright (C) 2017 Dani Rodríguez <danirod@outlook.com>
 * @license GNU General Public License v3.0
 */
namespace danirod\tagmanager\event;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * Main event listener used for all things this extension.
 */
class taglistener implements EventSubscriberInterface
{
    /**
     * Connect events.
     * @return array
     * @access public
     * @static
     */
    public static function getSubscribedEvents()
    {
        return array(
            'core.page_header' => 'page_header',
            'core.acp_board_config_edit_add' => 'on_board_config',
        );
    }

    /**
     * We need this to load the translations pack.
     * @var \phpbb\user
     */
    private $user;

    /**
     * We need this to set the template variables.
     * @var \phpbb\template\template
     */
    private $template;

    /**
     * We need this to get the current phpBB configuration.
     * @var \phpbb\config\config
     */
    private $config;

    /**
     * Constructor, gets the dependencies injected.
     * @param \phpbb\user $user the current user
     * @param \phpbb\template\template $template template system
     * @param \phpbb\config\config $config configuration
     */
    public function __construct(\phpbb\user $user, \phpbb\template\template $template, \phpbb\config\config $config)
    {
        $this->user = $user;
        $this->template = $template;
        $this->config = $config;
    }

    /**
     * Assigns the Tag Manager key we want displayed into a template variable.
     */
    public function page_header()
    {
        $this->template->assign_vars(array(
            'GOOGLE_TAG_MANAGER_KEY' => $this->config['tag_manager_key'],
        ));
    }

    /**
     * Adds Tag Manager key into the board settings.
     * @param \phpbb\event\data $event event instance
     */
    public function on_board_config($event)
    {
        /* Make sure we are in Board Settings. */
        if ($event['mode'] != 'settings') {
            return;
        }

        /* This is whatever we want set. */
        $this->user->add_lang_ext('danirod/tagmanager', 'tagman');
        $gtm_var = array(
            'tag_manager_key' => array(
                'lang' => 'TAGMANAGER_KEY',
                'validate' => 'string',
                'type' => 'text:40:40',
                'explain' => true,
            )
        );

        /* Then set it. */
        $display_vars = $event['display_vars'];
        $display_vars['vars'] = phpbb_insert_config_array($display_vars['vars'], $gtm_var, array(
            'after' => 'site_desc'
        ));
        $event['display_vars'] = $display_vars;
    }
}