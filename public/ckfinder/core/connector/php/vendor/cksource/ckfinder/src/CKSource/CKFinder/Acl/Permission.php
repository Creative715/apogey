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

namespace CKSource\CKFinder\Acl;

use InvalidArgumentException;
use ReflectionClass;
use function constant;
use function defined;

/**
 * The Permission class.
 */
class Permission
{
    const FOLDER_VIEW = 1;
    const FOLDER_CREATE = 2;
    const FOLDER_RENAME = 4;
    const FOLDER_DELETE = 8;

    const FILE_VIEW = 16;
    const FILE_CREATE = 32;
    const FILE_RENAME = 64;
    const FILE_DELETE = 128;

    const IMAGE_RESIZE = 256;
    const IMAGE_RESIZE_CUSTOM = 512;

    /**
     * @deprecated use FILE_CREATE instead
     */
    const FILE_UPLOAD = 32;

    /**
     * Returns an array of all permissions defined in the Permission class constants.
     *
     * @return array an array of permission constants in the form of
     *               PERMISSION_NAME => value
     */
    public static function getAll()
    {
        $ref = new ReflectionClass(__CLASS__);

        return $ref->getConstants();
    }

    /**
     * Returns a numeric value for the passed permission name.
     *
     * @param string $name permission constant name
     *
     * @throws InvalidArgumentException when the permission with a given name was not found
     *
     * @return int permission value
     */
    public static function byName($name)
    {
        $formattedName = sprintf('static::%s', strtoupper($name));

        if (!defined($formattedName)) {
            throw new InvalidArgumentException(sprintf('The permission "%s" doesn\'t exist', $name));
        }

        return constant($formattedName);
    }
}
