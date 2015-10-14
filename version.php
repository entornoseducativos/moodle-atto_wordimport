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
 * Atto text editor import Microsoft Word files - version.
 *
 * @package    atto_wordimport
 * @copyright  2015 Eoin Campbell
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$plugin->version   = 2015101405;        // The current plugin version (Date: YYYYMMDDXX).
$plugin->requires  = 2014051200;        // Requires Moodle 2.7 or higher, when Atto was added to core.
$plugin->component = 'atto_wordimport';  // Full name of the plugin (used for diagnostics).
$plugin->maturity  = MATURITY_BETA;
$plugin->release   = '0.9.5 (Build 2015101405)'; // Human readable version information.
