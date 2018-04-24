<?php
/**
 * @author    Dmytro Karpovych
 * @copyright 2018 NRE
 */


namespace app\components;


use Yii;
use yii\web\Application;

class WebApplication extends Application
{
    /**
     * Overrider bower and npm vendor directories
     * @param string $path
     */
    public function setVendorPath($path)
    {
        parent::setVendorPath($path);
        $vendorPath = $this->getVendorPath();
        Yii::setAlias('@bower', $vendorPath . DIRECTORY_SEPARATOR . 'bower-asset');
        Yii::setAlias('@npm', $vendorPath . DIRECTORY_SEPARATOR . 'npm-asset');
    }
}