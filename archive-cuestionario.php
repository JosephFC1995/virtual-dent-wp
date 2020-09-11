<?php get_header();?>

<?php include get_template_directory() . '/inc/headers/header.php'?>
<div class="contenedor-cabecera d-flex align-items-center justify-content-center" style="background: linear-gradient(rgba(42, 42, 43, 0.8),rgba(42, 42, 43, 0.8)) , url('http://virtualdent.net/wp-content/uploads/2018/02/IMG_1041.jpg') center center; background-attachment: fixed;background-size: cover;">
        <span><?php echo wp_title(''); ?></span>
</div>
<div class="container">
    <div class="pagina_contenido">

        <?php
            $args1 = array(
                'post_type'      => 'cuestionario',
                'posts_per_page' => '-1',
            );
            $query = new WP_Query($args1);
            ?>

            <?php $total_p =  $query->post_count ?>

            <?php echo $total_p ?>

            <?php $pregunta_1 = $wpdb->get_results("Select count(meta_key) as 'total' from wpyh_postmeta where meta_key = 'pregunta_1_opciones' and meta_value = '1' UNION ALL Select count(meta_key) as 'total' from wpyh_postmeta where meta_key = 'pregunta_1_opciones' and meta_value = '2'", 'ARRAY_A') ?>
            <?php $pregunta_1_otro = $total_p - (intval($pregunta_1[0]['total']) + intval($pregunta_1[1]['total']))?>
            
            <div id="pregunta_1" class="mb-4"></div>

            
             <?php $pregunta_2 = $wpdb->get_results("Select count(meta_key) as 'total' from wpyh_postmeta where meta_key = 'pregunta_2_opciones' and meta_value = 'no' UNION ALL Select count(meta_key) as 'total' from wpyh_postmeta where meta_key = 'pregunta_2_opciones' and meta_value = 'si'", 'ARRAY_A') ?>


            <div id="pregunta_2" class="mb-4"></div>



               <?php $pregunta_3 = $wpdb->get_results("Select count(meta_key) as 'total' from wpyh_postmeta where meta_key = 'pregunta_3_opciones' and meta_value = 'si' UNION ALL Select count(meta_key) as 'total' from wpyh_postmeta where meta_key = 'pregunta_3_opciones' and meta_value = 'no'", 'ARRAY_A') ?>


            <div id="pregunta_3" class="mb-4"></div>

               <?php $pregunta_4 = $wpdb->get_results("Select COALESCE(count(meta_key),0) as 'total' from wpyh_postmeta where meta_key = 'pregunta_4_opciones' and meta_value = 1 UNION ALL Select COALESCE(count(meta_key),0) as 'total' from wpyh_postmeta where meta_key = 'pregunta_4_opciones' and meta_value = 2 UNION ALL Select COALESCE(count(meta_key),0) as 'total' from wpyh_postmeta where meta_key = 'pregunta_4_opciones' and meta_value = 3 UNION ALL Select IFNULL(count(meta_key),0) as 'total' from wpyh_postmeta where meta_key = 'pregunta_4_opciones' and meta_value = '4' UNION ALL Select IFNULL(count(meta_key),0) as 'total' from wpyh_postmeta where meta_key = 'pregunta_4_opciones' and meta_value = '5'", 'ARRAY_A') ?>


            <div id="pregunta_4" class="mb-4"></div>



               <?php $pregunta_5 = $wpdb->get_results("Select COALESCE(count(meta_key),0) as 'total' from wpyh_postmeta where meta_key = 'pregunta_5_opciones' and meta_value = 'si' UNION ALL Select COALESCE(count(meta_key),0) as 'total' from wpyh_postmeta where meta_key = 'pregunta_5_opciones' and meta_value = 'no'", 'ARRAY_A') ?>


            <div id="pregunta_5" class="mb-4"></div>




             <?php $pregunta_6 = $wpdb->get_results("Select COALESCE(count(meta_key),0) as 'total' from wpyh_postmeta where meta_key = 'pregunta_6_opciones' and meta_value = 1 UNION ALL Select COALESCE(count(meta_key),0) as 'total' from wpyh_postmeta where meta_key = 'pregunta_6_opciones' and meta_value = 2 UNION ALL Select COALESCE(count(meta_key),0) as 'total' from wpyh_postmeta where meta_key = 'pregunta_6_opciones' and meta_value = 3 UNION ALL Select IFNULL(count(meta_key),0) as 'total' from wpyh_postmeta where meta_key = 'pregunta_6_opciones' and meta_value = '4' UNION ALL Select IFNULL(count(meta_key),0) as 'total' from wpyh_postmeta where meta_key = 'pregunta_6_opciones' and meta_value = '5'", 'ARRAY_A') ?>


            <div id="pregunta_6" class="mb-4"></div>




            <?php $pregunta_6_doctor = $wpdb->get_results("Select COALESCE(count(meta_key),0) as 'total' from wpyh_postmeta where meta_key = 'pregunta_6_doctor' and meta_value = 1 UNION ALL Select COALESCE(count(meta_key),0) as 'total' from wpyh_postmeta where meta_key = 'pregunta_6_doctor' and meta_value = 2", 'ARRAY_A') ?>


            <div id="pregunta_6_doctor" class="mb-4"></div>






             <?php $pregunta_7 = $wpdb->get_results("Select COALESCE(count(meta_key),0) as 'total' from wpyh_postmeta where meta_key = 'pregunta_7_opciones' and meta_value = 1 UNION ALL Select COALESCE(count(meta_key),0) as 'total' from wpyh_postmeta where meta_key = 'pregunta_7_opciones' and meta_value = 2 UNION ALL Select COALESCE(count(meta_key),0) as 'total' from wpyh_postmeta where meta_key = 'pregunta_7_opciones' and meta_value = 3 UNION ALL Select IFNULL(count(meta_key),0) as 'total' from wpyh_postmeta where meta_key = 'pregunta_7_opciones' and meta_value = '4' UNION ALL Select IFNULL(count(meta_key),0) as 'total' from wpyh_postmeta where meta_key = 'pregunta_7_opciones' and meta_value = '5'", 'ARRAY_A') ?>


            <div id="pregunta_7" class="mb-4"></div>




            <?php $pregunta_7_asistente = $wpdb->get_results("Select COALESCE(count(meta_key),0) as 'total' from wpyh_postmeta where meta_key = 'pregunta_7_asistente' and meta_value = 1 UNION ALL Select COALESCE(count(meta_key),0) as 'total' from wpyh_postmeta where meta_key = 'pregunta_7_asistente' and meta_value = 2", 'ARRAY_A') ?>


            <div id="pregunta_7_asistente" class="mb-4"></div>





               <?php $pregunta_8 = $wpdb->get_results("Select COALESCE(count(meta_key),0) as 'total' from wpyh_postmeta where meta_key = 'pregunta_8_opciones' and meta_value = 'si' UNION ALL Select COALESCE(count(meta_key),0) as 'total' from wpyh_postmeta where meta_key = 'pregunta_8_opciones' and meta_value = 'no'", 'ARRAY_A') ?>


            <div id="pregunta_8" class="mb-4"></div>

            
    </div>

</div>

<script>
   jQuery(document).ready(function($) {
        var pregunta_1 = {
          "type": "bar",
          "title": {
            "text": "¿Como conoció la Clínica Virtual Dent?"
          },
          "plot": {
            "value-box": {
              "text": "%v"
            },
            "tooltip": {
              "text": "%v"
            }
          },
          "scale-x": {
            "values": [
              "Boca Boca",
              "Redes Sociales",
              "Otro",
            ]
          },
          "series": [
            {
              "values": [
                <?php echo intval($pregunta_1[0]['total']) ?>,
                <?php  echo intval($pregunta_1[1]['total']) ?>,
                <?php echo intval($pregunta_1_otro) ?>
              ],
              "text": "Respuestas"
            }
          ]
        };
        zingchart.render({
          id: "pregunta_1",
          data: pregunta_1,
          height: "480",
          width: "100%"
        });




          var pregunta_2 = {
          "type": "bar",
          "title": {
            "text": "¿Lo atendieron a la hora pactada?"
          },
          "plot": {
            "value-box": {
              "text": "%v"
            },
            "tooltip": {
              "text": "%v"
            }
          },
          "scale-x": {
            "values": [
              "No",
              "Si",
            ]
          },
          "series": [
            {
              "values": [
                <?php echo intval($pregunta_2[1]['total']) ?>,
                <?php  echo intval($pregunta_2[0]['total']) ?>,
              ],
              "text": "Respuestas"
            }
          ]
        };
        zingchart.render({
          id: "pregunta_2",
          data: pregunta_2,
          height: "480",
          width: "100%"
        });


        var pregunta_3 = {
          "type": "bar",
          "title": {
            "text": "¿Encontró la recepción ordenada y limpia?"
          },
          "plot": {
            "value-box": {
              "text": "%v"
            },
            "tooltip": {
              "text": "%v"
            }
          },
          "scale-x": {
            "values": [
              "Si",
              "No",
            ]
          },
          "series": [
            {
              "values": [
                <?php echo intval($pregunta_3[0]['total']) ?>,
                <?php  echo intval($pregunta_3[1]['total']) ?>,
              ],
              "text": "Respuestas"
            }
          ]
        };
        zingchart.render({
          id: "pregunta_3",
          data: pregunta_3,
          height: "480",
          width: "100%"
        });





        var pregunta_5 = {
          "type": "bar",
          "title": {
            "text": "¿Encontró el consultorio ordenado y limpio?"
          },
          "plot": {
            "value-box": {
              "text": "%v"
            },
            "tooltip": {
              "text": "%v"
            }
          },
          "scale-x": {
            "values": [
              "si",
              "no",
            ]
          },
          "series": [
            {
              "values": [
                <?php echo intval($pregunta_5[0]['total']) ?>,
                <?php  echo intval($pregunta_5[1]['total']) ?>
            ],
              "text": "Respuestas"
            }
          ]
        };
        zingchart.render({
          id: "pregunta_5",
          data: pregunta_5,
          height: "480",
          width: "100%"
        });






        var pregunta_6 = {
          "type": "bar",
          "title": {
            "text": "¿Cómo calificaría la atención del doctor del 1 - 5? ¿Por qué?"
          },
          "plot": {
            "value-box": {
              "text": "%v"
            },
            "tooltip": {
              "text": "%v"
            }
          },
          "scale-x": {
            "values": [
              "1",
              "2",
              "3",
              "4",
              "5"
            ]
          },
          "series": [
            {
              "values": [
                <?php echo intval($pregunta_6[0]['total']) ?>,
                <?php  echo intval($pregunta_6[1]['total']) ?>,
                <?php  echo intval($pregunta_6[2]['total']) ?>,
                <?php  echo intval($pregunta_6[3]['total']) ?>,
                <?php  echo intval($pregunta_6[4]['total']) ?>,
              ],
              "text": "Respuestas"
            }
          ]
        };
        zingchart.render({
          id: "pregunta_6",
          data: pregunta_6,
          height: "480",
          width: "100%"
        });









        var pregunta_6_doctor = {
          "type": "bar",
          "title": {
            "text": "Que doctor"
          },
          "plot": {
            "value-box": {
              "text": "%v"
            },
            "tooltip": {
              "text": "%v"
            }
          },
          "scale-x": {
            "values": [
              "Doctor",
              "Doctora",
            ]
          },
          "series": [
            {
              "values": [
                <?php echo intval($pregunta_6_doctor[0]['total']) ?>,
                <?php  echo intval($pregunta_6_doctor[1]['total']) ?>,
              ],
              "text": "Respuestas"
            }
          ]
        };
        zingchart.render({
          id: "pregunta_6_doctor",
          data: pregunta_6_doctor,
          height: "480",
          width: "100%"
        });






        var pregunta_7 = {
          "type": "bar",
          "title": {
            "text": "Si pudiera calificar la atención de la asistente del 1 - 5"
          },
          "plot": {
            "value-box": {
              "text": "%v"
            },
            "tooltip": {
              "text": "%v"
            }
          },
          "scale-x": {
            "values": [
              "1",
              "2",
              "3",
              "4",
              "5"
            ]
          },
          "series": [
            {
              "values": [
                <?php echo intval($pregunta_7[0]['total']) ?>,
                <?php  echo intval($pregunta_7[1]['total']) ?>,
                <?php  echo intval($pregunta_7[2]['total']) ?>,
                <?php  echo intval($pregunta_7[3]['total']) ?>,
                <?php  echo intval($pregunta_7[4]['total']) ?>,
              ],
              "text": "Respuestas"
            }
          ]
        };
        zingchart.render({
          id: "pregunta_7",
          data: pregunta_7,
          height: "480",
          width: "100%"
        });







        var pregunta_7_asistente = {
          "type": "bar",
          "title": {
            "text": "Que asistente fue mas evaluado"
          },
          "plot": {
            "value-box": {
              "text": "%v"
            },
            "tooltip": {
              "text": "%v"
            }
          },
          "scale-x": {
            "values": [
              "Erika",
              "Elizabeth",
            ]
          },
          "series": [
            {
              "values": [
                <?php echo intval($pregunta_7_asistente[0]['total']) ?>,
                <?php  echo intval($pregunta_7_asistente[1]['total']) ?>,
              ],
              "text": "Respuestas"
            }
          ]
        };
        zingchart.render({
          id: "pregunta_7_asistente",
          data: pregunta_7_asistente,
          height: "480",
          width: "100%"
        });













        var pregunta_8 = {
          "type": "bar",
          "title": {
            "text": "¿Los servicios higuiénicos los encontró limpio?"
          },
          "plot": {
            "value-box": {
              "text": "%v"
            },
            "tooltip": {
              "text": "%v"
            }
          },
          "scale-x": {
            "values": [
              "si",
              "no",
            ]
          },
          "series": [
            {
              "values": [
                <?php echo intval($pregunta_8[0]['total']) ?>,
                <?php  echo intval($pregunta_8[1]['total']) ?>
            ],
              "text": "Respuestas"
            }
          ]
        };
        zingchart.render({
          id: "pregunta_8",
          data: pregunta_8,
          height: "480",
          width: "100%"
        });






   });
</script>


<?php get_footer();?>

