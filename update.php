<?php

chdir(__DIR__);
require(__DIR__.'/common.php');

$dirs = $f3->get('env_dirs');
$data_dir = $dirs['fulltextrss'];
// $f3->set('FTRSS_DATA_DIR', __dir__.'/data/fulltextrss');
$f3->set('FTRSS_DATA_DIR', $data_dir);

$loader = new \helpers\ContentLoader();
$loader->update();

?>
