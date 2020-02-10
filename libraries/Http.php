<?php
class Http
{
    /**
     * Gère les redirections d'url
     */
    public static function redirect(string $url): void
    {
        header("Location: $url");
        exit();
    }
}
