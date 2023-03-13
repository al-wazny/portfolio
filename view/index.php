<?php
foreach (array_filter(glob('./view/*'), 'is_dir') as $dir) {
    foreach (glob("{$dir}/*.php") as $file ) {
        include $file;
    }
}
