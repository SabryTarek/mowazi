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
namespace Google\Site_Kit_Dependencies\Google\Service\GoogleAnalyticsAdmin;

class GoogleAnalyticsAdminV1alphaAuditUserLinksRequest extends \Google\Site_Kit_Dependencies\Google\Model
{
    public $pageSize;
    public $pageToken;
    public function setPageSize($pageSize)
    {
        $this->pageSize = $pageSize;
    }
    public function getPageSize()
    {
        return $this->pageSize;
    }
    public function setPageToken($pageToken)
    {
        $this->pageToken = $pageToken;
    }
    public function getPageToken()
    {
        return $this->pageToken;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(\Google\Site_Kit_Dependencies\Google\Service\GoogleAnalyticsAdmin\GoogleAnalyticsAdminV1alphaAuditUserLinksRequest::class, 'Google\\Site_Kit_Dependencies\\Google_Service_GoogleAnalyticsAdmin_GoogleAnalyticsAdminV1alphaAuditUserLinksRequest');
