<?php
/**
 * This file is part of the eZ Publish Legacy package
 *
 * @copyright Copyright (C) eZ Systems AS. All rights reserved.
 * @license For full copyright and license information view LICENSE file distributd with this source code.
 * @version //autogentag//
 */

class eZDFSFileHandlerDFSAmazonTest extends ezpTestCase
{
    /** @var \Aws\Common\Client\AwsClientInterface|PHPUnit_Framework_MockObject_MockObject */
    private $clientMock;

    public function setUp()
    {
        $this->clientMock = $this->getMock( 'Aws\Common\Client\AwsClientInterface' );
        $this->handler = new eZDFSFileHandlerDFSAmazon(
            $this->clientMock,
            'bucket-name',
            'var/test/storage/images'
        );
    }

    public function testFactory()
    {
        self::markTestIncomplete( "@todo implement" );
    }

    public function testSupports()
    {
        self::markTestIncomplete( "@todo implement" );
    }

    public function testCopyFromDFSToDFS()
    {
        self::markTestIncomplete( "@todo implement" );
    }

    public function testCopyFromDFS()
    {
        self::markTestIncomplete( "@todo implement" );
    }

    public function testCopyToDFS()
    {
        self::markTestIncomplete( "@todo implement" );
    }

    public function testDelete()
    {
        self::markTestIncomplete( "@todo implement" );
    }

    public function testPassthrough()
    {
        self::markTestIncomplete( "@todo implement" );
    }

    public function testGetContents()
    {
        self::markTestIncomplete( "@todo implement" );
    }

    public function testCreateFileOnDFS()
    {
        self::markTestIncomplete( "@todo implement" );
    }

    public function testRenameOnDFS()
    {
        self::markTestIncomplete( "@todo implement" );
    }

    public function testExistsOnDFS()
    {
        self::markTestIncomplete( "@todo implement" );
    }

    public function testFetDfsFileSize()
    {
        self::markTestIncomplete( "@todo implement" );
    }
}
