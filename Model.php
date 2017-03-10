<?php

namespace ThinkphpPlus;

/**
 *
 */
class Model extends \Think\Model
{
    /**
     * auto默认时间
     * @return datetime        Y-m-d
     */
    protected function setDate()
    {
        return date('Y-m-d');
    }

    /**
     * auto默认时间
     * @return datetime        Y-m-d H:i:s
     */
    protected function setDatetime()
    {
        return date('Y-m-d H:i:s');
    }

    /**
     * auto空时默认时间
     * @return datetime        Y-m-d H:i:s
     */
    protected function setEmptyDatetime($value)
    {
        return empty($value) ? date('Y-m-d H:i:s') : $value;
    }

    /**
     * auto数据第一个为值
     * @param array $value 数据
     */
    protected function setArrayFirst($value)
    {
        return is_array($value) ? $value[0] : $value;
    }

    /**
     * auto数据第一个为值
     * @param array $value 数据
     */
    protected function setDefault($value)
    {
        return $value;
    }
}
