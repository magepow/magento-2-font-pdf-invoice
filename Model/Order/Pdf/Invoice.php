<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Magepow\CustomPdfFont\Model\Order\Pdf;

class Invoice extends \Magento\Sales\Model\Order\Pdf\Invoice
{

    /**
     * Set font as regular
     *
     * @param  \Zend_Pdf_Page $object
     * @param  int $size
     * @return \Zend_Pdf_Resource_Font
     */
    protected function _setFontRegular($object, $size = 7,$store = null)
    {   
        $languageType = $this->_scopeConfig->getValue(
            'magepow_pdfinvoicefrontend/general/type',
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE,
            $store
        );
        if ($languageType) {
            $font = \Zend_Pdf_Font::fontWithPath(
                $this->_rootDirectory->getAbsolutePath($languageType)
            );
        }else{
            $font = \Zend_Pdf_Font::fontWithPath(
                $this->_rootDirectory->getAbsolutePath('lib/internal/GnuFreeFont/FreeSerif.ttf')
            );
        }
        $object->setFont($font, $size);
        return $font;
    }

}
