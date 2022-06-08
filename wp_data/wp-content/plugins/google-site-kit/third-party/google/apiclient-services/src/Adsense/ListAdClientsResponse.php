<?php

/*
 * Copyright 2014 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */
namespace Google\Site_Kit_Dependencies\Google\Service\Adsense;

class ListAdClientsResponse extends \Google\Site_Kit_Dependencies\Google\Collection
{
    protected $collection_key = 'adClients';
    protected $adClientsType = \Google\Site_Kit_Dependencies\Google\Service\Adsense\AdClient::class;
    protected $adClientsDataType = 'array';
    public $nextPageToken;
    /**
     * @param AdClient[]
     */
    public function setAdClients($adClients)
    {
        $this->adClients = $adClients;
    }
    /**
     * @return AdClient[]
     */
    public function getAdClients()
    {
        return $this->adClients;
    }
    public function setNextPageToken($nextPageToken)
    {
        $this->nextPageToken = $nextPageToken;
    }
    public function getNextPageToken()
    {
        return $this->nextPageToken;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(\Google\Site_Kit_Dependencies\Google\Service\Adsense\ListAdClientsResponse::class, 'Google\\Site_Kit_Dependencies\\Google_Service_Adsense_ListAdClientsResponse');
