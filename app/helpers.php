<?php

function locale() {
    return app()->make(App\Libraries\Locale::class);
}