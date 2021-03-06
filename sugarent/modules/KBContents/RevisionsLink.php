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

require_once("data/Link2.php");

class RevisionsLink extends Link2
{
    /**
     * {@inheritdoc}
     */
    function buildJoinSugarQuery($sugar_query, $options = array())
    {
        $sugar_query->where()
            ->notEquals('id', $this->focus->id)
            ->equals('kbdocument_id', $this->focus->kbdocument_id)
            ->equals('kbarticle_id', $this->focus->kbarticle_id);
        $sugar_query->distinct('kbcontents.id');

        return $this->relationship->buildJoinSugarQuery($this, $sugar_query, $options);
    }
}
