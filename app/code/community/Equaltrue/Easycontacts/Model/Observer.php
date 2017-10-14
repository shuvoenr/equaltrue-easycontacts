<?php

	class Equaltrue_Easycontacts_Model_Observer {

		public function indexPreDispatch($observer){
            Mage::getSingleton('customer/session')->addSuccess(Mage::helper('contacts')->__('I am calling....'));
		}
	}