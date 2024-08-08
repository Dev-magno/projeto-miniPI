<?php
class GerenciarProduto {
    private $arquivoJson = 'dados.json';
    private $vestidos = [];

    public function __construct() {
        // Se o arquivo JSON existir, os dados são carregados
        if (file_exists($this->arquivoJson)) {
            $this->vestidos = json_decode(file_get_contents($this->arquivoJson), true);
        } else {
            // Se o arquivo JSON não existir, cria um novo arquivo com um array vazio
            file_put_contents($this->arquivoJson, json_encode([]));
        }
    }

    public function adicionarVestido($nome, $cor, $tamanho, $descricao, $caracteristica, $caminhoFoto) {
        // Cria um novo array com os dados do vestido
        $novoVestido = [
            'nome' => $nome,
            'cor' => $cor,
            'tamanho' => $tamanho,
            'descricao' => $descricao,
            'caracteristica' => $caracteristica,
            'foto' => $caminhoFoto
        ];

        // Adiciona um novo vestido
        $this->vestidos[] = $novoVestido;

        // Salva os dados atualizados
        $this->salvarJson();
    }

    public function salvarJson() {
        // Converte o array para JSON e salva no arquivo
        file_put_contents($this->arquivoJson, json_encode($this->vestidos, JSON_PRETTY_PRINT));
    }

    public function deletarVestido($nome) {
        // Busca o nome do vestido e o remove do array
        foreach ($this->vestidos as $indice => $vestido) {
            if ($vestido['nome'] === $nome) {
                unset($this->vestidos[$indice]);
                $this->vestidos = array_values($this->vestidos); // Reindexa o array
                $this->salvarJson();
                return true; // Retorna true se o vestido foi encontrado e deletado
            }
        }
        return false; // Retorna false se o vestido não for encontrado
    }

    public function editarVestido($nome, $cor, $tamanho, $descricao, $caracteristica, $caminhoFoto) {
        // Encontra o vestido pelo nome e atualiza
        foreach ($this->vestidos as $indice => $vestido) {
            if ($vestido['nome'] === $nome) {
                $this->vestidos[$indice] = [
                    'nome' => $nome,
                    'cor' => $cor,
                    'tamanho' => $tamanho,
                    'descricao' => $descricao,
                    'caracteristica' => $caracteristica,
                    'foto' => $caminhoFoto
                ];
                $this->salvarJson();
                return true; // Retorna true se o vestido foi encontrado e editado
            }
        }
        return false; // Retorna false se o vestido não for encontrado
    }

    public function getVestidos() {
        // Retorna o array de vestidos
        return $this->vestidos;
    }
}
?>

