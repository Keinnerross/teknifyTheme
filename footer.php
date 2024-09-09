
<footer class=""> 
<div class="w-full flex justify-center items-center py-8 text-white  dark:bg-[#080D11] bg-slate-800">
 <div class="w-[85%] flex justify-center text-center xl:text-left xl:justify-between flex-col xl:flex-row items-center  ">
    <div class="formulario w-full xl:w-[60%] ">

    <h3 class="font-extrabold text-[40px] pb-[25px]">¡Contáctanos!</h3>
    <?php echo do_shortcode('[contact-form-7 id="73f0097" title="Footer Form"]'); ?>


    </div>
    <div class="w-full xl:w-[40%] ">
        <h3 class="font-extrabold text-[40px]">Información de Contácto</h3>
        <ul class="flex flex-col items-center xl:items-start gap-4 mt-[25px] text-[20px]">
            <li class="flex gap-4 items-center cursor-pointer hover:scale-[1.05] transition">
            <i class="fas fa-envelope"></i>
                <h4 class="font-bold">soporte@tecnify.cl</h4>
            </li>
            <li class="flex gap-4 items-center cursor-pointer  hover:scale-[1.05] transition ">
            <i class="fas fa-phone"></i>
                <h4 class="font-bold">+56 9 3303 4148</h4>
            </li>
            <li class="flex gap-4 items-center cursor-pointer hover:scale-[1.05] transition">
            <i class="fas fa-clock"></i>
                <h4 class="font-bold">Lunes a sábado 9:00 a 20:00</h4>
            </li>
        </ul>
        <h3 class="font-extrabold text-[40px] pt-[50px]">Síguenos</h3>
        <ul class="flex flex-col items-center xl:items-start gap-4 mt-[25px] text-[20px]">
          
            <li class="">
                <a 
                class="flex gap-4 items-center cursor-pointer hover:scale(1.1) hover:scale-[1.05] transition" 
                href="https://www.facebook.com/profile.php?id=61551505286172&mibextid=ZbWKwL"
                target="_blank">
                    <i class="fab fa-facebook-f"></i>
                    <h4 class="font-bold">Facebook</h4>
                </a>
            </li>
            <li class="flex gap-4 items-center cursor-pointer hover:scale(1.1)">
            <a 
                class="flex gap-4 items-center cursor-pointer hover:scale(1.1) hover:scale-[1.05] transition" 
                href="https://www.instagram.com/gt_print1?igsh=bTZxeG0xYjA2aXE%3D"
                target="_blank">
            <i class="fab fa-instagram"></i>
                <h4 class="font-bold">Instagram </h4>
                </a>
            </li>
        </ul>
    </div>
</div>
</div>
<div class="w-full py-4 text-center dark:bg-[#080D11] text-white bg-slate-900 text-[20px] font-bold ">Teknify © 2024 - Solución donde estés</div>

</footer>
<?php wp_footer(); ?>

    




</body>
</html>