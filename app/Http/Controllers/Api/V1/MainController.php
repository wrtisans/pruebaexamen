<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\BaseController;
use Illuminate\Support\Collection;
use Throwable;

class MainController extends BaseController
{
    /**
     * Lista de los repositorios mas populares por lenguaje
     *
     * Te permite listar los repositorios mas populares por lenguaje basados en los parametros proporcionados
     *
     * @urlParam lang string required Valor que indica el lenguaje a buscar. Example: JavaScript
     * @urlParam items int Valor que indica la cantidad de elementos a tomar en la busqueda. Example: 2
     *
     */
    public function index($lang, $items = 2)
    {
        try {
            throw_if(empty($lang), 'Se requiere un lenguaje para poder realizar la busqueda.');
            $collection = $this->getCSVData();
            throw_if(!$collection->contains('language', $lang), 'No se encontro ningun resultado para esta busqueda.');
            return $this->sendResponse($collection->where('language', $lang)->sortBy('rank')->take($items), 'Se han encontrado resultados');
        } catch (Throwable $exception) {
            return $this->sendError($exception->getMessage(), [], 409);
        }
    }

    private function getCSVData(): Collection
    {
        $rows = array_map('str_getcsv', file(storage_path('app/data.csv')));
        $header = array_shift($rows);
        $data = array();
        foreach ($rows as $row) {
            $item = array_combine($header, $row);
            if (!empty($item['language'])) {
                $data[] = $item;
            }
        }

        return collect($data);
    }
}
