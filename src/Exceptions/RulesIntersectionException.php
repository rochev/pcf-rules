<?php

namespace Rochev\PhpCsFixer\Exceptions;

use Exception;

/**
 * Class IntersectingRulesException
 */
class RulesIntersectionException extends Exception
{
    /**
     * @var array
     */
    private array $rules_keys;

    /**
     * IntersectingRulesException constructor.
     *
     * @param array $intersection_rules
     */
    public function __construct(array $intersection_rules)
    {
        $this->rules_keys = $intersection_rules;

        /** @var array $items */
        $items = array_map(function ($rule_key) {
            return ' – ' . $rule_key;
        }, $this->rules_keys);

        /** @var string $list */
        $list = implode(PHP_EOL, $items);

        parent::__construct('Rules keys overlaps:' . PHP_EOL . $list);
    }
}
