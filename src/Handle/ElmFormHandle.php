<?php
/**
 * PHP表单生成器
 *
 * @package  FormBuilder
 * @author   xaboy <xaboy2005@qq.com>
 * @version  2.0
 * @license  MIT
 * @link     https://github.com/xaboy/form-builder
 */

namespace FormBuilder\Handle;


use FormBuilder\FormHandle;

/**
 * ElementUI 表单生成类
 * Class ElmFormHandle
 * @package FormBuilder\Factory
 */
abstract class ElmFormHandle extends FormHandle
{

    protected function ui()
    {
        return 'elm';
    }
}