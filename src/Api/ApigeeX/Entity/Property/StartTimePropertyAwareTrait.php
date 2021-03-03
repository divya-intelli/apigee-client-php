<?php

/*
 * Copyright 2021 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace Apigee\Edge\Api\ApigeeX\Entity\Property;

/**
 * Trait StartTimePropertyAwareTrait.
 *
 * @see \Apigee\Edge\Api\ApigeeX\Entity\Property\StartTimePropertyInterface
 */
trait StartTimePropertyAwareTrait
{
    /**
     * @var \DateTimeImmutable|null
     */
    protected $startTime;

    /**
     * @inheritdoc
     */
    public function getStartTime(): ?\DateTimeImmutable
    {
        return $this->startTime;
    }

    /**
     * @inheritdoc
     */
    public function setStartTime(?\DateTimeImmutable $startTime): void
    {
        $this->startTime = $startTime;
    }
}