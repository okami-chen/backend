<?php

namespace App\Listeners;

class QueryListener
{

    /**
     * Handle the event.
     *
     * @param object $event
     * @return void
     */
    public function handle($event)
    {

        if (!app()->environment('local')) {
            return;
        }

        try {
            $sql = str_replace("?", "'%s'", $event->sql);
            foreach ($event->bindings as $i => $binding) {
                if ($binding instanceof \App\Listeners\DateTime) {
                    $event->bindings[$i] = $binding->format('\'Y-m-d H:i:s\'');
                } else {
                    if (is_string($binding)) {
                        $event->bindings[$i] = $binding;
                    }
                }
            }
            $log = vsprintf($sql, $event->bindings);
            $log = $log . '  [ RunTime:' . $event->time . 'ms ] ';
            logger()->stack(['sql'])->info($log);
        } catch (\App\Listeners\Exception $exception) {
            logger()->error($exception->getMessage());
        }

    }

    /**
     * 确定侦听器是否应排队
     * @param $event
     * @return bool
     * @Author 陈德华
     * @Date 2023/9/1 14:11
     * @link https://learnku.com/docs/laravel/10.x/events/14864#c08cb7
     */
    public function shouldQueue($event): bool
    {
        return config('app.debug') == true && config('app.env') != 'production';
    }
}
