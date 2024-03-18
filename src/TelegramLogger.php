<?php

namespace XuanHieu\TelegramLogger;

use Monolog\Logger;

/**
 * Class TelegramLogger
 *
 * @package XuanHieu\TelegramLogger
 */
class TelegramLogger
{
    /**
     * Create a custom Monolog instance.
     *
     * @param  array  $config
     * @return \Monolog\Logger
     */
    public function __invoke(array $config)
    {
        return new Logger(config('app.name'), [
            new TelegramLoggerHandler($config['level']),
        ]);
    }
}
