<?php
class Filtr8_EzMagazine_IndexController extends Mage_Core_Controller_Front_Action{
    public function IndexAction() {
      
	  $this->loadLayout();   
	  $this->getLayout()->getBlock("head")->setTitle($this->__("Magazine"));
	        $breadcrumbs = $this->getLayout()->getBlock("breadcrumbs");
            $breadcrumbs->addCrumb("home", array(
                    "label" => $this->__("Home Page"),
                    "title" => $this->__("Home Page"),
                    "link"  => Mage::getBaseUrl()
            ));

      $breadcrumbs->addCrumb("magazine", array(
                "label" => $this->__("Magazine"),
                "title" => $this->__("Magazine")
		   ));

      $this->renderLayout(); 
	  
    }
}