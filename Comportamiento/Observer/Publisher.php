<?php
class Publisher
{
    private $listeners = array();
    public function subscribe($listener)
    {
        $this->listeners[] = $listener;
    }
    public function unsubscribe($listener)
    {
        $this->listeners = array_filter($this->listeners, function($l) use ($listener) {
            return $l !== $listener;
        });
    }
    public function notify($filename)
    {
        foreach ($this->listeners as $listener) {
            $listener->update($filename);
        }
    }
}
?>