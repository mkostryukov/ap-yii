<?php

/*
 * This file is part of the Dektrium project.
 *
 * (c) Dektrium project <http://github.com/dektrium/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace backend\controllers\user;

use dektrium\user\controllers\SecurityController as BaseSecurityController;

/**
 * Controller that manages user authentication process.
 */
class SecurityController extends BaseSecurityController
{
    public function actionLogin()
    {
        $this->layout = '//main-login';
        return parent::actionLogin();
    }
}
