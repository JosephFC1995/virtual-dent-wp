<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// METABOX OPTIONS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$options      = array();

// -----------------------------------------
// Page Metabox Options                    -
// -----------------------------------------
$options[]    = array(
  'id'        => '_custom_page_options',
  'title'     => 'Opciones para la pagina',
  'post_type' => 'page',
  'context'   => 'normal',
  'priority'  => 'default',
  'sections'  => array(

    array(
      'name'  => 'section_1',
      'fields' => array(

         array(
          'id'    => 'pagina_cabecera',
          'type'  => 'upload',
          'desc'  => 'Selecciona la imagen para la cabecera de la pagina',
          'title' => 'Imagen de Cabecera',
        ),

         array(
          'id'    => 'agregar_apartado_especialidades',
          'type'  => 'switcher',
          'title' => '¿Desea agregar el apartado de especialdiades?',
          'desc'  =>  'Esto agregara debajo del contenido de la pagina las especialidades de la empresa.',
          'default' => false
        ),

         array(
          'id'    => 'agregar_apartado_mis_visi',
          'type'  => 'switcher',
          'title' => '¿Desea agregar el apartado de mision y vision?',
          'desc'  =>  'Esto agregara debajo del contenido de la pagina la mision y vision de la empresa.',
          'default' => false
        ),

        array(
          'id'    => 'agregar_apartado_virtudes',
          'type'  => 'switcher',
          'title' => '¿Desea agregar el apartado de virtudes?',
          'desc'  =>  'Esto agregara debajo del contenido de la pagina las virtudes de la empresa.',
          'default' => false
        ),

        array(
          'id'    => 'agregar_apartado_mapa',
          'type'  => 'switcher',
          'title' => '¿Desea agregar el apartado de mapa?',
          'desc'  =>  'Esto agregara debajo del contenido de la pagina el mapa con la ubicacion de la empresa.',
          'default' => false
        ),

        array(
          'id'    => 'agregar_apartado_planes',
          'type'  => 'switcher',
          'title' => '¿Desea agregar el apartado de los planes?',
          'desc'  =>  'Esto agregara debajo del contenido de la pagina los planes de la empresa',
          'default' => false
        ),
        array(
          'id'    => 'agregar_apartado_calendario',
          'type'  => 'switcher',
          'title' => '¿Desea agregar el apartado del calendario?',
          'desc'  =>  'Esto agregara debajo del contenido de la pagina el calendario',
          'default' => false
        ),

      ), 
    ), 

  ),
);


CSFramework_Metabox::instance( $options );
