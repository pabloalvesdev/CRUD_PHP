<div class="tab-content" id="pills-tabContent">
    <div class="tab-pane fade show active" id="menu_adicionar" role="tabpanel" aria-labelledby="pills-home-tab">
        <form action="back-end/processar.php" method="post">
            <div class="box">
                <h1>Adicionar</h1>
                <div class="in-row">
                    <input type="text" name="nome" class="field" placeholder="Nome">
                    <input type="text" name="sobrenome" class="field" placeholder="Sobrenome">
                </div>
                <div class="in-row">
                    <input type="email" class="email" name="email" placeholder="Seu e-mail...">
                    <select name="select" class="sle">
                    <option value="Nenhuma" selected>Nacionalidade...</option>
                        <option value="Argentina">Argentina</option>
                        <option value="Bolívia">Bolívia</option>
                        <option value="Brasil">Brasil</option>
                        <option value="Chile">Chile</option>
                        <option value="Colombia">Colômbia</option>
                        <option value="Costa Rica">Costa Rica</option>
                        <option value="Cuba">Cuba</option>
                        <option value="El Salvador">El Salvador</option>
                        <option value="Equador">Equador</option>
                        <option value="Guatenala">Guatemala</option>
                        <option value="Haiti">Haiti</option>
                        <option value="Honduras">Honduras</option>
                        <option value="México">México</option>
                        <option value="Nicaragua">Nicarágua</option>
                        <option value="Panama">Panamá</option>
                        <option value="Paraguai">Paraguai</option>
                        <option value="Peru">Peru</option>
                        <option value="Republica Dominicana">República Dominicana</option>
                        <option value="Uruguai">Uruguai</option>
                        <option value="Venezuela">Venezuela</option>
                    </select>
                </div>
                <textarea name="description" cols="50" rows="5" class="text-area" placeholder="Conte-nos sobre você..."></textarea>
                <input type="submit" value="enviar">
            </div>
        </form>
    </div>