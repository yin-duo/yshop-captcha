<?php
declare (strict_types = 1);

namespace yshop\facade;

use think\Facade;

/**
 * Class Captcha
 * @package yshop\facade
 * @mixin \yshop\Captcha
 * @method static mixed create($config = null, $key_id = '') 输出验证码
 * @method static mixed check(string $code, $key_id = '') 验证验证码是否正确
 * @method static string getKeyId(string $key) 返回验证码标识
 */
class Captcha extends Facade
{
    protected static function getFacadeClass()
    {
        return \yshop\Captcha::class;
    }
}
