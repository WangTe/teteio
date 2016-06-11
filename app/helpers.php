<?php
/**
 * 自定义的辅助函数
 *
 * @author 风格独特
 * @version 1.0, 2016-06-11
 */

function static_url($path)
{
    return elixir($path, 'static/build');
}