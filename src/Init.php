<?php
namespace SPWPC;

class Init
{
    public function hooks()
    {
        add_filter('the_title', [ $this, 'append_hello_world_to_title'], 10, 2);
    }

    public function append_hello_world_to_title($title, $id)
    {
        $message = 'Hello from the Sky!';
        return "$title - $message";
    }
}
