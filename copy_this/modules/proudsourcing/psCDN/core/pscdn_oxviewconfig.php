<?php
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
        if(!$this->isAdmin() && !empty($sShopImgURL)) {
            return str_replace($sShopURL, $sShopImgURL.'/', $sValue);
        }
        // psCDN | end
        
        return $sValue;
    }
      
}
