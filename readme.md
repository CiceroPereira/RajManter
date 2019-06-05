### Pré requisitos para rodar o laravel

* Composer Instalado
* PHP 7.0.1 (ou versões >= 5.0)
* Variável de ambiente do PHP


### Comandos necessários após o clone

* Copiar o conteúdo do .env.example e colorcar num novo arquivo .env
* Configurar a conexão de banco do arquivo .env

```bash
> composer dump-autoload
> composer install
> php artisan key:generate
> php artisan config:clear
> php artisan migrate
> php artisan cache:clear
> php artisan serve
```
* Ative o apache e o mySql em seu control pane e abra seu navegador em http://localhost:8000

### Detalhes sobre a implementação

* O Laravel utiliza o Eloquent na estruturação do banco de dados, as tabelas foram definidas através de migrations. A instância do banco de dados foi criada manualmente via phpmyadmin, já as tabelas estão definidas nos arquivos dentro do diretório database/migrations. Serão vistas 3 migrations dentro deste arquivo, porém apenas a migration de "Pessoas" é utilizada neste projeto, as demais são arquivos gerados automaticamente pelo Laravel. 
