<?php

if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

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

require_once 'modules/ModuleBuilder/parsers/MetaDataFileInterface.php';

/**
 * Sidecar metadata file
 */
class MetaDataFileSidecar implements MetaDataFileInterface
{
    /**
     * @var MetaDataFile
     */
    protected $file;

    /**
     * @var string
     */
    protected $client;

    /**
     * Constructor
     *
     * @param MetaDataFileInterface $file
     * @param string $client
     */
    public function __construct(MetaDataFileInterface $file, $client)
    {
        $this->file = $file;
        $this->client = $client;
    }

    /** {@inheritDoc} */
    public function getPath()
    {
        $path = $this->file->getPath();
        array_splice($path, 2, 0, array('clients', $this->client, 'views'));
        $path[] = end($path);

        return $path;
    }
}
