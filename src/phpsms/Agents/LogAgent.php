<?php

namespace Qing7777\PhpSms\Agents;

use Qing7777\PhpSms\Interfaces\ContentSms;
use Qing7777\PhpSms\Interfaces\TemplateSms;
use Qing7777\PhpSms\Interfaces\VoiceCode;

/**
 * Class LogAgent
 */
class LogAgent extends Agent implements TemplateSms, ContentSms, VoiceCode
{
    public function sendContentSms($to, $content)
    {
        $this->result(Agent::SUCCESS, true);
        $this->result(Agent::INFO, 'send content sms success');
    }

    public function sendTemplateSms($to, $tempId, array $data)
    {
        $this->result(Agent::SUCCESS, true);
        $this->result(Agent::INFO, 'send template sms success');
    }

    public function sendVoiceCode($to, $code)
    {
        $this->result(Agent::SUCCESS, true);
        $this->result(Agent::INFO, 'send voice verify success');
    }
}