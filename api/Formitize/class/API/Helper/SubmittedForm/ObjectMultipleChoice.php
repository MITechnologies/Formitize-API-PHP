<?php 

namespace Formitize\API\Helper\SubmittedForm;


	abstract class ObjectMultipleChoice extends ObjectAbstract
	{
		abstract function setValue();
		abstract function getValue();
		abstract function getObjectName();
		abstract function getObjectType();
	}
?>