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
 * @package     mod
 * @package     swf
 * @copyright   2013 Matt Bury
 * @author      Matt Bury <matt@matbury.com>
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

//$module->version   = 0;             // If version == 0 then module will not be installed
$module->version   = 2013073100;      // The current module version (Date: YYYYMMDDXX)
$module->requires  = 2013051400;      // Requires this Moodle version (2.5) (20130514)
$module->cron      = 0;               // Period for cron to check this module (secs)
$module->component = 'mod_swf';       // To check on upgrade, that module sits in correct place
$module->release   = 'v0.1.0';        // Human-readable version name
$module->maturity = MATURITY_BETA;      // How stable the plugin is MATURITY_ALPHA, MATURITY_BETA, MATURITY_RC, MATURITY_STABLE
