<?php

class HomeController extends Controller
{
	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->render('index');
	}

	public function actionEmail()
	{
	  if(!Yii::app()->request->isAjaxRequest)
	  {
		  echo $jsonAnswer = CJSON::encode(array('error' => 1));
		  Yii::app()->end();
		}
	  	
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

    if($email)
    {
      $emailFile = fopen('email.txt', 'a');

      if(fwrite($emailFile, $email.PHP_EOL))
      {
        echo $jsonAnswer = CJSON::encode(array('error' => 0));
        Yii::app()->end();
      }
      fclose($emailFile);
    }
  }

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}

}