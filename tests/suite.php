<?php
/**
 * This file is part of the eZ Publish Legacy package
 *
 * @copyright Copyright (C) eZ Systems AS. All rights reserved.
 * @license For full copyright and license information view LICENSE file distributd with this source code.
 * @version //autogentag//
 */
class eZDFSAmazonS3TestSuite extends ezpDatabaseTestSuite
{
    public function __construct()
    {
        parent::__construct();
        $this->setName( "eZ Comment Test Suite" );
        $this->addTestSuite( "eZDFSFileHandlerDFSAmazonTest" );
    }

    public static function suite()
    {
        return new self();
    }
}
