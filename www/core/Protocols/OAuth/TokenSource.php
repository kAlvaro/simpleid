<?php
/*
 * SimpleID
 *
 * Copyright (C) Kelvin Mo 2014-2022
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public
 * License as published by the Free Software Foundation; either
 * version 2 of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
 * General Public License for more details.
 *
 * You should have received a copy of the GNU General Public
 * License along with this program; if not, write to the Free
 * Software Foundation, Inc., 675 Mass Ave, Cambridge, MA 02139, USA.
 */

namespace SimpleID\Protocols\OAuth;

/**
 * An OAuth artefact that can be used to generate access tokens.
 * Under the base OAuth specification, these could be an authorization
 * code or a refresh token.
 *
 * If an access token is generated by a token source, the reference to
 * that source is encoded along with the access token.  This allows
 * all access tokens issued by this source to be revoked if the
 * source is found to be compromised.
 */
interface TokenSource {
    /**
     * Returns whether the source is still valid and has not been
     * revoked.
     *
     * The precise criteria for validity is determined by the implementing
     * class.
     *
     * @return bool true if the artefact is still valid
     */
    public function isValid();

    /**
     * Returns a reference to the identifier of the source artefact.
     *
     * Normally the reference is simply a substring of the artefact's
     * ID.
     *
     * @return string the source reference
     */
    public function getSourceRef();
}

?>