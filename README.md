# PHP-GERADOR-DE-CPF
> GERE SEU ACCESS TOKEN NO SITE <a href="https://gerador.app">https://gerador.app</a>


+ <a href="https://t.me/androplaybr157">Contato via Telegram @androplaybr157</a>
___

+ <b>INSTANCIAR CLASS</B>
```php

include 'Class/GeradorClass.php';

$token = 'seu token';

$gerador = new Gerador($token);

```


+ <b>GERAR CPF</B>
```php

include 'Class/GeradorClass.php';

$token = 'Zq7Up1bLA1C9hTACQgr5c5eGuOtOYKVflcNZNhff';

$gerador = new Gerador($token);
$gerador->type = "cpf";
$gerador = $gerador->gerar();

echo $gerador->number_formatted;
```
+ <b>GERAR CNPJ</B>
```php

include 'Class/GeradorClass.php';

$token = 'Zq7Up1bLA1C9hTACQgr5c5eGuOtOYKVflcNZNhff';

$gerador = new Gerador($token);
$gerador->type = "cnpj";
$gerador = $gerador->gerar();

echo $gerador->number_formatted;
```

## O RESULTADO SERÁ
+ CPF <br />
![alt text](https://i.imgur.com/06vQPE2.png)

+ CPNJ <br />
![alt text](https://i.imgur.com/fJp5f7Z.png)

+ CNS <br />
![alt text](https://i.imgur.com/HPMTLBy.png)
