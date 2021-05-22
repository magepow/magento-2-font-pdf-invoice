<?php

/**
 * @Author: nguyen
 * @Date:   2021-05-13 13:38:40
 * @Last Modified by: Alex Dong
 * @Last Modified time: 2021-05-13 14:05:49
 */

namespace Magepow\CustomPdfFont\Model\Config\Source;

class Type implements \Magento\Framework\Option\ArrayInterface
{
 
    public function toOptionArray()
    {
        return [
            ['value' => 'lib/internal/GnuFreeFont/Fireflysung.ttf','label' => __('Chinese Language')],
            ['value' => 'lib/internal/traditional-arabic/trado.ttf','label' => __('Traditional-arabic')],
            ['value' => 'lib/internal/greek/OpenSans-Regular.ttf','label' => __('Greek Language')],
        ];
    }

}