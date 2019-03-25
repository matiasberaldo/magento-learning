<?php
namespace SimplifiedMagento\FirstModule\Controller\Page;

use Magento\Framework\App\ResponseInterface;
use Magento\Framework\App\Action\Context;
use SimplifiedMagento\FirstModule\NotMagento\PencilInterface;
use Magento\Vault\Api\PaymentTokenManagementInterface;

/**
 *  HelloWorld class that extends Action\Action
 */
class HelloWorld extends \Magento\Framework\App\Action\Action
{
  protected $pencilInterface;
  protected $paymentTokenManagement;
  public function __construct (Context $context, PencilInterface $pencilInterface, PaymentTokenManagementInterface $paymentTokenManagement) {
    $this->pencilInterface = $pencilInterface;
    $this->paymentTokenManagement = $paymentTokenManagement;
    parent::__construct($context);
  }

  public function execute () {
    // echo $this->pencilInterface->getPencilType();
    echo get_class($this->paymentTokenManagement). "Prove that cron executed successfully";
  }

}


 ?>
