<?php include "header.php"; ?>
<section>
    <div class="video">
        <video width="100%" height="100%" id="autoplay" controls >
            <source src="video/audi1.mp4" />
        </video>
    </div>
</section>
<?php include "footer.php"; ?>
<script>
     document.getElementById('autoplay').play();
</script>
