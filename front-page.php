<?php
include get_template_directory() . "/components/sectionInfo.php";
include get_template_directory() . "/components/cardServices.php";
include get_template_directory() . "/templates/sectionTemplate.php";
include get_template_directory() . "/data/dataService.php";

// Multimedia

$ImpresoraImg = "http://teknify.local/wp-content/uploads/2024/06/reparacion-impresora.png";
include get_template_directory() . "/assets/svg/santiagoMap.php";
include get_template_directory() . "/assets/svg/brands.php";


get_header(); ?>

<main class="dark:bg-slate-900 bg-[#BFBFBF] transition">


<!-- PORTADA -->

            <div id="particles-js" class="w-full flex justify-center items-center xl:h-[700px]  h-[800px] dark:bg-[#080D11] bg-[#BFBFBF] animate-fade animate-once animate-duration-[1500ms] animate-delay-[800ms] transition">   
                <div class="absolute top-0 w-full h-full flex justify-center items-center mt-[150px]  xl:mt-0 ">
                    <div  class="w-[90%] xl:flex items-center gap-4">
                        <div class="xl:w-[60%] w-full justify-center items-center xl:items-start text-center xl:text-left flex flex-col gap-8 xl:gap-4 dark:text-white text-[#080D11] z-40 relative">
                            <h2 class=" xl:text-[5.5em]  text-[3em] font-extrabold leading-none ">¿Problemas con tu impresora?</h2>
                            <a href="https://api.whatsapp.com/send?phone=56967427336&text=%C2%A1Hola!%20quisiera%20pedir%20un%20t%C3%A9cnico%20a%20domicilio%20%3A)" target="_blank"> <p class="flex items-center justify-center cursor-pointer hover:bg-red-700 transition p-4 xl:w-[750px] text-white w-full rounded-full bg-red-600 font-extrabold text-[1.5em] xl:text-[40px]">¡Llama a un técnico a domicilio!</p></a>
                            <span class="xl:text-[22px] flex font-bold justify-center items-center gap-0 xl:gap-4" >
                           <span class="hidden xl:flex"> <i class="fas fa-map-marker-alt "></i></span>
                                ¡COBERTURA EN TODA LA ZONA METROPOLITANA!</span>
                        </div>
                        <div class="xl:w-[40%] w-full h-full relative flex justify-center xl:flex-none xl:mt-0 mt-[50px]">
                        <div style="background-image: url('http://teknify.local/wp-content/uploads/2024/06/PORTADA.png'); background-repeat: no-repeat; background-size: contain;" class="xl:w-[700px] xl:h-[400px] w-[700px] h-[400px] xl:scale-125 hover:scale-13  0 transition z-40 xl:absolute xl:translate-y-[-60px] "></div>
                    </div>
                    </div>
                </div>
            </div>

<!-- MARCAS -->
    <div class="w-full py-8 h-[85px] dark:bg-[#080D11] bg-[#848587] flex justify-center animate-fade animate-once animate-duration-[1500ms] animate-delay-[1000ms] transition ">
        <div class="w-[90%] h-full flex items-center justify-between">
          <?php echo $cannon ?>
          <?php echo $samsung ?>
          <?php echo $hp ?>
          <?php echo $brother ?>
          <?php echo $epson ?>
        
        </div>
    </div>

    <?php sectionInfo("Asistencia Completa", "SOPORTE MULTIMARCA", "Garantizado", "¡Expertos en tecnología, listos para resolver cualquier inconveniente! En Teknify, brindamos soporte multimarca para tus dispositivos favoritos. Desde problemas técnicos hasta configuraciones complejas, nuestro equipo está aquí para ayudarte. Solicita un técnico a domicilio hoy mismo y experimenta la diferencia con Teknify. Tu tranquilidad es nuestra prioridad, sin importar el equipo o dónde estés. Teknify, tu aliado tecnológico de confianza.", "Solicita un técnico a Domicilio", $ImpresoraImg, false, false, "nosotros"); ?>

        
    
            
            
    <?php
    $dataService;
    sectionTemplate(function () use ($dataService) {
        foreach ($dataService as $services) {
            echo cardServices($services['title'], $services['icon'], $services['description']);
        }
    }, "Nuestros Servicios", "servicios")
        ?>


<?php sectionInfo("¡Llegamos dónde estés!", "PRINCIPALES COMUNAS", "Disponible", "Nuestro equipo de expertos está listo para atenderte donde sea que te encuentres. Desde La Florida hasta Las Condes, pasando por Maipú y Providencia, cubrimos un amplio espectro de comunas para garantizar que tengas acceso a soluciones rápidas y eficientes para tus impresoras. No importa dónde estés ubicado, ¡contáctanos y deja que nos encarguemos de que tus equipos vuelvan a funcionar como nuevos!", "Llama un técnico a Domicilio", false, true, $santiagoSVG, "points"); ?>


    

</main>

<?php get_footer(); ?>

