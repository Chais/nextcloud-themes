<?php
/**
 * @author Björn Schießle <schiessle@owncloud.com>
 * @author Jan-Christoph Borchardt, http://jancborchardt.net
 * @copyright Copyright (c) 2016, ownCloud, Inc.
 * @license AGPL-3.0
 *
 * This code is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License, version 3,
 * as published by the Free Software Foundation.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License, version 3,
 * along with this program.  If not, see <http://www.gnu.org/licenses/>
 */

class OC_Theme {

	/**
	 * Returns the base URL
	 * @return string URL
	 */
	public function getBaseUrl() {
		return 'https://nextcloud.com';
	}

	/**
	 * Returns the URL where the sync clients are listed
	 * @return string URL
	 */
	public function getSyncClientUrl() {
		return 'https://nextcloud.com/install';
	}

	/**
	 * Returns the URL to the App Store for the iOS Client
	 * @return string URL
	 */
	public function getiOSClientUrl() {
		return 'https://itunes.apple.com/us/app/owncloud/id543672169?mt=8';
	}

	/**
	 * Returns the AppId for the App Store for the iOS Client
	 * @return string AppId
	 */
	public function getiTunesAppId() {
		return '543672169';
	}

	/**
	 * Returns the URL to Google Play for the Android Client
	 * @return string URL
	 */
	public function getAndroidClientUrl() {
		return 'https://play.google.com/store/apps/details?id=com.nextcloud.client';
	}

	/**
	 * Returns the documentation URL
	 * @return string URL
	 */
	public function getDocBaseUrl() {
		return 'https://docs.nextcloud.org';
	}

	/**
	 * Returns the title
	 * @return string title
	 */
	public function getTitle() {
		return 'Nextcloud';
	}

	/**
	 * Returns the short name of the software
	 * @return string title
	 */
	public function getName() {
		return 'Nextcloud';
	}

	/**
	 * Returns the short name of the software containing HTML strings
	 * @return string title
	 */
	public function getHTMLName() {
		return 'Nextcloud';
	}

	/**
	 * Returns entity (e.g. company name) - used for footer, copyright
	 * @return string entity name
	 */
	public function getEntity() {
		return 'Nextcloud';
	}

	/**
	 * Returns slogan
	 * @return string slogan
	 */
	public function getSlogan() {
		return 'a safe home for all your data';
	}

	/**
	 * Returns logo claim
	 * @return string logo claim
	 */
	public function getLogoClaim() {
		return '';
	}

	/**
	 * Returns short version of the footer
	 * @return string short footer
	 */
	public function getShortFooter() {
		$footer = '© 2016 <a href="'.$this->getBaseUrl().'" target="_blank\">'.$this->getEntity().'</a>'.
			'<br/>' . $this->getSlogan();

		return $footer;
	}

	/**
	 * Returns long version of the footer
	 * @return string long footer
	 */
	public function getLongFooter() {
		$footer = '© 2016 <a href="'.$this->getBaseUrl().'" target="_blank\">'.$this->getEntity().'</a>'.
			'<br/>' . $this->getSlogan();

		return $footer;
	}

	public function buildDocLinkToKey($key) {
		return $this->getDocBaseUrl() . '/server/9/go.php?to=' . $key;
	}


	/**
	 * Returns mail header color
	 * @return string
	 */
	public function getMailHeaderColor() {
		return '#1794d1';
	}

}
