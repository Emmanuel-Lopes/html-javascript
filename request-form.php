<?php

if (isset($_POST['submit'])) {
    $names = ['Nome: ','Email: ', 'Nome da Mãe: ', 'Nome do Pai: ', 'Nascimento: ', 'RG: ',
    'CPF: ', 'Tel 1: ', 'Tel 2: ', 'Tel 3: ', 'Rua: ', 'Número: ', 'Complemento: ', 'CEP: ',
    'Município: ', 'UF: ', 'Nação: '];
    
    $namesForm = ['nome','email','nomeMae','nomePai','nascimento', 'rg','cpf','tel1','tel2',
    'tel3','rua','numero','complemento','cep','municipio','uf','nacao'];

    for ($i=0; $i < 17; $i++) {
            echo $names[$i] . $_REQUEST[$namesForm[$i]] .'<br>';
    }
}