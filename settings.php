<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Completion Progress block settings
 *
 * @package   block_completion_progress
 * @copyright 2016 Michael de Raadt
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die;

require_once($CFG->dirroot.'/blocks/completion_progress/lib.php');

if ($ADMIN->fulltree) {

    $options = array(10 => 10, 12 => 12, 14 => 14, 16 => 16, 18 => 18, 20 => 20);
    $settings->add(new admin_setting_configselect('block_completion_progress/wrapafter',
        get_string('wrapafter', 'block_completion_progress'),
        '',
        DEFAULT_COMPLETIONPROGRESS_WRAPAFTER,
        $options)
    );

    $options = array(
        'squeeze' => get_string('config_squeeze', 'block_completion_progress'),
        'scroll' => get_string('config_scroll', 'block_completion_progress'),
        'wrap' => get_string('config_wrap', 'block_completion_progress'),
    );
    $settings->add(new admin_setting_configselect('block_completion_progress/defaultlongbars',
        get_string('defaultlongbars', 'block_completion_progress'),
        '',
        DEFAULT_COMPLETIONPROGRESS_LONGBARS,
        $options)
    );

    $options = array(
        'shortname' => get_string('shortname', 'block_completion_progress'),
        'fullname' => get_string('fullname', 'block_completion_progress')
    );
    $settings->add(new admin_setting_configselect('block_completion_progress/coursenametoshow',
        get_string('coursenametoshow', 'block_completion_progress'),
        '',
        DEFAULT_COMPLETIONPROGRESS_COURSENAMETOSHOW,
        $options)
    );

    $settings->add(new admin_setting_configcolourpicker('block_completion_progress/attempted_colour',
        get_string('attempted_colour_title', 'block_completion_progress'),
        get_string('attempted_colour_descr', 'block_completion_progress'),
        get_string('attempted_colour', 'block_completion_progress'),
        null )
    );

    $settings->add(new admin_setting_configcolourpicker('block_completion_progress/submittednotcomplete_colour',
        get_string('submittednotcomplete_colour_title', 'block_completion_progress'),
        get_string('submittednotcomplete_colour_descr', 'block_completion_progress'),
        get_string('submittednotcomplete_colour', 'block_completion_progress'),
        null )
    );

    $settings->add(new admin_setting_configcolourpicker('block_completion_progress/notattempted_colour',
        get_string('notattempted_colour_title', 'block_completion_progress'),
        get_string('notattempted_colour_descr', 'block_completion_progress'),
        get_string('notAttempted_colour', 'block_completion_progress'),
        null )
    );

    $settings->add(new admin_setting_configcolourpicker('block_completion_progress/futurenotattempted_colour',
        get_string('futurenotattempted_colour_title', 'block_completion_progress'),
        get_string('futurenotattempted_colour_descr', 'block_completion_progress'),
        get_string('futureNotAttempted_colour', 'block_completion_progress'),
        null )
    );

    $settings->add(new admin_setting_configcheckbox('block_completion_progress/showinactive',
        get_string('showinactive', 'block_completion_progress'),
        '',
        DEFAULT_COMPLETIONPROGRESS_SHOWINACTIVE)
    );
}