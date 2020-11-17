<?php namespace App\Libraries;

interface ViewInterface {
    /**
     * @param DataTransferObject|string|int $dto
     */
    public function render() : string;
}