<?php
/**
 * Copyright 2017 Google Inc. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace Google\AdsApi\Common;

use PHPUnit_Framework_TestCase;

/**
 * A test case that needs suppression of trigger_error().
 */
class SuppressTriggerErrorTestCase extends PHPUnit_Framework_TestCase {

  /**
   * @see PHPUnit_Framework_TestCase::setUp
   */
  protected function setUp() {
    error_reporting(E_ALL & ~E_USER_NOTICE);
  }
}
