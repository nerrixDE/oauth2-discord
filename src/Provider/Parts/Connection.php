<?php
/*
 * This file is a part of the oauth2-discord project.
 *
 * Copyright (c) 2016 David Cole <david@team-reflex.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the LICENSE.md file.
 */
namespace pnobbe\Oauth2\Client\Parts;
use pnobbe\Oauth2\Client\Part;

class Connection extends Part
{
    /**
     * {@inheritdoc}
     */
    protected $fillable = [
        'id',
        'name',
        'type',
    ];
}