{"filter":false,"title":"2022_01_15_211806_create_categories_table.php","tooltip":"/blog/database/migrations/2022_01_15_211806_create_categories_table.php","undoManager":{"mark":3,"position":3,"stack":[[{"start":{"row":16,"column":0},"end":{"row":17,"column":33},"action":"remove","lines":["            $table->bigIncrements('id');","            $table->timestamps();"],"id":2},{"start":{"row":16,"column":0},"end":{"row":18,"column":29},"action":"insert","lines":["        $table->increments('id');","        $table->string('name', 50);","        $table->timestamps();"]}],[{"start":{"row":16,"column":8},"end":{"row":16,"column":12},"action":"insert","lines":["    "],"id":3}],[{"start":{"row":17,"column":8},"end":{"row":17,"column":12},"action":"insert","lines":["    "],"id":4}],[{"start":{"row":18,"column":8},"end":{"row":18,"column":12},"action":"insert","lines":["    "],"id":5}]]},"ace":{"folds":[],"scrolltop":120,"scrollleft":0,"selection":{"start":{"row":18,"column":12},"end":{"row":18,"column":12},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":7,"state":"php-start","mode":"ace/mode/php"}},"timestamp":1642249133239,"hash":"5967511ad05ec9b10a02564abf6c9dacc62b3978"}