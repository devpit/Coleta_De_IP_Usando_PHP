# Registador de Acesso em PHP

Este simples script em PHP foi desenvolvido para registrar informações básicas sobre requisições recebidas, como o endereço IP do cliente, o user-agent e o horário da requisição. As informações são então anexadas a um arquivo de texto para análises futuras. Isso pode ser útil para rastrear padrões de acesso, debugar ou monitorar a atividade do usuário.

### Uso

1. **Coloque o script PHP no seu servidor:**

   Copie o código PHP fornecido e salve-o, por exemplo, como `access_logger.php`.

2. **Configure o Caminho do Arquivo:**

   Certifique-se de que o caminho do arquivo para o registro (`'./temp/config-acess.txt'`) seja apropriado para o seu servidor. Ajuste o caminho, se necessário, e certifique-se de que o script tenha permissões de escrita no diretório especificado.

3. **Integração com sua Aplicação:**

   Inclua ou exija este script em seu aplicativo PHP existente ou site onde você deseja registrar informações de acesso. Você pode querer incluí-lo em um arquivo de cabeçalho ou rodapé comum para capturar dados de todas as páginas.

4. **Compreensão das Informações Registradas:**

   O script captura as seguintes informações:

   - **Endereço IP:**
     - Se `HTTP_CLIENT_IP` estiver definido, ele usa esse valor.
     - Se `HTTP_X_FORWARDED_FOR` estiver definido, ele usa esse valor.
     - Caso contrário, ele recorre a `REMOTE_ADDR`.

   - **User-Agent:**
     - Captura a informação do user-agent de `$_SERVER['HTTP_USER_AGENT']`.

   - **Carimbo de Data/Hora:**
     - Obtém a hora atual no fuso horário 'America/Sao_Paulo' e formata como 'H:i - d/m'.

   - **Registro:**
     - Registra as informações coletadas no arquivo de texto especificado.

### Exemplo

```php
// Inclua o script do registrador de acesso
include 'caminho/para/access_logger.php';
```

### Notas

- **Segurança:**
  - Certifique-se de que o arquivo de log não seja acessível pela web para evitar acesso não autorizado aos dados registrados.

- **Privacidade:**
  - Esteja ciente das considerações de privacidade ao registrar endereços IP. Certifique-se de cumprir com as leis de proteção de dados aplicáveis.

- **Customização:**
  - Modifique o script conforme necessário para incluir informações adicionais ou personalizar o formato do registro.

### Contribuições

Se você tiver sugestões ou melhorias, sinta-se à vontade para abrir um problema ou enviar um pedido de recebimento.
