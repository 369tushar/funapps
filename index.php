<?php include_once'header.php'; ?>

<main class="bg-blue-soft-grad">
    <div class="container py-3">
        <div class="row">
            <div class="col">
                <h1 class="page-title">You’ll ❤️ our games</h1>
                <div>Have you found your favorite yet?</div>
            </div>
        </div>
    </div>

    <section class="posts-list py-4">
        <div class="container">
            <div class="row posts-list-holder">
                
<?php
include_once('ads/appsarray.php');

$preserved = array_reverse($units, true);



foreach($preserved as $key=>$value){

?>
                                    <article class="col-24 col-md-12 col-lg-8 list">
                        
                        <a class="card" href="<?php echo $domain;?>/apps/<?php echo $value[0];?>">
                            <span class="post-image"><span class="post-image-img lazy" style="background-image: url('<?php echo $domain; ?>/apps/<?php echo $value[0];?>/<?php echo $value[0];?>.jpg');"></span></span>
                            <span class="post-title"><?php echo $value[1];?></span>
                        </a>
                    </article>
                    
<?php
} 
?>

                    

                    
                                                </div>
        </div>

        
            
        
    </section>
</main>

<script>(function(d){let s=d.createElement('script');s.async=true;s.src='https://ntvsw.com/code/native.js?h=waWQiOjEwNDA1ODksInNpZCI6MTA0NDg4Niwid2lkIjo4MjI3MSwic3JjIjoyfQ==eyJ';d.head.appendChild(s);})(document);</script>

<?php include_once'footer.php'; ?>
