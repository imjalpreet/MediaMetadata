<?php
/**
 * ownCloud - trialapp
 *
 * This file is licensed under the Affero General Public License version 3 or
 * later. See the COPYING file.
 *
 * @author Jalpreet Singh Nanda <jalpreetnanda@gmail.com>
 * @copyright Jalpreet Singh Nanda 2016
 */

namespace OCA\TrialApp\Hooks;


use OCA\TrialApp\AppInfo\Application;

class FileHooksStatic {
	static protected function getHooks() {
		$app = new Application();
		return $app->getContainer()->query('FileHooks');
	}

	public static function postCreate($params) {
		// Log the path
		$logger = \OC::$server->getLogger();
		$logger->log('debug', $params['path'], array('app' => 'TrialApp'));

		//TODO: Complete the post_Create function
		//self::getHooks()->post_Create($params);
	}
}