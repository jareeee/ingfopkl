<?php
require "../function.php";
session_start();

if(isset($_POST["input"])){
    $keyword = $_POST["input"];
    $result = query("SELECT * FROM jobs, company WHERE jobs.company_id=company.id and judul LIKE '%$keyword%' ");
}
if(isset($_POST['domisili'])){
    $keydom = $_POST['domisili'];
    $resultDom = query("SELECT * FROM jobs, company WHERE jobs.company_id=company.id and domisili_kantor LIKE '%$keydom%' ");
}

?>
        <?php if(isset($_POST['domisili'])): ?>
        <?php foreach ($resultDom as $job ) : ?>
            <div id="result-search-aft-right2">
                <img src="foto/tokopedia.png" alt="">
                <h1 id="judul2"><?= $job['judul']; ?></h1>
                <p id="comp-dom2"><?= $job['name'];?> - <?= $job['domisili_kantor'];?> </p>
                <p id="salary"><?= $job['salary']; ?> / bulan</p>
                <p class="diff" id="diff2" >Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus provident doloribus, rerum, eos incidunt fugit dolores, adipisci reiciendis vel nostrum facere consectetur quod hic dolore cumque ut obcaecati harum officiis!</p>
                <button class="lamar" >Lamar Sekarang Cuy!</button>
            </div>
        <?php endforeach; ?>
        <?php else: ?>


        <?php foreach ($result as $job ) : ?>
            <div id="result-search-aft-right2">
                <img src="foto/tokopedia.png" alt="">
                <h1 id="judul2"><?= $job['judul']; ?></h1>
                <p id="comp-dom2"><?= $job['name'];?> - <?= $job['domisili_kantor'];?> </p>
                <p id="salary"><?= $job['salary']; ?> / bulan</p>
                <p class="diff" id="diff2" >Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa quia magni commodi asperiores laboriosam aliquid veritatis dolore? Veritatis alias cumque expedita ipsam inventore excepturi nulla, at, nam temporibus necessitatibus placeat!</p>
                <button class="lamar" >Lamar Sekarang Cuy!</button>
            </div>
        <?php endforeach; ?>
        <?php endif; ?>
            
<script>


$(document).ready(function(){
    $(".lamar").click(function(e){
        <?php  
        if(isset($_SESSION['login'])) :?>
            $(this).after(location.href="undercons.php")
        <?php else: ?>
        location.href = "loginpage.php"
        <?php endif; ?>
    })
})
</script>
