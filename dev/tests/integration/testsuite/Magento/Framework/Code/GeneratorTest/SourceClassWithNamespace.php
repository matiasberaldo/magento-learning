<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\Framework\Code\GeneratorTest;

use Zend\Code\Generator\ClassGenerator;

class SourceClassWithNamespace extends ParentClassWithNamespace
{
    /**
     * Public child constructor
     *
     * @param string $param1
     * @param string $param2
     * @param string $param3
     *
     * @SuppressWarnings(PHPMD.UnusedFormalParameter)
     */
    public function __construct($param1 = '', $param2 = '\\', $param3 = '\'')
    {
    }

    /**
     * Public child method
     *
     * @param \Zend\Code\Generator\ClassGenerator $classGenerator
     * @param string $param1
     * @param string $param2
     * @param string $param3
     * @param array $array
     * @return void
     *
     * @SuppressWarnings(PHPMD.UnusedFormalParameter)
     */
    public function publicChildMethod(
        ClassGenerator $classGenerator,
        $param1 = '',
        $param2 = '\\',
        $param3 = '\'',
        array $array = []
    ) {
    }

    /**
     * Public child method with reference
     *
     * @param \Zend\Code\Generator\ClassGenerator $classGenerator
     * @param string $param1
     * @param array $array
     *
     * @SuppressWarnings(PHPMD.UnusedFormalParameter)
     */
    public function publicMethodWithReference(ClassGenerator &$classGenerator, &$param1, array &$array)
    {
    }

    /**
     * Protected child method
     *
     * @param \Zend\Code\Generator\ClassGenerator $classGenerator
     * @param string $param1
     * @param string $param2
     * @param string $param3
     *
     * @SuppressWarnings(PHPMD.UnusedFormalParameter)
     */
    protected function _protectedChildMethod(
        ClassGenerator $classGenerator,
        $param1 = '',
        $param2 = '\\',
        $param3 = '\''
    ) {
    }

    /**
     * Private child method
     *
     * @param \Zend\Code\Generator\ClassGenerator $classGenerator
     * @param string $param1
     * @param string $param2
     * @param string $param3
     * @param array $array
     * @return void
     *
     * @SuppressWarnings(PHPMD.UnusedPrivateMethod)
     * @SuppressWarnings(PHPMD.UnusedFormalParameter)
     */
    private function _privateChildMethod(
        ClassGenerator $classGenerator,
        $param1 = '',
        $param2 = '\\',
        $param3 = '\'',
        array $array = []
    ) {
    }

    public function publicChildWithoutParameters()
    {
    }

    public static function publicChildStatic()
    {
    }

    /**
     * @SuppressWarnings(PHPMD.FinalImplementation) Suppressed as is a fixture but not a real code
     */
    final public function publicChildFinal()
    {
    }

    /**
     * @param mixed $arg1
     * @param string $arg2
     * @param int|null $arg3
     * @param int|null $arg4
     *
     * @return void
     *
     * @SuppressWarnings(PHPMD.UnusedFormalParameter)
     */
    public function public71(
        $arg1,
        string $arg2,
        ?int $arg3,
        ?int $arg4 = null
    ): void {
    }

    /**
     * @param \DateTime|null $arg1
     * @param mixed $arg2
     *
     * @return null|string
     *
     * @SuppressWarnings(PHPMD.UnusedFormalParameter)
     */
    public function public71Another(?\DateTime $arg1, $arg2 = false): ?string
    {
    }
}
