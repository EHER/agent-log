#agent-log

PHPzinho para logar o agent de um browser/celular.

## Instalação

Clone o projeto em algum lugar visível do seu webserver.

    cd /var/www/
    git clone git@github.com:EHER/agent-log.git agent
    cd agent

## Como usar

Digite no navegador a url que dá acesso à nova pasta criada no clone.

    http://localhost/agent

Verifique que vai printar as informações de data, hora, ip, agent e name (já mostro como usar isso).

## Como ver o log

Para que as informações sejam usadas mais tarde, elas são salvas em um log (log.txt). 

## Como usar o name

Quando estiver testando o agent com o browser, é possível passar um nome para aquele teste. Para fazer isso adicione um ?name= na url.

    http://localhost/agent?name=CelularDaquelaTiaChata


