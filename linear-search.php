<?php

    class linearSearch
    {
        private Array $arr;

        public function __construct()
        {
            $this->arr = [1, 8, 6, 9, 3 ,5, 10, 89, 55, 63];
        }

        public function search(Int $search) : Int
        {
            foreach ($this->arr as $key => $value) if ($value == $search) return $key;
            return -1;
        }
    }

    $linear = new linearSearch();
    $search = $argv[1];
    $go = $linear->search($search);
    if ($go > -1) {
        echo "Valor {$search} está na posicao {$go}";
    } else {
        echo "Valor {$search} não encontrado";
    }
