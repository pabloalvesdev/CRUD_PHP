<?php

class Database{ 
    private $host_bd = 'localhost';
    private $usuario_bd = 'teste';
    private $senha_bd = 'teste123';
    private $nome_bd = 'cadastro';

    
    public function adicionar($f_nome, $f_sobrenome, $f_email, $f_select, $f_descricao){
        $con = mysqli_connect($this->host_bd, $this->usuario_bd, $this->senha_bd, $this->nome_bd);
        $adicionar = "INSERT INTO cadastro VALUES(DEFAULT, '$f_nome', '$f_sobrenome', '$f_email', '$f_select', '$_descricao')";
        $add = mysqli_query($con, $adicionar);
        if ($add) { ?>
            <script type="javascript">alert("deu bom");</script>
       <?php } else {
            header("location: ../index.php");
        }
    }
    public function exibir(){
        $exibir = "SELECT * FROM cadastro";
        $ex = mysqli_query($con, $exibir);

        $num_linhas = mysqli_num_rows($ex);
    }
}
