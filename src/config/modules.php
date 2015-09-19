<?php

return array_merge(require(__DIR__ . '/installed_modules.php'), [
   'core' => ['class' => 'nullref\core\Module'],
   'admin' => ['class' => 'nullref\admin\Module'],
]);