<h1 class="contato-titulo">Por favor preencha o formulário abaixo para entrar em contato com nossa equipe</h1>
<main>
    <form action="?page=contato-salvar" method="POST">
    <input type="hidden" name="acao" value="contato-salvar">
      <div>
        <label>Titulo:</label>
        <input name="titulo" type="text" required />
      </div>
      <div>
        <label>Motivo do contato:</label>
        <select name="categoria">
          <option value="noticia">Noticia</option>
          <option value="contato">Contato</option>
          <option value="denuncia">Denuncia</option>
          <option value="sugestao">Sugestão</option>
        </select>
      </div>
      <div>
        <label>Nome:</label>
        <input name="nome" type="text" />
      </div>
      <div>
        <label>Email:</label>
        <input name="email" type="text" required />
      </div>
      <div>
        <label>Conteúdo:</label>
        <textarea name="conteudom" type="textbox" maxlength="600" rows="10" placeholder="Por favor escreva sua mensagem com até 600 caracteres." required></textarea>
      </div>
      <div>
        <button type="submit">Enviar</button>
      </div>
    </form>
</main>