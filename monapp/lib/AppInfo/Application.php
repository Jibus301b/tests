<?php

declare(strict_types=1);
// SPDX-FileCopyrightText: DMatthieu <jibus301b@gmail.com>
// SPDX-License-Identifier: AGPL-3.0-or-later

namespace OCA\MonApp\AppInfo;

use OCA\MonApp\Dashboard\SimpleWidget;
use OCP\AppFramework\App;
use OCP\AppFramework\Bootstrap\IBootContext;
use OCP\AppFramework\Bootstrap\IBootstrap;
use OCP\AppFramework\Bootstrap\IRegistrationContext;

class Application extends App implements IBootstrap {
	public const APP_ID = 'monapp';

	public function __construct(array $urlParams = []) {
  		parent::__construct(self::APP_ID, $urlParams);
  	}


	public function register(IRegistrationContext $context): void {
		$context->registerDashboardWidget(SimpleWidget::class);
	}

	public function boot(IBootContext $context): void {
	}
}
