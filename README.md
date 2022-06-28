<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

## Projeto LaraFood

Projeto clone do iFood feito em Laravel


## Comandos para inciar o Projeto

- php artisan adminlte:install

### Exemplo de permissões cruzadas Plan x Role (ACL)
- User: Luís
  - Tenant: Empresa TI
    - Plan: Businers
      - Profile: Financeiro
        - Permission: fin_view
        - Permission: fin_cad
        - Permission: fin_del
      - Profile: Produtos
        - Permission: prod_view
        - Permission: prod_cad
        - Permission: prod_del
      - Profile: Pedidos
        - Permission: pedidos

- User: Luís
  - Role: Admin
    - Permission: fin_view
    - Permission: fin_cad
    - Permission: fin_del
  - Role: Editor
    - Permission: prod_view
    - Permission: prod_cad
    - Permission: prod_del
  - Role: Financeiro
    - Permission: pedidos
