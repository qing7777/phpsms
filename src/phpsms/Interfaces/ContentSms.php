<?php

namespace Qing7777\PhpSms\Interfaces;

interface ContentSms
{
    /**
     * Content SMS send process.
     *
     * @param string|array $to
     * @param string       $content
     */
    public function sendContentSms($to, $content);
}