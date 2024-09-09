<?php

function sectionInfo($titleSection, $title, $textAux, $description, $button, $img, $isReverse, $svg, $id)
{
    $rowReverse = $isReverse ? 'xl:flex-row-reverse flex-row-reverse' : '';
    ?>
            <div id="<?php echo esc_html($id)?>"class="w-full flex justify-center dark:text-white pb-[100px] pt-[60px] dark:bg-[#13151C] bg-[#E8E9EF] transition">

                <div class="w-[85%] gap-12 flex flex-col">
                        <div class="flex flex-col gap-4 items-center xl:items-start text-center xl:text-left ">
                            <h3 class="text-[40px] font-extrabold "><?php echo esc_html($titleSection) ?></h3>
                            <div style="background: linear-gradient(90deg, rgba(198,222,5,1) 0%, rgba(230,2,106,1) 17%, rgba(0,115,189,1) 100%);" class="h-[10px] w-[120px] rounded-full"> </div>
                </div>

                <div class="flex flex-col xl:flex-row xl:h-full justify-between xl:<?php echo esc_html($rowReverse) ?> ">
                            <div  class="xl:w-[40%] w-full h-full xl:flex xl:justify-center xl:items-center">
                            <?php 
                                if ($img) {
                                    echo '<div style="background-image: url(\'' . $img . '\');"                
                                            class="bg-cover bg-bottom bg-no-repeat w-[100%] xl:h-[100%] h-[300px] bg-slate-800 rounded-[25px] cursor-pointer in">
                                       </div>';
                                } else {
                                    echo $svg;
                                }
                            ?>



                        </div>
                            <div class="flex-col flex gap-8 xl:w-[50%] gap-4 text-justify justify-start text-center xl:text-left">
                                <div>
                            <span class="hidden xl:flex text-[#66B32E] font-extrabold text-[30px] text-center xl:text-left"><?php echo esc_html($textAux) ?></span>
                            <h3 class="mt-[50px] xl:mt-0 xl:text-[90px] text-[3rem] text-center xl:text-left font-bold leading-none font-extrabold"><?php echo esc_html($title); ?></h3>
                            </div>
                            <span class="text-[20px] text-justify"><?php echo esc_html($description) ?></span>
                            <a href="https://api.whatsapp.com/send?phone=56967427336&text=%C2%A1Hola!%20quisiera%20pedir%20un%20t%C3%A9cnico%20a%20domicilio%20%3A)" target="_blank"><button class="hover:bg-red-700 w-[100%] mt-[15px] py-4 xl:py-2 text-white rounded-full bg-[#E31515] font-bold text-[20px] xl:text-[35px] transition "><?php echo esc_html($button) ?></button></a>
                            <div class="flex flex-wrap items-center gap-8 justify-center xl:justify-between text-[22px]">
                                <div class="flex gap-6 items-center jusitfy-center cursor-pointer hover:scale-[1.05] transition">
                                <i class="fas fa-star"></i>

                                    <span>Excelencia</span>
                                </div>
                                <div class="flex gap-4 items-center jusitfy-center cursor-pointer hover:scale-[1.05] transition">
                                <i class="fas fa-bolt"></i>

                                    <span>Eficiencia</span>
                                </div>
                                <div class="flex gap-4 items-center jusitfy-center cursor-pointer hover:scale-[1.05] transition">
                                <i class="fas fa-calendar-check"></i>

                                    <span>Compromiso</span>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>  
                </div>

                <?php
}
?>