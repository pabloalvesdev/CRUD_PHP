<?php

class Database{ 
    private $host_bd = 'localhost';
    private $usuario_bd = 'root';
    private $senha_bd = '';
    private $nome_bd = 'BANCO';

    
    public function adicionar($f_nome, $f_sobrenome, $f_email, $f_select, $f_descricao){
        $con = mysqli_connect($this->host_bd, $this->usuario_bd, $this->senha_bd, $this->nome_bd);
        $adicionar = "INSERT INTO cadastro VALUES(DEFAULT, '$f_nome', '$f_sobrenome', '$f_email', '$f_select', '$f_descricao')";
        $add = mysqli_query($con, $adicionar);
        if ($add) {
            header("location: ../index.php");
        }
    }
    public function exibir(){
        $nv = mysqli_connect($this->host_bd, $this->usuario_bd, $this->senha_bd, $this->nome_bd);
        $resultado_exibir = "SELECT * FROM cadastro";
        $ex = mysqli_query($nv, $resultado_exibir);

        while ($array_tabela = mysqli_fetch_assoc($ex)) {
            echo "Id: " . $array_tabela['id'] . "<br>";
            echo "Nome: " . $array_tabela['nome'] . "<br>";
            echo "Sobrenome: " . $array_tabela['sobrenome'] . "<br>";
            echo "E-mail: " . $array_tabela['email'] . "<br>";
            echo "Nacionalidade: " . $array_tabela['nacionalidade'] . "<br>";
            echo "Descrição: " . $array_tabela['descricao'] . "<br>";
        }   
    }
    public function alterarDados(){
        $ss = mysqli_connect($this->host_bd, $this->usuario_bd, $this->senha_bd, $this->nome_bd);
        $resultado_alterar = "SELECT * FROM cadastro";
        $qu = mysqli_query($ss, $resultado_alterar);

        while ($tabelinha = mysqli_fetch_assoc($qu)) {
            echo "Id: " . $tabelinha['id'] . "<br>";
            echo "Nome: " . $tabelinha['nome'] . "<br>";
            echo "Sobrenome: " . $tabelinha['sobrenome'] . "<br>";
            echo "E-mail: " . $tabelinha['email'] . "<br>";
            echo "Nacionalidade: " . $tabelinha['nacionalidade'] . "<br>";
            echo "Descrição: " . $tabelinha['descricao'] . "<br>";
            echo "<button style='width: 80px; heigth: 40px;' onclick='apagar()'>Apagar</button>";
        }
    }
    public function teste(){
        echo "Deu bom";
    }
}
