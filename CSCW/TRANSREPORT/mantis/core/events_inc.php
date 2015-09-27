<?php
/**
 * MantisBT - A PHP based bugtracking system
 *
 * MantisBT is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 2 of the License, or
 * (at your option) any later version.
 *
 * MantisBT is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with MantisBT.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @copyright Copyright 2002  MantisBT Team - mantisbt-dev@lists.sourceforge.net
 * @link http://www.mantisbt.org
 * @package MantisBT
 */

/**
 * Event Declarations
 * Please view the Plugin Events Reference for details on each event.
 * http://www.mantisbt.org/wiki/doku.php/mantisbt:plugins_events
 */

# Declare supported plugin events
event_declare_many( array(
	# Events specific to plugins
	'EVENT_PLUGIN_INIT' => EVENT_TYPE_EXECUTE,

	# Events specific to the core system
	'EVENT_CORE_READY' => EVENT_TYPE_EXECUTE,

	# MantisBT Layout Events
	'EVENT_LAYOUT_RESOURCES' => EVENT_TYPE_OUTPUT,
	'EVENT_LAYOUT_BODY_BEGIN' => EVENT_TYPE_OUTPUT,
	'EVENT_LAYOUT_PAGE_HEADER' => EVENT_TYPE_OUTPUT,
	'EVENT_LAYOUT_CONTENT_BEGIN' => EVENT_TYPE_OUTPUT,
	'EVENT_LAYOUT_CONTENT_END' => EVENT_TYPE_OUTPUT,
	'EVENT_LAYOUT_PAGE_FOOTER' => EVENT_TYPE_OUTPUT,
	'EVENT_LAYOUT_BODY_END' => EVENT_TYPE_OUTPUT,

	# Events for displaying data
	'EVENT_DISPLAY_BUG_ID' => EVENT_TYPE_CHAIN,
	'EVENT_DISPLAY_TEXT' => EVENT_TYPE_CHAIN,
	'EVENT_DISPLAY_FORMATTED' => EVENT_TYPE_CHAIN,
	'EVENT_DISPLAY_RSS' => EVENT_TYPE_CHAIN,
	'EVENT_DISPLAY_EMAIL' => EVENT_TYPE_CHAIN,
	'EVENT_DISPLAY_EMAIL_BUILD_SUBJECT' => EVENT_TYPE_CHAIN,

	# Menu Events
	'EVENT_MENU_MAIN' => EVENT_TYPE_DEFAULT,
	'EVENT_MENU_MAIN_FRONT' => EVENT_TYPE_DEFAULT,
	'EVENT_MENU_MANAGE' => EVENT_TYPE_DEFAULT,
	'EVENT_MENU_MANAGE_CONFIG' => EVENT_TYPE_DEFAULT,
	'EVENT_MENU_SUMMARY' => EVENT_TYPE_DEFAULT,
	'EVENT_SUBMENU_SUMMARY' => EVENT_TYPE_DEFAULT,
	'EVENT_MENU_DOCS' => EVENT_TYPE_DEFAULT,
	'EVENT_MENU_ACCOUNT' => EVENT_TYPE_DEFAULT,
	'EVENT_MENU_FILTER' => EVENT_TYPE_DEFAULT,
	'EVENT_MENU_ISSUE' => EVENT_TYPE_DEFAULT,

	# Management pages
	'EVENT_MANAGE_OVERVIEW_INFO' => EVENT_TYPE_OUTPUT,
	'EVENT_MANAGE_PROJECT_CREATE_FORM' => EVENT_TYPE_EXECUTE,
	'EVENT_MANAGE_PROJECT_CREATE' => EVENT_TYPE_EXECUTE,
	'EVENT_MANAGE_PROJECT_UPDATE_FORM' => EVENT_TYPE_EXECUTE,
	'EVENT_MANAGE_PROJECT_UPDATE' => EVENT_TYPE_EXECUTE,
	'EVENT_MANAGE_PROJECT_DELETE' => EVENT_TYPE_EXECUTE,
	'EVENT_MANAGE_PROJECT_PAGE' => EVENT_TYPE_EXECUTE,
	'EVENT_MANAGE_VERSION_CREATE' => EVENT_TYPE_EXECUTE,
	'EVENT_MANAGE_VERSION_UPDATE_FORM' => EVENT_TYPE_EXECUTE,
	'EVENT_MANAGE_VERSION_UPDATE' => EVENT_TYPE_EXECUTE,

	# User account pages
	'EVENT_ACCOUNT_PREF_UPDATE_FORM' => EVENT_TYPE_EXECUTE,
	'EVENT_ACCOUNT_PREF_UPDATE' => EVENT_TYPE_EXECUTE,

	# Bug filter events
	'EVENT_FILTER_FIELDS' => EVENT_TYPE_DEFAULT,
	'EVENT_FILTER_COLUMNS' => EVENT_TYPE_DEFAULT,

	# Bug report event
	'EVENT_REPORT_BUG_FORM_TOP' => EVENT_TYPE_EXECUTE,
	'EVENT_REPORT_BUG_FORM' => EVENT_TYPE_EXECUTE,
	'EVENT_REPORT_BUG_DATA' => EVENT_TYPE_CHAIN,
	'EVENT_REPORT_BUG' => EVENT_TYPE_EXECUTE,

	# Bug view events
	'EVENT_VIEW_BUG_DETAILS' => EVENT_TYPE_EXECUTE,
	'EVENT_VIEW_BUG_EXTRA' => EVENT_TYPE_EXECUTE,
	'EVENT_VIEW_BUG_ATTACHMENT' => EVENT_TYPE_OUTPUT,
	'EVENT_VIEW_BUGNOTES_START' => EVENT_TYPE_EXECUTE,
	'EVENT_VIEW_BUGNOTE' => EVENT_TYPE_EXECUTE,
	'EVENT_VIEW_BUGNOTES_END' => EVENT_TYPE_EXECUTE,

	# Bug update events
	'EVENT_UPDATE_BUG_FORM_TOP' => EVENT_TYPE_EXECUTE,
	'EVENT_UPDATE_BUG_FORM' => EVENT_TYPE_EXECUTE,
	'EVENT_UPDATE_BUG_DATA' => EVENT_TYPE_CHAIN,
	'EVENT_UPDATE_BUG' => EVENT_TYPE_EXECUTE,
	'EVENT_UPDATE_BUG_STATUS_FORM' => EVENT_TYPE_EXECUTE,

	# Other bug events
	'EVENT_BUG_DELETED' => EVENT_TYPE_EXECUTE,
	'EVENT_BUG_ACTION' => EVENT_TYPE_EXECUTE,

	# Bugnote events
	'EVENT_BUGNOTE_ADD_FORM' => EVENT_TYPE_EXECUTE,
	'EVENT_BUGNOTE_ADD' => EVENT_TYPE_EXECUTE,
	'EVENT_BUGNOTE_DATA' => EVENT_TYPE_CHAIN,
	'EVENT_BUGNOTE_EDIT_FORM' => EVENT_TYPE_EXECUTE,
	'EVENT_BUGNOTE_EDIT' => EVENT_TYPE_EXECUTE,
	'EVENT_BUGNOTE_DELETED' => EVENT_TYPE_EXECUTE,
	'EVENT_TAG_ATTACHED' => EVENT_TYPE_EXECUTE,
	'EVENT_TAG_DETACHED' => EVENT_TYPE_EXECUTE,

	# Email notification events
	'EVENT_NOTIFY_USER_INCLUDE' => EVENT_TYPE_DEFAULT,
	'EVENT_NOTIFY_USER_EXCLUDE' => EVENT_TYPE_DEFAULT,

	# Wiki events
	'EVENT_WIKI_INIT' => EVENT_TYPE_FIRST,
	'EVENT_WIKI_LINK_BUG' => EVENT_TYPE_FIRST,
	'EVENT_WIKI_LINK_PROJECT' => EVENT_TYPE_FIRST,

	# Logging (tracing) events
	'EVENT_LOG' => EVENT_TYPE_EXECUTE,
) );