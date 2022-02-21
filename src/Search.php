<?php

namespace Wolgrand\PhpCep;

/**
 * @var $url = Endereço url.
 * @var string $zipcode = Apenas números.
 * @var $get = Armazena o conteúdo do endereço url em Json.
 * @function = Recebe uma variável do tipo string e retorna um @array
 */
class Search
{
    private $url = "https://viacep.com.br/ws/";

    public function getAdressFromZipcode(string $zipcode): array
    {
        $zipcode = preg_replace('/[^0-9]/im', '', $zipcode);

        $get = file_get_contents($this->url . $zipcode . "/json");

        return(array) json_decode($get);
    }

    private function getFromServer($zipcode)
    {
        $get = file_get_contents($this->url . $zipcode . "/json");

        return $get;
    }

    private function processData($data)
    {
        foreach ($data as $k => $v) {
            $data[$k] = trim($v);
        }

        return $data;
    }
}
