<?php

namespace Rochev\PhpCsFixer;

use Rochev\PhpCsFixer\Exceptions\RulesIntersectionException;
use Rochev\PhpCsFixer\Exceptions\RulesIsNotAnArrayException;

/**
 * Class Rules
 */
class Rules
{
    /**
     * @var array|null
     */
    public static ?array $rules_common = null;

    /**
     * @var array|null
     */
    public static ?array $rules_risky = null;

    /**
     * @param bool $allow_risky
     * @return array
     * @throws RulesIntersectionException
     * @throws RulesIsNotAnArrayException
     */
    public static function get(bool $allow_risky = false): array
    {
        self::loadAllRules();

        $rules = self::$rules_common;

        if ($allow_risky) {
            $rules = self::merge($rules, self::$rules_risky);
        }

        return $rules;
    }

    /**
     * @throws RulesIsNotAnArrayException
     */
    private static function loadAllRules(): void
    {
        self::loadRules('common');
        self::loadRules('risky');
    }

    /**
     * @param string $rules_name
     * @throws RulesIsNotAnArrayException
     */
    private static function loadRules(string $rules_name): void
    {
        $field_name = 'rules_' . $rules_name;

        if (is_array(self::$$field_name))
            return;

        /** @noinspection PhpIncludeInspection */
        $rules = include __DIR__ . '/rules/' . $rules_name . '.php';

        if (is_array($rules)) {
            self::$$field_name = $rules;
        } else {
            throw new RulesIsNotAnArrayException();
        }
    }

    /**
     * @param array $first
     * @param array $second
     * @throws RulesIntersectionException
     */
    private static function checkIntersection(array $first, array $second): void
    {
        $first_keys = array_keys($first);
        $second_keys = array_keys($second);

        $intersect = array_intersect($first_keys, $second_keys);

        if (count($intersect) > 0) {
            throw new RulesIntersectionException($intersect);
        }
    }

    /**
     * @param array $first
     * @param array $second
     * @return array
     * @throws RulesIntersectionException
     */
    public static function merge(array $first, array $second): array
    {
        self::checkIntersection($first, $second);

        return array_merge($first, $second);
    }
}
