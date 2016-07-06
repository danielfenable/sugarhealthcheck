<?php
/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */

namespace Sugarcrm\Sugarcrm\Security\Csrf;

use Symfony\Component\Security\Csrf\Exception\TokenNotFoundException;
use Symfony\Component\Security\Csrf\TokenStorage\TokenStorageInterface;

/**
 * Token storage that uses PHP's native session handling. This class
 * assumes the users session is already started and available.
 *
 * Code based on symfony/security-csrf:
 * @see \Symfony\Component\Security\Csrf\TokenStorage\NativeSessionTokenStorage
 */
class CsrfTokenStorage implements TokenStorageInterface
{
    /**
     * The namespace used to store values in the session.
     * @var string
     */
    const SESSION_NAMESPACE = 'csrf_tokens';

    /**
     * {@inheritdoc}
     */
    public function getToken($tokenId)
    {
        if (!isset($_SESSION[self::SESSION_NAMESPACE][$tokenId])) {
            throw new TokenNotFoundException('The CSRF token with ID '.$tokenId.' does not exist.');
        }

        return (string) $_SESSION[self::SESSION_NAMESPACE][$tokenId];
    }

    /**
     * {@inheritdoc}
     */
    public function setToken($tokenId, $token)
    {
        $_SESSION[self::SESSION_NAMESPACE][$tokenId] = (string) $token;
    }

    /**
     * {@inheritdoc}
     */
    public function hasToken($tokenId)
    {
        return isset($_SESSION[self::SESSION_NAMESPACE][$tokenId]);
    }

    /**
     * {@inheritdoc}
     */
    public function removeToken($tokenId)
    {
        $token = isset($_SESSION[self::SESSION_NAMESPACE][$tokenId])
            ? (string) $_SESSION[self::SESSION_NAMESPACE][$tokenId]
            : null;

        unset($_SESSION[self::SESSION_NAMESPACE][$tokenId]);

        return $token;
    }
}
