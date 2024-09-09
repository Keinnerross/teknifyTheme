<?php 

function sectionTemplate($childrens, $title, $id){
    ?>

    <div id="<?php echo esc_html($id)?>" class="w-full flex justify-center items-center dark:bg-[#080D11] py-16 ">
        <div class="w-[85%] flex flex-col justify-center items-center gap-8 ">
            <div class="flex justify-center flex-col items-center">
                <span class="text-[45px] text-center xl:text-left dark:text-white font-extrabold pb-4"><?php echo $title ? esc_html($title) : "" ?></span>
                <div style="background: linear-gradient(90deg, rgba(198,222,5,1) 0%, rgba(230,2,106,1) 17%, rgba(0,115,189,1) 100%);" class="h-[10px] w-[120px] rounded-full mb-[30px]" ></div>
            </div>
            <div class="w-full flex flex-wrap justify-between gap-12 ">
            <?php $childrens(); ?>

            </div>
        </div>
    </div>
    
    <?php
}

?>