<?php

namespace Timsa\ControlFletesBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class UserAdmin extends Admin{
	/**
	 * @param \Sonata\AdminBundle\Datagrid\ListMapper $listMapper
	 *
	 * @return void
	 */
	protected function configureListFields(ListMapper $listMapper)
	    {
	        $listMapper
	            ->add('username')
	            ->add('password')
	            ->add('email')
	            ->add('isActive')
	            ->add('_action', 'actions', array(
	                'actions' => array(
	                    'edit' => array(),
	                )))
	        ;
	    }

	    /**
	     * @param \Sonata\AdminBundle\Form\FormMapper $formMapper
	     *
	     * @return void
	     */

    protected function configureFormFields(FormMapper $formMapper)
        {

            $formMapper
            ->with('General')
            	->add('username')
            	->add('password')
            	->add('email')
            	->add('isActive')
            ->end()
            ->with('Roles')
            	->add('roles', 'sonata_type_model',array('expanded' => true, 'compound' => true, 'multiple' => true))
            ->end()
            ;
        }

}