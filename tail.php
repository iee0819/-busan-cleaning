<aside class="side">
                <nav class="lnb">
                <? include './menu.php'; ?>
                </nav>
                <div class="img_box">
                    <img src="./images/slogan.png" alt="">
                </div>
            </aside>
        </div>
    </main>
<script>
    $(function(){
        let num = <?=$num;?>;
        $('.lnb>ul>li').eq(num - 1).addClass('on')
    })
</script>
<? include './tail.sub.php'; ?>