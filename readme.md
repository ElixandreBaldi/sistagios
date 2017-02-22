### MANUAL DE INSTALAÇÃO

O sistema SiSagios é construído por sobre o framework PHP “Laravel 5.3”. Toda a instalação é baseada na documentação oficial do framework, que pode ser encontrada em https://laravel.com/docs/5.3/installation. Os passos descritos neste tutorial são válidos para Windows, Linux e Mac OS.

1. Softwares pré-requisito.
O único software necessário para a instalação do sistema é o PHP 5.6 ou superior. Não é objetivo deste manual descrever a instalação do mesmo. Um tutorial mais detalhado para cada plataforma pode ser encontrado em https://secure.php.net/manual/pt_BR/install.php.  

2. Softwares de instalação de pacotes.
Alguns softwares são necessários para uma experiência de instalação mais tranquila e prazerosa. Estes softwares são gerenciadores de pacotes que permitem uma instalação completa do sistema sem ter de baixar nada via FTP ou navegador. Após a instalação, estes podem ser removidos, todavia, recomenda-se que sejam mantidos afim de manter o sistema sempre atualizado. São estes:
Git – Software gerenciador de versão, com ele será possível baixar cada versão do sistema de forma simples. A instalação do mesmo para múltiplas plataformas é descrita em: https://git-scm.com/book/en/v2/Getting-Started-Installing-Git.
Composer – Software gerenciador de pacotes PHP. É com ele que todas as dependências do framework são adicionadas, instaladas e atualizadas. Este software pode ser instalado seguindo a descrição encontrada em: https://getcomposer.org/download/. 

3. Instalação
A instalação é muito simples:
  3.1.  Navegue até a raiz onde deseja instalar o sistema.
  3.2.  Execute o comando `git clone  https://github.com/luizguilhermefr/sistagios` (isso fará o download do sistema sem as dependências do framework).
  3.3.  Execute o comando `composer install && composer update` (isso instalará as dependências PHP do framework, bem como as atualizará. 
  3.4.  Após estes passos, o sistema está praticamente pronto para rodar, faltando apenas a configuração das variáveis de ambiente. Isso é feito através do arquivo .env encontrado na pasta onde o sistema foi instalado. Para fazer esta configuração, execute o comando: `cp .env.example .env` , ou, se estiver em ambiente Windows, copie e cole o arquivo .env.example renomeando para apenas .env. Em seguida, abra o arquivo em qualquer editor de texto e modifique as variáveis (credenciais de banco, modo DEBUG, etc.) conforme o seu ambiente. Uma descrição mais detalhada do arquivo de configuração de ambiente e suas variáveis pode ser encontrada em http://www.laravel.com.br/configurando-environment-em-laravel-5/. 
  3.5.  Execute o comando `php artisan key:generate` (isso irá gerar uma chave única para o sistema em sua máquina).
  3.6. Para criar todas as tabelas do banco automaticamente sem ser necessário importá-lo, foi criado um esquema de migrations, onde as tabelas do banco são criadas via código PHP. Para que as tabelas sejam inseridas no banco configurado no arquivo .env, execute o comando `php artisan migrate`. Caso deseje ainda popular o banco com dados falsos, para testes, execute o comando `php artisan migrate:refresh --seed`.
  3.7. Para executar o sistema, execute o comando `php artisan serve –port=8080`.Isso irá rodar o sistema usando sua máquina como servidor, sendo acessível pela porta 8080. Modifique esta porta para a porta de sua preferência. O sistema estará acessível nesta máquina via http://localhost:8080/. 
