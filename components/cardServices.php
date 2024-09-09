<?php

function cardServices($title, $icon, $description)
{
    ?>
        <div class="cursor-pointer hover:translate-y-[-25px] hover:scale-[1.02] transition flex pt-[40px] justify-center dark:text-white dark:bg-[#13151C] bg-[#DDDDDD] w-full xl:w-[30%] h-[550px] rounded-[20px]">
            <div class="flex flex-col gap-2 w-[80%] h-[420px] text-center items-center justify-between">
                <div class="flex flex-col items-center gap-4"> 
                    <?php echo $icon ?>

                <h4 class="text-[30px] font-bold"><?php echo esc_html($title) ?></h4></div>
           
                <p class="md:text-[22px]  xl:text-[18px]"><?php echo esc_html($description) ?></p>
                <a href="https://api.whatsapp.com/send?phone=56967427336&text=%C2%A1Hola!%20quisiera%20pedir%20un%20t%C3%A9cnico%20a%20domicilio%20%3A)" target="_blank"><button class="hover:bg-red-700 bg-red-600 cursor-pointer font-extrabold text-white text-[22px] py-3 px-8 mt-[25px] rounded-full transition">Saber más</button></a>
            </div>
            </div>

        <?php
}
?>

