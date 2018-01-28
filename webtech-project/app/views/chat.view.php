<?php foreach ($results as $result) : ?>
    <div style="margin-bottom: 10px;padding: 20px;border-radius:2.5px;">
        <?php if($result['name'] == $_SESSION['first_name'] ." ". $_SESSION['last_name']): ?>
            <div style="width:auto;height:25px;background:#049372;float:right;border-radius:5.5px;padding:5px;margin-bottom:5px;">
                <span style="color:#EEEEEE;float:right;font-size:18px;font-weight:100;letter-spacing:2.5px;"> <?= $result['message']; ?></span><br>
                <span style="float:right;font-size:9px;color:#BDC3C7"><?= formatDate($result['date']); ?></span>
            </div>
        <?php else : ?>
            <div style="width:auto;height:25px;background:#ECF0F1;float:left;border-radius:5.5px;padding:5px;margin-bottom:5px;">
                <span style="color:#191919;float:left;font-size:18px;font-weight:100;letter-spacing:2.5px;"> <?= $result['message']; ?></span><br>
                <span style="float:left;font-size:9px;color:#BDC3C7"><?= formatDate($result['date']); ?></span>
            </div>
        <?php endif; ?>
    </div>
<?php endforeach; ?>
