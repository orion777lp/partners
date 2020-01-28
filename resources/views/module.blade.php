<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Filter</title>

        <!-- Favicon -->
		<link rel="icon" href="{{ URL::asset('img/favicon.ico') }}" type="image/x-icon" />

        <!-- Fonts -->        
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

		<!-- Bootstrap -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" rel="js">

        <!-- My CSS -->
       	<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/app.css') }} " />

       	<script
		  src="https://code.jquery.com/jquery-3.4.1.min.js"
		  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
		  crossorigin="anonymous"></script>

       	<!-- My JavaScripts -->
       	<script src="{{ URL::asset('js/main.js') }} "></script>

 <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
       
 	</head>

<body class="">

    <div class="container">
    	
    	<div class="row">
    		
    		<div class="col-12">
    			
    			<div id="field">    				
    			
	    			<span class="header">Мои задачи</span>
	    			<input class="input_header" id="input_header" type="text" name="" onclick="">

	    			<div class="filter" id="filter" name="filter">

							<label class="label">Наименнование задачи</label>
							<input class="input_label prop__border_lg" id="name_task" name="name_task" type="text" name="">

							<label class="label">Роль</label>
							<input class="input_label" type="text" name="">

							<label class="label">Ответственный</label>
							<input class="input_label" type="text" name="">

							<label class="label">Постановщик</label>
							<input class="input_label" type="text" name="">

							<label class="label">Название</label>
							<input class="input_label" type="text" name="">

							<label class="label">Статус</label>
							<input class="input_label" type="text" name="">

							<label class="label">Крайний срок</label>
							<input class="input_label" type="text" name="">	

							<div class="mx-auto text-center">

								<input type="button" name="button__search" id="button__search" class="m-3 btn btn-primary" value="Найти">
								<input type="button" name="button__clear" id="button__clear" class="m-3 btn btn-outline-secondary" value="Сбросить">

							</div>			

					</div>

				</div>

				<div class="data" name="data" id="data">

					<div class="tasks_header">
						Задачи
					</div>

					<div id="tasks" name="tasks">						
					
						<?php foreach ($data as $value) : ?>

						<div class="task">
							<?= $value; ?>
						</div>	
						
						<?php endforeach; ?>	

					</div>			

				</div>

    		</div>

    	</div>

    </div>

</body>

</html>