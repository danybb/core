<?php
/**
 * ownCloud
 *
 * @author Thomas Müller
 * @copyright 2013 Thomas Müller deepdiver@owncloud.com
 *
 * This library is free software; you can redistribute it and/or
 * modify it under the terms of the GNU AFFERO GENERAL PUBLIC LICENSE
 * License as published by the Free Software Foundation; either
 * version 3 of the License, or any later version.
 *
 * This library is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU AFFERO GENERAL PUBLIC LICENSE for more details.
 *
 * You should have received a copy of the GNU Affero General Public
 * License along with this library.  If not, see <http://www.gnu.org/licenses/>.
 *
 */

namespace OCP;


/**
 * Class IServerContainer
 * @package OCP
 *
 * This container holds all ownCloud services
 */
interface IServerContainer {

	/**
	 * The contacts manager will act as a broker between consumers for contacts information and
	 * providers which actual deliver the contact information.
	 *
	 * @return \OCP\Contacts\IManager
	 */
	function getContactsManager();

	/**
	 * The current request object holding all information about the request currently being processed
	 * is returned from this method.
	 * In case the current execution was not initiated by a web request null is returned
	 *
	 * @return \OCP\IRequest|null
	 */
	function getRequest();

	/**
	 * Returns the preview manager which can create preview images for a given file
	 *
	 * @return \OCP\IPreview
	 */
	function getPreviewManager();

	/**
	 * Returns the root folder of ownCloud's data directory
	 *
	 * @return \OCP\Files\Folder
	 */
	function getRootFolder();

	/**
	 * Returns an ICache instance
	 *
	 * @return \OCP\ICache
	 */
	function getCache();

	/**
	 * Returns the current session
	 *
	 * @return \OCP\ISession
	 */
	function getSession();

	/**
	 * @brief Returns an avatar manager, used for avatar functionality
	 * @return \OCP\IAvatar
	 */
	function getAvatar();

}
