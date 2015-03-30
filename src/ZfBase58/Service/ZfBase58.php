<?php
/**
 *
 * User: semihs
 * Date: 30.03.15
 * Time: 14:50
 *
 */

namespace ZfBase58\Service;

class ZfBase58
{
    private $options = array ();

    public function __construct($options = array ())
    {
        $this->options = $options;
    }

    public function encode($num)
    {
        $alphabet = $this->options['alphabet'];
        $base_count = strlen($alphabet);
        $encoded = '';

        while ($num >= $base_count) {
            $div = $num / $base_count;
            $mod = ($num - ($base_count * intval($div)));
            $encoded = $alphabet[$mod] . $encoded;
            $num = intval($div);
        }

        if ($num) {
            $encoded = $alphabet[$num] . $encoded;
        }

        return $encoded;
    }

    public function decode($num)
    {
        $alphabet = $this->options['alphabet'];
        $len = strlen($num);
        $decoded = 0;
        $multi = 1;

        for ($i = $len - 1; $i >= 0; $i--) {
            $decoded += $multi * strpos($alphabet, $num[$i]);
            $multi = $multi * strlen($alphabet);
        }

        return $decoded;
    }
} 