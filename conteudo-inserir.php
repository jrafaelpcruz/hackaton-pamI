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
    <label>Conteudo:</label>
    <textarea name="conteudo" type="textbox" maxlength="30000" rows="50" required></textarea>
  </div>
  <div>
    <button type="submit">Enviar</button>
  </div>
</form>