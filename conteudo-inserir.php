<h1 class="contato-titulo">GSM FAKE</h1>
<main>
<form action="?page=proc" method="POST">
  <input type="hidden" name="acao" value="conteudo-inserir">
  <div>
    <label>Titulo:</label>
    <input type="text" required name="titulo" />
  </div>
  <div>
    <label>Autor</label>
    <input type="text" required name="autor" />
  </div>
  <div>
    <label>Imagem</label>
    <input type="text" required name="imageml" />
  </div>
  <div>
    <label>Prévia da Imagem</label>
    <input type="text" required name="imagemlp" />
  </div>
  <div>
    <label>Conteudo:</label>
    <textarea name="conteudo" type="textbox" maxlength="30000" rows="25" required></textarea>
  </div>
  <div>
    <label>Pŕevia de conteudo:</label>
    <textarea name="conteudop" type="textbox" maxlength="250" rows="10" required></textarea>
  </div>
  <div>
    <button type="submit">Enviar</button>
  </div>
</form>
</main>