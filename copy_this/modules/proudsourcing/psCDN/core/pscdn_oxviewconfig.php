<?php
/**
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 * 
 * @copyright (c) Proud Sourcing GmbH | 2013
 * @link www.proudcommerce.com
 * @package psCDN
 * @version 1.0.0
**/
class pscdn_oxViewConfig extends pscdn_oxViewConfig_parent
{

    /**
     * Returns image url
     *
     * @param string $sFile Image file name
     *
     * @return string
     */
    public function getImageUrl( $sFile = null )
    {
        if ($sFile) {
           $sValue = $this->getConfig()->getImageUrl( $this->isAdmin(), $bSsl, null, $sFile );
        } elseif ( ( $sValue = $this->getViewConfigParam( 'imagedir' ) ) === null ) {
            $sValue = $this->getConfig()->getImageUrl( $this->isAdmin(), $bSsl );
            $this->setViewConfigParam( 'imagedir', $sValue );
        }

        // psCDN | start
        $sShopImgURL = $this->getConfig()->getConfigParam( 'sShopURLPsImg' );
        $sShopURL = $this->getConfig()->getConfigParam( 'sShopURL' );
        if(!$this->isAdmin() && !empty($sShopImgURL))
        {
            return str_replace($sShopURL, $sShopImgURL.'/', $sValue);
        }
        // psCDN | end
        
        return $sValue;
    }
      
}
