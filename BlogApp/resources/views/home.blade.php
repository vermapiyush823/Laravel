<h1 class="text-center text-[30px] mt-10 font-semibold ">
    Hello {{$name}} ji
</h1>

<h2>
    Your fav movies are:
</h2>
<ul>
    <?php
        foreach($movies as $mov){
            echo '<li>'.$mov.'</li>';
        }    
    ?>
</ul>