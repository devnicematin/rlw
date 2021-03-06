<?php
namespace Foo\Webservice\RequestHandler\Foo;

class BadArrays extends BaseAbstract {
	
	protected $_requestParameterDefinitions = array(
			'freeStringsArray' => array(
					'type' => 'array',),
	);
	
  public function execute() {
    $data = (object)array(
        '#name' => $this->_request['#name'],
        '#request' => (object) $this->_request['#request'],
        '#requires' => $this->_request['#requires'],
        );
    $this->setResponseData($data);
    $this->setStatus(200, 'Success');
    return true;
  }
  
}