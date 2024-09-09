<!DOCTYPE html>
<html lang="en" class="dark transition">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
   <?php wp_head() ?>
</head>
<body class="dark:bg-[#080D11] bg-[#E8E9EF] overflow-x-hidden ">

<header class="w-full absolute xl:top-[50px] flex  justify-center items-center z-50 ">


    <div class="w-full xl:w-[90%] flex items-center justify-between xl:rounded-full dark:bg-slate-800 bg-slate-800 pl-6 py-4 pr-4 animate-fade-up animate-once animate-duration-1000  sticky top-0  ">


        <div class="flex items-center cursor-pointer gap-2">
            <img 
            class="w-[40px] h-[40px]"
            src="<?php echo get_template_directory_uri() ?>/assets/img/logo.png" alt="logo"/>
            <span class="text-[35px] font-bold text-white">Teknify</span>
        </div>
<div class="flex justify-end gap-8">
        
                <div class="menuPC xl:flex items-center justify-end gap-6 hidden ">
                    <button class="switchDarkMode">                
                    <i class="fas fa-lightbulb text-white"></i>
                    </button>
                    <nav>
                        <?php wp_nav_menu(
                            array(
                                'theme_location' => 'top-menu',
                                'menu_class' => 'flex gap-[2rem] text-white text-[20px] font-bold',
                                'container-class' => 'container-menu',
                            )
                        ) ?>
                    </nav>
                </div>

                <div class="menuMobile flex xl:hidden ">
                    <div class="flex gap-8">
                          
                    <i class="fas fa-lightbulb switchDarkModeMobil text-white text-[30px]"></i>
                    
                <img 
            class="w-[40px] h-[40px] invert cursor-pointer burgerMenu"
            src="<?php echo get_template_directory_uri() ?>/assets/img/menu.png" alt="logo"/>
            </div>

<div class="sliderMenu h-[screen] w-[50%] bg-slate-900 rounded-bl-[100px] p-12 absolute right-0 top-[83px] transition hidden">
                  <nav >
                        <?php wp_nav_menu(
                            array(
                                'theme_location' => 'top-menu',
                                'menu_class' => 'flex xl:flex-row flex-col gap-[2rem] text-white text-[18px] font-bold',
                                'container-class' => 'container-menu',
                            )
                        ) ?>
                  </nav>
                </div>
            </div>
            <a href="https://api.whatsapp.com/send?phone=56967427336&text=%C2%A1Hola!%20quisiera%20pedir%20un%20t%C3%A9cnico%20a%20domicilio%20%3A)" target="_blank">
            <button class="xl:flex hidden bg-red-600 px-4 py-2 hover:bg-red-700 transition rounded-full cursor-pointer text-[18px] dark:text-white text-white font-extrabold">CONTÁCTAR</button></a>
        </div>
    </div>
</header>