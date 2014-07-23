<?php 
  Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl . '/css/reset.css');
  Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl . '/css/960grid.css');
  Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl . '/css/main.css');
  Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl . '/css/reveal.css');
  Yii::app()->clientScript->registerCssFile('//code.jquery.com/ui/1.11.0/themes/smoothness/jquery-ui.css');
  Yii::app()->clientScript->registerCoreScript('jquery');
  Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl . '/js/jquery.reveal.js');
?>
<!DOCTYPE html>
<html lang="ru">
  <head>
	  <meta charset="utf-8">
	  <meta http-equiv="X-UA-Compatible" content="IE=edge">
	  <meta name="description" content="">
	  <meta name="viewport" content="width=device-width, initial-scale=1">

	  <title><?php echo CHtml::encode($this->pageTitle); ?></title>
	  <script type="text/javascript">
		  $(function(){

				$( "#subscribe_form" ).submit(function(event) {

					var postData = $(this).serializeArray();
					$.ajax({
						type: 'POST',
						url: window.location + '/home/email',
						data: postData,
					  encode: true,
					  success: function() {
					  	$( "a.close-reveal-modal" ).trigger('click');
							$( "#linkSuccess" ).click();
					  }
					});

					event.preventDefault();
				});
		  });
	  </script>
  </head>
  <body>
      <div class="container container_12">
    	  <div class="grid_8 prefix_2 suffix_2">
        
		    <?php echo $content; ?>
      
        <footer>
          <small>Город идей 2014/Все права защищены</small>
        </footer>
        
      </div>
    </div>
  </body>
</html>