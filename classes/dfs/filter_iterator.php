<?php
/**
 * This file is part of the eZ Publish Legacy package
 *
 * @copyright Copyright (C) eZ Systems AS. All rights reserved.
 * @license For full copyright and license information view LICENSE file distributd with this source code.
 * @version //autogentag//
 */

/**
 * A filter iterator used by eZDFSFileHandlerDFSBackend.
 * It filters directories out, and converts the current() return value to a relative path to the file.
 */
class eZDFSFileHandlerDFSAmazonFilterIterator extends FilterIterator
{
    /**
     * Filters directories out
     */
    public function accept()
    {
        return true;
    }

    /**
     * Transforms the SplFileInfo in a simple relative path
     *
     * @return string The relative path to the current file
     */
    public function current()
    {
        $current = $this->getInnerIterator()->current();
        return $current['Key'];
    }
}
