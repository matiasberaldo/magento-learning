<?php
namespace SimplifiedMagento\FirstModule\Controller\Page;

use Magento\Framework\App\ResponseInterface;

/**
 *  HelloWorld class that extends Action\Action
 */
class HelloWorld extends \Magento\Framework\App\Action\Action
{

  function __construct(argument)
  {

  }

  public function execute () {
    echo "Hello World!";
  }

}


 ?>
