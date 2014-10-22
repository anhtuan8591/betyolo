<?php use_helper('I18N') ?>
<h1>Bet is playing</h1>
<?php foreach ($bets as $bet): ?>
  <table width="100%" class="table table-hover table-bordered" style="text-align:center">
    <tbody>
      <tr>
        <td colspan = "2"><?php echo $bet->getDescription() ?></td>
      </tr>
      <tr>
        <td colspan = "2">From: <b><?php echo $bet->getStartDt() ?></b>&nbsp;To: <b><?php echo $bet->getEndDt() ?></b></td>
      </tr>
      <tr>
        <td><a href="<?php echo url_for('side/show?id=' . $bet->getSideA()->getId() ) ?>" ><?php echo $bet->getSideA()->getName() ?></a></td>
        <td><a href="<?php echo url_for('side/show?id=' . $bet->getSideB()->getId() ) ?>" ><?php echo $bet->getSideB()->getName() ?></a></td>
      </tr>
    </tbody>
  </table>
<?php endforeach; ?>
