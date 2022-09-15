<?php
   
   $masculino = 10;
   $feminino = 10;
   $aprovados = 17;

   $soma = $masculino + $feminino + $aprovados;

   $porcentagemAlunosMasculino = $masculino / 100 * $soma;
   $porcentagemAlunosFeminino = $feminino / 100 * $soma;
   $porcentagemAlunosAprovados = $aprovados / 100 * $soma;


   echo "O total de alunos é de $soma a porcentagem alunos femininos é de $porcentagemAlunosFeminino. 
   A porcentagem de alunos masculinos é de $porcentagemAlunosMasculino. e a quantidade de alunos aprovados é de $porcentagemAlunosAprovados";


//    echo $masculino;
//    echo $feminino;
//    echo $aprovados;
// echo $soma;