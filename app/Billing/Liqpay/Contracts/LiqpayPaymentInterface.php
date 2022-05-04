<?php

namespace App\Billing\LiqPay\Contracts;

use InvalidArgumentException;

interface LiqpayPaymentInterface
{
    /**
     * cnb_form
     *
     * @param array $params
     *
     * @return string
     *
     * @throws InvalidArgumentException
     */
    public function cnb_form(array $params): string;

    /**
     * cnb_signature
     *
     * @param array $params
     *
     * @return string
     */
    public function cnb_signature(array $params): string;


    /**
     * decode_params
     *
     * @param string $params
     * @return array
     */
    public function decode_params(string $params): array;

    /**
     * str_to_sign
     *
     * @param string $str
     *
     * @return string
     */
    public function str_to_sign(string $str): string;

    /**
     * Return last api response http code
     *
     * @return string|null
     */
    public function get_response_code(): ?string;

    /**
     * Call API
     *
     * @param string $path
     * @param array $params
     * @param int $timeout
     *
     * @return string
     */
    public function api(string $path, array $params = array(), int $timeout = 5): string;
}
