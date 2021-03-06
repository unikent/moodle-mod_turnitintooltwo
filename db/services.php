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
 * Turnitintwo services.
 *
 * @package    mod_turnitintooltwo
 * @copyright  2016 Skylar Kelty <S.Kelty@kent.ac.uk>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$services = array(
    'Turnitintwo service' => array(
        'functions' => array (
            'mod_turnitintooltwo_get_submission_status'
        ),
        'requiredcapability' => '',
        'restrictedusers' => 0,
        'enabled' => 1
    )
);

$functions = array(
    'mod_turnitintooltwo_get_submission_status' => array(
        'classname'   => 'mod_turnitintooltwo\external',
        'methodname'  => 'get_submission_status',
        'description' => 'Get my submission status.',
        'type'        => 'read',
        'ajax'        => true
    )
);
