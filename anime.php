<?php
$data = array(
    array(
        'top'=>348,
        'left'=>115,
        'width'=>695,
        'height'=>208,
        'idx_start'=>1,
        'idx_end'=>199,
        'folder'=> '1',
        'imgname'=> '2_0',
    ),
    array(
        'top'=>0,
        'left'=>0,
        'width'=>377,
        'height'=>83,
        'idx_start'=>456,
        'idx_end'=>572,
        'folder'=> '2',
        'imgname'=> '2_0',
    ),
    array(
        'top'=>0,
        'left'=>985,
        'width'=>370,
        'height'=>111,
        'idx_start'=>577,
        'idx_end'=>893,
        'folder'=> '3',
        'imgname'=> '3_0',
    ),
    array(
        'top'=>71,
        'left'=>692,
        'width'=>347,
        'height'=>189,
        'idx_start'=>204,
        'idx_end'=>341,
        'folder'=> '4',
        'imgname'=> '4_0',
    ),
    array(
        'top'=>38,
        'left'=>1285,
        'width'=>331,
        'height'=>316,
        'idx_start'=>0,
        'idx_end'=>100,
        'folder'=> '7',
        'imgname'=> '[10000-10100].jpg Comp 1_0',
    ),
    array(
        'top'=>18,
        'left'=>1618,
        'width'=>302,
        'height'=>544,
        'idx_start'=>0,
        'idx_end'=>250,
        'folder'=> '8',
        'imgname'=> '[10000-10250].jpg Comp 1_0',
    )
);
$kf = 0.7;
?>
<div class="pk_anime" data-width="1920" data-height="600" style=" width:<?=(1920*$kf);?>px; background: url('/anime/Q.jpg') no-repeat left top; background-size: 100% auto; height: <?=(600*$kf);?>px; position:relative;">
    <div class="anime_overlay">
        <h3 class="anime_text">
            <?$APPLICATION->IncludeComponent(
                "bitrix:main.include",
                "",
                Array(
                    "AREA_FILE_SHOW" => "file",
                    "AREA_FILE_SUFFIX" => "inc",
                    "EDIT_TEMPLATE" => "",
                    "PATH" => "/include/anime_text.php"
                )
            );?>
        </h3>
    </div>
    <? foreach ($data as $k => $v) { ?>
        <div class="video-stream" id="obj<?=$k;?>"
             data-width="<?=$v['width'];?>" data-height="<?=$v['height'];?>"
             data-top="<?=$v['top'];?>" data-left="<?=$v['left'];?>"
             style="    top: <?=($v['top']*$kf);?>px;
            left: <?=($v['left']*$kf);?>px;
            width: <?=($v['width']*$kf);?>px;
            height: <?=($v['height']*$kf);?>px;">
            <? for ($i=$v['idx_start']; $i<=$v['idx_end']; $i++) { ?>
                <?
                if ($i<10)
                    $prefix = '000';
                else if ($i<100)
                    $prefix = '00';
                else if ($i<1000)
                    $prefix = '0';
                else
                    $prefix = '';

                ?>
                <img src="/anime/<?=$v['folder'];?>/<?=$v['imgname'];?><?=$prefix;?><?=$i;?>.jpg">
            <? } ?>
        </div>
    <? } ?>
    <div class="anime_links">
        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
             viewBox="0 0 1692 528" style="enable-background:new 0 0 1692 528;" xml:space="preserve">
            <style type="text/css">
                .st1{fill:transparent;opacity:.02;stroke:#999;stroke-width:0.25;stroke-miterlimit:10;}
                .path-link:hover .st1,.path-link:focus .st1{fill:#111;opacity:.05;}
                .path-link:active .st1{fill:#333;}
            </style>
            <g>
                <a class="path-link" href="/projects/neftegaz/">
                    <title>Нефтегаз</title>
                    <path class="st1" d="M0,313.3l37.7-3.3L31.3,72.5c0,0,16.5-7,28.8,0l12,232.8l98.3-7.5L164,65.3c0,0,11.8-8,28.8,0l9.5,229l97-7.3
                l-4.8-230c0,0,12.6-7.9,28.4,0l6.6,226.3l57.2-3.7V210l117-9.2l18.2,14l1.2,72.3l4.2,6l1.2,12.7l30.2,26l31.8-2.5l19.5,16.5L0,401
                V313.3z"/>
                </a>
            </g>
            <g>
                <a class="path-link" href="/projects/pishchevaya-promyshlennosti/">
                    <title>Пищевая промышленность</title>
                    <polygon class="st1" points="0,401 612.9,346 722.3,434.7 0,508 	"/>
                </a>
            </g>
            <g>
                <a class="path-link" href="/projects/mashinostroenie/">
                    <title>Машиностроение</title>
                    <path class="st1" d="M371.7,175.3l289-19.7l-2-111.3c0,0,11-7,36.3-7.7V24h21v12.7c0,0,24.3-0.3,35.7,8l1.8,103.3L957,134.3
                c0,0,3.7,59.4-11.7,100.1l-2.7,1.3l-420,33.6l-0.1-7.3l7.4-0.5v-27.8l-8-8l-0.2-10.9l-18.2-14l-43.6,3.4l-52.3,4.1L371.7,175.3z"/>
                </a>
            </g>
            <g>
                <a class="path-link" href="/projects/aes/">
                    <title>АЭС</title>
                    <path class="st1" d="M640.5,335.5l45.5-5v-43l68-7l14.5,11L789,289v-8.5l26.5-4v-3l29.5-2.8l3.3,2.8l34-2.8L910,287v15l6-0.2
                c0,0,69-99.8,31-239.3c0,0,7.5-12.3,83.5-13.3s88.8,15.3,88.8,15.3s-41.3,110,19.3,227c0,0,31-0.5,58,14.5s163.8,83.3,163.8,83.3
                s15.9,9.7-2.6,12.2s-625.8,66-625.8,66s-30.5-5-8-18.8l50.8-7.5L640.5,335.5z"/>
                </a>
            </g>
            <g>
                <a class="path-link" href="/projects/energeticheskaya/">
                    <title>Энергетическая промышленность</title>
                    <path class="st1" d="M1692,367.3l-245,25.3c0,0-35.3,4.7-74-18.7l-174-84.7c0,0-30.7-9.7-63.7-4.2c0,0-16.1-37.3-19.9-53.4
                l29.6-3.7V36h365.3v160l181.7-16.7V367.3z"/>
                </a>
            </g>
            <g>
                <a class="path-link" href="/projects/stroitelstvo-gok/">
                    <title>Строительство (ГОК)</title>
                    <path class="st1" d="M1159,528l-104-65.3c0,0-19.3-15.3,8.7-18c28-2.7,250.3-21.2,250.3-21.2l2.5-8.5c0,0-0.5-9,24-7.5v-7
                c0,0,10.3-4.2,16.5,0v5.7c0,0,13.8,0.2,22,8.8l313-29.7V528H1159z"/>
                </a>
            </g>
        </svg>
    </div>
</div>
<style>
    .video-stream
    {
        position: absolute;

    }
    .video-stream img
    {
        display: none;
        height: auto;
        left: 0;
        max-width: 100%;
        position: absolute;
        top: 0;
        vertical-align: top;
    }
</style>
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>-->
<script>
    window.pkAnimate = function(arParams) {
        this.current = 0;//current playing image index
        this.next = 1;//next image index to play
        this.interval = 60;//animation speed
        this.hide_delay = 1;//Delay to hide the current image
        this.pack = 100;//Total number of image
        if (typeof arParams === 'object') {
            this.idx_start = arParams.idx_start;//The images are index-suffixed so this is the index of the first image to preload
            this.idx_end = arParams.idx_end;//index of the last image in the sequence
            this.folder = arParams.folder;
            this.imgname = arParams.imgname;
            this.element = arParams.element;
            this.img_num = this.idx_end-this.idx_start+1;//Images being preloaded simultanely
        }
    }
    window.pkAnimate.prototype = {
        load_more: function()
        {
            if(this.idx_start < this.idx_end)
            {
                //Preloading images
                var temp = [],
                    prefix = '',
                    temp_HTML = '';

                for(var i = 0; i < this.pack && this.idx_start < this.idx_end; i++)
                {
                    if (this.idx_start<10)
                        prefix = '000';
                    else if (this.idx_start<100)
                        prefix = '00';
                    else if (this.idx_start<1000)
                        prefix = '0';
                    else
                        prefix = '';
                    temp[i] = this.folder+'/'+this.imgname+prefix+ (++this.idx_start) + '.jpg';
                }


                $.each(temp, function(i, v)
                {
                    temp_HTML += '<img src="'+v+'">';
                });
                //Inject into dom
                this.element.append(temp_HTML);
            }

        },
        play_stream: function()
        {
            this.element.find('img').eq(this.current).delay(this.interval).fadeOut(this.hide_delay)
                .end().eq(this.next).delay(this.interval).hide().fadeIn(this.hide_delay);

            if(this.next < this.img_num - 1)
            {
                this.next++;
            }
            else
            {
                this.next = 0;
                //clearInterval(this.timerId);
            }

            if(this.current < this.img_num - 1)
            {
                this.current++;
            }
            else
            {
                this.current = 0;
            }
            //Background preload
            if(this.idx_start < this.idx_end)
            {
                // this.load_more(this.folder, this.element);
            }
        },
        start_stream: function () {
            if (!this.timerId) {
                let obj = this;
                this.timerId = setInterval(function () {
                    obj.play_stream()
                }, 60);
            }
        },
        stop_stream: function () {
            clearInterval(this.timerId);
            this.timerId = false;
        },
        init: function () {
            //this.load_more();
            let obj = this;
            this.start_stream();
        }
    }
    function anime_start()
    {
        let kf = jQuery(".body").width()/1920;
        jQuery(".pk_anime").css({width: jQuery(".pk_anime").attr("data-width")*kf, height: jQuery(".pk_anime").attr("data-height")*kf});
        jQuery(".video-stream").each(function () {
            jQuery(this).css({width: jQuery(this).attr("data-width")*kf,
                height: jQuery(this).attr("data-height")*kf,
                top: jQuery(this).attr("data-top")*kf,
                left: jQuery(this).attr("data-left")*kf
            });
        })
    }
    $(document).ready(function () {
        anime_start();
    })
    $(window).resize(function () {
        anime_start();
    })
    $(window).load(function()
    {
        <? foreach ($data as $k => $v) { ?>
        element<?=$k?> = $('#obj<?=$k?>');
        var pkAnimate<?=$k?> = new window.pkAnimate({
            idx_start:<?=$v['idx_start'];?>,
            idx_end:<?=$v['idx_end'];?>,
            folder: '<?=$v['folder'];?>',
            imgname: '<?=$v['imgname'];?>',
            element: element<?=$k;?>
        })
        setTimeout(pkAnimate<?=$k?>.init(), <?=$k*5000;?>);
        <? } ?>
        jQuery(".stop").click(function () {
            <? foreach ($data as $k => $v) { ?>
            pkAnimate<?=$k;?>.stop_stream();
            <? } ?>
        })
        jQuery(".start").click(function () {
            <? foreach ($data as $k => $v) { ?>
            pkAnimate<?=$k;?>.start_stream();
            <? } ?>
        })
    });
</script>
