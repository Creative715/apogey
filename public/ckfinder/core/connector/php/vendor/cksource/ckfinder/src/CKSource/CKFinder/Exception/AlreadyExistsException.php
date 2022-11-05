<?php

/*
 * CKFinder
 * ========
 * https://ckeditor.com/ckfinder/
 * Copyright (c) 2007-2021, CKSource - Frederico Knabben. All rights reserved.
 *
 * The software, this file and its contents are subject to the CKFinder
 * License. Please read the license.txt file before using, installing, copying,
 * modifying or distribute this file or part of its contents. The contents of
 * this file is part of the Source Code of CKFinder.
 */

namespace CKSource\CKFinder\Exception;

use CKSource\CKFinder\Error;
use Exception;

/**
 * The "already exists" exception class.
 *
 * Thrown when a file or folder already exists.
 */
class AlreadyExistsException extends CKFinderException
{
    /**
     * Constructor.
     *
     * @param string     $message    the exception message
     * @param array      $parameters the parameters passed for translation
     * @param Exception $previous   the previous exception
     */
    public function __construct($message = null, $parameters = [], Exception $previous = null)
    {
        parent::__construct($message, Error::ALREADY_EXIST, $parameters, $previous);
    }
}
