<?php

declare(strict_types=1);

namespace Casbin\Persist;

/**
 * BatchAdapter is the interface for Casbin adapters with multiple add and
 * remove policy functions.
 */
interface BatchAdapter
{
    /**
     * adds a policy rules to the storage.
     * This is part of the Auto-Save feature.
     *
     * @param string $sec
     * @param string $ptype
     * @param array  $rules
     */
    public function addPolicies(string $sec, string $ptype, array $rules): void;

    /**
     * removes policy rules from the storage.
     * This is part of the Auto-Save feature.
     *
     * @param string $sec
     * @param string $ptype
     * @param array  $rules
     */
    public function removePolicies(string $sec, string $ptype, array $rules): void;
}
