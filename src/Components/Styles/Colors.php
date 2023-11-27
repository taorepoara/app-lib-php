<?php

namespace Lenra\App\Components\Styles;

class Colors {
    public const WHITE = 0xffffffff;
    public const BLACK = 0xff000000;
    public const TRANSPARENT_MASK = 0x00ffffff;

    /**
     * Calculate the luminance of a given color
     * @param int $color The color
     * @return float The luminance value between 0 (for black) and 1 (for white)
     */
    public static function luminance(int $color): float {
        if ($color === null) {
            throw new \Exception("The color is undefined");
        }
        $colorBI = $color;
        $r = (($colorBI & 0xff0000) >> 16) / 255;
        $g = (($colorBI & 0xff00) >> 8) / 255;
        $b = ($colorBI & 0xff) / 255;
        return 0.2126 * $r + 0.7152 * $g + 0.0722 * $b;
    }

    public static function betterContrast(int $color, int ...$comparedColors): int {
        if (count($comparedColors) == 1) {
            trigger_error("It was easy to find the best contrast since there is only color to compare", E_USER_WARNING);
            return $comparedColors[0];
        }
        $luminanceForRatio = Colors::luminance($color) + 0.05;
        if (count($comparedColors) == 0) {
            // Specific black and white case
            $blackRatio = $luminanceForRatio / 0.05;
            $whiteRatio = $luminanceForRatio / 1.05;
            if ($blackRatio < 1) $blackRatio = 1 / $blackRatio;
            if ($whiteRatio < 1) $whiteRatio = 1 / $whiteRatio;
            return $blackRatio > $whiteRatio ? Colors::BLACK : Colors::WHITE;
        }

        $sortedColors = array_map(function ($c) use ($luminanceForRatio) {
            $ratio = $luminanceForRatio / (Colors::luminance($c) + 0.05);
            if ($ratio < 1) $ratio = 1 / $ratio;
            return [
                'color' => $c,
                'ratio' => $ratio
            ];
        }, $comparedColors);
        usort($sortedColors, function ($a, $b) {
            return $b['ratio'] - $a['ratio'];
        });
        return $sortedColors[0]['color'];
    }

    public static function opacity(int $color, float $a): int {
        $ret = max(0, min(Colors::WHITE, round($a * Colors::WHITE)));
        $mask = $ret & Colors::TRANSPARENT_MASK;
        $ret -= $mask;
        $ret += $color & Colors::TRANSPARENT_MASK;
        return $ret;
    }

    public static function fromHex(string $colorHex): ?int {
        if (!$colorHex || !preg_match('/^#[a-fA-F0-9]{6}$/', $colorHex)) {
            return null;
        }
        return hexdec(substr($colorHex, 1)) | 0xff000000;
    }

    public static function toHex(int $color): ?string {
        if (!is_int($color)) {
            return null;
        }
        $hex = dechex(0x00ffffff & $color);
        while (strlen($hex) < 6) {
            $hex = "0" . $hex;
        }
        return "#" . $hex;
    }
}

class LenraColors {
    public const BLUE_PULSE = 0xff19acea;

    public const GREEN_PULSE = 0xff389589;
    public const YELLOW_PULSE = 0xffef902c;
    public const RED_PULSE = 0xffe92236;
}
