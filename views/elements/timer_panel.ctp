<?php
/* SVN FILE: $Id$ */
/**
 * Session Panel Element
 *
 * 
 *
 * PHP versions 4 and 5
 *
 * CakePHP :  Rapid Development Framework <http://www.cakephp.org/>
 * Copyright 2006-2008, Cake Software Foundation, Inc.
 *								1785 E. Sahara Avenue, Suite 490-204
 *								Las Vegas, Nevada 89104
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @filesource
 * @copyright		Copyright 2006-2008, Cake Software Foundation, Inc.
 * @link			http://www.cakefoundation.org/projects/info/cakephp CakePHP Project
 * @package			cake
 * @subpackage		cake.cake.libs.
 * @since			CakePHP v 1.2.0.4487
 * @version			$Revision$
 * @modifiedby		$LastChangedBy$
 * @lastmodified	$Date$
 * @license			http://www.opensource.org/licenses/mit-license.php The MIT License
 */
$timers = DebugKitDebugger::getTimers();
array_pop($timers);
?>
<p class="request-time"><?php __('Total Request Time'); echo DebugKitDebugger::requestTime(); ?></p>
<?php foreach ($timers as $timerName => $timeInfo): ?>
	<div class="debug-timers">
		<p class="timer-message"><?php echo $timeInfo['message']; ?> <strong><?php echo $timeInfo['time']; ?> </strong></p>
	</div>
<?php endforeach; ?>

