<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;

use Rector\DowngradePhp80\Rector\ClassMethod\RemoveReturnTypeDeclarationFromCloneRector;

return static function (RectorConfig $rectorConfig): void {
    $rectorConfig->import(__DIR__ . '/../../../../../../config/config.php');

    $rectorConfig->rule(RemoveReturnTypeDeclarationFromCloneRector::class);
};
