<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// FRAMEWORK SETTINGS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$settings           = array(
  'menu_title'      => 'Opciones',
  'menu_type'       => 'menu', // menu, submenu, options, theme, etc.
  'menu_slug'       => 'cs-framework',
  'ajax_save'       => true,
  'show_reset_all'  => true,
  'framework_title' => 'Opciones del tema',
);

// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// FRAMEWORK OPTIONS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$options        = array();

// ------------------------------
// a seperator                  -
// ------------------------------
$options[] = array(
  'name'   => 'id_header',
  'title'  => 'Header y Slider',
  'icon'   => 'far fa-lightbulb'
);

// ----------------------------------------
// Seccion para menu superior
// ----------------------------------------
$options[]      = array(
  'name'        => 'menu_superior',
  'title'       => 'Informacion General',
  'icon'        => 'fas fa-angle-right',

  'fields'      => array(

    array(
      'type'    => 'heading',
      'content' => 'Horario'
    ),


    array(
      'id'      => 'horario',
      'type'    => 'text',
      'title'   => 'Horario',
      'desc'     => 'Ejemplo: <b>Lun - Vie 9:00 - 18:00</b>',
      'default' => 'Lun - vie 9:00 - 18:00'
    ),

     array(
      'type'    => 'heading',
      'content' => 'Direccion'
    ),


    array(
      'id'      => 'direccion_primera_linea',
      'type'    => 'text',
      'title'   => 'Primera linea de direccion',
      'desc'     => 'Ejemplo: <b>Avenida San Borja</b>',
      'default' => 'Avenida San Borja'
    ),

    array(
      'id'      => 'direccion_segunda_linea',
      'type'    => 'text',
      'title'   => 'Segunda linea direccion',
      'desc'     => 'Ejemplo: <b>Norte 674</b>',
      'default' => 'Norte 674'
    ),

     array(
      'type'    => 'heading',
      'content' => 'Correo'
    ),


    array(
      'id'      => 'correo',
      'type'    => 'text',
      'title'   => 'Correo',
      'desc'     => 'Ejemplo: <b>mail@corporation.com</b>',
      'default' => 'mail@corporation.com'
    ),

     array(
      'type'    => 'heading',
      'content' => 'Telefono'
    ),

    array(
      'id'      => 'telefono',
      'type'    => 'text',
      'title'   => 'Telefono',
      'desc'     => 'Ejemplo: <b>(01) 528 - 9987</b>',
      'default' => '528 - 9987',
      'before' => '(01) '
    ),


    array(
      'id'      => 'celular_phone',
      'type'    => 'text',
      'title'   => 'Celular',
      'desc'     => 'Ejemplo: <b>(01) 9740205403</b>',
      'default' => '974 020 540',
    ),

    array(
      'type'    => 'heading',
      'content' => 'Mision'
    ),

    array(
      'id'      => 'imagen_back_mision',
      'type'    => 'upload',
      'title'   => 'Fondo Mision',
      'desc'    => 'Sube o selecciona una imagen de la galeria'
    ),
    array(
      'id'      => 'contenido_mision',
      'type'    => 'textarea',
      'title'   => 'Mision',
      'desc'    => 'Redacta la misión'
    ),

     array(
      'type'    => 'heading',
      'content' => 'Vision'
    ),

    array(
      'id'      => 'imagen_back_vision',
      'type'    => 'upload',
      'title'   => 'Fondo Vision',
      'desc'    => 'Sube o selecciona una imagen de la galeria'
    ),
    array(
      'id'      => 'contenido_vision',
      'type'    => 'textarea',
      'title'   => 'Vision',
      'desc'    => 'Redacta la Visión'
    ),

    array(
      'type'    => 'heading',
      'content' => 'SEO'
    ),


    array(
      'id'      => 'seo_etiquetas',
      'type'    => 'text',
      'title'   => 'Escriba las etiquetas para incluirlas en el meta',
      'desc'    => 'Usa la coma para separar las etiquetas'
    ),

    array(
      'id'      => 'seo_imge',
      'type'    => 'upload',
      'title'   => 'Imagen para mostrarse en las compartidas',
      'desc'    => 'Sube o selecciona una imagen de la galeria'
    ),

    array(
      'id'      => 'favicon_site',
      'type'    => 'upload',
      'title'   => 'Favicon',
      'desc'    => 'Sube o selecciona una imagen de la galeria menor de 32x32'
    ),

    // end: a field
  ), // end: fields
);

// ----------------------------------------
// Seccion para menu principal
// ----------------------------------------
$options[]      = array(
  'name'        => 'logo',
  'title'       => 'Logo',
  'icon'        => 'fas fa-angle-right',

  // begin: fields
  'fields'      => array(

    array(
      'type'    => 'heading',
      'content' => 'Configure el Logo'
    ),

    // begin: a field
    array(
      'id'      => 'logo_site',
      'type'    => 'upload',
      'title'   => 'Logo',
      'desc'    => 'Sube o selecciona una imagen de la galeria'
    ),
    // end: a field
  ), // end: fields
);
// ----------------------------------------
// Seccion para slider
// ----------------------------------------
$options[]      = array(
  'name'        => 'slider',
  'title'       => 'Slider',
  'icon'        => 'fas fa-angle-right',

  // begin: fields
  'fields'      => array(

    array(
        'id'              => 'slider_grupo',
        'type'            => 'group',
        'title'           => 'Slider',
        'button_title'    => 'Agregar Slider',
        'accordion_title' => 'Slider Agregado',
        'fields'          => array(
          array(
            'id'    => 'titulo_slider',
            'type'  => 'text',
            'title' => 'Titulo del Slider',
            'desc'     => 'Ejemplo: <b>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</b>',
          ),
          array(
            'id'    => 'portada_slider',
            'type'  => 'upload',
            'title' => 'Imagen de portada',
            'desc'    => 'Sube o selecciona tu portada. Recuerda que debe tener un minimo de 1200px x 600px',
          ),
          array(
            'id'    => 'parrafo_slider',
            'type'  => 'textarea',
            'title' => 'Parrafo del Slider',
            'desc'     => 'Ejemplo: <b>Ut a lectus sit amet nulla elementum interdum.</b>',
          ),
        ),
      ),

  



    // end: a field
  ), // end: fields
);

// ----------------------------------------
// Seccion para menu principal
// ----------------------------------------
$options[]      = array(
  'name'        => 'barra_contenedora',
  'title'       => 'Barra contenedora',
  'icon'        => 'fas fa-angle-right',

  // begin: fields
  'fields'      => array(

    array(
      'type'    => 'heading',
      'content' => 'Bienvenida'
    ),

    array(
      'id'      => 'bienvenida_header',
      'type'    => 'text',
      'title'   => 'Titulo de Bienvenida',
      'desc'    => 'Escriba la cabecera de su bienvenida',
      'default' => 'Bienvenido a ' . get_bloginfo( 'name' ),
      'attributes' => array(
        'placeholder' => 'Bienvenido a ' . get_bloginfo( 'name' )),
    ),

    array(
      'id'      => 'bienvenida_contenedor',
      'type'    => 'textarea',
      'title'   => 'Parrafo de bienvenida',
      'desc'    => 'Escriba el parrafo de su bienvenida',
      'default' => 'Nam faucibus, posuere ornare elit sapien vitae erat. Orci varius natoque penatibus et.' ,
      'attributes' => array(
        'placeholder' => 'Nam faucibus, posuere ornare elit sapien vitae erat. Orci varius natoque penatibus et.'),
    ),

    array(
      'type'    => 'heading',
      'content' => 'Horarios'
    ),

    array(
        'id'              => 'horario_selector',
        'type'            => 'group',
        'title'           => 'Selector de horario',
        'button_title'    => 'Agrega nuevo horario',
        'accordion_title' => 'Horario Agregado',
        'fields'          => array(
          array(
            'id'    => 'horario_selector_select_day',
            'type'  => 'select',
            'title' => 'Selecciona el rango de dias',
            'options' => array( 
              'Lunes - Viernes' => 'Lunes - Viernes',
              'Lun - Mier - Vier' => 'Lun - Mier - Vier',
              'Jueves - Martes' => 'Jueves - Martes',
              'Sabados' => 'Sabados',
              'Domingos' => 'Domingos',
              'Hora de descanso' => 'Hora de descanso',),
            'default_option' => 'Selecciona tu rango de dias'
          ),
          array(
            'id'    => 'horario_selector_select_hora',
            'type'  => 'select',
            'title' => 'Selecciona el rango de horas',
            'options' => array( 
              '08:00 - 18:00' => '08:00 - 18:00',
              '09:00 - 18:00' => '09:00 - 18:00',
              '10:00 - 18:00' => '10:00 - 18:00',
              '08:00 - 19:00' => '08:00 - 19:00',
              '09:00 - 19:00' => '09:00 - 19:00',
              '10:00 - 19:00' => '10:00 - 19:00',
              '08:00 - 20:00' => '08:00 - 20:00',
              '09:00 - 20:00' => '09:00 - 20:00',
              '10:00 - 20:00' => '10:00 - 20:00',
              '09:00 - 13:00' => '09:00 - 13:00',
              '13:00 - 14:00' => '13:00 - 14:00',
              'Cerrado' => 'Cerrado',),
            'default_option' => 'Selecciona tu rango de hroas'
          ),
        ),
      ),

    array(
      'type'    => 'heading',
      'content' => 'Anuncios'
    ),

    array(
      'id'      => 'switch_anuncio',
      'type'    => 'switcher',
      'title'   => 'Activar Anuncio',
      'default' => true
    ),
    array(
      'id'           => 'tipo_anuncio',
      'type'         => 'select',
      'title'        => 'Tipo Anuncio',
      'options'        => array(
          'important'   => 'Importante',
          'alerta'      => 'Alerta',
          'noticia'     => 'Noticia',
        ),
      'default_option' => 'Selecciona el tipo de anuncio',
      'dependency'   => array( 'switch_anuncio', '==', 'true' ),
    ),

    array(
      'id'      => 'contenido_anuncio',
      'type'    => 'text',
      'title'   => 'Anuncio',
      'desc'    => 'Escriba el parrafo de su anuncio',
      'default' => 'Hola mundo' ,
      'attributes' => array(
        'placeholder' => 'Hola mundo'),
      'dependency'   => array( 'switch_anuncio', '==', 'true' ),
    ),
    // end: a field
  ), // end: fields
);


// ------------------------------
// a seperator                  -
// ------------------------------
$options[] = array(
  'name'   => 'id_virtudes',
  'title'  => 'Virtudes',
  'icon'   => 'far fa-lightbulb'
);

$options[]      = array(
  'name'        => 'virtudes',
  'title'       => 'General',
  'icon'        => 'fas fa-angle-right',

  // begin: fields
  'fields'      => array(

    array(
      'type'    => 'heading',
      'content' => 'Configura las opciones del apartado "Virtudes"'
    ),

    array(
        'id'    =>  'activador_virtudes',
        'type'  =>  'switcher',
        'title' =>  'Desea activar el apartado de virtudes',
        'default' =>  false,
        ),
    array(
        'id'      =>  'titulo_apartado_virtudes',
        'type'    =>  'text',
        'title'   =>  'Titulo de la sección',
        'desc'    =>  'Añade el titulo a la seccion de virtudes',
        'dependency'   => array( 'activador_virtudes', '==', 'true' ),
        ),
    array(
        'id'      =>  'sub_titulo_apartado_virtudes',
        'type'    =>  'text',
        'title'   =>  'Sub titulo de la sección',
        'desc'    =>  'Añade el sub titulo que va debajo del titulo de la seccion de virtudes',
        'dependency'   => array( 'activador_virtudes', '==', 'true' ),
        ),
    array(
        'id'    => 'color_virtudes',
        'type'  => 'color_picker',
        'title' => 'Elija el color de la caja',
        'desc'  =>  'Esto elijira el color del fondo',
        'default' => '#f6f9fb',
        'dependency'   => array( 'activador_virtudes', '==', 'true' ),
      ),
    array(
        'id'    => 'image_virtud',
        'type'  => 'upload',
        'title' => 'Imagen de fondo',
        'desc'  => 'Seleccione la imagen para mostrar al lado izquierdo',
        'dependency'   => array( 'activador_virtudes', '==', 'true' ),
      ),
    array(
        'id'              => 'virtudes_grupo',
        'type'            => 'group',
        'title'           => 'Virtudes',
        'button_title'    => 'Agrega nueva virtud',
        'accordion_title' => 'Virtud Agregado',
        'desc'            =>  'Se recomienda crear apartados multiplo de 2',
        'dependency'   => array( 'activador_virtudes', '==', 'true' ),
        'fields'          => array(
          array(
            'id'    => 'virtud_img_select',
            'type'  => 'image_select',
            'title' => 'Selecciona el icono de la virtud',
            'options' => array( 
              '001-dentista' => get_template_directory_uri() . '/assets/images/denta_ico/png/001-dentista.png',
              '002-kit_auxilio' => get_template_directory_uri() . '/assets/images/denta_ico/png/002-kit_auxilio.png',
              '003-tooth-13' => get_template_directory_uri() . '/assets/images/denta_ico/png/003-tooth-13.png',
              '004-tooth-12' => get_template_directory_uri() . '/assets/images/denta_ico/png/004-tooth-12.png',
              '005-dental-floss-1' => get_template_directory_uri() . '/assets/images/denta_ico/png/005-dental-floss-1.png',
              '006-tooth-pliers' => get_template_directory_uri() . '/assets/images/denta_ico/png/006-tooth-pliers.png',
              '007-appointment' => get_template_directory_uri() . '/assets/images/denta_ico/png/007-appointment.png',
              '008-tooth-11' => get_template_directory_uri() . '/assets/images/denta_ico/png/008-tooth-11.png',
              '009-braces-1' => get_template_directory_uri() . '/assets/images/denta_ico/png/009-braces-1.png',
              '010-protection' => get_template_directory_uri() . '/assets/images/denta_ico/png/010-protection.png',
              '011-dental-care' => get_template_directory_uri() . '/assets/images/denta_ico/png/011-dental-care.png',
              '012-toothbrush-1' => get_template_directory_uri() . '/assets/images/denta_ico/png/012-toothbrush-1.png',
              '013-dental-floss' => get_template_directory_uri() . '/assets/images/denta_ico/png/013-dental-floss.png',
              '014-clipboard' => get_template_directory_uri() . '/assets/images/denta_ico/png/014-clipboard.png',
              '015-chair' => get_template_directory_uri() . '/assets/images/denta_ico/png/015-chair.png',
              '016-tooth-10' => get_template_directory_uri() . '/assets/images/denta_ico/png/016-tooth-10.png',
              '017-tooth-9' => get_template_directory_uri() . '/assets/images/denta_ico/png/017-tooth-9.png',
              '018-mouth' => get_template_directory_uri() . '/assets/images/denta_ico/png/018-mouth.png',
              '019-dental-drill' => get_template_directory_uri() . '/assets/images/denta_ico/png/019-dental-drill.png',
              '020-toothbrush' => get_template_directory_uri() . '/assets/images/denta_ico/png/020-toothbrush.png',
              '021-toothpaste' => get_template_directory_uri() . '/assets/images/denta_ico/png/021-toothpaste.png',
              '022-tooth-8' => get_template_directory_uri() . '/assets/images/denta_ico/png/022-tooth-8.png',
              '023-tooth-7' => get_template_directory_uri() . '/assets/images/denta_ico/png/023-tooth-7.png',
              '024-tooth-6' => get_template_directory_uri() . '/assets/images/denta_ico/png/024-tooth-6.png',
              '025-tooth-5' => get_template_directory_uri() . '/assets/images/denta_ico/png/025-tooth-5.png',
              '026-glass-of-water' => get_template_directory_uri() . '/assets/images/denta_ico/png/026-glass-of-water.png',
              '027-water' => get_template_directory_uri() . '/assets/images/denta_ico/png/027-water.png',
              '028-mouthwash' => get_template_directory_uri() . '/assets/images/denta_ico/png/028-mouthwash.png',
              '029-medicine' => get_template_directory_uri() . '/assets/images/denta_ico/png/029-medicine.png',
              '030-braces' => get_template_directory_uri() . '/assets/images/denta_ico/png/030-braces.png',
              '031-pills' => get_template_directory_uri() . '/assets/images/denta_ico/png/031-pills.png',
              '032-anesthesia' => get_template_directory_uri() . '/assets/images/denta_ico/png/032-anesthesia.png',
              '033-apple' => get_template_directory_uri() . '/assets/images/denta_ico/png/033-apple.png',
              '034-hook' => get_template_directory_uri() . '/assets/images/denta_ico/png/034-hook.png',
              '035-lens' => get_template_directory_uri() . '/assets/images/denta_ico/png/035-lens.png',
              '036-tooth-4' => get_template_directory_uri() . '/assets/images/denta_ico/png/036-tooth-4.png',
              '037-tooth-3' => get_template_directory_uri() . '/assets/images/denta_ico/png/037-tooth-3.png',
              '038-tooth-2' => get_template_directory_uri() . '/assets/images/denta_ico/png/038-tooth-2.png',
              '039-tooth-1' => get_template_directory_uri() . '/assets/images/denta_ico/png/039-tooth-1.png',
              '040-tooth' => get_template_directory_uri() . '/assets/images/denta_ico/png/040-tooth.png',
            ),
            'class' =>  'imagenes-40',
          ),
          
          array(
              'id'    => 'virtud_titulo', // this is must be unique
              'type'  => 'text',
              'title' => 'Nombre de la virtud',
          ),
        

        ),
     ),
  ),
);


// ------------------------------
// a seperator                  -
// ------------------------------
$options[] = array(
  'name'   => 'id_banners',
  'title'  => 'Banners',
  'icon'   => 'far fa-lightbulb'
);
// ----------------------------------------
// Seccion para banners
// ----------------------------------------
$options[]      = array(
  'name'        => 'banner_espacio',
  'title'       => 'General',
  'icon'        => 'fas fa-angle-right',

  // begin: fields
  'fields'      => array(

    array(
      'type'    => 'heading',
      'content' => 'Configure el banner'
    ),

    array(
        'id'    =>  'activador_banner',
        'type'  =>  'switcher',
        'title' =>  'Desea activar el banner',
        'default' =>  false,
        ),

    array(
      'id'      => 'banner_background',
      'type'    => 'color_picker',
      'title'   => 'Selecciona el color de tu banner',
      'default' => '#96C5EF',
      'rgba'    => true,
      'dependency'   => array( 'activador_banner', '==', 'true' ),
          ),


    array(
      'id'        => 'banner_patter',
      'type'      => 'image_select',
      'title'     => 'Selecciona el patter',
      'class'   => 'imagenes-80',
      'options'   => array(
        'patter_1'    => get_template_directory_uri() .'/assets/images/patters/patter_1.png',
        'patter_2'    => get_template_directory_uri() .'/assets/images/patters/patter_2.png',
        'patter_3'    => get_template_directory_uri() .'/assets/images/patters/patter_3.png',
        'patter_4'    => get_template_directory_uri() .'/assets/images/patters/patter_4.png',
        'patter_5'    => get_template_directory_uri() .'/assets/images/patters/patter_5.png',
        'patter_6'    => get_template_directory_uri() .'/assets/images/patters/patter_6.png',
        'patter_7'    => get_template_directory_uri() .'/assets/images/patters/patter_7.png',
      ),
      'default'     => 'patter_1',
      'dependency'   => array( 'activador_banner', '==', 'true' ), 
    ),


    array(
          'id'    => 'banner_background_size',
          'type'  => 'number',
          'title' => 'Tamaño del fondo',
          'after' =>  '%',
          'default' =>  '35',
          'desc'  =>  'Esto decide el tamaño del fondo, reajustar para mejorar la vista del fondo',
          'dependency'   => array( 'activador_banner', '==', 'true' ), 
          ),

    
    array(
      'id'      => 'banner_contenido',
      'type'    => 'text',
      'title'   => 'Texto del banner',
      'desc'    => 'Digite el contenido que tendra el banner',
      'default' =>  'Ofrecemos el mejor servicio del mercado',
      'dependency'   => array( 'activador_banner', '==', 'true' ),
          ),

    array(
        'type'    =>  'heading',
        'title'   =>  'Boton banner',
        'dependency'   => array( 'activador_banner', '==', 'true' ),
        ),

    array(
        'id'    =>  'activador_boton_banner',
        'type'  =>  'switcher',
        'title' =>  'Desea activar la aparicion de un botón?',
        'default' =>  false,
        'dependency'   => array( 'activador_banner', '==', 'true' ),
        ),
    array(
        'id'    =>  'texto_boton',
        'type'  =>  'text',
        'title' =>  'Contenido del boton',
        'desc'  =>  'Ingrese texto a mostrar en el boton',
        'dependency'   => array( 'activador_banner', '==', 'true' ),
        ),
    array(
        'id'    => 'icono_boton',
        'type'  => 'icon',
        'title' => 'Icono para el boton',
        'dependency'   => array( 'activador_banner', '==', 'true' ),
          ),
    array(
        'id'    =>  'enlace_boton',
        'type'  =>  'text',
        'title' =>  'Enlace del boton',
        'desc'  =>  'Ingrese el enlace para redireccionar',
        'dependency'   => array( 'activador_banner', '==', 'true' ),
        ),
    // end: a field
  ), // end: fields
);





// ------------------------------
// a seperator                  -
// ------------------------------
$options[] = array(
  'name'   => 'id_especialidades',
  'title'  => 'Especialidades',
  'icon'   => 'far fa-lightbulb'
);

$options[] = array(
  'name'        => 'especialidades_general',
  'title'       => 'General',
  'icon'        => 'fas fa-angle-right',

  // begin: fields
  'fields'      => array(

    array(
      'type'    => 'heading',
      'content' => 'Especialidades'
    ),

    // begin: a field
    array(
      'id'      => 'activador_especialidades',
      'type'    => 'switcher',
      'title'   => 'Activar especialidades',
      'desc'    => 'Active si desea que se muestre la seccion de <b>especialidades</b> en la portada',
      'default' => false
    ),

    array(
      'id'    => 'especialidades_background',
      'type'  => 'upload',
      'title' => 'Imagen de fondo',
    ),

    array(
        'id'              => 'especialidades',
        'type'            => 'group',
        'title'           => 'Especialidades',
        'button_title'    => 'Agrega nueva especialidad',
        'accordion_title' => 'Especialidad Agregado',
        'dependency'   => array( 'activador_especialidades', '==', 'true' ),
        'desc'            =>  'Se recomienda crear apartados multiplo de 3',
        'fields'          => array(

          array(
            'id'      => 'especialidad_titulo',
            'type'    => 'text',
            'title'   => 'Titulo de la especialidad',
            'attributes' => array(
              'placeholder' => 'Titulo de la especialdiad'),
          ),
          
          array(
            'id'    => 'especialidad_img',
            'type'  => 'image_select',
            'title' => 'Selecciona el icono de la especialidad',
            'options' => array( 
              'braquets' => get_template_directory_uri() . '/assets/images/dentristy/pngx64/braquets.png',
              'caries' => get_template_directory_uri() . '/assets/images/dentristy/pngx64/caries.png',
              'cepillo_diente' => get_template_directory_uri() . '/assets/images/dentristy/pngx64/cepillo_diente.png',
              'chequeo_dental' => get_template_directory_uri() . '/assets/images/dentristy/pngx64/chequeo_dental.png',
              'curacion' => get_template_directory_uri() . '/assets/images/dentristy/pngx64/curacion.png',
              'dentista' => get_template_directory_uri() . '/assets/images/dentristy/pngx64/dentista.png',
              'dentista_grafica' => get_template_directory_uri() . '/assets/images/dentristy/pngx64/dentista_grafica.png',
              'diente' => get_template_directory_uri() . '/assets/images/dentristy/pngx64/diente.png',
              'diente_brillante' => get_template_directory_uri() . '/assets/images/dentristy/pngx64/diente_brillante.png',
              'diente_listo' => get_template_directory_uri() . '/assets/images/dentristy/pngx64/diente_listo.png',
              'extraccion' => get_template_directory_uri() . '/assets/images/dentristy/pngx64/extraccion.png',
              'implante' => get_template_directory_uri() . '/assets/images/dentristy/pngx64/implante.png',
              'instrumentos_dental' => get_template_directory_uri() . '/assets/images/dentristy/pngx64/instrumentos_dental.png',
              'limpieza_bucal' => get_template_directory_uri() . '/assets/images/dentristy/pngx64/limpieza_bucal.png',
              'limpieza_dental' => get_template_directory_uri() . '/assets/images/dentristy/pngx64/limpieza_dental.png',
              'limpieza_dental_u' => get_template_directory_uri() . '/assets/images/dentristy/pngx64/limpieza_dental_u.png',
              'pasta_dental' => get_template_directory_uri() . '/assets/images/dentristy/pngx64/pasta_dental.png',
              'rayos_x' => get_template_directory_uri() . '/assets/images/dentristy/pngx64/rayos_x.png',
              'rehabilitacion' => get_template_directory_uri() . '/assets/images/dentristy/pngx64/rehabilitacion.png',
              'tablero' => get_template_directory_uri() . '/assets/images/dentristy/pngx64/tablero.png',
             ),
          ),

          array(
            'id'      => 'especialidad_color_picker',
            'type'    => 'color_picker',
            'title'   => 'Color de las imagenes',
            'default' => '#59A8E6',
            'rgba'    => true,
          ),

          

          array(
            'id'      => 'especialidad_descr',
            'type'    => 'textarea',
            'title'   => 'Descripcion de la especialidad.',
            'desc'    => '<i><b>Se recomienda colocar un numero minimo de caracateres de 50 y de maximo unos 90, para conservar la simetria</i></b>',
            'attributes' => array(
              'placeholder' => 'Descripcion de la especialdiad',
              'maxlength'   =>  '90',),
          ),

          array(
          'id'    => 'imagen_back_especialidades',
          'type'  => 'upload',
          'title' => 'Imagen de la especialidad',
          'desc'  => 'Esta imagen solo se mostrara en la pagina que tenga la plantilla de especialidades'
        ),

           array(
            'id'      => 'especialidad_url',
            'type'    => 'text',
            'title'   => 'Direccion de la pagina de la especialidad',
            'desc'    => 'Puedes ver el listado de las paginas <a href= ' . '"/edit.php?post_type=page" target="_blank">aqui<a>',
            'attributes' => array(
              'placeholder' => 'Direccion de la pagina de la especialdiad'),
          ),


         ),
    ),

  ),
);



// ------------------------------
// a seperator                  -
// ------------------------------
$options[] = array(
  'name'   => 'id_planes',
  'title'  => 'Planes',
  'icon'   => 'far fa-lightbulb'
);

$options[] = array(
  'name'        => 'planes_items',
  'title'       => 'General',
  'icon'        => 'fas fa-angle-right',

  // begin: fields
  'fields'      => array(

    array(
      'type'    => 'heading',
      'content' => 'Planes'
    ),

    array(
      'id'    => 'activador_planes',
      'type'  => 'switcher',
      'title' => 'Activar seccion planes',
    ),

    array(
      'id'              => 'planes_items',
      'type'            => 'group',
      'title'           => 'Agrega sus planes',
      'button_title'    => 'Agregar plan',
      'dependency' => array( 'activador_planes', '==', 'true' ) ,
      'accordion_title' => 'Plan',
      'fields'          => array(

        
        array(
          'id'    => 'plan_back',
          'type'  => 'upload',
          'title' => 'Imagen',
        ),
        array(
          'id'    => 'plan_titulo',
          'type'  => 'text',
          'title' => 'Título del plan',
        ),

        array(
          'id'    => 'descripcion_plan',
          'type'  => 'textarea',
          'title' => 'Descripcion del plan',
        ),
        array(
          'id'    => 'icono_plan',
          'type'  => 'icon',
          'title' => 'Icono representativo del plan',
        ),
        array(
          'id'    => 'enlace_plan',
          'type'  => 'text',
          'title' => 'Enlace a la pagina',
        ),
      ),
    ),

  ),
);


// ------------------------------
// a seperator                  -
// ------------------------------
$options[] = array(
  'name'   => 'id_mapa',
  'title'  => 'Mapa',
  'icon'   => 'far fa-lightbulb'
);

$options[] = array(
  'name'   => 'id_mapa_general',
  'title'  => 'General',
  'icon'   => 'fas fa-angle-right',

  'fields'      => array(

    array(
              'id'    => 'mapa_latitud', // this is must be unique
              'type'  => 'text',
              'title' => 'Latitud',
          ),
          array(
              'id'    => 'mapa_longitud', // this is must be unique
              'type'  => 'text',
              'title' => 'Longitud',
          ),
  ),
);


// ------------------------------
// a seperator                  -
// ------------------------------
$options[] = array(
  'name'   => 'id_calendario_preguntas',
  'title'  => 'Preguntas',
  'icon'   => 'far fa-lightbulb'
);

$options[] = array(
  'name'   => 'id_preguntas_calendario',
  'title'  => 'General',
  'icon'   => 'fas fa-angle-right',

  'fields'      => array(

    array(
          'id'    => 'calendario_back',
          'type'  => 'upload',
          'title' => 'Fondo del apartado',
        ),

    array(
      'id'    => 'activador_preguntas_caalendario',
      'type'  => 'switcher',
      'title' => 'Desea mostrar las preguntas?',
    ),

    array(
      'id'              => 'grupo_preguntas',
      'type'            => 'group',
      'title'           => 'Group Field',
      'button_title'    => 'Agregar pregunta',
      'accordion_title' => 'Pregunta agregada',
      'fields'          => array(
        array(
          'id'    => 'apodo_pregunta',
          'type'  => 'text',
          'title' => 'Pongale un apodo',
          'desc'  => 'Esto ayudara a la programacion del apartado'
        ),
        array(
          'id'    => 'pregunta_titulo',
          'type'  => 'text',
          'title' => 'Formule la pregunta',
        ),
        array(
          'id'    => 'pregunta_contenido',
          'type'  => 'textarea',
          'title' => 'Respuesta de la pregunta',
        ),
      ),
    ),

  ),
);

//------------------------------
// a seperator                  -
// ------------------------------
$options[] = array(
  'name'   => 'id_chats',
  'title'  => 'Chats',
  'icon'   => 'far fa-lightbulb',
);

$options[] = array(
  'name'   => 'id_chat_contenido',
  'title'  => 'General',
  'icon'   => 'fas fa-angle-right',

  'fields'      => array(

    array(
      'id'    => 'activador_chats',
      'type'  => 'switcher',
      'title' => 'Activar el boton flotante de chats',
    ),

    array(
          'id'    => 'chat_chats_texto',
          'type'  => 'text',
          'title' => 'Digite el texto para el boton de chats',
          'desc'  => 'Este texto aparecera al lado del boton de chats, no hay problema si lo dejas vacio',
          'dependency' => array( 'activador_chats', '==', 'true' ) ,
        ),

    array(
      'type'    => 'heading',
      'content' => 'Messenger'
    ),

    array(
      'id'    => 'activador_chats_messenger',
      'type'  => 'switcher',
      'title' => 'Activar el boton flotante de messenger',
      'dependency' => array( 'activador_chats', '==', 'true' ) ,
    ),

    array(
          'id'    => 'chat_mesenger_texto',
          'type'  => 'text',
          'title' => 'Digite el texto para el boton de messenger',
          'desc'  => 'Este texto aparecera al lado del boton de messenger',
          'dependency' => array( 'activador_chats', '==', 'true' ) ,
        ),

    array(
          'id'    => 'chat_mesenger',
          'type'  => 'text',
          'title' => 'Digite el ID de su fanPage de Facebook',
          'dependency' => array( 'activador_chats', '==', 'true' ) ,
        ),

    array(
      'type'    => 'heading',
      'content' => 'Whatsapp'
    ),

    array(
      'id'    => 'activador_chats_whatsapp',
      'type'  => 'switcher',
      'title' => 'Activar el boton flotante de messenger',
      'dependency' => array( 'activador_chats', '==', 'true' ) ,
    ),

    array(
          'id'    => 'chat_whatsapp_texto',
          'type'  => 'text',
          'title' => 'Digite el texto para el boton de whatsapp',
          'desc'  => 'Este texto aparecera al lado del boton de whatsapp',
          'dependency' => array( 'activador_chats', '==', 'true' ) ,
        ),

    array(
      'id'    => 'chat_whatsapp',
      'type'  => 'text',
      'title' => 'Digite el numero de celular para enviar un mensaje',
      'dependency' => array( 'activador_chats', '==', 'true' ), 
    ),

  ),
);

CSFramework::instance( $settings, $options );
?>