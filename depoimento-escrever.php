<h1 class="contato-titulo">Escrever Depoimento</h1>
<main>
  <form action="?page=proc" method="POST">
    <input type="hidden" name="acao" value="depoimento-inserir">
    <div>
      <label>Seu nome...</label>
      <input type="text" name="nomeescrito" max="25" />
    </div>
    <div>
      <label>...ou escolha uma opção abaixo:</label>
      <select name="selectanon">
        <option value="Anônimo">Anônimo</option>
        <option value="Anônima">Anônima</option>
      </select>
    </div>
    <div>
      <label>Se desejar um título para você, coloque abaixo:</label>
      <input type="text" name="titulo" max="25" />
    </div>
    <div>
      <label>Escreva agora seu depoimento:</label>
      <textarea name="depoimento" type="textbox" maxlength="600" rows="10" required></textarea> 
    </div>
    <div>
      <button type="submit">Enviar</button> 
    </div>
  </form>
</main>