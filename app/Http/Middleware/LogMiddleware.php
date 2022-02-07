<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class LogMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        require (__DIR__.'/../../../vendor/rapid7/r7insight_php/r7insight.php');

        // The following levels are available
        $log->debug("Isn't that the fault of the voters?");
        $log->info("That's because sometimes I go by my maiden name.");
        $log->notice("Give me the strongest thing you got.");
        $log->crit("Awfully big moustache.");
        $log->error("Yeah, and when I find the guy that did it...");
        $log->alert("That's ok. I sometimes go by my maiden name.");
        $log->emerg("Every time I order out.");
//        $logger = new R7InsightLog();
//        $logger->getLog()->error('test');
        return $next($request);
    }
}
