Ejecutar  primero:

php artisan make:model Categoria -m
php artisan make:model Marca -m
php artisan make:model Producto -m
php artisan make:model Facturaenc -m
php artisan make:model Facturadet -m


Las tablas deben de quedar de la siguiente manera:

   
   Schema::create('tipos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('detalle')->nullable();
            $table->timestamps();
        });
	
	
	        Schema::create('categorias', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('tipo_id');
            $table->string('nombre');
            $table->string('detalle')->nullable();
            $table->timestamps();
        });
	
	
	
	     Schema::create('marcas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('detalle')->nullable();            
            $table->timestamps();
        });
	
	
	       Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('marca_id');
            $table->unsignedInteger('categoria_id');
            $table->string('nombre');
            $table->decimal('cantidad', 10, 2);
            $table->decimal('monto', 10, 2);
            $table->string('urlimagen',120);
            $table->timestamps();
        });
	
	
	   Schema::create('facturaencs', function (Blueprint $table) {
            $table->id(); 
            $table->unsignedInteger('user_id');
            $table->string('consecutivo');
            $table->date('fechaVenta');
            $table->timestamps();
        });
	
	
	  Schema::create('facturadets', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('facturaenc_id');
            $table->unsignedInteger('producto_id');
            $table->decimal('cantidad', 10, 2);
            $table->decimal('monto', 10, 2);
            $table->timestamps();
        });
	
	
	
