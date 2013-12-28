<?php
require_once "BaseController.php";
class EbayController extends BaseController
{

    public function init()
    {
        /* Initialize action controller here */         
        $this->menuItemActive("ebay");
        $this->_helper->layout->enableLayout();
    }

    public function indexAction()
    {
        // action body
        try{
            $phpLiveDocx = new Zend_Service_LiveDocx_MailMerge();     
            $phpLiveDocx->setUsername('deep7178')
                        ->setPassword('ramesh45');            
            $phpLiveDocx->setLocalTemplate('./template.docx');            
            /*$phpLiveDocx->assign('software', 'Magic Graphical Compression Suite v1.9')
                        ->assign('licensee', 'Henry Döner-Meyer')
                        ->assign('company',  'Co-Operation');             
            $phpLiveDocx->createDocument();             
            $document = $phpLiveDocx->retrieveDocument('pdf');             
            file_put_contents('document.pdf', $document);    */
        }
        catch(Exception $e){
            echo $e->getMessage();
        }
        
    }	


}

