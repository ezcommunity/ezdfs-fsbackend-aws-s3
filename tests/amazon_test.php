<?php
/**
 * This file is part of the eZ Publish Legacy package
 *
 * @copyright Copyright (C) eZ Systems AS. All rights reserved.
 * @license For full copyright and license information view LICENSE file distributd with this source code.
 * @version //autogentag//
 */

use Model;

class eZDFSFileHandlerDFSAmazonTest extends ezpTestCase
{
    /** @var \Aws\S3\S3Client|PHPUnit_Framework_MockObject_MockObject */
    private $s3ClientMock;

    /** @var eZDFSFileHandlerDFSAmazon */
    private $dfs;

    public function setUp()
    {
        $this->s3ClientMock = $this->getMockBuilder( 'Aws\S3\S3Client' )->disableOriginalConstructor()->getMock();
        $this->dfs = new eZDFSFileHandlerDFSAmazon(
            $this->s3ClientMock,
            'bucket-name',
            'var/test/storage/images'
        );
    }

    public function testFactory()
    {
        self::markTestIncomplete( "@todo implement" );
    }

    /** @dataProvider pathProvider */
    public function testSupports( $path, $expectation )
    {
        self::assertEquals(
            $expectation,
            $this->dfs->supports( $path )
        );
    }

    public function pathProvider()
    {
        return array(
            array( 'var/test/storage/images/0/8/4/1/1480-1-eng-GB/test.png', true ),
            array( 'var/test/storage/images-versioned/719/1-eng-GB/test.jpg', true ),
            array( 'var/ezdemo_site/cache/template/compiled/pagelayout-6e5fe40139616cc61d4426d5519fae5d.php', false ),
            array( 'var/othertest/storage/images-versioned/719/1-eng-GB/test.jpg', false ),
        );
    }

    public function testCopyFromDFSToDFS()
    {
        $this->s3ClientMock->expects( $this->once() )
            ->method( 'copyObject' )
            ->will( $this->returnValue( new Model() ) );

        self::assertTrue(
            $this->dfs->copyFromDFSToDFS( 'var/test/storage/images/a.png', 'var/test/storage/images/b.png' )
        );
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
