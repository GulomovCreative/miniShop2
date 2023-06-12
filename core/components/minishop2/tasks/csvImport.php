<?php

/** @var modX $modx */
/** @var sFileTask $task */
/** @var sTaskRun $run */
/** @var array $scriptProperties */

require_once $modx->getOption('modx_core_path') . 'components/minishop2/import/importCSV.php';
$importCSV = new ImportCSV($this->modx);
$result = $importCSV->process($scriptProperties);

if (!$result) {
    $run->addError('csv import error');
}
