<?php
$candidate = [
    ["name"=>"ShahMehmodQureshi","votes"=>180000,],
    ["name"=>"ImranKhan","votes"=>240000],
    ["name"=>"NawazSharif","votes"=>50000],
    ["name"=>"Bilawal","votes"=>70000],
    ["name"=>"Zardar","votes"=>100000],
    ["name"=>"shahbazSharif","votes"=>2],
];
// function *****************
function election($candidates){
    echo "{$candidates["name"]} has won {$candidates["votes"]}";
}
election(["name"=>"IK","votes"=>185000]);
?>
<!-- php within html ************** -->
    <!-- conditional statement with html  -->
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <ul>
            <?php foreach($candidate as $candi){?>
                <?php if($candi['votes']>100000){?>
                    <h1>Winner</h1>
                    <li><?php echo $candi["name"];?></li>
                    <li><?php echo $candi["votes"];?></li>
                <?php }?>
                <?php  if($candi['votes']<100000){?>
                    <h1>Looser</h1>
                    <li><?php echo $candi["name"];?></li>
                    <li><?php echo $candi["votes"];?></li>
                <?php }?>
                <?php }?>
        </ul>
    </body>
    </html>
