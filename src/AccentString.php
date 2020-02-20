<?php

namespace AccentStringRegexBuilder;

class AccentString
{
    private const LETTERS_WITH_ACCENT = [
        'a' => 'aáàãâä',
        'e' => 'eéèêë',
        'i' => 'iíìîï',
        'o' => 'oóòõôö',
        'u' => 'uúùûü',
        'c' => 'cç',
    ];

    /**
     * @param string $text
     * @return string
     */
    public static function toRegex(string $text): string
    {
        $text = \strtolower($text);

        foreach (self::LETTERS_WITH_ACCENT as $letterWithAccent) {
            $text = preg_replace(
                "/[{$letterWithAccent}]/ui",
                "[{$letterWithAccent}]",
                $text
            );
        }

        return $text;
    }
}
