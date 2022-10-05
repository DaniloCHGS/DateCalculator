
# DateCalculator

Classe criada com a finalidade de retornar um intervalo de data, como um dia, mês ou ano.



## Instalação

```bash
  git clone git@github.com:DaniloCHGS/DateCalculator.git

  composer install
```
    
## Demonstração

```php
<?php

require __DIR__ . "/vendor/autoload.php";

use App\DateCalculator\DateCalculator;

//Retorna 30 dias da data atual
$day = DateCalculator::getIntervalDay(30, null);

//Retorna 1 mês da data atual
$month = DateCalculator::getIntervalMonth(1);

//Retorna 10 anos da data atual
$year = DateCalculator::getIntervalYear(10);

//Retorna 6 meses da data atual
$date = DateCalculator::getDateInterval(6, null, "M");
```
## Autores

- [@DaniloCHGS](https://github.com/DaniloCHGS)

