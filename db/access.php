<?php
// This file is part of user_contact block maintained by NLA.

/**
 * Contact form block
 *
 * @package    contrib
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$capabilities = array(

    'block/user_contact:myaddinstance' => array(
        'captype' => 'read',
        'contextlevel' => CONTEXT_SYSTEM,
        'archetypes' => array(
            'user' => CAP_ALLOW
        ),
        'clonepermissionsfrom' => 'moodle/my:manageblocks'
    ),

    'block/user_contact:addinstance' => array(
        'riskbitmask' => RISK_SPAM,

        'captype' => 'read',
        'contextlevel' => CONTEXT_BLOCK,
        'archetypes' => array(
            'editingteacher' => CAP_ALLOW,
            'manager' => CAP_ALLOW
        ),

        'clonepermissionsfrom' => 'moodle/site:manageblocks'
    ),
    
    'block/user_contact:hiddenrecipient' => array(

        'riskbitmask' => RISK_SPAM,

        'captype' => 'read',
        'contextlevel' => CONTEXT_BLOCK
    ),

    'block/user_contact:contactperson' => array(

        'riskbitmask' => RISK_SPAM,

        'captype' => 'read',
        'contextlevel' => CONTEXT_BLOCK,
        'archetypes' => array(
            'editingteacher' => CAP_ALLOW,
            'manager' => CAP_ALLOW
        )
    )

);

