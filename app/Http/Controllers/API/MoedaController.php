<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MoedaController extends Controller
{
    /**
     * Moedas aceitas.
     *
     * @var string $moedas
     */
    public $moedas = 'BRL,USD,EUR';
    /**
     * CURRENCIES API.
     *
     * @var string $api
     */
    public $api = 'https://apilayer.net/api/live?';
    /**
     * CURRENCIES API ACCESS KEY.
     *
     * @var string $accessKey
     */
    public $accessKey;
    /**
     * Construct Function.
     *
     * @return void
     */
    public function __construct()
    {
        $this->accessKey = env('KEY_CURRENCIES_API');
    }

    /**
     * Retorna a url com parametros da api.
     *
     * @param $source
     * @param $to
     * @return string
     */
    private function returnUrl($source, $to)
    {
        $dados = [
            'currencies' => $to,
            'source' => $source,
            'format' => 2,
            'access_key' => $this->accessKey
        ];
        return $this->api . http_build_query($dados);
    }
    /**
     * Faz a requisicao para a api.
     *
     * @param $url
     * @return string
     */
    private function makeRequest($url)
    {
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $json = curl_exec($ch);
        curl_close($ch);
        return $json;
    }

    /**
     * Retorna a conversao de moedas.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function converter(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'base' => 'required|in:' . $this->moedas,
            'to' => 'required|different:base|in:' . $this->moedas,
            'value' => 'required|numeric'
        ]);
        if ($validator->fails()) {
            return response()->json([
                'status' => 'Invalid Values',
                'message' => $validator->errors(),
            ], 422);
        }
        try {
            $to = $request->input('to');
            $source = $request->input('base');
            $value = $request->input('value');

            $url = $this->returnUrl($source, $to);
            $attr = $source . $to;

            $currency = json_decode(
                $this->makeRequest($url)
            )->quotes->$attr;

            $format_currency = number_format($currency, '2');
            $total = $value * $currency;
            $format_total = number_format($total, '2');

            return response()->json([
                'status' => 'Ok',
                'message' => 'Success',
                'currency' => $format_currency,
                'value' => $format_total
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'Server error',
                'message' => 'A error occur during process',
            ], 500);
        }
    }
}
